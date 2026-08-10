function TicketCard() {
    return (
        <div className="relative flex justify-center lg:justify-end">
            <div className="ticket w-full max-w-sm p-8 pr-10 drift">
                <div className="flex items-start justify-between">
                    <div>
                        <p className="text-xs uppercase tracking-[0.2em] text-[var(--coral)] font-semibold">Accès rapide</p>
                        <h2 className="display text-3xl font-bold mt-2 leading-tight">Ton ticket<br />t'attend.</h2>
                    </div>
                    <span className="text-4xl">🎟️</span>
                </div>

                <p className="text-[var(--ink)]/60 text-sm mt-5 leading-6">
                    Connecte-toi pour explorer les prochains événements, réserver ta place
                    et récupérer tes billets numériques, instantanément.
                </p>

                <div className="mt-7 pt-6 perforation pl-6 -ml-8 flex items-center justify-between">
                    <div className="flex-1">
                        <p className="text-[10px] uppercase tracking-[0.2em] text-[var(--ink)]/40 mb-2">Scan pour entrer</p>
                        <div className="barcode w-full"></div>
                    </div>
                </div>

                <a href="/login"
                   className="mt-7 flex items-center justify-center gap-2 w-full py-4 rounded-2xl bg-[var(--ink)] text-white font-semibold display hover:bg-[var(--ink-2)] transition-colors">
                    Se connecter
                </a>
            </div>
        </div>
    );
}

export default TicketCard;