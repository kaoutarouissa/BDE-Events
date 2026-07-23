<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>BDE-Events — Tableau de bord</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  body { font-family: 'Inter', sans-serif; background: linear-gradient(180deg, #120a20 0%, #1c1130 55%, #120a20 100%); }
  .font-sora { font-family: 'Sora', sans-serif; }
  .glow { background: radial-gradient(circle, rgba(236,76,130,0.25) 0%, rgba(236,76,130,0) 70%); }
  .barcode { background: repeating-linear-gradient(90deg, rgba(255,255,255,0.18) 0 3px, transparent 3px 7px); }
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
          <span class="text-cream text-[13px]">
            <span class="text-muted">Bienvenue,</span> <span class="font-semibold">{{ Auth::user()->name }}</span>
          </span>
        </div>
        <a href="{{ route('intro') }}" class="flex items-center gap-2 px-4 py-2 rounded-[10px] border border-line text-cream text-[13px] font-medium">
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
      BUREAU DES ÉLÈVES — ENAA · ADMIN
    </div>
    <h1 class="font-sora font-extrabold text-cream text-3xl md:text-4xl leading-tight mt-3 mb-3 max-w-[620px]">
      Gère tes événements <span class="text-gold">sans</span> prise de tête.
    </h1>
    <p class="text-muted text-[15px] leading-relaxed max-w-[520px] mb-10">
      Publie un événement, suis les inscriptions et garde un œil sur les places restantes,
      en direct, pour chaque soirée, workshop ou tournoi.
    </p>

    <!-- Grid -->
    <div class="grid gap-6 items-start" style="grid-template-columns: minmax(280px, 380px) 1fr;">

      <!-- Form -->
      <section class="bg-cream rounded-2xl p-6 sticky top-[88px]">
        <div class="flex items-center justify-between ">
          <p class="text-pink font-bold text-[11px] tracking-wider m-0">ACCÈS RAPIDE</p>
          <div class="w-[30px] h-[30px] rounded-[9px] bg-pink/10 flex items-center justify-center">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#ec4c82" stroke-width="2"><path d="M2 9a3 3 0 1 0 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z"/></svg>
          </div>
        </div>
        <h2 class="font-sora font-extrabold text-2xl mt-2.5 mb-1" style="color:#241636;">Créer un événement.</h2>
        <p class="text-[13.5px] leading-snug m-0" style="color:#6b6178;">Remplis les infos ci-dessous pour le rendre visible et ouvert aux inscriptions.</p>

    
        <form action="{{ route('store-event') }}" class="mt-5" method="post">
          @csrf
          <div class="mb-3.5">
            <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Titre de l'événement</label>
           @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
            <input type="text" placeholder="Soirée d'intégration ENAA" name="title"
              class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
          </div>

          <div class="mb-3.5">
            <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Description</label>
            @error('description')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
            <textarea rows="3" placeholder="Quelques lignes pour donner envie de venir." name="description"
              class="w-full rounded-[9px] border px-3 py-2 text-[13.5px] resize-none" style="border-color:#ded5c4; background:#fffdf9; color:#241636;"></textarea>
          </div>

          <div class="flex gap-3">
            <div class="mb-3.5 flex-1">
              <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Date</label>
              @error('date')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
              <input type="date" name="date" class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
            </div>
            <div class="mb-3.5 flex-1">
              <label  class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Heure</label>
              @error('heure')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
              <input type="time" name="heure" class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
            </div>
          </div>

          <div class="mb-3.5">
            <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Lieu</label>
            @error('lieu')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
            <input type="text" placeholder="Le Hangar, Casablanca" name="lieu"
              class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
          </div>

          <div class="flex gap-3">
            <div class="mb-3.5 flex-1">
              <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Prix (MAD)</label>
              @error('prix')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
              <input type="number" min="0" placeholder="0" name="prix"
                class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
            </div>
            <div class="mb-3.5 flex-1">
              <label class="block text-xs font-semibold mb-1.5" style="color:#4a4157;">Jauge maximale</label>
              @error('nombre_places')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
              <input type="number" min="1" placeholder="250" name="nombre_places"
                class="w-full h-10 rounded-[9px] border px-3 text-[13.5px]" style="border-color:#ded5c4; background:#fffdf9; color:#241636;" />
            </div>
          </div>

          <button type="submit" class="w-full h-11 mt-1.5 rounded-[10px] bg-gold font-sora font-bold text-sm flex items-center justify-center gap-2" style="color:#241636;">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 5v14M5 12h14"/></svg>
            Publier l'événement
          </button>
        </form>
      </section>

      <!-- Dashboard list -->
      <section class="min-w-0">
        <div class="flex items-center justify-between mb-4">
          <h2 class="font-sora font-bold text-cream text-xl m-0">Tableau de bord</h2>
        </div>

        <div class="flex flex-col gap-4">
          @foreach ($events as $event )
          
          <!-- Event card 1 -->
          <div class="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-4">
            <div class="flex justify-between gap-3">
              <div class="flex-1 min-w-0">
                <h3 class="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">{{ $event->title }}</h3>
                <p class="text-muted text-[13px] leading-relaxed m-0">{{ $event->description }}.</p>
              </div>
              {{-- <div class="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-gold/15 text-gold">Ouvert</div> --}}
            </div>
            <div class="flex flex-wrap gap-x-4 gap-y-2 mt-3">
              <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg>
                 {{ $event->date }}
              </span>
              <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                {{ $event->heure }}
              </span>
              <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
                {{ $event->lieu }}
              </span>
              <span class="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 10h12M4 14h9M18 6L8 20"/></svg>
                {{ $event->prix }} MAD
              </span>
            </div>
            <div class="barcode h-[1px] my-4"></div>
            <div class="flex items-center gap-3.5">
              <div class="flex-1">
                {{-- pour calculer les plases restant --}}
               <div class="flex justify-between items-center mt-3">
               <span class="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                   {{ $event->nombre_places - $event->reservation_count }} places restantes
               </span>

              <span class="px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-medium">
                  Capacité : {{ $event->nombre_places }}
              </span>
              </div>
              </div>
            </div>
          </div>
                    @endforeach

        </div>
      </section>
    </div>
  </main>
</body>
</html>