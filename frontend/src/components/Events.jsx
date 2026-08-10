function Events() {
    const eventTypes = [
        {
            emoji: "🎤",
            title: "Conférence",
            description: "Rencontrez des professionnels et découvrez les dernières innovations."
        },
        {
            emoji: "⚽",
            title: "Tournoi Sportif",
            description: "Participez aux compétitions sportives et encouragez votre équipe."
        },
        {
            emoji: "🎉",
            title: "Soirée Festive",
            description: "Profitez d'une ambiance conviviale avec musique, animations et divertissements."
        }
    ];

    return (
        <section id="evenements" className="relative z-10">
            <span className="uppercase tracking-[0.2em] text-[var(--amber)] text-sm font-semibold">
                Événements à venir
            </span>

            <h2 className="text-4xl font-bold text-white mt-4">
                Vivez les meilleurs événements du campus
            </h2>

            <p className="text-gray-300 mt-5 max-w-3xl leading-8">
                Découvrez les activités organisées par le Bureau des Étudiants,
                réservez votre place en quelques secondes et profitez d'une
                expérience unique au sein de l'ENAA.
            </p>

            <div className="grid md:grid-cols-3 gap-6 mt-12">
                {eventTypes.map((event, index) => (
                    <div key={index} className="bg-white/5 border border-white/10 rounded-2xl p-6">
                        <h3 className="text-xl font-semibold text-white">
                            {event.emoji} {event.title}
                        </h3>
                        <p className="text-gray-400 mt-3">
                            {event.description}
                        </p>
                    </div>
                ))}
            </div>
        </section>
    );
}

export default Events;
