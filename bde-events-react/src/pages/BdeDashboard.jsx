import { useEffect,useState } from "react";
import { useNavigate } from "react-router-dom";
import { createEvent, showEvent,logoutUser } from "../services/api";
function BdeDashboard() {

    const navigate = useNavigate();
    const user = JSON.parse(localStorage.getItem("user"));

    console.log("USER :", user);
    console.log("TOKEN :", localStorage.getItem("token"));

    // ===============================
    // FORM DATA
    // ===============================

    const [events, setEvents] = useState([]);
    const [formData, setFormData] = useState({
        title: "",
        description: "",
        date: "",
        heure: "",
        lieu: "",
        prix: "",
        nombre_places: ""
    });

    const [message, setMessage] = useState("");
   
    // ===============================
    // HANDLE CHANGE
    // ===============================

    const handleChange = (e) => {

        setFormData({
            ...formData,
            [e.target.name]: e.target.value
        });

    };

    // ===============================
    // HANDLE SUBMIT
    // ===============================
// const [events, setEvents] = useState([]);
    const handleSubmit = async (e) => {

        e.preventDefault();

        setMessage("");

        try {

            const data = await createEvent(formData);
const updatedEvents = await showEvent();
setEvents(updatedEvents);
            console.log("EVENT CREATED :", data);

            setMessage("✅ " + data.message);

            // vider le formulaire
            setFormData({
                title: "",
                description: "",
                date: "",
                heure: "",
                lieu: "",
                prix: "",
                nombre_places: ""
            });

        } catch (error) {

            console.error("ERROR :", error);

            // étudiant / pas admin
            if (error.status === 403) {

                setMessage(
                    "⛔ Vous n'êtes pas autorisé à créer un événement."
                );

            }

            // validation Laravel
            else if (error.status === 422) {

                setMessage(
                    "❌ Vérifiez les informations saisies."
                );

                console.log("Validation errors :", error.data);

            }

            // pas connecté
            else if (error.status === 401) {

                setMessage(
                    "❌ Vous devez être connecté."
                );

            }

            else {

                setMessage(
                    "❌ Une erreur est survenue."
                );

            }
        }
    };

    useEffect(() => {
        const loadEvents = async () => {
            try {
                const data = await showEvent();

                console.log(data);

                setEvents(data);
            } catch (error) {
                console.error(error);
            }
        };

        loadEvents();
    }, []);
    // ===============================
    // LOGOUT
    // ===============================

    const handleLogout = async () => {

        try {

            await logoutUser();

            localStorage.removeItem("token");
            localStorage.removeItem("user");

            navigate("/");

        } catch (error) {

            console.error(error);

        }

    };

    return (

        <div className="min-h-screen bg-[#120a20] text-white">

            {/* ================= HEADER ================= */}

            <header className="sticky top-0 z-50 border-b border-white/10 bg-[#120a20]/90 backdrop-blur-md">

                <div className="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 sm:px-6 lg:px-8">

                    {/* LOGO */}

                    <div className="flex items-center gap-3">

                        <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-[#f5c84c] font-bold text-[#120a20]">
                            B
                        </div>

                        <div>

                            <p className="font-bold text-white">
                                BDE-Events
                            </p>

                            <p className="hidden text-xs text-white/50 sm:block">
                                Bureau des élèves
                            </p>

                        </div>

                    </div>

                    {/* USER */}

                    <div className="flex items-center gap-3">

                        <div className="hidden text-right sm:block">

                            <p className="text-xs text-white/40">
                                Bienvenue,
                            </p>

                            <p className="text-sm font-semibold text-white">
                                {user?.name}
                            </p>

                        </div>

                        <button
                            type="button"
                            onClick={handleLogout}
                            className="rounded-xl border border-white/10 px-3 py-2 text-sm text-white transition hover:bg-white/10 sm:px-4"
                        >
                            Déconnexion
                        </button>

                    </div>

                </div>

            </header>


            {/* ================= MAIN ================= */}

            <main className="relative mx-auto max-w-7xl px-4 py-8 sm:px-6 sm:py-10 lg:px-8">

                {/* GLOW */}

                <div className="pointer-events-none absolute -right-40 -top-40 h-[400px] w-[400px] rounded-full bg-[#8b5cf6]/10 blur-3xl" />


                {/* ================= HERO ================= */}

                <section className="relative mb-10">

                    <div className="mb-3 flex items-center gap-3 text-xs font-semibold tracking-[0.2em] text-[#f5c84c]">

                        <span className="h-px w-6 bg-[#f5c84c]" />

                        BUREAU DES ÉLÈVES — ENAA · ADMIN

                    </div>

                    <h1 className="max-w-3xl text-3xl font-extrabold leading-tight tracking-tight text-white sm:text-4xl lg:text-5xl">

                        Gère tes événements{" "}

                        <span className="text-[#f5c84c]">
                            sans
                        </span>

                        {" "}prise de tête.

                    </h1>

                    <p className="mt-4 max-w-2xl text-sm leading-7 text-white/50 sm:text-base">

                        Publie un événement, suis les inscriptions et garde
                        un œil sur les places restantes, en direct, pour
                        chaque soirée, workshop ou tournoi.

                    </p>

                </section>


                {/* ================= GRID ================= */}

                <div className="grid gap-6 lg:grid-cols-[380px_1fr]">


                    {/* ================= FORM ================= */}

                    <section className="h-fit rounded-2xl bg-[#fffdf9] p-5 text-[#241636] shadow-2xl sm:p-6 lg:sticky lg:top-24">


                        {/* FORM HEADER */}

                        <div className="flex items-center justify-between">

                            <div>

                                <p className="text-[11px] font-bold tracking-widest text-[#ec4c82]">
                                    ACCÈS RAPIDE
                                </p>

                                <h2 className="mt-2 text-2xl font-extrabold">
                                    Créer un événement.
                                </h2>

                            </div>

                            <div className="flex h-10 w-10 items-center justify-center rounded-xl bg-[#ec4c82]/10">

                                <svg
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="#ec4c82"
                                    strokeWidth="2"
                                >

                                    <path d="M2 9a3 3 0 1 0 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />

                                </svg>

                            </div>

                        </div>


                        <p className="mt-2 text-sm leading-6 text-[#6b6178]">

                            Remplis les informations ci-dessous pour rendre
                            ton événement visible et ouvert aux inscriptions.

                        </p>


                        {/* ================= MESSAGE ================= */}

                        {message && (

                            <div className="mt-4 rounded-xl bg-[#241636] px-4 py-3 text-sm text-white">

                                {message}

                            </div>

                        )}


                        {/* ================= FORM ================= */}

                        <form
                            onSubmit={handleSubmit}
                            className="mt-6 space-y-4"
                        >


                            {/* TITLE */}

                            <div>

                                <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                    Titre de l'événement

                                </label>

                                <input
                                    type="text"
                                    name="title"
                                    value={formData.title}
                                    onChange={handleChange}
                                    placeholder="Soirée d'intégration ENAA"
                                    className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none transition placeholder:text-[#9c94a3] focus:border-[#f5c84c] focus:ring-2 focus:ring-[#f5c84c]/20"
                                    required
                                />

                            </div>


                            {/* DESCRIPTION */}

                            <div>

                                <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                    Description

                                </label>

                                <textarea
                                    name="description"
                                    value={formData.description}
                                    onChange={handleChange}
                                    rows="4"
                                    placeholder="Quelques lignes pour donner envie de venir."
                                    className="w-full resize-none rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 py-3 text-sm outline-none transition placeholder:text-[#9c94a3] focus:border-[#f5c84c] focus:ring-2 focus:ring-[#f5c84c]/20"
                                />

                            </div>


                            {/* DATE + HEURE */}

                            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">


                                {/* DATE */}

                                <div>

                                    <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                        Date

                                    </label>

                                    <input
                                        type="date"
                                        name="date"
                                        value={formData.date}
                                        onChange={handleChange}
                                        className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none focus:border-[#f5c84c]"
                                        required
                                    />

                                </div>


                                {/* HEURE */}

                                <div>

                                    <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                        Heure

                                    </label>

                                    <input
                                        type="time"
                                        name="heure"
                                        value={formData.heure}
                                        onChange={handleChange}
                                        className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none focus:border-[#f5c84c]"
                                    />

                                </div>

                            </div>


                            {/* LIEU */}

                            <div>

                                <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                    Lieu

                                </label>

                                <input
                                    type="text"
                                    name="lieu"
                                    value={formData.lieu}
                                    onChange={handleChange}
                                    placeholder="Le Hangar, Casablanca"
                                    className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none transition placeholder:text-[#9c94a3] focus:border-[#f5c84c] focus:ring-2 focus:ring-[#f5c84c]/20"
                                    required
                                />

                            </div>


                            {/* PRIX + CAPACITY */}

                            <div className="grid grid-cols-1 gap-4 sm:grid-cols-2">


                                {/* PRIX */}

                                <div>

                                    <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                        Prix (MAD)

                                    </label>

                                    <input
                                        type="number"
                                        name="prix"
                                        value={formData.prix}
                                        onChange={handleChange}
                                        min="0"
                                        placeholder="0"
                                        className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none focus:border-[#f5c84c]"
                                        required
                                    />

                                </div>


                                {/* CAPACITY */}

                                <div>

                                    <label className="mb-1.5 block text-xs font-semibold text-[#4a4157]">

                                        Jauge maximale

                                    </label>

                                    <input
                                        type="number"
                                        name="nombre_places"
                                        value={formData.nombre_places}
                                        onChange={handleChange}
                                        min="1"
                                        step="1"
                                        placeholder="250"
                                        className="h-11 w-full rounded-xl border border-[#ded5c4] bg-[#fffdf9] px-3 text-sm outline-none focus:border-[#f5c84c]"
                                        required
                                    />

                                </div>

                            </div>


                            {/* BUTTON */}

                            <button
                                type="submit"
                                className="flex h-12 w-full items-center justify-center gap-2 rounded-xl bg-[#f5c84c] font-bold text-[#241636] transition hover:bg-[#ffd866] active:scale-[0.98]"
                            >

                                <svg
                                    width="18"
                                    height="18"
                                    viewBox="0 0 24 24"
                                    fill="none"
                                    stroke="currentColor"
                                    strokeWidth="2.5"
                                >

                                    <path d="M12 5v14M5 12h14" />

                                </svg>

                                Publier l'événement

                            </button>

                        </form>

                    </section>


                    {/* ================= EVENTS ================= */}
                      <section className="rounded-2xl border border-white/10 bg-[#1d1230] p-5 transition hover:border-white/20 hover:bg-[#211536] sm:p-6">

    {/* HEADER DU DASHBOARD — une seule fois */}
    <div className="mb-5 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

        <div>
            <h2 className="text-xl font-bold text-white sm:text-2xl">
                Tableau de bord
            </h2>

            <p className="mt-1 text-sm text-white/40">
                Gestion de tes événements
            </p>
        </div>

        <div className="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-xs text-white/60">
            {events.length} événements
        </div>

    </div>


    {/* LES ARTICLES — un article par événement */}
    {events.map((event) => (

        <article
            key={event.id}
            className="mb-4 rounded-2xl border border-white/10 bg-[#1d1230] p-5 transition hover:border-white/20 hover:bg-[#211536] sm:p-6"
        >

            {/* HEADER */}
            <div className="flex flex-col gap-4 sm:flex-row sm:items-start sm:justify-between">

                <div>

                    <h3 className="text-lg font-bold text-white">
                        {event.title}
                    </h3>

                    <p className="mt-2 text-sm leading-6 text-white/45">
                        {event.description}
                    </p>

                </div>

                <span className="w-fit rounded-full bg-[#f5c84c]/15 px-3 py-1 text-xs font-bold text-[#f5c84c]">
                    Ouvert
                </span>

            </div>


            {/* INFORMATIONS */}
            <div className="mt-5 grid grid-cols-2 gap-3 sm:grid-cols-4">

                {/* DATE */}
                <div className="rounded-xl bg-white/[0.03] p-3">

                    <p className="text-[11px] text-white/35">
                        DATE
                    </p>

                    <p className="mt-1 text-sm font-medium text-white">
                        {event.date}
                    </p>

                </div>


                {/* HEURE */}
                <div className="rounded-xl bg-white/[0.03] p-3">

                    <p className="text-[11px] text-white/35">
                        HEURE
                    </p>

                    <p className="mt-1 text-sm font-medium text-white">
                        {event.heure}
                    </p>

                </div>


                {/* LIEU */}
                <div className="rounded-xl bg-white/[0.03] p-3">

                    <p className="text-[11px] text-white/35">
                        LIEU
                    </p>

                    <p className="mt-1 truncate text-sm font-medium text-white">
                        {event.lieu}
                    </p>

                </div>


                {/* PRIX */}
                <div className="rounded-xl bg-white/[0.03] p-3">

                    <p className="text-[11px] text-white/35">
                        PRIX
                    </p>

                    <p className="mt-1 text-sm font-medium text-white">
                        {event.prix} MAD
                    </p>

                </div>

            </div>


            {/* PLACES */}
            <div className="mt-5 flex flex-col gap-3 border-t border-white/10 pt-4 sm:flex-row sm:items-center sm:justify-between">

                <span className="w-fit rounded-full bg-emerald-500/10 px-3 py-1.5 text-xs font-semibold text-emerald-400">
                  {event.nombre_places - event.reservation_count} places restantes
                </span>

                <span className="w-fit rounded-full bg-white/5 px-3 py-1.5 text-xs text-white/50">
                    Capacité : {event.nombre_places}
                </span>

            </div>

        </article>

    ))}

</section>


                </div>

            </main>

        </div>
    );
}

export default BdeDashboard;