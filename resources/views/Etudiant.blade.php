<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>BDE-Events — Espace étudiant</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  body { font-family: 'Inter', sans-serif; background: linear-gradient(180deg, #120a20 0%, #1c1130 55%, #120a20 100%); }
  .font-sora { font-family: 'Sora', sans-serif; }
  .glow { background: radial-gradient(circle, rgba(236,76,130,0.25) 0%, rgba(236,76,130,0) 70%); }
  .barcode { background: repeating-linear-gradient(90deg, rgba(255,255,255,0.18) 0 3px, transparent 3px 7px); }
  .barcode-dark { background: repeating-linear-gradient(90deg, rgba(36,22,54,0.55) 0 3px, transparent 3px 7px); }
  .bg-bdeep { background-color: #120a20; }
  .bg-card { background-color: #1f1436; }
  .bg-cream { background-color: #f5efe1; }
  .text-cream { color: #f5efe1; }
  .text-creamdim { color: #cfc7b4; }
  .text-gold { color: #f5a623; }
  .bg-gold { background-color: #f5a623; }
  .text-pink { color: #ec4c82; }
  .bg-pink { background-color: #ec4c82; }
  .text-muted { color: #a99bc9; }
  .border-line { border-color: #2c1e49; }
</style>
</head>
<body class="min-h-screen relative overflow-x-hidden pb-16">

  <div class="glow absolute w-[420px] h-[420px] rounded-full -top-40 -right-32 pointer-events-none"></div>

  <!-- Header -->
  <header class="sticky top-0 z-20 bg-bdeep/70 border-b border-line" style="backdrop-filter: blur(10px);">
    <div class="max-w-[1080px] mx-auto px-6 py-4 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="w-[30px] h-[30px] rounded-[9px] bg-gold flex items-center justify-center font-sora font-extrabold text-sm" style="color:#120a20;">B</div>
        <span class="font-sora font-bold text-cream text-base">BDE-Events</span>
      </div>
      <div class="flex items-center gap-3">
        <div class="flex items-center gap-2.5">
          <div class="w-8 h-8 rounded-full bg-gold/15 text-gold flex items-center justify-center font-sora font-bold text-[12px] flex-shrink-0">SB</div>
          <span class="text-cream text-[13px]">
            <span class="text-muted">Bienvenue,</span> <span class="font-semibold">Sara Bouzidi</span>
          </span>
        </div>
        <a href="#" class="flex items-center gap-2 px-4 py-2 rounded-[10px] border border-line text-cream text-[13px] font-medium">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/><path d="M16 17l5-5-5-5"/><path d="M21 12H9"/></svg>
          Déconnexion
        </a>
      </div>
    </div>
  </header>

  <main class="relative max-w-[1080px] mx-auto px-6 pt-12">
    <!-- Hero -->
    <div class="flex items-center gap-2.5 text-gold font-semibold text-xs tracking-wider">
      <span class="w-[22px] h-[1.5px] bg-gold inline-block"></span>
      BUREAU DES ÉLÈVES — ENAA · ESPACE ÉTUDIANT
    </div>
    <h1 class="font-sora font-extrabold text-cream text-3xl md:text-4xl leading-tight mt-3 mb-3 max-w-[620px]">
      Bienvenue dans l'agenda de <span class="text-gold">tous</span> les bons moments.
    </h1>
    <p class="text-muted text-[15px] leading-relaxed max-w-[520px] mb-8">
      Soirées, workshops, tournois, galas : réserve ta place en quelques secondes et retrouve tous tes billets ici.
    </p>

    <!-- Tabs -->
    <div class="inline-flex gap-1 p-1 rounded-[12px] bg-card border border-line mb-8">
      <span class="px-4 py-2 rounded-[9px] text-[13px] font-sora font-bold bg-gold" style="color:#241636;">Événements</span>
      <span class="px-4 py-2 rounded-[9px] text-[13px] font-sora font-bold text-muted">Mes billets <span class="ml-1 opacity-70">(2)</span></span>
    </div>

    <!-- Events grid -->
    <section class="grid gap-5 mb-14" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">

      <!-- Event 1 -->
      <div class="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-5 flex flex-col">
        <div class="flex justify-between gap-3">
          <h3 class="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">Soirée d'intégration ENAA</h3>
          <div class="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-gold/15 text-gold">Ouvert</div>
        </div>
        <p class="text-muted text-[13px] leading-relaxed mb-3 mt-0">La soirée qui lance l'année. Dress code, DJ set et bonne humeur garantie.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-2">
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            12 sept. 2026
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            21:00
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Le Hangar, Casablanca
          </span>
        </div>
        <div class="barcode h-[1px] my-4"></div>
        <div class="mb-1">
          <div class="flex justify-between text-[12.5px] mb-1.5">
            <span class="text-cream font-semibold">36 places restantes</span>
            <span class="text-muted">214/250</span>
          </div>
          <div class="h-1.5 rounded-full bg-white/[0.08] overflow-hidden">
            <div class="h-full rounded-full" style="width:86%; background:#f5a623;"></div>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <span class="font-sora font-bold text-gold text-lg">80 MAD</span>
          <button class="h-9 px-4 rounded-[9px] font-sora font-bold text-[13px] bg-gold" style="color:#241636;">Réserver ma place</button>
        </div>
      </div>

      <!-- Event 2 -->
      <div class="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-5 flex flex-col">
        <div class="flex justify-between gap-3">
          <h3 class="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">Workshop UX/UI avec Figma</h3>
          <div class="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-white/5 text-muted">Réservé</div>
        </div>
        <p class="text-muted text-[13px] leading-relaxed mb-3 mt-0">Atelier pratique animé par un designer senior, places limitées.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-2">
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            20 sept. 2026
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            14:30
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Amphi B, ENAA
          </span>
        </div>
        <div class="barcode h-[1px] my-4"></div>
        <div class="mb-1">
          <div class="flex justify-between text-[12.5px] mb-1.5">
            <span class="text-cream font-semibold">3 places restantes</span>
            <span class="text-muted">37/40</span>
          </div>
          <div class="h-1.5 rounded-full bg-white/[0.08] overflow-hidden">
            <div class="h-full rounded-full" style="width:93%; background:#f5a623;"></div>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <span class="font-sora font-bold text-gold text-lg">Gratuit</span>
          <button class="h-9 px-4 rounded-[9px] font-sora font-bold text-[13px] bg-white/5 text-muted" disabled>Réservé</button>
        </div>
      </div>

      <!-- Event 3 -->
      <div class="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-5 flex flex-col">
        <div class="flex justify-between gap-3">
          <h3 class="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">Tournoi FIFA inter-promos</h3>
          <div class="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-pink/15 text-pink">Complet</div>
        </div>
        <p class="text-muted text-[13px] leading-relaxed mb-3 mt-0">Bracket à élimination directe. Récompenses pour le trio gagnant.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-2">
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            3 oct. 2026
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            18:00
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Foyer étudiant, ENAA
          </span>
        </div>
        <div class="barcode h-[1px] my-4"></div>
        <div class="mb-1">
          <div class="flex justify-between text-[12.5px] mb-1.5">
            <span class="text-cream font-semibold">0 place restante</span>
            <span class="text-muted">64/64</span>
          </div>
          <div class="h-1.5 rounded-full bg-white/[0.08] overflow-hidden">
            <div class="h-full rounded-full" style="width:100%; background:#ec4c82;"></div>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <span class="font-sora font-bold text-gold text-lg">20 MAD</span>
          <button class="h-9 px-4 rounded-[9px] font-sora font-bold text-[13px] bg-white/5 text-muted" disabled>Complet</button>
        </div>
      </div>

      <!-- Event 4 -->
      <div class="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-5 flex flex-col">
        <div class="flex justify-between gap-3">
          <h3 class="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">Gala de fin d'année</h3>
          <div class="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-gold/15 text-gold">Ouvert</div>
        </div>
        <p class="text-muted text-[13px] leading-relaxed mb-3 mt-0">La grande soirée de clôture : tenue de gala, remise des prix et dîner assis.</p>
        <div class="flex flex-wrap gap-x-4 gap-y-2">
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
            18 juin 2026
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
            20:00
          </span>
          <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
            <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
            Palais des congrès, Marrakech
          </span>
        </div>
        <div class="barcode h-[1px] my-4"></div>
        <div class="mb-1">
          <div class="flex justify-between text-[12.5px] mb-1.5">
            <span class="text-cream font-semibold">88 places restantes</span>
            <span class="text-muted">92/180</span>
          </div>
          <div class="h-1.5 rounded-full bg-white/[0.08] overflow-hidden">
            <div class="h-full rounded-full" style="width:51%; background:#f5a623;"></div>
          </div>
        </div>
        <div class="flex items-center justify-between mt-4">
          <span class="font-sora font-bold text-gold text-lg">350 MAD</span>
          <button class="h-9 px-4 rounded-[9px] font-sora font-bold text-[13px] bg-gold" style="color:#241636;">Réserver ma place</button>
        </div>
      </div>
    </section>

    <!-- Mes billets -->
    <h2 class="font-sora font-bold text-cream text-xl mb-4">Mes billets</h2>
    <section class="grid gap-5" style="grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">

      <div class="bg-cream rounded-[16px] px-5 pt-4 pb-4 relative overflow-hidden">
        <div class="flex items-center justify-between mb-2">
          <p class="text-pink font-bold text-[10.5px] tracking-wider m-0">ACCÈS RAPIDE</p>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ec4c82" stroke-width="2"><path d="M2 9a3 3 0 1 0 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
        </div>
        <h3 class="font-sora font-extrabold text-[17px] mb-1 mt-0" style="color:#241636;">Workshop UX/UI avec Figma</h3>
        <p class="text-[12.5px] mb-3 mt-0" style="color:#6b6178;">20 sept. 2026 · 14:30 · Amphi B, ENAA</p>
        <div class="barcode-dark h-[1px] my-3"></div>
        <div class="flex items-center justify-between">
          <span class="text-[10.5px] uppercase tracking-wider font-semibold" style="color:#6b6178;">Scan pour entrer</span>
          <span class="font-mono text-[12px] font-semibold" style="color:#241636;">BDE-7K2Q1P</span>
        </div>
      </div>

      <div class="bg-cream rounded-[16px] px-5 pt-4 pb-4 relative overflow-hidden">
        <div class="flex items-center justify-between mb-2">
          <p class="text-pink font-bold text-[10.5px] tracking-wider m-0">ACCÈS RAPIDE</p>
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ec4c82" stroke-width="2"><path d="M2 9a3 3 0 1 0 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
        </div>
        <h3 class="font-sora font-extrabold text-[17px] mb-1 mt-0" style="color:#241636;">Tournoi FIFA inter-promos</h3>
        <p class="text-[12.5px] mb-3 mt-0" style="color:#6b6178;">3 oct. 2026 · 18:00 · Foyer étudiant, ENAA</p>
        <div class="barcode-dark h-[1px] my-3"></div>
        <div class="flex items-center justify-between">
          <span class="text-[10.5px] uppercase tracking-wider font-semibold" style="color:#6b6178;">Scan pour entrer</span>
          <span class="font-mono text-[12px] font-semibold" style="color:#241636;">BDE-9X4M2L</span>
        </div>
      </div>
    </section>
  </main>
</body>
</html>