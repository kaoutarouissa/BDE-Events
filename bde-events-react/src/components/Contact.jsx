function Contact() {
    return (
        <section id="contact" className="relative z-10">
            <span className="uppercase tracking-[0.2em] text-[var(--amber)] text-sm font-semibold">
                Contact
            </span>

            <h2 className="text-4xl font-bold text-white mt-4">
                Une question ? Contactez-nous.
            </h2>

            <p className="text-gray-300 mt-5 max-w-xl">
                Notre équipe est disponible pour répondre à toutes vos questions
                concernant les événements, les réservations ou l'accès à la plateforme.
            </p>

            <div className="grid md:grid-cols-2 gap-10 mt-10">
                <div className="space-y-5">
                    <div className="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 className="text-white font-semibold">
                            📧 Email
                        </h4>
                        <p className="text-gray-400 mt-2">
                            contact@bde-events.ma
                        </p>
                    </div>

                    <div className="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 className="text-white font-semibold">
                            📍 Adresse
                        </h4>
                        <p className="text-gray-400 mt-2">
                            Campus ENAA, Béni Mellal
                        </p>
                    </div>

                    <div className="bg-white/5 border border-white/10 rounded-2xl p-5">
                        <h4 className="text-white font-semibold">
                            📞 Téléphone
                        </h4>
                        <p className="text-gray-400 mt-2">
                            +212 6 12 34 56 78
                        </p>
                    </div>
                </div>
            </div>
        </section>
    );
}

export default Contact;

            