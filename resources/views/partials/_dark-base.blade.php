<style>
/* ── Shared dark theme base ── */
:root {
    --bg:#07070a; --bg-alt:#0a0a10;
    --surface:rgba(255,255,255,.03); --border:rgba(255,255,255,.07); --bh:rgba(255,255,255,.13);
    --t1:#fff; --t2:rgba(255,255,255,.52); --t3:rgba(255,255,255,.28);
    --orange:#f97316; --orange-l:#fb923c; --orange-d:#ea580c;
}
@keyframes fadeUp   { from{opacity:0;transform:translateY(28px)} to{opacity:1;transform:none} }
@keyframes fadeDown { from{opacity:0;transform:translateY(-20px)} to{opacity:1;transform:none} }
@keyframes gradShift{ 0%{background-position:0% 50%}50%{background-position:100% 50%}100%{background-position:0% 50%} }
@keyframes morphBlob{
    0%,100%{border-radius:60% 40% 30% 70%/60% 30% 70% 40%}
    33%    {border-radius:30% 60% 70% 40%/50% 60% 30% 60%}
    66%    {border-radius:50% 60% 30% 60%/30% 60% 70% 40%}
}
@keyframes pingDot  { 75%,100%{transform:scale(2.2);opacity:0} }
@keyframes shimmer  { from{background-position:-200% center} to{background-position:200% center} }

/* Scroll reveal */
.sr { opacity:0; transform:translateY(32px); transition:opacity .75s cubic-bezier(.16,1,.3,1),transform .75s cubic-bezier(.16,1,.3,1); }
.sr.left  { transform:translateX(-32px); }
.sr.right { transform:translateX(32px); }
.sr.scale { transform:scale(.9); }
.sr.in    { opacity:1; transform:none; }
.sg > * { opacity:0; transform:translateY(24px); transition:opacity .65s cubic-bezier(.16,1,.3,1),transform .65s cubic-bezier(.16,1,.3,1); }
.sg.in > *:nth-child(1){transition-delay:.04s;opacity:1;transform:none}
.sg.in > *:nth-child(2){transition-delay:.10s;opacity:1;transform:none}
.sg.in > *:nth-child(3){transition-delay:.16s;opacity:1;transform:none}
.sg.in > *:nth-child(4){transition-delay:.22s;opacity:1;transform:none}
.sg.in > *:nth-child(5){transition-delay:.28s;opacity:1;transform:none}
.sg.in > *:nth-child(6){transition-delay:.34s;opacity:1;transform:none}

/* Layout */
.w { max-width:1200px; margin:0 auto; padding:0 1.5rem; }
@media(min-width:1024px){.w{padding:0 2.5rem}}
.ps { padding:5rem 0; }
@media(min-width:768px){.ps{padding:7rem 0}}

.eyebrow {
    display:inline-flex; align-items:center; gap:.6rem;
    font-size:.7rem; font-weight:700; letter-spacing:.18em; text-transform:uppercase; color:var(--orange-l);
}
.eyebrow::before,.eyebrow::after { content:''; width:1.5rem; height:1px; background:linear-gradient(90deg,rgba(251,146,60,.6),transparent); }
.eyebrow::before { background:linear-gradient(90deg,transparent,rgba(251,146,60,.6)); }

.dh2 { font-size:clamp(1.9rem,4.5vw,3rem); font-weight:800; letter-spacing:-.03em; line-height:1.1; color:var(--t1); }
.dlead { font-size:1rem; color:var(--t2); line-height:1.75; }
.divx { width:2.5rem; height:3px; border-radius:2px; background:linear-gradient(90deg,var(--orange),var(--orange-d)); margin:.9rem 0 0; }
.divx.cx { margin:.9rem auto 0; }

.grad-t {
    background:linear-gradient(135deg,var(--orange-l) 0%,var(--orange) 40%,var(--orange-d) 100%);
    background-size:200% 100%; -webkit-background-clip:text; -webkit-text-fill-color:transparent;
    background-clip:text; animation:gradShift 6s ease infinite;
}

/* Buttons */
.bsolid {
    position:relative; display:inline-flex; align-items:center; gap:.45rem;
    padding:.85rem 2rem; font-size:.875rem; font-weight:700; color:#fff;
    background:linear-gradient(135deg,var(--orange-l),var(--orange),var(--orange-d));
    background-size:200% 200%; animation:gradShift 5s ease infinite;
    border-radius:12px; cursor:pointer;
    transition:transform .3s cubic-bezier(.16,1,.3,1),box-shadow .3s;
    text-decoration:none; overflow:hidden;
}
.bsolid::after {
    content:''; position:absolute; inset:-1px; border-radius:13px;
    background:linear-gradient(135deg,var(--orange-l),var(--orange-d));
    background-size:200% 200%; animation:gradShift 4s ease infinite;
    z-index:-1; filter:blur(12px); opacity:.35; transition:opacity .3s;
}
.bsolid:hover { transform:translateY(-2px); box-shadow:0 16px 40px rgba(249,115,22,.3); }
.bsolid:hover::after { opacity:.6; }

.bghost {
    display:inline-flex; align-items:center; gap:.45rem;
    padding:.85rem 2rem; font-size:.875rem; font-weight:600;
    color:var(--t2); border:1px solid var(--border); border-radius:12px; cursor:pointer;
    transition:all .25s; text-decoration:none; background:rgba(255,255,255,.02);
}
.bghost:hover { border-color:var(--bh); color:var(--t1); background:rgba(255,255,255,.05); transform:translateY(-1px); }

/* Dark form inputs */
.di {
    display:block; width:100%;
    background:rgba(255,255,255,.03); border:1px solid var(--border); border-radius:10px;
    padding:.75rem 1rem; font-size:.875rem; color:var(--t1);
    transition:border-color .2s, box-shadow .2s; outline:none;
    -webkit-appearance:none; appearance:none;
}
.di::placeholder { color:var(--t3); }
.di:focus { border-color:rgba(249,115,22,.4); box-shadow:0 0 0 3px rgba(249,115,22,.08); }
.di option { background:#0a0a10; color:#fff; }
.dlabel { display:block; font-size:.78rem; font-weight:600; color:var(--t2); margin-bottom:.4rem; }
.derr { font-size:.72rem; color:#f87171; margin-top:.3rem; }

/* Cursor glow */
#cursorGlow2 {
    position:fixed; width:450px; height:450px; border-radius:50%; pointer-events:none; z-index:0;
    background:radial-gradient(circle,rgba(249,115,22,.05) 0%,transparent 70%);
    transform:translate(-50%,-50%);
}

::-webkit-scrollbar{width:8px}
::-webkit-scrollbar-track{background:var(--bg)}
::-webkit-scrollbar-thumb{background:rgba(249,115,22,.3);border-radius:4px}
::-webkit-scrollbar-thumb:hover{background:rgba(249,115,22,.5)}
</style>
