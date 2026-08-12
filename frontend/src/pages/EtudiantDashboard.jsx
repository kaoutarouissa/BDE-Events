import { useEffect, useState } from "react";
import { showEvent,getReservations,createReservation } from "../services/api";

function EtudiantDashboard() {

    const [events, setEvents] = useState([]);
    const [reservations, setReservations] = useState([]);
    const [loading, setLoading] = useState(true);
    const [reservation, setReservation] = useState({
        user_id: "",
        event_id: ""
    });
    const [reservationMessage, setReservationMessage] = useState({});
    const user = JSON.parse(localStorage.getItem("user"));

    useEffect(() => {

        const loadData = async () => {

            try {
               const eventsData = await showEvent();
            const reservationsData = await getReservations();

            console.log("EVENTS :", eventsData);
            console.log("RESERVATIONS :", reservationsData);

            setEvents(eventsData);
            setReservations(reservationsData.reservations);

            } catch (error) {

                console.error(error);

            } finally {

                setLoading(false);

            }

        };

        loadData();

    }, []);

    const handleReservation = async (eventId) => {

    const data = {
    
        event_id: eventId
    };

    try {
        const result = await createReservation(data);
        const eventsData = await showEvent();
setEvents(eventsData);
         setReservationMessage({
            [eventId]: result.message
        });
        console.log("Réservation créée :", result);

        // Recharger les billets
        const reservationsData = await getReservations();

        setReservations(reservationsData.reservations);

    } catch (error) {
      if (error.status === 409) {
            setReservationMessage({
                [eventId]: error.data.message
            });
        } else {
            setReservationMessage({
                [eventId]: "Une erreur est survenue."
            });    }
};
    if (loading) {
        return (
            <div className="min-h-screen flex items-center justify-center text-white">
                Chargement...
            </div>
        );
    }

    }
    return (
        <div className="min-h-screen bg-[#120a20] text-white">

            {/* Glow */}
            <div className="glow absolute w-[420px] h-[420px] rounded-full -top-40 -right-32 pointer-events-none" />


            {/* HEADER */}
            <header className="sticky top-0 z-20 bg-[#120a20]/70 border-b border-white/10 backdrop-blur-[10px]">

                <div className="max-w-[1080px] mx-auto px-6 py-4 flex items-center justify-between">

                    <div className="flex items-center gap-2.5">

                        <div
                            className="w-[30px] h-[30px] rounded-[9px] bg-[#f5c84c] flex items-center justify-center font-extrabold text-sm"
                            style={{ color: "#120a20" }}
                        >
                            B
                        </div>

                        <span className="font-bold text-white text-base">
                            BDE-Events
                        </span>

                    </div>


                    <div className="flex items-center gap-3">

                        <span className="text-white text-[13px]">

                            <span className="text-white/40">
                                Bienvenue,{" "}
                            </span>

                            <span className="font-semibold">
                                {user?.name}
                            </span>

                        </span>


                        <button
                            onClick={() => {
                                localStorage.removeItem("token");
                                localStorage.removeItem("user");
                                window.location.href = "/login";
                            }}
                            className="flex items-center gap-2 px-4 py-2 rounded-[10px] border border-white/10 text-white text-[13px] font-medium"
                        >
                            Déconnexion
                        </button>

                    </div>

                </div>

            </header>


            {/* MAIN */}
            <main className="relative max-w-[1080px] mx-auto px-6 pt-12">


                {/* HERO */}

                <div className="flex items-center gap-2.5 text-[#f5c84c] font-semibold text-xs tracking-wider">

                    <span className="w-[22px] h-[1.5px] bg-[#f5c84c] inline-block" />

                    BUREAU DES ÉLÈVES — ENAA · ESPACE ÉTUDIANT

                </div>


                <h1 className="font-extrabold text-white text-3xl md:text-4xl leading-tight mt-3 mb-3 max-w-[620px]">

                    Bienvenue dans l'agenda de{" "}

                    <span className="text-[#f5c84c]">
                        tous
                    </span>

                    {" "}les bons moments.

                </h1>


                <p className="text-white/40 text-[15px] leading-relaxed max-w-[520px] mb-8">

                    Soirées, workshops, tournois, galas :
                    réserve ta place en quelques secondes et retrouve
                    tous tes billets ici.

                </p>


                {/* TAB */}

                <div className="inline-flex gap-1 p-1 rounded-[12px] bg-[#1d1230] border border-white/10 mb-8">

                    <span
                        className="px-4 py-2 rounded-[9px] text-[13px] font-bold bg-[#f5c84c]"
                        style={{ color: "#241636" }}
                    >
                        Événements
                    </span>

                </div>


                {/* EVENTS */}

                <section className="grid gap-5 mb-14">

                    {events.map((event) => {

                        const placesRestantes =
                            event.nombre_places - event.reservation_count;

                        return (

                            <div
                                key={event.id}
                                className="bg-[#1d1230] border border-white/10 rounded-2xl px-5 pt-[18px] pb-5 flex flex-col"
                            >

                                {/* ERROR éventuel */}

                                {event.error && (
                                    <div className="text-red-500 mt-2">
                                        {event.error}
                                    </div>
                                )}


                                {/* HEADER */}

                                <div className="flex justify-between gap-3">

                                    <h3 className="font-bold text-white text-[16.5px] mb-1">
                                        {event.title}
                                    </h3>


                                    {placesRestantes > 0 ? (

                                        <div className="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-[#f5c84c]/15 text-[#f5c84c]">
                                            Ouvert
                                        </div>

                                    ) : (

                                        <div className="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-red-600/15 text-red-600">
                                            Complet
                                        </div>

                                    )}

                                </div>


                                {/* DESCRIPTION */}

                                <p className="text-white/40 text-[13px] leading-relaxed mb-3">
                                    {event.description}
                                </p>


                                {/* INFOS */}

                                <div className="flex flex-wrap gap-x-4 gap-y-2">

                                    <span className="text-[12.5px] text-white/70">
                                         {event.date}
                                    </span>

                                    <span className="text-[12.5px] text-white/70">
                                         {event.heure}
                                    </span>

                                    <span className="text-[12.5px] text-white/70">
                                         {event.lieu}
                                    </span>

                                </div>


                                <div className="h-[1px] bg-white/10 my-4" />


                                {/* PLACES */}

                                <div className="mb-1">

                                    <div className="flex justify-between text-[12.5px] mb-1.5">

                                        <span className="text-white font-semibold">
                                            {event.nombre_places - event.reservation_count} places restantes
                                        </span>

                                        <span className="text-white/40">
                                            Capacité : {event.nombre_places}
                                        </span>

                                    </div>

                                </div>


                                {/* PRICE + RESERVE */}

                                <div className="flex items-center justify-between mt-4">

                                    <span className="font-bold text-[#f5c84c] text-lg">
                                        {event.prix} MAD
                                    </span>

                                {reservationMessage[event.id] && (
                <p className="text-red-500 text-sm font-medium mt-2">
                    {reservationMessage[event.id]}
                </p>
            )}
                                    {placesRestantes > 0 ? (

                                        <button
                                            onClick={() => handleReservation(event.id)}
                                            className="h-9 px-4 rounded-[9px] font-bold text-[13px] bg-[#f5c84c]"
                                            style={{ color: "#241636" }}
                                        >
                                            Réserver ma place
                                        </button>
                                        

                                    ) : (

                                        <button
                                            disabled
                                            className="h-9 px-4 rounded-[9px] font-bold text-[13px] bg-white/10 text-white/30 cursor-not-allowed"
                                        >
                                            Complet
                                        </button>

                                    )}
                          
                                </div>

                            </div>

                        );

                    })}

                </section>


                {/* MES BILLETS */}

                <h2 className="font-bold text-white text-xl mb-4">
                    Mes billets
                </h2>


                <section className="grid gap-5">

                    {reservations.map((ticket) => (

                        <div
                            key={ticket.id}
                            className="bg-white rounded-[16px] px-5 pt-4 pb-4 relative overflow-hidden"
                        >

                            <div className="flex items-center justify-between mb-2">

                                <p className="text-pink-500 font-bold text-[10.5px] tracking-wider">
                                    ACCÈS RAPIDE
                                </p>

                                <span>
                                    🎟️
                                </span>

                            </div>


                            <h3
                                className="font-extrabold text-[17px] mb-1"
                                style={{ color: "#241636" }}
                            >
                                {ticket.event?.title}·{" "}
                            </h3>


                            <p
                                className="text-[12.5px] mb-3"
                                style={{ color: "#6b6178" }}
                            >
                                {ticket.event.data} ·{" "}
                                {ticket.event.heure} ·{" "}
                                {ticket.event.lieu}
                            </p>


                            <div className="h-[1px] bg-gray-300 my-3" />


                            <div className="flex items-center justify-between">

                                <span
                                    className="text-[10.5px] uppercase tracking-wider font-semibold"
                                    style={{ color: "#6b6178" }}
                                >
                                    Scan pour entrer
                                </span>

                                <span
                                    className="font-mono text-[12px] font-semibold"
                                    style={{ color: "#241636" }}
                                >
                                    {ticket.code}
                                </span>

                            </div>

                        </div>

                    ))}

                </section>

            </main>

        </div>
    );
}

export default EtudiantDashboard;