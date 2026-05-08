<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal del Cliente — Sell·U</title>
    <link rel="icon" type="image/png" href="https://cdn.shopify.com/s/files/1/0900/0674/9556/files/SellU_redondo.png?v=1738200788">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=JetBrains+Mono:wght@400;500&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js"></script>
    <style>
    /* ── RESET ── */
    *, *::before, *::after { box-sizing: border-box; }
    html, body, #app { height: 100%; margin: 0; padding: 0; }

    :root {
        --navy:   #0f1c3f;
        --navy-2: #152753;
        --navy-3: #1d3268;
        --gold:   #e8a617;
        --gold-2: #d09413;
        --gold-soft:   rgba(232,166,23,.12);
        --gold-soft-2: rgba(232,166,23,.20);
        --bg:        #f0f2f5;
        --surface:   #ffffff;
        --surface-2: #f7f8fa;
        --ink:   #0f1c3f;
        --ink-2: #2a3553;
        --ink-3: #5b6478;
        --ink-4: #8a92a5;
        --line:   #e6e8ee;
        --line-2: #eef0f4;
        --ok-bg:      #e7f7ee; --ok-fg:      #16794a;
        --warn-bg:    #fff4d6; --warn-fg:    #8a5a05;
        --info-bg:    #e3eefc; --info-fg:    #1d4f8a;
        --danger-bg:  #fbe4e2; --danger-fg:  #99231b;
        --neutral-bg: #eef0f4; --neutral-fg: #5b6478;
        --purple-bg:  #efe6fb; --purple-fg:  #5b2eb0;
        --shadow-sm: 0 1px 2px rgba(15,28,63,.05);
        --shadow-md: 0 4px 12px rgba(15,28,63,.06), 0 2px 4px rgba(15,28,63,.04);
        --shadow-lg: 0 12px 28px rgba(15,28,63,.10), 0 4px 8px rgba(15,28,63,.05);
        --r-sm: 6px; --r-md: 8px; --r-lg: 12px; --r-xl: 16px; --r-pill: 999px;
        --t: 200ms cubic-bezier(0.16,1,0.3,1);
    }

    body { font-family: 'Inter', system-ui, sans-serif; background: var(--bg); color: var(--ink); font-size: 14px; line-height: 1.5; -webkit-font-smoothing: antialiased; }
    button, input, select, textarea { font: inherit; color: inherit; cursor: pointer; }
    a { color: var(--gold-2); text-decoration: none; }
    .mono { font-family: 'JetBrains Mono', ui-monospace, monospace; font-feature-settings: 'tnum'; }
    .tnum { font-variant-numeric: tabular-nums; }

    /* ── SHELL ── */
    .shell { display: flex; min-height: 100vh; }
    .main  { flex: 1; min-width: 0; display: flex; flex-direction: column; }
    .screen { display: none; animation: fadeIn 260ms var(--t); }
    .screen.active { display: block; }
    @keyframes fadeIn { from { opacity:0; transform:translateY(5px); } to { opacity:1; transform:none; } }

    /* ── SIDEBAR ── */
    .sidebar {
        width: 260px; flex: none; background: var(--navy); color: #fff;
        display: flex; flex-direction: column; position: sticky; top: 0;
        height: 100vh; overflow-y: auto;
    }
    .sidebar::-webkit-scrollbar { width: 4px; }
    .sidebar::-webkit-scrollbar-thumb { background: rgba(255,255,255,.1); border-radius: 99px; }
    .sb-logo { padding: 22px 22px 18px; border-bottom: 1px solid rgba(255,255,255,.08); display: flex; flex-direction: column; gap: 4px; }
    .sb-logo-mark { font-weight: 800; letter-spacing: -.02em; font-size: 21px; color: #fff; display: flex; align-items: center; gap: 2px; }
    .sb-logo-mark .dot { width: 5px; height: 5px; border-radius: 99px; background: var(--gold); display: inline-block; margin: 0 1px 4px; }
    .sb-logo-mark .u { display: inline-flex; align-items: center; justify-content: center; width: 22px; height: 22px; background: var(--gold); color: var(--navy); border-radius: 5px; font-size: 14px; font-weight: 800; margin-left: 2px; }
    .sb-logo-sub { font-size: 11px; color: rgba(255,255,255,.45); letter-spacing: .06em; text-transform: uppercase; font-weight: 500; }
    .sb-profile { padding: 16px 22px; display: flex; gap: 12px; align-items: center; border-bottom: 1px solid rgba(255,255,255,.08); }
    .sb-avatar { width: 38px; height: 38px; border-radius: 99px; background: var(--gold); color: var(--navy); display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 13px; flex: none; }
    .sb-prof-info { min-width: 0; flex: 1; }
    .sb-prof-name  { font-weight: 600; font-size: 13px; color: #fff; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .sb-prof-email { font-size: 11px; color: rgba(255,255,255,.55); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
    .sb-prof-plan  { display: inline-block; margin-top: 5px; font-size: 10px; font-weight: 600; background: var(--gold-soft-2); color: var(--gold); padding: 2px 8px; border-radius: 99px; letter-spacing: .04em; }
    .sb-section { padding: 14px 14px 4px; }
    .sb-section-label { font-size: 10px; font-weight: 600; letter-spacing: .12em; text-transform: uppercase; color: rgba(255,255,255,.35); padding: 0 10px 8px; }
    .sb-item { display: flex; align-items: center; gap: 11px; padding: 9px 12px; border: 0; background: transparent; width: 100%; border-radius: 8px; color: rgba(255,255,255,.72); font-size: 13px; font-weight: 500; text-align: left; position: relative; transition: background var(--t), color var(--t); }
    .sb-item .lbl { flex: 1; }
    .sb-item:hover { background: rgba(255,255,255,.07); color: #fff; }
    .sb-item.active { background: var(--gold-soft); color: var(--gold); font-weight: 600; }
    .sb-item.active::before { content: ''; position: absolute; left: -14px; top: 6px; bottom: 6px; width: 3px; border-radius: 99px; background: var(--gold); }
    .sb-item .badge-num { font-size: 10px; font-weight: 700; padding: 1px 7px; border-radius: 99px; background: #ef7d2a; color: #fff; min-width: 18px; text-align: center; }
    .sb-foot { margin-top: auto; padding: 12px 22px 20px; border-top: 1px solid rgba(255,255,255,.08); }
    .sb-logout { width: 100%; display: flex; align-items: center; gap: 10px; background: transparent; border: 1px solid rgba(255,255,255,.14); color: rgba(255,255,255,.72); padding: 9px 12px; border-radius: 8px; font-size: 13px; font-weight: 500; transition: all var(--t); }
    .sb-logout:hover { background: rgba(255,255,255,.05); color: #fff; border-color: rgba(255,255,255,.25); }

    /* ── TOPBAR ── */
    .topbar { background: #fff; border-bottom: 1px solid var(--line); height: 68px; padding: 0 32px; display: flex; align-items: center; justify-content: space-between; position: sticky; top: 0; z-index: 10; }
    .topbar-title { display: flex; align-items: center; gap: 14px; }
    .topbar-title h1 { margin: 0; font-size: 21px; font-weight: 700; letter-spacing: -.015em; }
    .topbar-title p  { margin: 2px 0 0; font-size: 12.5px; color: var(--ink-3); }
    .topbar-right { display: flex; align-items: center; gap: 12px; }
    .hamburger { display: none; }

    /* ── BUTTONS ── */
    .btn { display: inline-flex; align-items: center; gap: 8px; padding: 9px 15px; border-radius: 8px; font-size: 13px; font-weight: 600; border: 1px solid transparent; transition: all var(--t); white-space: nowrap; }
    .btn-primary { background: var(--gold); color: #fff; box-shadow: var(--shadow-sm); border-color: var(--gold); }
    .btn-primary:hover { background: var(--gold-2); border-color: var(--gold-2); }
    .btn-ghost { background: #fff; color: var(--ink); border-color: var(--line); }
    .btn-ghost:hover { background: var(--surface-2); border-color: #d0d3dc; }
    .btn-navy { background: var(--navy); color: #fff; }
    .btn-navy:hover { background: var(--navy-2); }
    .btn-success { background: #1aa05f; color: #fff; }
    .btn-link { background: transparent; border: 0; color: var(--gold-2); font-weight: 600; padding: 0; font-size: 13px; }
    .btn-link:hover { text-decoration: underline; }

    /* ── CONTENT ── */
    .content { padding: 28px 32px 64px; flex: 1; }

    /* ── CARDS ── */
    .card { background: var(--surface); border-radius: var(--r-lg); border: 1px solid var(--line); box-shadow: var(--shadow-sm); }
    .card-head { padding: 16px 20px; display: flex; align-items: center; justify-content: space-between; gap: 12px; border-bottom: 1px solid var(--line); }
    .card-head h3 { margin: 0; font-size: 14.5px; font-weight: 700; }
    .card-head p  { margin: 2px 0 0; font-size: 12px; color: var(--ink-3); }
    .card-body { padding: 20px; }

    /* ── STATS ── */
    .stats-row { display: grid; grid-template-columns: repeat(4,1fr); gap: 16px; margin-bottom: 24px; }
    .stat { background: var(--surface); border: 1px solid var(--line); border-radius: var(--r-lg); padding: 16px 18px; position: relative; overflow: hidden; box-shadow: var(--shadow-sm); transition: all var(--t); }
    .stat:hover { box-shadow: var(--shadow-md); transform: translateY(-1px); }
    .stat-accent { position: absolute; left: 0; top: 0; bottom: 0; width: 3px; }
    .stat-accent.gold   { background: var(--gold); }
    .stat-accent.blue   { background: #2f7dd6; }
    .stat-accent.green  { background: #1aa05f; }
    .stat-accent.purple { background: #7c3aed; }
    .stat-accent.red    { background: #d6362a; }
    .stat-label { font-size: 11px; font-weight: 600; letter-spacing: .06em; text-transform: uppercase; color: var(--ink-4); margin-bottom: 8px; }
    .stat-value { font-size: 28px; font-weight: 700; letter-spacing: -.02em; line-height: 1; }
    .stat-sub   { margin-top: 6px; font-size: 12px; color: var(--ink-3); display: flex; align-items: center; gap: 5px; }
    .stat-trend.up { color: #16794a; }
    .stat-trend.down { color: #99231b; }

    /* ── TABLES ── */
    .tbl { width: 100%; border-collapse: collapse; font-size: 13px; }
    .tbl thead th { text-align: left; padding: 10px 16px; font-size: 10.5px; font-weight: 600; letter-spacing: .08em; text-transform: uppercase; color: var(--ink-4); background: var(--surface-2); border-bottom: 1px solid var(--line); }
    .tbl tbody td { padding: 13px 16px; border-bottom: 1px solid var(--line-2); vertical-align: middle; }
    .tbl tbody tr { transition: background 100ms ease; }
    .tbl tbody tr:hover { background: var(--surface-2); }
    .tbl tbody tr:last-child td { border-bottom: 0; }
    .tbl .strong { font-weight: 600; }
    .tbl .right  { text-align: right; }

    /* ── BADGES ── */
    .badge { display: inline-flex; align-items: center; gap: 5px; font-size: 11px; font-weight: 600; padding: 3px 9px; border-radius: var(--r-pill); white-space: nowrap; }
    .badge .dot { width: 5px; height: 5px; border-radius: 99px; background: currentColor; opacity: .8; }
    .badge-pending { background: var(--warn-bg);    color: var(--warn-fg); }
    .badge-process { background: var(--info-bg);    color: var(--info-fg); }
    .badge-done    { background: var(--ok-bg);      color: var(--ok-fg); }
    .badge-cancel  { background: var(--danger-bg);  color: var(--danger-fg); }
    .badge-neutral { background: var(--neutral-bg); color: var(--neutral-fg); }
    .badge-gold    { background: var(--gold-soft);  color: var(--gold-2); }
    .badge-purple  { background: var(--purple-bg);  color: var(--purple-fg); }
    .badge-active  { background: var(--ok-bg);      color: var(--ok-fg); }

    /* ── LAYOUT HELPERS ── */
    .stack     { display: flex; flex-direction: column; gap: 22px; }
    .stack-sm  { display: flex; flex-direction: column; gap: 12px; }
    .row-2     { display: grid; grid-template-columns: 1.4fr 1fr; gap: 22px; }
    .row-7030  { display: grid; grid-template-columns: 7fr 3fr; gap: 22px; }
    .row-4060  { display: grid; grid-template-columns: 4fr 6fr; gap: 22px; }
    .section-head { display: flex; align-items: center; justify-content: space-between; margin-bottom: 16px; }
    .section-head h2 { margin: 0; font-size: 16px; font-weight: 700; letter-spacing: -.01em; }
    .section-head p  { margin: 2px 0 0; font-size: 12.5px; color: var(--ink-3); }
    .icon-tile { width: 38px; height: 38px; border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; flex: none; }

    /* ── QUICK LINKS ── */
    .quicklinks { display: flex; flex-direction: column; }
    .ql-item { display: flex; align-items: center; gap: 12px; padding: 11px 18px; border-bottom: 1px solid var(--line-2); background: transparent; border-left: 0; border-right: 0; border-top: 0; width: 100%; text-align: left; color: var(--ink); font-size: 13px; font-weight: 500; transition: background var(--t); }
    .ql-item:last-child { border-bottom: 0; }
    .ql-item:hover { background: var(--surface-2); }

    /* ── HELP CARD ── */
    .help-card { background: linear-gradient(155deg, var(--navy) 0%, #1a2c5e 100%); color: #fff; border-radius: var(--r-lg); padding: 20px; }
    .help-card h4 { margin: 0 0 6px; font-size: 14px; font-weight: 700; }
    .help-card p  { margin: 0 0 14px; font-size: 13px; color: rgba(255,255,255,.72); }
    .wa-btn { display: inline-flex; align-items: center; gap: 10px; background: #25d366; color: #fff; padding: 9px 14px; border-radius: 8px; font-weight: 600; font-size: 13px; border: 0; width: 100%; justify-content: center; }
    .wa-btn:hover { background: #1ebe5a; }

    /* ── SERVICE GRID ── */
    .svc-grid { display: grid; grid-template-columns: repeat(4,1fr); gap: 14px; }
    .svc-card { background: #fff; border: 1px solid var(--line); border-radius: var(--r-lg); padding: 18px; display: flex; flex-direction: column; gap: 12px; transition: all var(--t); }
    .svc-card:hover { box-shadow: var(--shadow-md); transform: translateY(-2px); }
    .svc-card.muted { opacity: .78; background: var(--surface-2); }
    .svc-card h4 { margin: 0; font-size: 14px; font-weight: 700; }
    .svc-card p  { margin: 0; font-size: 12.5px; color: var(--ink-3); flex: 1; line-height: 1.5; }
    .svc-card-foot { display: flex; align-items: center; justify-content: space-between; }

    /* ── TRADEMARK PROGRESS ── */
    .tm-progress { display: flex; flex-direction: column; gap: 0; position: relative; margin: 6px 0 4px; }
    .tm-step { display: flex; align-items: flex-start; gap: 14px; padding: 9px 0; position: relative; }
    .tm-step + .tm-step::before { content: ''; position: absolute; left: 9px; top: -8px; height: 18px; width: 2px; background: var(--line); }
    .tm-step.done + .tm-step::before, .tm-step.done + .tm-step.active::before { background: #1aa05f; }
    .tm-dot { width: 20px; height: 20px; border-radius: 99px; background: var(--line); flex: none; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 11px; font-weight: 700; margin-top: 2px; }
    .tm-step.done .tm-dot   { background: #1aa05f; }
    .tm-step.active .tm-dot { background: var(--gold); box-shadow: 0 0 0 4px var(--gold-soft); }
    .tm-step .label { font-size: 13px; color: var(--ink-3); padding-top: 3px; }
    .tm-step.done .label   { color: var(--ink); font-weight: 500; }
    .tm-step.active .label { color: var(--gold-2); font-weight: 600; }

    /* ── TABS ── */
    .tabs { display: inline-flex; gap: 4px; padding: 4px; background: var(--surface-2); border-radius: 10px; border: 1px solid var(--line); }
    .tab { background: transparent; border: 0; padding: 6px 13px; border-radius: 7px; font-size: 13px; font-weight: 500; color: var(--ink-3); transition: all var(--t); }
    .tab:hover { color: var(--ink); }
    .tab.active { background: #fff; color: var(--ink); font-weight: 600; box-shadow: var(--shadow-sm); }

    /* ── DOCUMENTS ── */
    .docs-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
    .doc-card { display: flex; gap: 14px; padding: 16px 18px; background: #fff; border: 1px solid var(--line); border-radius: var(--r-lg); transition: all var(--t); }
    .doc-card:hover { box-shadow: var(--shadow-md); }
    .doc-icon { width: 42px; height: 50px; flex: none; border-radius: 6px; background: linear-gradient(135deg,#fee,#fcd); position: relative; display: flex; align-items: flex-end; justify-content: center; padding-bottom: 5px; font-size: 9px; font-weight: 800; color: #b91c1c; letter-spacing: .05em; border: 1px solid #f5d0d0; }
    .doc-icon::before { content: ''; position: absolute; top: 0; right: 0; border-style: solid; border-width: 0 9px 9px 0; border-color: transparent #f5d0d0 transparent transparent; }
    .doc-info { flex: 1; min-width: 0; display: flex; flex-direction: column; gap: 3px; }
    .doc-info h4   { margin: 0; font-size: 13px; font-weight: 600; line-height: 1.35; }
    .doc-info .meta   { font-size: 11.5px; color: var(--ink-3); }
    .doc-info .badges { display: flex; gap: 5px; flex-wrap: wrap; margin-top: 3px; }
    .doc-actions { display: flex; align-items: center; }

    /* ── FORMS ── */
    .field { display: flex; flex-direction: column; gap: 5px; }
    .field label { font-size: 12px; font-weight: 600; color: var(--ink-2); }
    .input, .select, .textarea { width: 100%; padding: 9px 11px; border-radius: 8px; border: 1px solid var(--line); background: #fff; font-size: 13.5px; transition: all var(--t); outline: none; }
    .input:focus, .select:focus, .textarea:focus { border-color: var(--gold); box-shadow: 0 0 0 3px var(--gold-soft); }
    .textarea { resize: vertical; min-height: 96px; font-family: inherit; }
    .field-hint { font-size: 11.5px; color: var(--ink-3); }

    /* ── PASSWORD STRENGTH ── */
    .strength { display: flex; gap: 4px; margin-top: 5px; height: 4px; }
    .strength .seg { flex: 1; background: var(--line-2); border-radius: 99px; transition: background 200ms; }
    .req-list { font-size: 12px; color: var(--ink-3); display: grid; grid-template-columns: 1fr 1fr; gap: 4px 12px; margin-top: 8px; padding: 0; list-style: none; }
    .req-list li { display: flex; align-items: center; gap: 5px; }
    .req-list li.met { color: #16794a; }

    /* ── ACCOUNTING ── */
    .calc-summary { display: grid; grid-template-columns: repeat(4,1fr); gap: 0; background: var(--navy); color: #fff; border-radius: var(--r-lg); margin-top: 16px; padding: 4px; }
    .calc-summary .item { padding: 12px 16px; display: flex; flex-direction: column; gap: 3px; border-right: 1px solid rgba(255,255,255,.08); }
    .calc-summary .item:last-child { border-right: 0; }
    .calc-summary .item .lbl { font-size: 10.5px; letter-spacing: .06em; text-transform: uppercase; color: rgba(255,255,255,.5); font-weight: 600; }
    .calc-summary .item .val { font-size: 17px; font-weight: 700; letter-spacing: -.01em; }
    .calc-summary .item.tax .val { color: var(--gold); }
    .amt-pos { color: #16794a; font-weight: 600; }
    .amt-neg { color: #99231b; font-weight: 600; }

    /* ── PROFILE ── */
    .profile-card  { padding: 26px; text-align: center; }
    .avatar-xl { width: 110px; height: 110px; border-radius: 99px; background: var(--gold); color: var(--navy); font-size: 40px; font-weight: 700; display: inline-flex; align-items: center; justify-content: center; margin-bottom: 16px; }
    .input-with-badge { position: relative; }
    .input-with-badge .badge { position: absolute; right: 10px; top: 50%; transform: translateY(-50%); pointer-events: none; }
    .input-with-badge .input { padding-right: 90px; }

    /* ── SOPORTE ── */
    .wa-section { background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: var(--r-lg); padding: 18px; }
    .wa-head { display: flex; align-items: center; gap: 12px; margin-bottom: 10px; }
    .wa-icon-big { width: 44px; height: 44px; border-radius: 12px; background: #25d366; color: #fff; display: inline-flex; align-items: center; justify-content: center; flex: none; }
    .contact-row { display: flex; align-items: center; gap: 12px; padding: 12px 0; border-bottom: 1px solid var(--line-2); }
    .contact-row:last-child { border-bottom: 0; }
    .contact-row .ico { width: 36px; height: 36px; border-radius: 10px; display: flex; align-items: center; justify-content: center; flex: none; }
    .schedule { display: grid; grid-template-columns: 1fr auto; gap: 5px 14px; font-size: 13px; padding-top: 12px; }
    .schedule .day { color: var(--ink-3); }
    .schedule .hrs { color: var(--ink); font-weight: 500; }
    .schedule .now .day, .schedule .now .hrs { color: var(--gold-2); font-weight: 700; }

    /* ── EMPTY STATE ── */
    .empty { text-align: center; padding: 36px 20px; color: var(--ink-3); }
    .empty h4 { margin: 8px 0 4px; color: var(--ink); font-size: 14px; font-weight: 600; }

    /* ── TOAST ── */
    .toast { position: fixed; bottom: 28px; right: 28px; z-index: 9999; background: var(--navy); color: #fff; padding: 12px 20px; border-radius: 10px; font-size: 13.5px; font-weight: 500; box-shadow: var(--shadow-lg); display: flex; align-items: center; gap: 10px; transform: translateY(80px); opacity: 0; transition: all 360ms var(--t); pointer-events: none; }
    .toast.show { transform: translateY(0); opacity: 1; }
    .toast-ok { background: #16784a; }

    /* ── BACKDROP ── */
    .backdrop { position: fixed; inset: 0; background: rgba(15,28,63,.42); z-index: 40; opacity: 0; pointer-events: none; transition: opacity 200ms; }
    .backdrop.show { opacity: 1; pointer-events: auto; }

    /* ── RESPONSIVE ── */
    @media (max-width: 1100px) {
        .stats-row { grid-template-columns: repeat(2,1fr); }
        .svc-grid  { grid-template-columns: repeat(2,1fr); }
        .row-2, .row-7030, .row-4060 { grid-template-columns: 1fr; }
        .docs-grid { grid-template-columns: 1fr; }
        .calc-summary { grid-template-columns: repeat(2,1fr); }
    }
    @media (max-width: 720px) {
        .sidebar { position: fixed; z-index: 50; transform: translateX(-100%); transition: transform 280ms cubic-bezier(.16,1,.3,1); box-shadow: var(--shadow-lg); }
        .sidebar.open { transform: translateX(0); }
        .hamburger { display: inline-flex; }
        .content   { padding: 20px 16px 56px; }
        .topbar    { padding: 0 16px; height: 60px; }
        .topbar-title h1 { font-size: 17px; }
        .topbar-title p  { display: none; }
        .stats-row { grid-template-columns: repeat(2,1fr); gap: 10px; }
        .svc-grid  { grid-template-columns: 1fr; }
        .docs-grid { grid-template-columns: 1fr; }
        .calc-summary { grid-template-columns: 1fr 1fr; }
    }
    </style>
</head>
<body>
@php
    $user = auth()->user();
    $nameParts = explode(' ', trim($user->name));
    $initials  = strtoupper(substr($nameParts[0] ?? '', 0, 1) . substr($nameParts[1] ?? '', 0, 1));
    $plan      = $tramites->first()?->plan_seleccionado ?? 'Sin plan';
    $badgeMap  = ['amber' => 'pending', 'blue' => 'process', 'green' => 'done', 'red' => 'cancel', 'gray' => 'neutral'];
    $allDocs   = $tramites->flatMap->documentos;
    $empresas  = $tramites->pluck('nombre_empresa')->filter()->unique()->values();
    $totalEn   = $tramites->where('estado','en_proceso')->count();
    $totalOk   = $tramites->where('estado','completado')->count();
    $catBadge  = fn($cat) => match($cat) {
        'Constitución', 'constitución' => 'gold',
        'Legal', 'legal'               => 'purple',
        'Fiscal', 'fiscal'             => 'process',
        default                        => 'neutral',
    };
@endphp

<!-- Toast notification -->
<div class="toast" id="toast">
    <i data-lucide="check-circle-2" style="width:16px;height:16px;flex:none;"></i>
    <span id="toast-msg"></span>
</div>

<!-- Backdrop for mobile sidebar -->
<div class="backdrop" id="backdrop"></div>

<div class="shell">

<!-- ═══════════════ SIDEBAR ═══════════════ -->
<aside class="sidebar" id="sidebar">
    <div class="sb-logo">
        <div class="sb-logo-mark">
            Sell<span class="dot"></span><span class="u">U</span>
        </div>
        <div class="sb-logo-sub">Portal del cliente</div>
    </div>

    <div class="sb-profile">
        <div class="sb-avatar">{{ $initials ?: strtoupper(substr($user->name,0,2)) }}</div>
        <div class="sb-prof-info">
            <div class="sb-prof-name">{{ $user->name }}</div>
            <div class="sb-prof-email">{{ $user->email }}</div>
            <span class="sb-prof-plan">{{ Str::limit($plan, 18) }}</span>
        </div>
    </div>

    <div class="sb-section">
        <div class="sb-section-label">Principal</div>
        <button class="sb-item active" data-nav="portal" onclick="showScreen('portal')">
            <i data-lucide="home" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Mi Portal</span>
        </button>
    </div>

    <div class="sb-section">
        <div class="sb-section-label">Mis Servicios</div>
        <button class="sb-item" data-nav="servicios" onclick="showScreen('servicios')">
            <i data-lucide="briefcase" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Servicios</span>
            @if($tramites->count())
                <span class="badge-num">{{ $tramites->count() }}</span>
            @endif
        </button>
        <button class="sb-item" data-nav="marcas" onclick="showScreen('marcas')">
            <i data-lucide="badge-check" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Mis Marcas</span>
        </button>
        <button class="sb-item" data-nav="docs" onclick="showScreen('docs')">
            <i data-lucide="folder" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Documentos Legales</span>
        </button>
    </div>

    <div class="sb-section">
        <div class="sb-section-label">Finanzas</div>
        <button class="sb-item" data-nav="facturacion" onclick="showScreen('facturacion')">
            <i data-lucide="file-text" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Facturación</span>
        </button>
        <button class="sb-item" data-nav="contabilidad" onclick="showScreen('contabilidad')">
            <i data-lucide="calculator" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Contabilidad</span>
        </button>
    </div>

    <div class="sb-section">
        <div class="sb-section-label">Mi Cuenta</div>
        <button class="sb-item" data-nav="cuenta" onclick="showScreen('cuenta')">
            <i data-lucide="user-circle-2" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Mi Cuenta</span>
        </button>
        <button class="sb-item" data-nav="soporte" onclick="showScreen('soporte')">
            <i data-lucide="headphones" style="width:16px;height:16px;flex:none;"></i>
            <span class="lbl">Soporte</span>
        </button>
    </div>

    <div class="sb-foot">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="sb-logout">
                <i data-lucide="log-out" style="width:15px;height:15px;"></i>
                <span>Cerrar sesión</span>
            </button>
        </form>
    </div>
</aside>

<!-- ═══════════════ MAIN ═══════════════ -->
<div class="main">

    <!-- TOPBAR -->
    <header class="topbar">
        <div class="topbar-title">
            <button class="btn btn-ghost hamburger" onclick="openSidebar()" style="padding:7px;" aria-label="Menú">
                <i data-lucide="menu" style="width:18px;height:18px;"></i>
            </button>
            <div>
                <h1 id="topbar-title">Mi Portal</h1>
                <p id="topbar-sub">Bienvenido, {{ $user->name }}. Aquí tienes un resumen de tu actividad.</p>
            </div>
        </div>
        <div class="topbar-right">
            <a href="{{ route('tramite.create') }}" class="btn btn-primary">
                <i data-lucide="plus" style="width:15px;height:15px;"></i>
                Nuevo servicio
            </a>
            <button onclick="showScreen('cuenta')" aria-label="Mi cuenta" style="width:38px;height:38px;border-radius:99px;background:var(--gold);color:var(--navy);border:0;font-weight:700;font-size:13px;">
                {{ $initials ?: strtoupper(substr($user->name,0,2)) }}
            </button>
        </div>
    </header>

    <!-- CONTENT -->
    <main class="content" id="content-area">

    <!-- ═══════════════════════════════════════
         SCREEN 1: MI PORTAL
    ═══════════════════════════════════════ -->
    <div id="screen-portal" class="screen active">
        <div class="stats-row">
            <div class="stat">
                <div class="stat-accent gold"></div>
                <div class="stat-label">Mis Empresas</div>
                <div class="stat-value">{{ $tramites->count() }}</div>
                <div class="stat-sub">LLC constituidas</div>
            </div>
            <div class="stat">
                <div class="stat-accent blue"></div>
                <div class="stat-label">En Proceso</div>
                <div class="stat-value">{{ $totalEn }}</div>
                <div class="stat-sub">Trámites activos</div>
            </div>
            <div class="stat">
                <div class="stat-accent green"></div>
                <div class="stat-label">Completados</div>
                <div class="stat-value">{{ $totalOk }}</div>
                <div class="stat-sub">Trámites finalizados</div>
            </div>
            <div class="stat">
                <div class="stat-accent purple"></div>
                <div class="stat-label">Documentos</div>
                <div class="stat-value">{{ $allDocs->count() }}</div>
                <div class="stat-sub">Archivos disponibles</div>
            </div>
        </div>

        <div class="row-7030">
            <!-- Empresas activas -->
            <div class="card">
                <div class="card-head">
                    <div>
                        <h3>Mis empresas activas</h3>
                        <p>Últimas actualizaciones</p>
                    </div>
                    <button class="btn btn-link" onclick="showScreen('servicios')">Ver todas →</button>
                </div>
                @if($tramites->isEmpty())
                    <div class="empty">
                        <h4>Aún no tienes trámites</h4>
                        <p style="margin:4px 0 14px;font-size:13px;">Comienza el proceso de constitución.</p>
                        <a href="{{ route('tramite.create') }}" class="btn btn-primary">Empezar ahora</a>
                    </div>
                @else
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Empresa</th>
                            <th>Tipo / Estado</th>
                            <th>Plan</th>
                            <th>Estado</th>
                            <th>Fecha</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tramites->take(5) as $t)
                        @php $b = $t->estado_badge; $bk = $badgeMap[$b['color']] ?? 'neutral'; @endphp
                        <tr>
                            <td class="strong">{{ $t->nombre_empresa ?? 'Empresa en proceso' }}</td>
                            <td>{{ $t->tipo_entidad }} · {{ $t->jurisdiccion }}</td>
                            <td>{{ $t->plan_seleccionado ?? 'Sin plan' }}</td>
                            <td><span class="badge badge-{{ $bk }}"><span class="dot"></span>{{ $b['label'] }}</span></td>
                            <td class="tnum">{{ $t->created_at->format('d/m/Y') }}</td>
                            <td class="right"><a href="{{ route('tramite.show', $t) }}" class="btn-link">Ver →</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <!-- Quick links + help -->
            <div class="stack">
                <div class="card">
                    <div class="card-head"><h3>Accesos rápidos</h3></div>
                    <div class="quicklinks">
                        @php $ql = [
                            ['servicios',    'briefcase',   '#fff4d6', '#8a5a05', 'Ver mis servicios'],
                            ['marcas',       'badge-check', '#efe6fb', '#5b2eb0', 'Mis marcas'],
                            ['docs',         'folder',      '#e3eefc', '#1d4f8a', 'Documentos legales'],
                            ['facturacion',  'file-text',   '#ffe4d3', '#9a4316', 'Mis facturas'],
                            ['contabilidad', 'calculator',  '#e7f7ee', '#16794a', 'Contabilidad'],
                            ['soporte',      'headphones',  '#eef0f4', '#5b6478', 'Soporte'],
                        ]; @endphp
                        @foreach($ql as [$id, $icon, $bg, $fg, $label])
                        <button class="ql-item" onclick="showScreen('{{ $id }}')">
                            <span class="icon-tile" style="background:{{ $bg }};color:{{ $fg }};border-radius:8px;">
                                <i data-lucide="{{ $icon }}" style="width:15px;height:15px;"></i>
                            </span>
                            <span>{{ $label }}</span>
                            <i data-lucide="chevron-right" style="width:14px;height:14px;margin-left:auto;color:var(--ink-4);"></i>
                        </button>
                        @endforeach
                    </div>
                </div>
                <div class="help-card">
                    <h4>¿Necesitas ayuda?</h4>
                    <p>Habla con tu especialista en español. Respondemos en menos de 5 minutos.</p>
                    <a class="wa-btn" href="https://wa.me/19542108455" target="_blank" rel="noreferrer">
                        <i data-lucide="message-circle" style="width:16px;height:16px;"></i>
                        +1 954 210 8455
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 2: MIS SERVICIOS
    ═══════════════════════════════════════ -->
    <div id="screen-servicios" class="screen">
        <div class="stack">
            <div class="card">
                <div class="card-head">
                    <div>
                        <h3>Mis Empresas (LLC)</h3>
                        <p>Estado de constitución, EIN y plan contratado</p>
                    </div>
                    <a href="{{ route('tramite.create') }}" class="btn btn-primary">
                        <i data-lucide="plus" style="width:14px;height:14px;"></i>Nueva empresa
                    </a>
                </div>
                @if($tramites->isEmpty())
                    <div class="empty"><h4>Aún no tienes empresas</h4></div>
                @else
                <table class="tbl">
                    <thead>
                        <tr>
                            <th>Empresa</th><th>Tipo</th><th>Estado USA</th>
                            <th>Plan</th><th>EIN</th><th>Estado trámite</th>
                            <th>Fecha</th><th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tramites as $t)
                        @php $b = $t->estado_badge; $bk = $badgeMap[$b['color']] ?? 'neutral'; @endphp
                        <tr>
                            <td class="strong">{{ $t->nombre_empresa ?? 'Empresa en proceso' }}</td>
                            <td>{{ $t->tipo_entidad }}</td>
                            <td>{{ $t->jurisdiccion }}</td>
                            <td>{{ $t->plan_seleccionado ?? 'Sin plan' }}</td>
                            <td class="mono" style="{{ $t->ein_numero ? '' : 'color:var(--ink-4)' }}">
                                {{ $t->ein_numero ?? 'Pendiente' }}
                            </td>
                            <td><span class="badge badge-{{ $bk }}"><span class="dot"></span>{{ $b['label'] }}</span></td>
                            <td class="tnum">{{ $t->created_at->format('d/m/Y') }}</td>
                            <td class="right"><a href="{{ route('tramite.show', $t) }}" class="btn-link">Ver detalle →</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endif
            </div>

            <div>
                <div class="section-head">
                    <div>
                        <h2>Otros servicios</h2>
                        <p>Activa nuevos servicios sin salir del portal</p>
                    </div>
                </div>
                <div class="svc-grid">
                    @php $services = [
                        ['itin',    'id-card',     '#e3eefc', '#1d4f8a', 'ITIN Number',                    'Individual Taxpayer Identification Number. Permite operar sin SSN en EE.UU.',      'active',  '/pages/itin-number'],
                        ['reseller','shield-check', '#e7f7ee', '#16794a', 'Certificado de revendedor',      'Compra productos sin pagar sales tax. Requerido para sellers de marketplace.',     'active',  '/pages/certificado-revendedor'],
                        ['taxes',   'file-text',   '#fff4d6', '#8a5a05', 'Presentación de impuestos',      'Form 1120, 5472 y 1065 presentados ante el IRS. Federales y estatales.',           'active',  '/pages/presentacion-de-impuestos'],
                        ['books',   'line-chart',  '#efe6fb', '#5b2eb0', 'Contabilidad mensual',           'Bookkeeping mensual, conciliaciones bancarias, P&L y Balance General.',            'active',  '/pages/bookkeeping'],
                        ['tm',      'badge-check', '#fbe4e2', '#99231b', 'Registro de marca TM',           'Protección de tu marca ante la USPTO. Bloquea imitadores en EE.UU.',              'process', '/pages/registro-de-marca-ante-la-uspto'],
                        ['fda',     'shield',      '#dff4f9', '#0e6e87', 'Registro FDA',                   'Habilitación para exportar alimentos y suplementos al mercado americano.',         'none',    '/pages/registro-fda-de-alimentos'],
                        ['mkt',     'store',       '#e8f7d9', '#3f7416', 'Apertura marketplace',           'Amazon, Walmart, TikTok Shop y más. Sin moverte de LATAM.',                       'none',    '/pages/apertura-marketplace'],
                        ['3pl',     'package',     '#ffe4d3', '#9a4316', 'Logística 3PL',                  'Almacenamiento, empaque y envíos desde EE.UU. Tú te enfocas en vender.',          'none',    '/pages/almacenamiento-y-logistica'],
                    ]; @endphp
                    @foreach($services as [$id, $icon, $bg, $fg, $name, $desc, $state, $href])
                    @php
                        $muted = $state === 'none';
                        $badgeClass = $state === 'active' ? 'active' : ($state === 'process' ? 'process' : 'neutral');
                        $badgeLabel = $state === 'active' ? 'Activo' : ($state === 'process' ? 'En proceso' : 'No adquirido');
                    @endphp
                    <div class="svc-card {{ $muted ? 'muted' : '' }}">
                        <div style="display:flex;justify-content:space-between;align-items:flex-start;">
                            <span class="icon-tile" style="background:{{ $bg }};color:{{ $fg }};">
                                <i data-lucide="{{ $icon }}" style="width:17px;height:17px;"></i>
                            </span>
                            <span class="badge badge-{{ $badgeClass }}"><span class="dot"></span>{{ $badgeLabel }}</span>
                        </div>
                        <h4>{{ $name }}</h4>
                        <p>{{ $desc }}</p>
                        <div class="svc-card-foot">
                            <a href="{{ $href }}" class="btn-link" target="_blank" style="color:var(--gold-2);">
                                {{ $muted ? 'Contratar →' : 'Ver →' }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 3: MIS MARCAS
    ═══════════════════════════════════════ -->
    <div id="screen-marcas" class="screen">
        <div class="stack">
            <div style="display:flex;justify-content:flex-end;">
                <a href="/pages/registro-de-marca-ante-la-uspto" target="_blank" class="btn btn-primary">
                    <i data-lucide="plus" style="width:14px;height:14px;"></i>Registrar nueva marca
                </a>
            </div>
            <div class="card">
                <div style="padding:22px 26px;border-bottom:1px solid var(--line);">
                    <div style="display:flex;align-items:center;gap:14px;flex-wrap:wrap;">
                        <h2 style="margin:0;font-size:26px;font-weight:700;letter-spacing:-.02em;">{{ strtoupper($user->name) }}</h2>
                        <span class="badge badge-process"><span class="dot"></span>En proceso</span>
                    </div>
                    <p style="margin:4px 0 0;color:var(--ink-3);font-size:13px;">Marca denominativa · Solicitud activa ante la USPTO</p>
                </div>
                <div style="padding:18px 26px;display:grid;grid-template-columns:repeat(4,1fr);gap:16px;border-bottom:1px solid var(--line);">
                    @foreach([['Clase USPTO','Clase 35','Servicios de negocios'],['N° de solicitud','97/123456',''],['Fecha de solicitud','15/03/2026',''],['Resolución estimada','15/03/2027','']] as [$l,$v,$s])
                    <div>
                        <div style="font-size:10.5px;font-weight:600;letter-spacing:.06em;text-transform:uppercase;color:var(--ink-4);">{{ $l }}</div>
                        <div class="{{ $l==='N° de solicitud' ? 'mono' : 'tnum' }}" style="font-size:13.5px;font-weight:600;margin-top:4px;">{{ $v }}</div>
                        @if($s)<div style="font-size:12px;color:var(--ink-3);">{{ $s }}</div>@endif
                    </div>
                    @endforeach
                </div>
                <div style="padding:22px 26px;">
                    <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:12px;">
                        <h4 style="margin:0;font-size:14px;font-weight:700;">Avance del proceso</h4>
                        <span style="font-size:12px;font-weight:600;color:var(--gold-2);">3 de 7 pasos · 43%</span>
                    </div>
                    <div style="height:6px;background:var(--line-2);border-radius:99px;overflow:hidden;margin-bottom:16px;">
                        <div style="height:100%;width:43%;background:linear-gradient(90deg,var(--gold) 0%,#f7c557 100%);border-radius:99px;"></div>
                    </div>
                    <div class="tm-progress">
                        @foreach([['done','Solicitud enviada'],['done','Revisión formal'],['done','Publicación en Official Gazette'],['active','Período de oposición (activo)'],['pending','Aprobación'],['pending','Certificado emitido'],['pending','Registro final']] as $i => [$state, $label])
                        <div class="tm-step {{ $state }}">
                            <div class="tm-dot">
                                @if($state==='done')<i data-lucide="check" style="width:11px;height:11px;"></i>@else{{ $i+1 }}@endif
                            </div>
                            <div class="label">{{ $label }}</div>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div style="padding:16px 26px;border-top:1px solid var(--line);background:var(--surface-2);display:flex;gap:10px;justify-content:flex-end;">
                    <button class="btn btn-ghost" onclick="showScreen('docs')"><i data-lucide="folder" style="width:14px;height:14px;"></i>Ver documentos</button>
                    <a href="https://tsdr.uspto.gov/" target="_blank" class="btn btn-navy"><i data-lucide="external-link" style="width:14px;height:14px;"></i>Seguimiento USPTO →</a>
                </div>
            </div>
            <div class="card" style="border-style:dashed;background:var(--surface-2);">
                <div class="empty" style="padding:32px 20px;">
                    <span class="icon-tile" style="background:var(--gold-soft);color:var(--gold-2);width:52px;height:52px;border-radius:14px;margin:0 auto 12px;">
                        <i data-lucide="badge-plus" style="width:24px;height:24px;"></i>
                    </span>
                    <h4>¿Quieres proteger otra marca?</h4>
                    <p style="margin:4px 0 14px;font-size:13px;">Registra tu marca en EE.UU. desde <strong>$497 USD</strong>. Cobertura por 10 años.</p>
                    <a href="/pages/registro-de-marca-ante-la-uspto" target="_blank" class="btn btn-primary">Registrar nueva marca</a>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 4: DOCUMENTOS LEGALES
    ═══════════════════════════════════════ -->
    <div id="screen-docs" class="screen">
        <div class="stack">
            <div class="tabs" id="docs-tabs">
                <button class="tab active" data-filter="Todos" onclick="filterDocs('Todos')">Todos</button>
                @foreach($empresas as $emp)
                <button class="tab" data-filter="{{ $emp }}" onclick="filterDocs('{{ $emp }}')">{{ Str::limit($emp, 22) }}</button>
                @endforeach
            </div>

            @if($allDocs->isEmpty())
                <div class="card">
                    <div class="empty">
                        <i data-lucide="folder-open" style="width:40px;height:40px;color:var(--line);margin-bottom:12px;"></i>
                        <h4>Sin documentos disponibles</h4>
                        <p style="font-size:13px;">Los documentos de tu trámite aparecerán aquí cuando estén listos.</p>
                    </div>
                </div>
            @else
            <div class="docs-grid" id="docs-grid">
                @foreach($allDocs as $doc)
                @php
                    $docBadge  = $doc->tramite ? $badgeMap[$doc->estado_badge['color'] ?? 'gray'] ?? 'neutral' : 'neutral';
                    $docLabel  = $doc->estado_badge['label'] ?? 'Desconocido';
                    $catClass  = $catBadge($doc->categoria ?? 'otro');
                    $empresa   = $doc->tramite?->nombre_empresa ?? '—';
                @endphp
                <div class="doc-card" data-empresa="{{ $empresa }}">
                    <div class="doc-icon">PDF</div>
                    <div class="doc-info">
                        <h4>{{ $doc->nombre ?? $doc->nombre_original }}</h4>
                        <div class="meta">{{ $empresa }} · {{ $doc->created_at->format('d/m/Y') }}</div>
                        <div class="badges">
                            @if($doc->categoria)
                            <span class="badge badge-{{ $catClass }}"><span class="dot"></span>{{ ucfirst($doc->categoria) }}</span>
                            @endif
                            <span class="badge badge-{{ $docBadge }}"><span class="dot"></span>{{ $docLabel }}</span>
                        </div>
                    </div>
                    <div class="doc-actions">
                        <a href="{{ $doc->url }}" target="_blank" class="btn btn-ghost" style="padding:7px 11px;">
                            <i data-lucide="download" style="width:14px;height:14px;color:var(--gold-2);"></i>
                            <span style="color:var(--gold-2);">Descargar</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
            @endif
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 5: FACTURACIÓN
    ═══════════════════════════════════════ -->
    <div id="screen-facturacion" class="screen">
        <div class="stack">
            <div class="stats-row" style="grid-template-columns:repeat(3,1fr);">
                <div class="stat"><div class="stat-accent gold"></div><div class="stat-label">Total pagado</div><div class="stat-value tnum">$1,247 <span style="font-size:13px;color:var(--ink-3);font-weight:500;">USD</span></div><div class="stat-sub">En el último año</div></div>
                <div class="stat"><div class="stat-accent green"></div><div class="stat-label">Facturas pendientes</div><div class="stat-value">0</div><div class="stat-sub" style="color:#16794a;"><i data-lucide="check-circle-2" style="width:13px;height:13px;"></i> Al día con tus pagos</div></div>
                <div class="stat"><div class="stat-accent blue"></div><div class="stat-label">Próximo vencimiento</div><div class="stat-value" style="font-size:20px;">{{ Str::limit($plan, 16) }}</div><div class="stat-sub">Renueva el 25/04/2027</div></div>
            </div>

            <div class="card">
                <div class="card-head">
                    <div><h3>Historial de pagos</h3><p>Todas tus facturas en un solo lugar</p></div>
                    <div class="tabs" id="fact-tabs">
                        <button class="tab active" data-filter="Todos" onclick="filterFacturas('Todos')">Todos</button>
                        <button class="tab" data-filter="Plan" onclick="filterFacturas('Plan')">Plan</button>
                        <button class="tab" data-filter="Servicios externos" onclick="filterFacturas('Servicios externos')">Servicios externos</button>
                    </div>
                </div>
                <table class="tbl">
                    <thead>
                        <tr><th># Factura</th><th>Concepto</th><th>Categoría</th><th>Fecha</th><th class="right">Monto</th><th>Estado</th><th></th></tr>
                    </thead>
                    <tbody>
                        <tr data-cat="Plan">
                            <td class="mono strong">FAC-2026-003</td>
                            <td>{{ Str::limit($plan, 40) }} — Renovación anual</td>
                            <td><span class="badge badge-process"><span class="dot"></span>Plan</span></td>
                            <td class="tnum">25/04/2026</td>
                            <td class="right tnum strong">$497.00 USD</td>
                            <td><span class="badge badge-done"><span class="dot"></span>Pagado</span></td>
                            <td class="right"><button class="btn-link">Ver factura →</button></td>
                        </tr>
                        <tr data-cat="Impuestos">
                            <td class="mono strong">FAC-2026-002</td>
                            <td>Presentación de impuestos Form 1120 + 5472</td>
                            <td><span class="badge badge-gold"><span class="dot"></span>Impuestos</span></td>
                            <td class="tnum">15/03/2026</td>
                            <td class="right tnum strong">$350.00 USD</td>
                            <td><span class="badge badge-done"><span class="dot"></span>Pagado</span></td>
                            <td class="right"><button class="btn-link">Ver factura →</button></td>
                        </tr>
                        <tr data-cat="Contabilidad">
                            <td class="mono strong">FAC-2026-001</td>
                            <td>Contabilidad mensual — Plan Starter (3 meses)</td>
                            <td><span class="badge badge-purple"><span class="dot"></span>Contabilidad</span></td>
                            <td class="tnum">01/01/2026</td>
                            <td class="right tnum strong">$400.00 USD</td>
                            <td><span class="badge badge-done"><span class="dot"></span>Pagado</span></td>
                            <td class="right"><button class="btn-link">Ver factura →</button></td>
                        </tr>
                    </tbody>
                </table>
                <div style="padding:12px 20px;border-top:1px solid var(--line);background:var(--surface-2);font-size:12.5px;color:var(--ink-3);">
                    ¿Necesitas una factura con datos fiscales específicos? <button class="btn-link" onclick="showScreen('soporte')">Contáctanos por soporte →</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 6: CONTABILIDAD
    ═══════════════════════════════════════ -->
    <div id="screen-contabilidad" class="screen">
        <div class="stack">
            <div class="stats-row">
                <div class="stat"><div class="stat-accent green"></div><div class="stat-label">Ingresos del mes</div><div class="stat-value tnum" id="cnt-stat-ing">$5,050 <span style="font-size:13px;color:var(--ink-3);font-weight:500;">USD</span></div><div class="stat-sub stat-trend up"><i data-lucide="trending-up" style="width:12px;height:12px;"></i> Registrado</div></div>
                <div class="stat"><div class="stat-accent red"></div><div class="stat-label">Gastos del mes</div><div class="stat-value tnum" id="cnt-stat-gas">$1,522 <span style="font-size:13px;color:var(--ink-3);font-weight:500;">USD</span></div><div class="stat-sub">Registrado</div></div>
                <div class="stat"><div class="stat-accent green"></div><div class="stat-label">Utilidad neta</div><div class="stat-value tnum" id="cnt-stat-util">$3,528 <span style="font-size:13px;color:var(--ink-3);font-weight:500;">USD</span></div><div class="stat-sub">Margen estimado: 70%</div></div>
                <div class="stat"><div class="stat-accent gold"></div><div class="stat-label">Estado fiscal</div><div class="stat-value" style="font-size:22px;">Al día</div><div class="stat-sub" style="color:#16794a;"><i data-lucide="check-circle-2" style="width:13px;height:13px;"></i> Sin obligaciones pendientes</div></div>
            </div>

            <div class="card">
                <div class="card-head"><div><h3>Registrar transacción</h3><p>Lleva tu contabilidad en tiempo real</p></div></div>
                <div class="card-body">
                    <div style="display:grid;grid-template-columns:110px 1fr 130px 150px 130px auto;gap:10px;align-items:end;">
                        <div class="field">
                            <label>Tipo</label>
                            <select class="select" id="txn-tipo"><option value="in">Ingreso</option><option value="out">Gasto</option></select>
                        </div>
                        <div class="field">
                            <label>Descripción</label>
                            <input class="input" id="txn-desc" placeholder="Ej: Venta Amazon, Pago proveedor...">
                        </div>
                        <div class="field">
                            <label>Monto USD</label>
                            <input class="input tnum" id="txn-amount" type="number" placeholder="0.00" min="0" step="0.01">
                        </div>
                        <div class="field">
                            <label>Categoría</label>
                            <select class="select" id="txn-cat">
                                <option>Ventas</option><option>Servicios</option><option>Proveedores</option>
                                <option>Nómina</option><option>Impuestos</option><option>Software</option><option>Otros</option>
                            </select>
                        </div>
                        <div class="field">
                            <label>Fecha</label>
                            <input class="input" id="txn-date" type="date">
                        </div>
                        <button class="btn btn-primary" onclick="addTxn()" style="height:38px;">
                            <i data-lucide="plus" style="width:14px;height:14px;"></i>Agregar
                        </button>
                    </div>
                    <div class="calc-summary">
                        <div class="item"><div class="lbl">Ingresos</div><div class="val tnum" id="calc-ing">$5,050.00</div></div>
                        <div class="item"><div class="lbl">Gastos</div><div class="val tnum" id="calc-gas">$1,522.00</div></div>
                        <div class="item"><div class="lbl">Utilidad estimada</div><div class="val tnum" id="calc-util">$3,528.00</div></div>
                        <div class="item tax"><div class="lbl">IRS estimated tax (21%)</div><div class="val tnum" id="calc-tax">$740.88</div></div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-head">
                    <h3>Transacciones recientes</h3>
                    <p id="txn-count">5 movimientos registrados</p>
                </div>
                <table class="tbl">
                    <thead><tr><th>Fecha</th><th>Descripción</th><th>Categoría</th><th>Tipo</th><th class="right">Monto</th></tr></thead>
                    <tbody id="txn-tbody"></tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 7: MI CUENTA
    ═══════════════════════════════════════ -->
    <div id="screen-cuenta" class="screen">
        <div class="row-4060">
            <div class="card profile-card">
                <div class="avatar-xl">{{ $initials ?: strtoupper(substr($user->name,0,2)) }}</div>
                <h3 style="margin:0 0 4px;font-size:20px;font-weight:700;">{{ $user->name }}</h3>
                <div style="color:var(--ink-3);font-size:13px;">{{ $user->email }}</div>
                <div style="margin:12px 0 16px;">
                    <span class="badge badge-gold"><span class="dot"></span>{{ Str::limit($plan, 20) }}</span>
                </div>
                <hr style="border:0;border-top:1px solid var(--line);margin:20px -26px 16px;">
                <div style="font-size:12.5px;color:var(--ink-3);">
                    Miembro desde <strong style="color:var(--ink);">{{ $user->created_at->translatedFormat('F Y') }}</strong>
                </div>
            </div>

            <div class="stack">
                <!-- Información personal -->
                <div class="card">
                    <div class="card-head"><h3>Información personal</h3><p>Datos de tu cuenta</p></div>
                    <form method="POST" action="{{ route('cuenta.perfil') }}" class="card-body" style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
                        @csrf @method('PATCH')
                        <div class="field">
                            <label>Nombre completo</label>
                            <input class="input" name="name" value="{{ old('name', $user->name) }}">
                            @error('name')<p style="color:#d6362a;font-size:12px;margin-top:3px;">{{ $message }}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Email</label>
                            <div class="input-with-badge">
                                <input class="input" name="email" value="{{ old('email', $user->email) }}">
                                @if($user->email_verified_at)
                                <span class="badge badge-done" style="pointer-events:none;"><span class="dot"></span>Verificado</span>
                                @endif
                            </div>
                            @error('email')<p style="color:#d6362a;font-size:12px;margin-top:3px;">{{ $message }}</p>@enderror
                        </div>
                        <div style="grid-column:1/-1;display:flex;justify-content:flex-end;">
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                        </div>
                    </form>
                </div>

                <!-- Seguridad / contraseña -->
                <div class="card">
                    <div class="card-head"><h3>Seguridad — Cambiar contraseña</h3><p>Recomendamos actualizarla cada 90 días</p></div>
                    <form method="POST" action="{{ route('cuenta.password') }}" class="card-body" style="display:grid;grid-template-columns:1fr 1fr;gap:14px;">
                        @csrf @method('PUT')
                        <div class="field" style="grid-column:1/-1;">
                            <label>Contraseña actual</label>
                            <div style="position:relative;">
                                <input class="input" type="password" id="curr-pwd" name="current_password" placeholder="••••••••">
                                <button type="button" onclick="togglePwd('curr-pwd','eye-curr')" style="position:absolute;right:10px;top:8px;border:0;background:transparent;color:var(--ink-4);padding:2px;">
                                    <i data-lucide="eye" id="eye-curr" style="width:15px;height:15px;"></i>
                                </button>
                            </div>
                            @error('current_password')<p style="color:#d6362a;font-size:12px;margin-top:3px;">{{ $message }}</p>@enderror
                        </div>
                        <div class="field">
                            <label>Nueva contraseña</label>
                            <input class="input" type="password" id="new-password" name="password" oninput="updateStrength()" autocomplete="new-password">
                            <div class="strength"><div class="seg" id="seg-0"></div><div class="seg" id="seg-1"></div><div class="seg" id="seg-2"></div><div class="seg" id="seg-3"></div></div>
                            <div class="field-hint">Fortaleza: <strong id="strength-label">—</strong></div>
                        </div>
                        <div class="field">
                            <label>Confirmar nueva contraseña</label>
                            <input class="input" type="password" name="password_confirmation" autocomplete="new-password">
                            @error('password')<p style="color:#d6362a;font-size:12px;margin-top:3px;">{{ $message }}</p>@enderror
                        </div>
                        <ul class="req-list" style="grid-column:1/-1;">
                            <li id="req-len"><i data-lucide="circle" style="width:11px;height:11px;"></i> Mínimo 8 caracteres</li>
                            <li id="req-upper"><i data-lucide="circle" style="width:11px;height:11px;"></i> Una mayúscula</li>
                            <li id="req-num"><i data-lucide="circle" style="width:11px;height:11px;"></i> Un número</li>
                            <li id="req-special"><i data-lucide="circle" style="width:11px;height:11px;"></i> Un carácter especial</li>
                        </ul>
                        <div style="grid-column:1/-1;display:flex;justify-content:flex-end;">
                            <button type="submit" class="btn btn-primary">Actualizar contraseña</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ═══════════════════════════════════════
         SCREEN 8: SOPORTE
    ═══════════════════════════════════════ -->
    <div id="screen-soporte" class="screen">
        <div class="row-2">
            <div class="stack">
                <div class="card">
                    <div class="card-head"><h3>Contacto directo</h3><p>Elige el canal que prefieras</p></div>
                    <div class="card-body" style="display:flex;flex-direction:column;gap:16px;">
                        <div class="wa-section">
                            <div class="wa-head">
                                <span class="wa-icon-big"><i data-lucide="message-circle" style="width:21px;height:21px;"></i></span>
                                <div>
                                    <div style="font-weight:700;font-size:14.5px;">WhatsApp — Respuesta inmediata</div>
                                    <div style="font-size:12px;color:#0f6b3f;margin-top:2px;">
                                        <span style="display:inline-block;width:6px;height:6px;border-radius:99px;background:#25d366;margin-right:5px;vertical-align:middle;"></span>
                                        Lun a Sáb · 9:00am – 6:00pm EST · Abierto ahora
                                    </div>
                                </div>
                            </div>
                            <a class="wa-btn" href="https://wa.me/19542108455" target="_blank" rel="noreferrer">
                                <i data-lucide="message-circle" style="width:16px;height:16px;"></i>Abrir WhatsApp · +1 954 210 8455
                            </a>
                        </div>
                        <div>
                            <div class="contact-row">
                                <span class="ico" style="background:var(--info-bg);color:var(--info-fg);"><i data-lucide="mail" style="width:16px;height:16px;"></i></span>
                                <div style="flex:1;">
                                    <div style="font-weight:600;">contacto@sellu.co</div>
                                    <div style="font-size:12px;color:var(--ink-3);">Respuesta en menos de 24 horas hábiles</div>
                                </div>
                                <a href="mailto:contacto@sellu.co" class="btn btn-ghost" style="padding:6px 11px;">Escribir</a>
                            </div>
                            <div class="contact-row">
                                <span class="ico" style="background:var(--gold-soft);color:var(--gold-2);"><i data-lucide="phone" style="width:16px;height:16px;"></i></span>
                                <div style="flex:1;">
                                    <div style="font-weight:600;">+1 954 210 8455</div>
                                    <div style="font-size:12px;color:var(--ink-3);">Spring Hill, Florida, EE.UU.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-head"><h3>Horario de atención</h3><p>Hora estándar del este (EST)</p></div>
                    <div class="card-body" style="padding-top:8px;">
                        <div class="schedule">
                            <div class="day now">Lunes — Viernes <span style="font-size:10px;padding:2px 8px;background:var(--gold-soft);color:var(--gold-2);border-radius:99px;font-weight:700;margin-left:6px;">AHORA</span></div>
                            <div class="hrs tnum now">9:00 am – 6:00 pm EST</div>
                            <div class="day">Sábado</div>
                            <div class="hrs tnum">10:00 am – 2:00 pm EST</div>
                            <div class="day">Domingo</div>
                            <div class="hrs tnum" style="color:var(--ink-4);">Cerrado</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card" style="align-self:start;">
                <div class="card-head"><h3>Envíanos un mensaje</h3><p>Te responderemos al correo {{ $user->email }}</p></div>
                <form id="support-form" class="card-body" style="display:flex;flex-direction:column;gap:14px;">
                    @csrf
                    <input type="hidden" name="nombre" value="{{ $user->name }}">
                    <input type="hidden" name="email"  value="{{ $user->email }}">
                    <div class="field">
                        <label>Asunto</label>
                        <select class="select" name="asunto">
                            <option>Consulta sobre mi LLC</option>
                            <option>Estado de mi trámite</option>
                            <option>Problema con documentos</option>
                            <option>Consulta de contabilidad/impuestos</option>
                            <option>Registro de marca</option>
                            <option>Problema técnico con el portal</option>
                            <option>Otro</option>
                        </select>
                    </div>
                    <div class="field">
                        <label>Mensaje</label>
                        <textarea class="textarea" name="mensaje" rows="6" placeholder="Describe tu consulta con el mayor detalle posible..."></textarea>
                    </div>
                    <button class="btn btn-primary" id="support-submit" style="align-self:flex-end;" type="submit">
                        <i data-lucide="send" style="width:14px;height:14px;"></i>Enviar mensaje
                    </button>
                </form>
            </div>
        </div>
    </div>

    </main><!-- /content -->
</div><!-- /main -->
</div><!-- /shell -->

<script>
(function () {
    /* ── Init icons ── */
    if (window.lucide) lucide.createIcons();

    /* ── Screen meta ── */
    const SCREENS = {
        portal:       { t: 'Mi Portal',          s: 'Bienvenido, {{ addslashes($user->name) }}. Aquí tienes un resumen de tu actividad.' },
        servicios:    { t: 'Mis Servicios',       s: 'Todo lo que has adquirido con Sell·U en un solo lugar.' },
        marcas:       { t: 'Mis Marcas',          s: 'Marcas registradas ante la USPTO a través de Sell·U.' },
        docs:         { t: 'Documentos Legales',  s: 'Tus documentos oficiales siempre disponibles para descargar.' },
        facturacion:  { t: 'Facturación',         s: 'Historial de pagos y facturas de todos tus servicios.' },
        contabilidad: { t: 'Contabilidad',        s: 'Registra y visualiza las finanzas de tu LLC.' },
        cuenta:       { t: 'Mi Cuenta',           s: 'Administra tu perfil y seguridad.' },
        soporte:      { t: 'Soporte',             s: 'Estamos aquí para ayudarte en cada paso.' },
    };

    window.showScreen = function (id) {
        document.querySelectorAll('.screen').forEach(s => s.classList.remove('active'));
        const target = document.getElementById('screen-' + id);
        if (target) target.classList.add('active');

        document.querySelectorAll('[data-nav]').forEach(el => {
            el.classList.toggle('active', el.dataset.nav === id);
        });

        const meta = SCREENS[id] || SCREENS.portal;
        document.getElementById('topbar-title').textContent = meta.t;
        document.getElementById('topbar-sub').textContent   = meta.s;

        closeSidebar();
        window.scrollTo({ top: 0, behavior: 'instant' });
        if (window.lucide) lucide.createIcons();

        if (id === 'contabilidad') renderTxns();
    };

    /* ── Sidebar ── */
    window.openSidebar  = () => { document.getElementById('sidebar').classList.add('open'); document.getElementById('backdrop').classList.add('show'); };
    window.closeSidebar = () => { document.getElementById('sidebar').classList.remove('open'); document.getElementById('backdrop').classList.remove('show'); };
    document.getElementById('backdrop').addEventListener('click', closeSidebar);

    /* ── Flash / restore screen ── */
    @if(session('status_cuenta'))
        window.addEventListener('DOMContentLoaded', () => {
            showScreen('cuenta');
            showToast('{{ addslashes(session("status_cuenta")) }}', true);
        });
    @endif

    /* ── Toast ── */
    window.showToast = function (msg, ok = false) {
        const t = document.getElementById('toast');
        document.getElementById('toast-msg').textContent = msg;
        t.classList.toggle('toast-ok', ok);
        t.classList.add('show');
        setTimeout(() => t.classList.remove('show'), 3200);
    };

    /* ───────────────────────────────────────
       CONTABILIDAD — Transaction ledger
    ─────────────────────────────────────── */
    const SEED = [
        { date:'05/05/2026', desc:'Venta Amazon US — 47 unidades',       cat:'Ventas',     tipo:'in',  amount:3200 },
        { date:'03/05/2026', desc:'Stripe payout — servicios digitales', cat:'Ventas',     tipo:'in',  amount:1850 },
        { date:'01/05/2026', desc:'Pago proveedor logística 3PL',        cat:'Proveedores',tipo:'out', amount:980 },
        { date:'28/04/2026', desc:'Suscripción QuickBooks',              cat:'Software',   tipo:'out', amount:45 },
        { date:'25/04/2026', desc:'Plan Full FL — Sell·U',              cat:'Servicios',  tipo:'out', amount:497 },
    ];
    let txns = [...SEED];

    function calcTotals() {
        const ing  = txns.filter(t => t.tipo === 'in').reduce((s,t) => s+t.amount, 0);
        const gas  = txns.filter(t => t.tipo === 'out').reduce((s,t) => s+t.amount, 0);
        const util = ing - gas;
        const tax  = Math.max(0, util) * 0.21;
        return { ing, gas, util, tax };
    }

    function fmt(n) { return '$' + n.toLocaleString('en-US', { minimumFractionDigits:2, maximumFractionDigits:2 }); }

    window.renderTxns = function () {
        const tbody = document.getElementById('txn-tbody');
        if (!tbody) return;
        tbody.innerHTML = txns.map(t => `
            <tr>
                <td class="tnum">${t.date}</td>
                <td class="strong">${t.desc}</td>
                <td style="color:var(--ink-3);">${t.cat}</td>
                <td>${t.tipo === 'in'
                    ? '<span class="badge badge-active"><span class="dot"></span>Ingreso</span>'
                    : '<span class="badge badge-cancel"><span class="dot"></span>Gasto</span>'}</td>
                <td class="right tnum ${t.tipo==='in'?'amt-pos':'amt-neg'}">${t.tipo==='in'?'+':'−'}$${t.amount.toFixed(2)}</td>
            </tr>`).join('');

        const tot = calcTotals();
        document.getElementById('calc-ing').textContent  = fmt(tot.ing);
        document.getElementById('calc-gas').textContent  = fmt(tot.gas);
        document.getElementById('calc-util').textContent = fmt(tot.util);
        document.getElementById('calc-tax').textContent  = fmt(tot.tax);
        const c = document.getElementById('txn-count');
        if (c) c.textContent = txns.length + ' movimientos registrados';
    };

    window.addTxn = function () {
        const tipo   = document.getElementById('txn-tipo').value;
        const desc   = document.getElementById('txn-desc').value.trim();
        const amount = parseFloat(document.getElementById('txn-amount').value);
        const cat    = document.getElementById('txn-cat').value;
        const raw    = document.getElementById('txn-date').value;
        if (!desc || !amount || amount <= 0) return;
        const date   = raw ? raw.split('-').reverse().join('/') : new Date().toLocaleDateString('es-CO');
        txns.unshift({ date, desc, cat, tipo, amount });
        document.getElementById('txn-desc').value   = '';
        document.getElementById('txn-amount').value = '';
        document.getElementById('txn-date').value   = '';
        renderTxns();
        showToast('Transacción agregada', true);
    };

    /* ───────────────────────────────────────
       DOCS — Filter by empresa
    ─────────────────────────────────────── */
    window.filterDocs = function (filter) {
        document.querySelectorAll('#docs-grid .doc-card').forEach(card => {
            card.style.display = (filter === 'Todos' || card.dataset.empresa === filter) ? '' : 'none';
        });
        document.querySelectorAll('#docs-tabs .tab').forEach(tab => {
            tab.classList.toggle('active', tab.dataset.filter === filter);
        });
    };

    /* ───────────────────────────────────────
       FACTURAS — Filter by cat
    ─────────────────────────────────────── */
    window.filterFacturas = function (filter) {
        document.querySelectorAll('#screen-facturacion [data-cat]').forEach(row => {
            const cat  = row.dataset.cat;
            const show = filter === 'Todos' || (filter === 'Plan' ? cat === 'Plan' : cat !== 'Plan');
            row.style.display = show ? '' : 'none';
        });
        document.querySelectorAll('#fact-tabs .tab').forEach(tab => {
            tab.classList.toggle('active', tab.dataset.filter === filter);
        });
    };

    /* ───────────────────────────────────────
       MI CUENTA — Password strength
    ─────────────────────────────────────── */
    window.updateStrength = function () {
        const pwd = document.getElementById('new-password')?.value ?? '';
        const checks = {
            len:     pwd.length >= 8,
            upper:   /[A-Z]/.test(pwd),
            num:     /\d/.test(pwd),
            special: /[^A-Za-z0-9]/.test(pwd),
        };
        const score    = Object.values(checks).filter(Boolean).length;
        const strength = score <= 1 ? 'weak' : score <= 3 ? 'medium' : 'strong';
        const colors   = { weak:'#d6362a', medium:'var(--gold)', strong:'#1aa05f' };
        for (let i = 0; i < 4; i++) {
            const seg = document.getElementById('seg-' + i);
            if (seg) seg.style.background = i < score ? colors[strength] : 'var(--line-2)';
        }
        const labels = { weak:'Débil', medium:'Media', strong:'Fuerte' };
        const lbl = document.getElementById('strength-label');
        if (lbl) lbl.textContent = pwd.length === 0 ? '—' : labels[strength];

        Object.entries(checks).forEach(([key, met]) => {
            const el = document.getElementById('req-' + key);
            if (!el) return;
            el.classList.toggle('met', met);
            const ic = el.querySelector('i');
            if (ic) ic.setAttribute('data-lucide', met ? 'check' : 'circle');
        });
        if (window.lucide) lucide.createIcons();
    };

    window.togglePwd = function (inputId, iconId) {
        const input = document.getElementById(inputId);
        const icon  = document.getElementById(iconId);
        if (!input) return;
        input.type = input.type === 'password' ? 'text' : 'password';
        if (icon) { icon.setAttribute('data-lucide', input.type === 'password' ? 'eye' : 'eye-off'); if (window.lucide) lucide.createIcons(); }
    };

    /* ───────────────────────────────────────
       SOPORTE — Form submit (JS only)
    ─────────────────────────────────────── */
    document.getElementById('support-form')?.addEventListener('submit', function (e) {
        e.preventDefault();
        const msg  = this.querySelector('[name="mensaje"]')?.value.trim();
        if (!msg) return;
        const btn  = document.getElementById('support-submit');
        const orig = btn.innerHTML;
        btn.innerHTML = '<i data-lucide="check" style="width:14px;height:14px;"></i>Mensaje enviado ✓';
        btn.disabled  = true;
        if (window.lucide) lucide.createIcons();
        showToast('Mensaje enviado correctamente', true);
        this.querySelector('[name="mensaje"]').value = '';
        setTimeout(() => { btn.innerHTML = orig; btn.disabled = false; if (window.lucide) lucide.createIcons(); }, 2400);
    });

    /* ── Init first render ── */
    renderTxns();

})();
</script>
</body>
</html>
