<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Eventix</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght=500;600;700&family=Inter:wght=400;500;600&family=JetBrains+Mono:wght=500&display=swap" rel="stylesheet">

    <style>
        :root{
            --ink-deep:#0a0817;
            --ink-panel:#161029;
            --violet:#7c5cff;
            --violet-soft:#a78bfa;
            --amber:#ffb020;
            --paper:#faf4e8;
            --paper-ink:#1c1730;
        }

        body{
            font-family:'Inter',sans-serif;
            /* L-background hna rje3 fixed bch mayt9te3ch mni tscroller lteht f mobile */
            background:
                radial-gradient(circle at 50% 0%, rgba(124,92,255,0.3) 0%, transparent 50%),
                radial-gradient(circle at 50% 100%, rgba(255,176,32,0.15) 0%, transparent 50%),
                var(--ink-deep);
            background-attachment: fixed;
        }

        .font-display{ font-family:'Space Grotesk', sans-serif; }
        .font-mono{ font-family:'JetBrains Mono', monospace; }

        /* ---- ticket stub construction ---- */
        .ticket{
            background:var(--paper);
            color:var(--paper-ink);
            border-radius:22px;
            position:relative;
            box-shadow:0 30px 60px -20px rgba(0,0,0,0.55);
        }

        .ticket-perforation{
            position:relative;
            border-top:2px dashed rgba(28,23,48,0.18);
        }

        .ticket-perforation::before,
        .ticket-perforation::after{
            content:"";
            position:absolute;
            top:-14px;
            width:28px;
            height:28px;
            border-radius:9999px;
            background:var(--ink-deep);
        }
        .ticket-perforation::before{ left:-14px; }
        .ticket-perforation::after{ right:-14px; }

        .barcode{
            background:repeating-linear-gradient(
                90deg,
                var(--paper-ink) 0px,
                var(--paper-ink) 2px,
                transparent 2px,
                transparent 5px,
                var(--paper-ink) 5px,
                var(--paper-ink) 6px,
                transparent 6px,
                transparent 10px
            );
            height:34px;
            opacity:0.85;
        }

        .field{
            background:rgba(28,23,48,0.04);
            border:1px solid rgba(28,23,48,0.14);
        }
        .field:focus-within{
            border-color:var(--violet);
            box-shadow:0 0 0 3px rgba(124,92,255,0.15);
        }
        .field input, .field select{
            background:transparent;
            outline:none;
            width:100%;
        }
        .field input::placeholder{ color:rgba(28,23,48,0.35); }

        .stat-num{ font-variant-numeric:tabular-nums; }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-4 md:p-10">

<div class="relative w-full max-w-6xl my-auto">

    <!-- Glow effects dyal bg tabtin -->
    <div class="absolute w-[20rem] h-[20rem] md:w-[26rem] md:h-[26rem] bg-violet-600/20 rounded-full blur-3xl -top-16 -left-16 pointer-events-none"></div>
    <div class="absolute w-[20rem] h-[20rem] md:w-[26rem] md:h-[26rem] bg-amber-400/15 rounded-full blur-3xl -bottom-16 -right-16 pointer-events-none"></div>

    <!-- Grid responsive: f mobile col wahed, f desktop columns mfar9in normal -->
    <div class="relative z-10 grid grid-cols-1 lg:grid-cols-[1.1fr_1fr] gap-10 lg:gap-16 items-center">

        <!-- Brand side (f mobile ayban l-logo u title bch tnaso9, u descriptive text aykhba bch mayhrbch l-form lteht) -->
        <div class="flex flex-col justify-center py-4 lg:py-10 lg:pr-6 text-center lg:text-left items-center lg:items-start">

            <div class="flex items-center gap-2.5 mb-4 lg:mb-10">
                <span class="w-9 h-9 rounded-lg bg-amber-400 text-[var(--ink-deep)] font-display font-bold flex items-center justify-center text-sm">B</span>
                <span class="text-white font-display font-semibold tracking-tight text-lg">BDE&nbsp;Events</span>
            </div>

            <span class="text-amber-400 uppercase tracking-[0.3em] text-[10px] md:text-xs font-semibold font-mono">
                Bureau des élèves — ENNA
            </span>

            <h1 class="font-display text-3xl md:text-5xl font-semibold text-white mt-3 lg:mt-5 leading-[1.2] lg:leading-[1.1]">
                Bon retour<br class="hidden lg:block"> parmi nous.
            </h1>

            <!-- had l-p u stats kakhbwhum f mobile sghir bch l-espace yji m9add grid-wise -->
            <p class="hidden sm:block text-slate-400 mt-4 lg:mt-6 leading-relaxed max-w-md text-sm md:text-base">
                Connectez-vous pour retrouver vos réservations, vos billets
                numériques et tous les événements du campus, réunis au même endroit.
            </p>

            <div class="hidden lg:flex flex-col mt-10 space-y-5 w-full">
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-xl bg-amber-400 flex items-center justify-center text-[var(--ink-deep)] font-bold shrink-0">✓</div>
                    <div>
                        <h3 class="text-white font-medium text-sm">Réservation en un clic</h3>
                        <p class="text-slate-500 text-sm">Choisissez votre place, c'est réservé.</p>
                    </div>
                </div>
                <div class="flex items-center gap-4">
                    <div class="w-11 h-11 rounded-xl bg-violet-500 flex items-center justify-center text-white font-bold shrink-0">✓</div>
                    <div>
                        <h3 class="text-white font-medium text-sm">Billets numériques</h3>
                        <p class="text-slate-500 text-sm">Accessibles à tout moment, sur votre téléphone.</p>
                    </div>
                </div>
            </div>

            <div class="hidden sm:flex gap-8 lg:gap-10 mt-8 lg:mt-12 pt-6 lg:pt-8 border-t border-white/10 w-full justify-center lg:justify-start">
                <div>
                    <p class="font-display text-xl lg:text-2xl font-semibold text-white stat-num">120+</p>
                    <p class="text-slate-500 text-[11px] lg:text-xs mt-1">événements / an</p>
                </div>
                <div>
                    <p class="font-display text-xl lg:text-2xl font-semibold text-white stat-num">2 400</p>
                    <p class="text-slate-500 text-[11px] lg:text-xs mt-1">étudiants actifs</p>
                </div>
                <div>
                    <p class="font-display text-xl lg:text-2xl font-semibold text-white stat-num">100%</p>
                    <p class="text-slate-500 text-[11px] lg:text-xs mt-1">digital</p>
                </div>
            </div>
        </div>

        <!-- Ticket / form side (7yedna mb-24 bch y-centra talata) -->
        <div class="ticket w-full max-w-md mx-auto shadow-2xl">

            <div class="p-6 md:p-9 pb-5 md:pb-7">
                <div class="flex items-end justify-between">
                    <div>
                        <p class="font-mono text-[10px] md:text-[11px] uppercase tracking-[0.25em] text-violet-600/70">Votre Espace</p>
                        <h2 class="font-display text-xl md:text-2xl font-semibold mt-1">Connexion</h2>
                    </div>
                    <span class="w-9 h-9 md:w-10 md:h-10 rounded-full bg-amber-400/90 flex items-center justify-center text-[var(--ink-deep)] text-base md:text-lg">🎟</span>
                </div>

                @if ($errors->any())
                    <div class="mt-4 rounded-xl bg-red-50 text-red-700 border border-red-200/70 p-3 text-xs md:text-sm">
                        <ul class="list-disc ml-4 space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('login.post') }}" method="POST" class="mt-6 space-y-4 md:space-y-5">
                    @csrf

                    <div>
                        <label class="block text-[10px] md:text-xs font-medium uppercase tracking-wide text-[var(--paper-ink)]/60 mb-1.5">
                            Email
                        </label>
                        <div class="field rounded-xl px-4 py-2.5 md:py-3 flex items-center gap-2">
                            <input
                                type="email"
                                name="email"
                                value="{{ old('email') }}"
                                class="text-sm md:text-base"
                                placeholder="prenom.nom@ensa.ac.ma" >
                        </div>
                    </div>

                    <div>
                        <label class="block text-[10px] md:text-xs font-medium uppercase tracking-wide text-[var(--paper-ink)]/60 mb-1.5">
                            Mot de passe
                        </label>
                        <div class="field rounded-xl px-4 py-2.5 md:py-3 flex items-center gap-2">
                            <input
                                type="password"
                                name="password"
                                class="text-sm md:text-base"
                                placeholder="••••••••" >
                        </div>
                    </div>

                    <div class="flex justify-between items-center pt-1 text-xs md:text-sm">
                        <label class="flex items-center gap-2 text-[var(--paper-ink)]/70 cursor-pointer select-none">
                            <input type="checkbox" name="remember" class="rounded border-[var(--paper-ink)]/30 text-violet-600 focus:ring-violet-500">
                            Se souvenir de moi
                        </label>
                        <a href="#" class="font-medium text-violet-600 hover:text-violet-700">
                            Mot de passe oublié ?
                        </a>
                    </div>

                    <button
                        class="w-full bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-700 hover:to-indigo-700 text-white py-3 md:py-3.5 rounded-xl font-display font-semibold text-sm md:text-base transition shadow-lg shadow-violet-600/20 mt-2">
                        Se connecter
                    </button>
                </form>
            </div>

            <!-- Perforated ticket stub -->
            <div class="ticket-perforation px-6 md:px-9 pt-5 md:pt-6 pb-6 md:pb-8">
                <div class="barcode rounded-sm mb-4"></div>
                <div class="flex items-center justify-between gap-2 text-xs md:text-sm">
                    <p class="text-[var(--paper-ink)]/60">
                        Pas encore de compte ?
                    </p>
                    <a href="{{ route('showRegister') }}" class="font-display font-semibold text-[var(--ink-deep)] hover:text-violet-600 transition whitespace-nowrap">
                        Créer un compte →
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>

</body>
</html>