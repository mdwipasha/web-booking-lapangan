<style>
    :root {
        --color-primary: #16a34a;
        --color-bg-gradient: linear-gradient(135deg, #16a34a, #22c55e, #4ade80);
        --color-bg-dark-gradient: linear-gradient(135deg, #064e3b, #065f46, #0f766e);
        --color-card-light: rgba(255, 255, 255, 0.95);
        --color-card-dark: rgba(30, 41, 59, 0.95);
        --transition: 0.3s ease;
    }

    body {
        position: relative;
        min-height: 100vh;
        margin: 0;
        font-family: 'Plus Jakarta Sans', sans-serif;
        background: url('https://png.pngtree.com/thumb_back/fw800/background/20241210/pngtree-soccer-field-and-spotlight-background-in-the-stadium-image_16742359.jpg') no-repeat center center/cover;
        overflow: hidden;
    }

    /* Lapisan gradasi transparan */
    .bg-overlay {
        position: fixed;
        inset: 0;
        background: linear-gradient(135deg, rgba(22, 163, 74, 0.65), rgba(6, 95, 70, 0.75));
        mix-blend-mode: multiply;
        z-index: -10;
        pointer-events: none;
    }

    /* Efek cahaya lembut yang bergerak (seperti lampu stadion) */
    .light-effect {
        position: absolute;
        top: 0;
        left: 0;
        width: 300%;
        height: 300%;
        background: radial-gradient(circle at center, rgba(255, 255, 255, 0.2), transparent 70%);
        animation: moveLight 14s linear infinite;
        mix-blend-mode: soft-light;
        z-index: -1;
        pointer-events: none;
    }

    @keyframes moveLight {
        0% { transform: translate(-30%, -30%) rotate(0deg); }
        50% { transform: translate(-10%, -10%) rotate(180deg); }
        100% { transform: translate(-30%, -30%) rotate(360deg); }
    }

    /* Efek partikel lembut */
    .particles {
        position: absolute;
        inset: 0;
        overflow: hidden;
        z-index: -1;
        pointer-events: none;
    }

    .particle {
        position: absolute;
        width: 4px;
        height: 4px;
        background: rgba(255, 255, 255, 0.6);
        border-radius: 50%;
        animation: float 10s linear infinite;
        opacity: 0.5;
    }

    @keyframes float {
        0% { transform: translateY(100vh) translateX(0); opacity: 0; }
        50% { opacity: 1; }
        100% { transform: translateY(-10vh) translateX(20px); opacity: 0; }
    }

    /* Animasi bola futsal mantul */
    .ball {
        position: absolute;
        top: 10%;
        left: 10%;
        width: 45px;
        height: 45px;
        background: radial-gradient(circle at 30% 30%, #fefefe, #e5e7eb 70%);
        border-radius: 50%;
        box-shadow: 0 0 20px rgba(255,255,255,0.4);
        animation: bounce 6s ease-in-out infinite, moveAcross 12s linear infinite;
        z-index: -1;
        pointer-events: none;
    }

    @keyframes bounce {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(40px); }
    }

    @keyframes moveAcross {
        0% { left: 5%; }
        50% { left: 80%; }
        100% { left: 5%; }
    }

    /* Container */
    .fi-simple-main-ctn {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
        z-index: 2;
    }

    /* Card Login */
    main.fi-simple-main {
        background: var(--color-card-light);
        border-radius: 1.25rem;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        padding: 3rem 2.5rem;
        width: 100%;
        max-width: 420px;
        transition: var(--transition);
    }

    html.dark main.fi-simple-main {
        background: var(--color-card-dark);
        box-shadow: 0 0 0 1px rgba(255,255,255,0.05);
    }

    .fi-logo {
        display: block;
        margin: 0 auto 2rem auto;
        height: 48px !important;
    }

    .fi-simple-header h1 {
        font-size: 1.9rem;
        font-weight: 700;
        text-align: center;
        color: #111827;
    }

    html.dark .fi-simple-header h1 {
        color: #f9fafb;
    }

    .fi-simple-header p {
        text-align: center;
        font-size: 0.95rem;
        color: #6b7280;
        margin-bottom: 2rem;
    }

    html.dark .fi-simple-header p {
        color: #cbd5e1;
    }

    /* Input & Button */
    .fi-fo-field-wrp input {
        border-radius: 0.5rem;
        border: 1px solid #d1d5db !important;
        transition: var(--transition);
    }

    .fi-fo-field-wrp input:focus {
        border-color: var(--color-primary) !important;
        box-shadow: 0 0 0 3px rgba(22, 163, 74, 0.25);
    }

    button.fi-btn:hover {
        background: #15803d !important;
    }

    /* Tombol Toggle Dark Mode */
    .theme-toggle {
        position: fixed;
        top: 1rem;
        right: 1rem;
        background: rgba(255, 255, 255, 0.9);
        border: none;
        border-radius: 999px;
        padding: 0.5rem 0.7rem;
        font-size: 1.2rem;
        cursor: pointer;
        z-index: 999;
        transition: var(--transition);
    }

    html.dark .theme-toggle {
        background: rgba(30, 41, 59, 0.9);
        color: #f9fafb;
    }
</style>

<div class="bg-overlay"></div>
<div class="light-effect"></div>
<div class="particles" id="particles"></div>
<div class="ball"></div>
{{-- <div class="field-lines"></div> --}}
<button class="theme-toggle" onclick="document.documentElement.classList.toggle('dark')">🌓</button>

<script>
    // Generate partikel acak di background
    const container = document.getElementById('particles');
    const total = 25; // jumlah partikel
    for (let i = 0; i < total; i++) {
        const p = document.createElement('div');
        p.classList.add('particle');
        p.style.left = Math.random() * 100 + 'vw';
        p.style.animationDelay = Math.random() * 8 + 's';
        p.style.animationDuration = 8 + Math.random() * 5 + 's';
        container.appendChild(p);
    }
</script>
