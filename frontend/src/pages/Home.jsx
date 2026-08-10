import Background from "../components/baground";
import Navbar from "../components/Navbar";
import Hero from "../components/Hero";
import TicketCard from "../components/TicketCard";

function Home() {
    return (
        <>
            <Background />
            <Navbar />
            <Hero />
            {/* <TicketCard/> */}
        </>
    );
}

export default Home;