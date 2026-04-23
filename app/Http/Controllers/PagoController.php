<?php

namespace App\Http\Controllers;

use App\Models\Tramite;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Webhook;

class PagoController extends Controller
{
    public function checkout(Request $request)
    {
        $request->validate([
            'tramite_id'       => 'required|exists:tramites,id',
            'plan_seleccionado' => 'required|string',
            'precio_plan'      => 'required|numeric|min:1',
        ]);

        $tramite = Tramite::findOrFail($request->tramite_id);

        abort_if($tramite->user_id !== auth()->id(), 403);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'usd',
                    'unit_amount'  => (int)($request->precio_plan * 100),
                    'product_data' => [
                        'name'        => $request->plan_seleccionado,
                        'description' => "Constitución de {$tramite->tipo_entidad} en {$tramite->jurisdiccion}",
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode'        => 'payment',
            'success_url' => route('pago.success') . '?session_id={CHECKOUT_SESSION_ID}&tramite_id=' . $tramite->id,
            'cancel_url'  => route('tramite.create') . '?tramite_id=' . $tramite->id . '&cancelled=1',
            'metadata'    => [
                'tramite_id' => $tramite->id,
                'user_id'    => auth()->id(),
            ],
            'customer_email' => auth()->user()->email,
        ]);

        $tramite->update([
            'stripe_session_id' => $session->id,
            'plan_seleccionado' => $request->plan_seleccionado,
            'precio_plan'       => $request->precio_plan,
            'etapa'             => 'pago',
        ]);

        return response()->json(['url' => $session->url]);
    }

    public function success(Request $request)
    {
        $tramite = Tramite::findOrFail($request->tramite_id);

        abort_if($tramite->user_id !== auth()->id(), 403);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::retrieve($request->session_id);

        if ($session->payment_status === 'paid') {
            $tramite->update([
                'pago_estado'           => 'pagado',
                'pago_at'               => now(),
                'stripe_payment_intent' => $session->payment_intent,
                'etapa'                 => 'compania',
            ]);
        }

        return view('pago.success', compact('tramite'));
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                config('services.stripe.webhook_secret')
            );
        } catch (\Exception $e) {
            return response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;
            $tramite = Tramite::where('stripe_session_id', $session->id)->first();

            if ($tramite && $session->payment_status === 'paid') {
                $tramite->update([
                    'pago_estado'           => 'pagado',
                    'pago_at'               => now(),
                    'stripe_payment_intent' => $session->payment_intent,
                    'estado'                => 'en_proceso',
                    'etapa'                 => 'compania',
                ]);
            }
        }

        return response('OK', 200);
    }
}