function About() {
    return (
        <section id="apropos" className="relative z-10">
            <span className="uppercase tracking-[0.2em] text-[var(--amber)] text-sm font-semibold">
                À propos
            </span>

            <h2 className="text-4xl font-bold text-white mt-4">
                Une plateforme pensée pour les étudiants
            </h2>

            <p className="text-gray-300 mt-5 leading-8 max-w-3xl">
                Cette plateforme permet aux étudiants de consulter les événements,
                réserver leurs billets en ligne et accéder facilement à leurs tickets numériques.
                Les administrateurs du BDE peuvent gérer les événements,
                suivre les inscriptions et contrôler les réservations en temps réel.
            </p>
        </section>
    );
}

export default About;