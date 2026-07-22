<!DOCTYPE html>
<BODY lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>BDE-Events — ENAA</title>
<script src="https://cdn.tailwindcss.com"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
<style>
  :root{
    --ink:#1B1035;
    --ink-2:#2A1854;
    --cream:#FFF8ED;
    --amber:#FFB627;
    --coral:#FF6B6B;
  }
  body{
    font-family:'Inter', sans-serif;
    background:var(--ink);
  }
  .display{
    font-family:'Space Grotesk', sans-serif;
  }
  .noise{
    background-image: radial-gradient(rgba(255,255,255,.06) 1px, transparent 1px);
    background-size: 22px 22px;
  }
  .ticket{
    background: var(--cream);
    color: var(--ink);
    border-radius: 24px;
    position: relative;
    box-shadow: 0 40px 80px -20px rgba(0,0,0,.5);
  }
  .ticket::before, .ticket::after{
    content:"";
    position:absolute;
    width:40px; height:40px;
    background: var(--ink);
    border-radius:50%;
    top:50%;
    transform: translateY(-50%);
  }
  .ticket::before{ left:-20px; }
  .ticket::after{ right:-20px; }
  .perforation{
    border-left: 2px dashed rgba(27,16,53,.25);
  }
  .barcode{
    background: repeating-linear-gradient(90deg, var(--ink) 0 2px, transparent 2px 5px, var(--ink) 5px 6px, transparent 6px 11px, var(--ink) 11px 14px, transparent 14px 16px);
    height: 40px;
  }
  .stamp{
    transform: rotate(-9deg);
  }
  @keyframes drift{
    0%,100%{ transform: translate(0,0) rotate(0deg); }
    50%{ transform: translate(-10px,-16px) rotate(2deg); }
  }
  .drift{ animation: drift 7s ease-in-out infinite; }
  @keyframes drift-slow{
    0%,100%{ transform: translate(0,0) rotate(-4deg); }
    50%{ transform: translate(12px,10px) rotate(-1deg); }
  }
  .drift-slow{ animation: drift-slow 9s ease-in-out infinite; }
  .grain-line{
    background: linear-gradient(90deg, transparent, rgba(255,182,39,.5), transparent);
  }
</style>
</head>
<html class="min-h-screen overflow-x-hidden relative">

  <!-- ambient shapes -->
  <div class="absolute inset-0 noise pointer-events-none opacity-40"></div>
  <div class="absolute w-[520px] h-[520px] rounded-full bg-[radial-gradient(circle,rgba(255,107,107,.25),transparent_70%)] -top-40 -right-32 blur-2xl drift-slow"></div>
  <div class="absolute w-[420px] h-[420px] rounded-full bg-[radial-gradient(circle,rgba(255,182,39,.2),transparent_70%)] bottom-0 -left-24 blur-2xl drift"></div>

  <!-- top bar -->
  <header class="relative z-10 flex items-center justify-between px-8 lg:px-16 py-8">
    <div class="flex items-center gap-3">
      <div class="w-10 h-10 rounded-xl bg-[var(--amber)] flex items-center justify-center display font-bold text-[var(--ink)] text-lg stamp">B</div>
      <span class="display text-white font-semibold tracking-tight text-lg">BDE-Events</span>
    </div>
    {{-- <a href="login.html" class="text-sm text-white/70 hover:text-white transition px-5 py-2.5 rounded-full border border-white/15 hover:border-white/40">
      Se connecter
    </a> --}}
  </header>

  <section class="relative z-10 px-8 lg:px-16 pt-10 pb-24">
    <div class="max-w-7xl mx-auto grid lg:grid-cols-[1.1fr_0.9fr] gap-20 items-center">

      <!-- Left: welcoming copy -->
      <div>
        <span class="inline-flex items-center gap-2 text-xs tracking-[0.2em] uppercase text-[var(--amber)] font-semibold">
          <span class="w-8 h-px bg-[var(--amber)]"></span>
          Bureau des Élèves — ENAA
        </span>

        <h1 class="display text-5xl sm:text-6xl lg:text-7xl font-bold text-white leading-[1.05] mt-6">
          Bienvenue dans<br class="hidden sm:block">
          l'agenda de <span class="text-[var(--amber)]">tous</span><br class="hidden sm:block">
          les bons moments.
        </h1>

        <p class="text-white/60 text-lg mt-7 leading-8 max-w-md">
          Soirées, workshops, tournois, galas : réserve ta place en quelques secondes
          et retrouve tous tes tickets au même endroit.
        </p>

        <div class="mt-14 flex items-center gap-8">
          <div>
            <p class="display text-3xl font-bold text-white">120+</p>
            <p class="text-white/40 text-sm mt-1">événements / an</p>
          </div>
          <div class="w-px h-10 bg-white/10"></div>
          <div>
            <p class="display text-3xl font-bold text-white">2 400</p>
            <p class="text-white/40 text-sm mt-1">étudiants actifs</p>
          </div>
          <div class="w-px h-10 bg-white/10"></div>
          <div>
            <p class="display text-3xl font-bold text-white">100%</p>
            <p class="text-white/40 text-sm mt-1">digital</p>
          </div>
        </div>
      </div>

      <!-- Right: signature ticket element -->
      <div class="relative flex justify-center lg:justify-end">
        <div class="ticket w-full max-w-sm p-8 pr-10 drift">
          <div class="flex items-start justify-between">
            <div>
              <p class="text-xs uppercase tracking-[0.2em] text-[var(--coral)] font-semibold">Accès rapide</p>
              <h2 class="display text-3xl font-bold mt-2 leading-tight">Ton ticket<br>t'attend.</h2>
            </div>
            <span class="text-4xl">🎟️</span>
          </div>

          <p class="text-[var(--ink)]/60 text-sm mt-5 leading-6">
            Connecte-toi pour explorer les prochains événements, réserver ta place
            et récupérer tes billets numériques, instantanément.
          </p>

          <div class="mt-7 pt-6 perforation pl-6 -ml-8 flex items-center justify-between">
            <div class="flex-1">
              <p class="text-[10px] uppercase tracking-[0.2em] text-[var(--ink)]/40 mb-2">Scan pour entrer</p>
              <div class="barcode w-full"></div>
            </div>
          </div>

          <a href="{{  route('login') }}"
             class="mt-7 flex items-center justify-center gap-2 w-full py-4 rounded-2xl bg-[var(--ink)] text-white font-semibold display hover:bg-[var(--ink-2)] transition-colors">
            Se connecter
          </a>
        </div>
      </div>

    </div>
  </section>
<div class="relative max-w-7xl mx-auto px-8 lg:px-16 py-20
            rounded-[40px]
            bg-white/5
            backdrop-blur-2xl
            border border-white/10
            shadow-2xl
            overflow-hidden">

    <!-- Effets -->
    <div class="absolute -top-20 -right-20 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
    <div class="absolute -bottom-20 -left-20 w-72 h-72 bg-amber-400/20 rounded-full blur-3xl"></div>

    <div class="relative z-10 space-y-24">

        <!-- Événements -->
        <section id="evenements">

            <span class="uppercase tracking-[0.2em] text-amber-400 text-sm font-semibold">
                Événements à venir
            </span>

            <h2 class="text-4xl font-bold text-white mt-4">
                Vivez les meilleurs événements du campus
            </h2>

            <p class="text-gray-300 mt-5 max-w-3xl leading-8">
                Découvrez les activités organisées par le Bureau des Étudiants,
                réservez votre place en quelques secondes et profitez d'une
                expérience unique au sein de l'ENAA.
            </p>

            <div class="grid md:grid-cols-3 gap-6 mt-12">

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <h3 class="text-xl font-semibold text-white">
                        🎤 Conférence
                    </h3>

                    <p class="text-gray-400 mt-3">
                        Rencontrez des professionnels et découvrez les dernières innovations.
                    </p>
                </div>

                <div class="bg-white/5 border border-white/10 rounded-2xl p-6">
                    <h3 class="text-xl font-semibold text-white">
                        ⚽ Tournoi Sportif
                    </h3>

                    <p class="text-gray-400 mt-3">
                        Participez aux compétitions sportives et encouragez votre équipe.
                    </p>
                </div>

            </div>

        </section>

        <!-- À propos -->

        <section id="apropos">

            <span class="uppercase tracking-[0.2em] text-amber-400 text-sm font-semibold">
                À propos
            </span>

            <h2 class="text-4xl font-bold text-white mt-4">
                Une plateforme pensée pour les étudiants
            </h2>

            <p class="text-gray-300 mt-5 leading-8 max-w-3xl">
                Cette plateforme permet aux étudiants de consulter les événements,
                réserver leurs billets en ligne et accéder facilement à leurs tickets numériques.
                Les administrateurs du BDE peuvent gérer les événements,
                suivre les inscriptions et contrôler les réservations en temps réel.
            </p>

        </section>

        <!-- Contact -->

        <section id="contact">

            <span class="uppercase tracking-[0.2em] text-amber-400 text-sm font-semibold">
                Contact
            </span>

            <h2 class="text-4xl font-bold text-white mt-4">
                Une question ? Contactez-nous.
            </h2>

            <p class="text-gray-300 mt-5 max-w-xl">
                Notre équipe est disponible pour répondre à toutes vos questions
                concernant les événements, les réservations ou l'accès à la plateforme.
            </p>

            <div class="grid md:grid-cols-2 gap-10 mt-10">

                <!-- Informations -->

                <div class="space-y-5">

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 class="text-white font-semibold">
                            📧 Email
                        </h4>

                        <p class="text-gray-400 mt-2">
                            contact@bde-events.ma
                        </p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 class="text-white font-semibold">
                            📍 Adresse
                        </h4>

                        <p class="text-gray-400 mt-2">
                            Campus ENAA, Béni Mellal
                        </p>
                    </div>

                    <div class="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 class="text-white font-semibold">
                            📞 Téléphone
                        </h4>

                        <p class="text-gray-400 mt-2">
                            +212 6 12 34 56 78
                        </p>
                    </div>

                </div>

            </div>

        </section>

    </div>

</div>
</body>
</html>

