import TicketCard from './TicketCard';

function Hero() {
    return (
        <section className="relative z-10 px-8 lg:px-16 pt-10 pb-24">
            <div className="max-w-7xl mx-auto grid lg:grid-cols-[1.1fr_0.9fr] gap-20 items-center">
                {/* Left: welcoming copy */}
                <div>
                    <span className="inline-flex items-center gap-2 text-xs tracking-[0.2em] uppercase text-[var(--amber)] font-semibold">
                        <span className="w-8 h-px bg-[var(--amber)]"></span>
                        Bureau des Élèves — ENAA
                    </span>

                    <h1 className="display text-5xl sm:text-6xl lg:text-7xl font-bold text-white leading-[1.05] mt-6">
                        Bienvenue dans<br className="hidden sm:block" />
                        l'agenda de <span className="text-[var(--amber)]">tous</span><br className="hidden sm:block" />
                        les bons moments.
                    </h1>

                    <p className="text-white/60 text-lg mt-7 leading-8 max-w-md">
                        Soirées, workshops, tournois, galas : réserve ta place en quelques secondes
                        et retrouve tous tes tickets au même endroit.
                    </p>

                    <div className="mt-14 flex items-center gap-8">
                        <div>
                            <p className="display text-3xl font-bold text-white">120+</p>
                            <p className="text-white/40 text-sm mt-1">événements / an</p>
                        </div>
                        <div className="w-px h-10 bg-white/10"></div>
                        <div>
                            <p className="display text-3xl font-bold text-white">2 400</p>
                            <p className="text-white/40 text-sm mt-1">étudiants actifs</p>
                        </div>
                        <div className="w-px h-10 bg-white/10"></div>
                        <div>
                            <p className="display text-3xl font-bold text-white">100%</p>
                            <p className="text-white/40 text-sm mt-1">digital</p>
                        </div>
                    </div>
                </div>

                {/* Right: signature ticket element */}
                <TicketCard />
            </div>
        </section>
    );
}

export default Hero;