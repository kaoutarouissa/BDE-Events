import { Link } from "react-router-dom";

function Login() {
    return (
        <div className="relative min-h-screen overflow-hidden bg-[var(--ink)]">

            {/* Background decorations */}
            <div className="absolute w-[20rem] h-[20rem] md:w-[26rem] md:h-[26rem] bg-violet-600/20 rounded-full blur-3xl -top-16 -left-16 pointer-events-none"></div>

            <div className="absolute w-[20rem] h-[20rem] md:w-[26rem] md:h-[26rem] bg-amber-400/15 rounded-full blur-3xl -bottom-16 -right-16 pointer-events-none"></div>

            {/* Main content */}
            <div className="relative z-10 min-h-screen max-w-7xl mx-auto px-6 lg:px-12 py-8 grid lg:grid-cols-2 gap-10 items-center">

                {/* LEFT SIDE */}
                <div className="flex flex-col justify-center py-4 lg:py-10 lg:pr-6 text-center lg:text-left items-center lg:items-start">

                    {/* Logo */}
                    <div className="flex items-center gap-2.5 mb-4 lg:mb-10">
                        <span className="w-9 h-9 rounded-lg bg-amber-400 text-[var(--ink)] font-bold flex items-center justify-center text-sm">
                            B
                        </span>

                        <span className="text-white font-semibold tracking-tight text-lg">
                            BDE&nbsp;Events
                        </span>
                    </div>

                    {/* Label */}
                    <span className="text-amber-400 uppercase tracking-[0.3em] text-[10px] md:text-xs font-semibold">
                        Bureau des élèves — ENAA
                    </span>

                    {/* Title */}
                    <h1 className="text-3xl md:text-5xl font-semibold text-white mt-3 lg:mt-5 leading-[1.2] lg:leading-[1.1]">
                        Bon retour
                        <br className="hidden lg:block" />
                        parmi nous.
                    </h1>

                    {/* Description */}
                    <p className="hidden sm:block text-slate-400 mt-4 lg:mt-6 leading-relaxed max-w-md text-sm md:text-base">
                        Connectez-vous pour retrouver vos réservations, vos billets
                        numériques et tous les événements du campus, réunis au même endroit.
                    </p>

                    {/* Features */}
                    <div className="hidden lg:flex flex-col mt-10 space-y-5 w-full">

                        <div className="flex items-center gap-4">
                            <div className="w-11 h-11 rounded-xl bg-amber-400 flex items-center justify-center text-[var(--ink)] font-bold shrink-0">
                                ✓
                            </div>

                            <div>
                                <h3 className="text-white font-medium text-sm">
                                    Réservation en un clic
                                </h3>

                                <p className="text-slate-500 text-sm">
                                    Choisissez votre place, c'est réservé.
                                </p>
                            </div>
                        </div>

                        <div className="flex items-center gap-4">
                            <div className="w-11 h-11 rounded-xl bg-violet-500 flex items-center justify-center text-white font-bold shrink-0">
                                ✓
                            </div>

                            <div>
                                <h3 className="text-white font-medium text-sm">
                                    Billets numériques
                                </h3>

                                <p className="text-slate-500 text-sm">
                                    Accessibles à tout moment, sur votre téléphone.
                                </p>
                            </div>
                        </div>

                    </div>

                    {/* Statistics */}
                    <div className="hidden sm:flex gap-8 lg:gap-10 mt-8 lg:mt-12 pt-6 lg:pt-8 border-t border-white/10 w-full justify-center lg:justify-start">

                        <div>
                            <p className="text-xl lg:text-2xl font-semibold text-white">
                                120+
                            </p>

                            <p className="text-slate-500 text-[11px] lg:text-xs mt-1">
                                événements / an
                            </p>
                        </div>

                        <div>
                            <p className="text-xl lg:text-2xl font-semibold text-white">
                                2 400
                            </p>

                            <p className="text-slate-500 text-[11px] lg:text-xs mt-1">
                                étudiants actifs
                            </p>
                        </div>

                        <div>
                            <p className="text-xl lg:text-2xl font-semibold text-white">
                                100%
                            </p>

                            <p className="text-slate-500 text-[11px] lg:text-xs mt-1">
                                digital
                            </p>
                        </div>

                    </div>

                </div>


                {/* RIGHT SIDE - LOGIN TICKET */}
                <div className="ticket w-full max-w-md mx-auto shadow-2xl">

                    <div className="p-6 md:p-9 pb-5 md:pb-7">

                        {/* Header */}
                        <div className="flex items-end justify-between">

                            <div>
                                <p className="font-mono text-[10px] md:text-[11px] uppercase tracking-[0.25em] text-violet-600/70">
                                    Votre Espace
                                </p>

                                <h2 className="font-semibold text-xl md:text-2xl mt-1">
                                    Connexion
                                </h2>
                            </div>

                            <span className="w-9 h-9 md:w-10 md:h-10 rounded-full bg-amber-400/90 flex items-center justify-center text-base md:text-lg">
                                🎟
                            </span>

                        </div>


                        {/* Error message - temporaire */}
                        {/* 
                        <div className="mt-4 rounded-xl bg-red-50 text-red-700 border border-red-200/70 p-3 text-xs md:text-sm">
                            <ul className="list-disc ml-4 space-y-1">
                                <li>Email ou mot de passe incorrect.</li>
                            </ul>
                        </div>
                        */}


                        {/* Login form */}
                        <form className="mt-6 space-y-4 md:space-y-5">

                            {/* Email */}
                            <div>

                                <label className="block text-[10px] md:text-xs font-medium uppercase tracking-wide text-[var(--ink)]/60 mb-1.5">
                                    Email
                                </label>

                                <div className="field rounded-xl px-4 py-2.5 md:py-3 flex items-center gap-2">

                                    <input
                                        type="email"
                                        name="email"
                                        className="w-full bg-transparent outline-none text-sm md:text-base"
                                        placeholder="prenom.nom@ensa.ac.ma"
                                    />

                                </div>

                            </div>


                            {/* Password */}
                            <div>

                                <label className="block text-[10px] md:text-xs font-medium uppercase tracking-wide text-[var(--ink)]/60 mb-1.5">
                                    Mot de passe
                                </label>

                                <div className="field rounded-xl px-4 py-2.5 md:py-3 flex items-center gap-2">

                                    <input
                                        type="password"
                                        name="password"
                                        className="w-full bg-transparent outline-none text-sm md:text-base"
                                        placeholder="••••••••"
                                    />

                                </div>

                            </div>


                            {/* Remember + forgot password */}
                            <div className="flex justify-between items-center pt-1 text-xs md:text-sm">

                                <label className="flex items-center gap-2 text-[var(--ink)]/70 cursor-pointer select-none">

                                    <input
                                        type="checkbox"
                                        name="remember"
                                        className="rounded border-[var(--ink)]/30 text-violet-600 focus:ring-violet-500"
                                    />

                                    Se souvenir de moi

                                </label>

                                <Link
                                    to="/forgot-password"
                                    className="font-medium text-violet-600 hover:text-violet-700"
                                >
                                    Mot de passe oublié ?
                                </Link>

                            </div>


                            {/* Submit */}
                            <button
                                type="submit"
                                className="w-full bg-gradient-to-r from-violet-600 to-indigo-600 hover:from-violet-700 hover:to-indigo-700 text-white py-3 md:py-3.5 rounded-xl font-semibold text-sm md:text-base transition shadow-lg shadow-violet-600/20 mt-2"
                            >
                                Se connecter
                            </button>

                        </form>

                    </div>


                    {/* Bottom ticket */}
                    <div className="ticket-perforation px-6 md:px-9 pt-5 md:pt-6 pb-6 md:pb-8">

                        <div className="barcode rounded-sm mb-4"></div>

                        <div className="flex items-center justify-between gap-2 text-xs md:text-sm">

                            <p className="text-[var(--ink)]/60">
                                Pas encore de compte ?
                            </p>
                            <Link
                                to="/register"
                                className="font-semibold text-[var(--ink)] hover:text-violet-600 transition whitespace-nowrap"
                            >
                                Créer un compte →
                            </Link>

                        </div>

                    </div>

                </div>

            </div>

        </div>
    );
}

export default Login;