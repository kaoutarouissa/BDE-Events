<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>BDE-Events — Créer un compte</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  body { font-family: 'Inter', sans-serif; background: linear-gradient(180deg, #120a20 0%, #1c1130 55%, #120a20 100%); }
  .font-sora { font-family: 'Sora', sans-serif; }
  .glow { background: radial-gradient(circle, rgba(236,76,130,0.25) 0%, rgba(236,76,130,0) 70%); }
  .bg-bdeep { background-color: #120a20; }
  .bg-card { background-color: #1f1436; }
  .bg-cream { background-color: #f5efe1; }
  .text-cream { color: #f5efe1; }
  .text-gold { color: #f5a623; }
  .bg-gold { background-color: #f5a623; }
  .text-pink { color: #ec4c82; }
  .bg-pink { background-color: #ec4c82; }
  .text-muted { color: #a99bc9; }
  .border-line { border-color: #2c1e49; }
</style>
</head>
<body class="min-h-screen relative overflow-x-hidden">

  <div class="glow absolute w-[460px] h-[460px] rounded-full -top-44 -right-28 pointer-events-none"></div>

  <!-- Header -->
  <header class="relative z-10">
    <div class="max-w-[1180px] mx-auto px-8 pt-8 flex items-center justify-between">
      <div class="flex items-center gap-2.5">
        <div class="w-9 h-9 rounded-[11px] bg-gold flex items-center justify-center font-sora font-extrabold text-base" style="color:#120a20;">B</div>
        <span class="font-sora font-bold text-cream text-base">BDE-Events</span>
      </div>
     
    </div>
  </header>

  <!-- Registration -->
  <main class="relative z-10 max-w-[1180px] mx-auto px-8 py-16 grid gap-14 items-center" style="grid-template-columns: 1fr 1fr;">

    <!-- Left: pitch -->
    <div>
      <div class="flex items-center gap-2.5 text-gold font-semibold text-xs tracking-wider mb-5">
        <span class="w-[22px] h-[1.5px] bg-gold inline-block"></span>
        REJOINDRE BDE-EVENTS
      </div>
      <h1 class="font-sora font-extrabold text-cream leading-[1.1] mb-5" style="font-size: 42px;">
        Crée ton compte, <span class="text-gold">réserve</span> en un clic.
      </h1>
      <p class="text-muted text-[15px] leading-relaxed max-w-[420px] mb-8">
        Un seul compte pour t'inscrire à toutes les soirées, workshops et tournois du BDE, et retrouver tes billets numériques à tout moment.
      </p>

      <div class="flex flex-col gap-4 max-w-[380px]">
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-[9px] bg-gold/15 flex items-center justify-center flex-shrink-0 mt-0.5">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5a623" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <p class="text-cream text-[13.5px] leading-relaxed mt-1">Réservation en quelques secondes, sans ressaisir tes infos à chaque fois.</p>
        </div>
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-[9px] bg-gold/15 flex items-center justify-center flex-shrink-0 mt-0.5">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5a623" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <p class="text-cream text-[13.5px] leading-relaxed mt-1">Tous tes billets numériques rangés au même endroit.</p>
        </div>
        <div class="flex items-start gap-3">
          <div class="w-8 h-8 rounded-[9px] bg-gold/15 flex items-center justify-center flex-shrink-0 mt-0.5">
            <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="#f5a623" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
          </div>
          <p class="text-cream text-[13.5px] leading-relaxed mt-1">Alerte dès qu'un nouvel événement s'ouvre aux inscriptions.</p>
        </div>
      </div>
    </div>

    <!-- Right: form card -->
    <div class="bg-cream rounded-2xl px-7 pt-7 pb-8 w-full max-w-[420px] justify-self-end" style="box-shadow: 0 30px 60px rgba(0,0,0,0.35);">
      <p class="text-pink font-bold text-[11px] tracking-wider m-0">ACCÈS RAPIDE</p>
      <h2 class="font-sora font-extrabold text-2xl mt-2 mb-1" style="color:#241636;">Créer mon compte</h2>
      <p class="text-[13.5px] mb-6 mt-0" style="color:#6b6178;">Quelques infos et tu es prêt à réserver.</p>

      <form action="{{ route('register') }}" method="post">
        @csrf
        <div class="flex gap-3 mb-3.5">
          
          <div class="flex-1">
            <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Nom</label>
            @error('name')
                    <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
            <input type="text" placeholder="Bouzidi" name="name"
              class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
          </div>
        </div>
             <div class="mb-5">
                    @error('role')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
         <select
        name="role"
        class="w-full h-10 rounded-[9px] border px-3 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-emerald-500"
        style="border-color:#ded5c4; background:#fffdf9; color:#241636;"
    >
        <option value="" disabled selected>Choisissez votre rôle</option>
        <option value="etudiant">Étudiant</option>
        <option value="bde">BDE</option>
    </select>
        </div>
        <div class="mb-3.5">
          <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Email</label>
          @error('email')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          <input type="email" placeholder="sara.bouzidi@enaa.ma" name="email"
            class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
        </div>

        <div class="mb-3.5">
          <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Mot de passe</label>
          @error('password')
            <p class="text-red-500 text-sm">{{ $message }}</p>
            @enderror
          <input type="password" placeholder="8 caractères minimum" name="password"
            class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
        </div>

        <div class="mb-5">
          <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Confirmer le mot de passe</label>
          <input type="password" placeholder="Ressaisis ton mot de passe"  name="password_confirmation"
            class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
        </div>

        <label class="flex items-start gap-2.5 mb-6">
          <input type="checkbox" class="mt-0.5" />
          <span class="text-[12.5px] leading-relaxed" style="color:#6b6178;">J'accepte que mes informations soient utilisées pour gérer mes inscriptions aux événements du BDE.</span>
        </label>

        <button type="submit" class="w-full h-11 rounded-[10px] bg-gold font-sora font-bold text-sm flex items-center justify-center gap-2" style="color:#241636;">
          Créer mon compte
          <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M5 12h14M13 6l6 6-6 6"/></svg>
        </button>

        <p class="text-center text-[12.5px] mt-4" style="color:#6b6178;">
          Déjà un compte ? <a href="{{ route('login') }}" class="font-semibold" style="color:#ec4c82;">Se connecter</a>
        </p>
      </form>
    </div>
  </main>
</body>
</html>