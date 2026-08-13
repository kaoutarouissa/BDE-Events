import { Navigate } from "react-router-dom";

function ProtectedAdminRoute({ children }) {

    const token = localStorage.getItem("token");
    const user = JSON.parse(localStorage.getItem("user"));

    // Pas connecté
    if (!token) {
        return <Navigate to="/login" replace />;
    }

    // Connecté mais étudiant
    if (user?.role !== "bde") {
        return (
            <div className="min-h-screen flex items-center justify-center bg-[#120a20] text-white">
                <div className="text-center">

                    <h1 className="text-7xl font-bold text-red-500">
                        403
                    </h1>

                    <h2 className="mt-3 text-2xl font-bold">
                        Forbidden
                    </h2>

                    <p className="mt-2 text-white/50">
                        Vous n'avez pas accès à cette page.
                    </p>

                </div>
            </div>
        );
    }

    // BDE autorisé
    return children;
}

export default ProtectedAdminRoute;