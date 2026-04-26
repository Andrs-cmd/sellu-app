@props(['texto', 'posicion' => 'top'])

<span class="tooltip-wrap">
    <button type="button" class="tooltip-btn" onclick="toggleTooltip(this)">?</button>
    <div class="tooltip-box tooltip-{{ $posicion }}">
        {{ $texto }}
    </div>
</span>

<style>
.tooltip-wrap { position:relative; display:inline-flex; align-items:center; margin-left:7px; vertical-align:middle; }
.tooltip-btn { width:18px; height:18px; border-radius:50%; background:#EEF3FF; border:1.5px solid #B5D4F4; color:#1B4FD8; font-size:11px; font-weight:800; cursor:pointer; line-height:1; display:flex; align-items:center; justify-content:center; padding:0; transition:all .2s; }
.tooltip-btn:hover { background:#1B4FD8; color:white; border-color:#1B4FD8; }
.tooltip-box { display:none; position:absolute; z-index:999; background:#0D1B3E; color:white; font-size:12px; line-height:1.6; padding:10px 13px; border-radius:8px; width:220px; box-shadow:0 4px 20px rgba(0,0,0,.2); }
.tooltip-box.tooltip-top { bottom:calc(100% + 8px); left:50%; transform:translateX(-50%); }
.tooltip-box.tooltip-bottom { top:calc(100% + 8px); left:50%; transform:translateX(-50%); }
.tooltip-box.tooltip-right { left:calc(100% + 8px); top:50%; transform:translateY(-50%); }
.tooltip-box.tooltip-left { right:calc(100% + 8px); top:50%; transform:translateY(-50%); }
.tooltip-box.visible { display:block; }
.tooltip-box::after { content:''; position:absolute; border:6px solid transparent; }
.tooltip-box.tooltip-top::after { top:100%; left:50%; transform:translateX(-50%); border-top-color:#0D1B3E; }
.tooltip-box.tooltip-bottom::after { bottom:100%; left:50%; transform:translateX(-50%); border-bottom-color:#0D1B3E; }
.tooltip-box.tooltip-right::after { right:100%; top:50%; transform:translateY(-50%); border-right-color:#0D1B3E; }
</style>

<script>
function toggleTooltip(btn) {
    const box = btn.nextElementSibling;
    const isVisible = box.classList.contains('visible');
    document.querySelectorAll('.tooltip-box.visible').forEach(t => t.classList.remove('visible'));
    if (!isVisible) box.classList.add('visible');
}
document.addEventListener('click', function(e) {
    if (!e.target.closest('.tooltip-wrap')) {
        document.querySelectorAll('.tooltip-box.visible').forEach(t => t.classList.remove('visible'));
    }
});
</script>