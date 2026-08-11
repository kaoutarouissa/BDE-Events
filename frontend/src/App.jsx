import { BrowserRouter, Routes, Route } from "react-router-dom";

import Home from "./pages/Home";
import Login from "./pages/Login";
import Register from "./pages/Register";
import BdeDashboard from "./pages/BdeDashboard";
import EtudiantDashboard from "./pages/EtudiantDashboard";
function App() {
    return (
        <BrowserRouter>
            <Routes>

                <Route path="/" element={<Home />} />

                <Route path="/login" element={<Login />} />
                <Route path="/register" element={<Register/>} />
                <Route path="/bde-dashboard" element={<BdeDashboard />} />

            <Route path="/etudiant-dashboard" element={<EtudiantDashboard />} />
            </Routes>
        </BrowserRouter>
    );
}

export default App;