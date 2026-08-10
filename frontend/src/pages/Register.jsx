import { Link } from "react-router-dom";

function Register() {
  return (
<div className="min-h-screen w-full bg-[#241636] grid grid-cols-1 lg:grid-cols-2 items-center gap-32 px-6 lg:px-16 py-10 mx-auto ">
      {/* Left: pitch */}
      <div>
        
        <div className="flex items-center gap-2.5 text-[#f5a623] font-semibold text-xs tracking-wider mb-5">
          <span className="w-[22px] h-[1.5px] bg-[#f5a623] inline-block"></span>
          REJOINDRE BDE-EVENTS
        </div>

        <h1
          className="font-extrabold text-[#fffdf9] leading-[1.1] mb-5"
          style={{ fontSize: "42px" }}
        >
          Crée ton compte,{" "}
          <span className="text-[#f5a623]">réserve</span> en un clic.
        </h1>

        <p className="text-[#b9afc4] text-[15px] leading-relaxed max-w-[420px] mb-8">
          Un seul compte pour t'inscrire à toutes les soirées, workshops et
          tournois du BDE, et retrouver tes billets numériques à tout moment.
        </p>

        <div className="flex flex-col gap-4 max-w-[380px]">

          {/* Feature 1 */}
          <div className="flex items-start gap-3">
            <div className="w-8 h-8 rounded-[9px] bg-[#f5a623]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg
                width="15"
                height="15"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#f5a623"
                strokeWidth="2"
              >
                <path d="M20 6L9 17l-5-5" />
              </svg>
            </div>

            <p className="text-[#fffdf9] text-[13.5px] leading-relaxed mt-1">
              Réservation en quelques secondes, sans ressaisir tes infos à
              chaque fois.
            </p>
          </div>

          {/* Feature 2 */}
          <div className="flex items-start gap-3">
            <div className="w-8 h-8 rounded-[9px] bg-[#f5a623]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg
                width="15"
                height="15"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#f5a623"
                strokeWidth="2"
              >
                <path d="M20 6L9 17l-5-5" />
              </svg>
            </div>

            <p className="text-[#fffdf9] text-[13.5px] leading-relaxed mt-1">
              Tous tes billets numériques rangés au même endroit.
            </p>
          </div>

          {/* Feature 3 */}
          <div className="flex items-start gap-3">
            <div className="w-8 h-8 rounded-[9px] bg-[#f5a623]/15 flex items-center justify-center flex-shrink-0 mt-0.5">
              <svg
                width="15"
                height="15"
                viewBox="0 0 24 24"
                fill="none"
                stroke="#f5a623"
                strokeWidth="2"
              >
                <path d="M20 6L9 17l-5-5" />
              </svg>
            </div>

            <p className="text-[#fffdf9] text-[13.5px] leading-relaxed mt-1">
              Alerte dès qu'un nouvel événement s'ouvre aux inscriptions.
            </p>
          </div>

        </div>
      </div>

      {/* Right: form card */}
      <div
        className="bg-[#fffdf9] rounded-2xl px-7 pt-7 pb-8 w-full max-w-[420px] justify-self-center"
        style={{
          boxShadow: "0 30px 60px rgba(0,0,0,0.35)",
        }}
      >
        <p className="text-[#ec4c82] font-bold text-[11px] tracking-wider m-0">
          ACCÈS RAPIDE
        </p>

        <h2
          className="font-extrabold text-2xl mt-2 mb-1"
          style={{ color: "#241636" }}
        >
          Créer mon compte
        </h2>

        <p
          className="text-[13.5px] mb-6 mt-0"
          style={{ color: "#6b6178" }}
        >
          Quelques infos et tu es prêt à réserver.
        </p>

        <form>

          {/* Nom */}
          <div className="mb-3.5">
            <label
              className="block text-xs font-semibold mb-1.5"
              style={{ color: "#4a4157" }}
            >
              Nom
            </label>

            <input
              type="text"
              placeholder="Bouzidi"
              name="name"
              className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
              style={{
                borderColor: "#ded5c4",
                background: "#fffdf9",
                color: "#241636",
              }}
            />
          </div>

          {/* Rôle */}
          <div className="mb-5">
            <label
              className="block text-xs font-semibold mb-1.5"
              style={{ color: "#4a4157" }}
            >
              Rôle
            </label>

            <select
              name="role"
              className="w-full h-10 rounded-[9px] border px-3 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-emerald-500"
              style={{
                borderColor: "#ded5c4",
                background: "#fffdf9",
                color: "#241636",
              }}
            >
              <option value="">Choisissez votre rôle</option>
              <option value="etudiant">Étudiant</option>
              <option value="bde">BDE</option>
            </select>
          </div>

          {/* Email */}
          <div className="mb-3.5">
            <label
              className="block text-xs font-semibold mb-1.5"
              style={{ color: "#4a4157" }}
            >
              Email
            </label>

            <input
              type="email"
              placeholder="sara.bouzidi@enaa.ma"
              name="email"
              className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
              style={{
                borderColor: "#ded5c4",
                background: "#fffdf9",
                color: "#241636",
              }}
            />
          </div>

          {/* Mot de passe */}
          <div className="mb-3.5">
            <label
              className="block text-xs font-semibold mb-1.5"
              style={{ color: "#4a4157" }}
            >
              Mot de passe
            </label>

            <input
              type="password"
              placeholder="8 caractères minimum"
              name="password"
              className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
              style={{
                borderColor: "#ded5c4",
                background: "#fffdf9",
                color: "#241636",
              }}
            />
          </div>

          {/* Confirmation */}
          <div className="mb-5">
            <label
              className="block text-xs font-semibold mb-1.5"
              style={{ color: "#4a4157" }}
            >
              Confirmer le mot de passe
            </label>

            <input
              type="password"
              placeholder="Ressaisis ton mot de passe"
              name="password_confirmation"
              className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
              style={{
                borderColor: "#ded5c4",
                background: "#fffdf9",
                color: "#241636",
              }}
            />
          </div>

          {/* Checkbox */}
          <label className="flex items-start gap-2.5 mb-6">
            <input type="checkbox" className="mt-0.5" />

            <span
              className="text-[12.5px] leading-relaxed"
              style={{ color: "#6b6178" }}
            >
              J'accepte que mes informations soient utilisées pour gérer mes
              inscriptions aux événements du BDE.
            </span>
          </label>

          {/* Button */}
          <button
            type="submit"
            className="w-full h-11 rounded-[10px] bg-[#f5a623] font-bold text-sm flex items-center justify-center gap-2"
            style={{ color: "#241636" }}
          >
            Créer mon compte

            <svg
              width="16"
              height="16"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              strokeWidth="2.5"
            >
              <path d="M5 12h14M13 6l6 6-6 6" />
            </svg>
          </button>

          {/* Login */}
          <p
            className="text-center text-[12.5px] mt-4"
            style={{ color: "#6b6178" }}
          >
            Déjà un compte ?{" "}

            <Link
              to="/login"
              className="font-semibold"
              style={{ color: "#ec4c82" }}
            >
              Se connecter
            </Link>
          </p>

        </form>
      </div>

    </div>
  );
}

export default Register;