
        
function BdeDashboard() {
  return (
    <div className="glow absolute w-[420px] h-[420px] rounded-full -top-40 -right-32 pointer-events-none">

      {/* Header */}
      <header
        className="sticky top-0 z-20 bg-bdeep/70 border-b border-line"
        style={{ backdropFilter: "blur(10px)" }}
      >
        <div className="max-w-[1080px] mx-auto px-6 py-4 flex items-center justify-between">

          <div className="flex items-center gap-2.5">
            <div
              className="w-[30px] h-[30px] rounded-[9px] bg-gold flex items-center justify-center font-sora font-extrabold text-sm"
              style={{ color: "#120a20" }}
            >
              B
            </div>

            <span className="font-sora font-bold text-cream text-base">
              BDE-Events
            </span>
          </div>

          <div className="flex items-center gap-3">
            <div className="flex items-center gap-2.5">
              <span className="text-cream text-[13px]">
                <span className="text-muted">Bienvenue,</span>{" "}
                <span className="font-semibold">Utilisateur</span>
              </span>
            </div>

            <button
              type="button"
              className="flex items-center gap-2 px-4 py-2 rounded-[10px] border border-line text-cream text-[13px] font-medium"
            >
              Déconnexion
            </button>
          </div>

        </div>
      </header>

      <main className="relative max-w-[1080px] mx-auto px-6 pt-12">

        {/* Hero */}
        <div className="flex items-center gap-2.5 text-gold font-semibold text-xs tracking-wider">
          <span className="w-[22px] h-[1.5px] bg-gold inline-block"></span>
          BUREAU DES ÉLÈVES — ENAA · ADMIN
        </div>

        <h1 className="font-sora font-extrabold text-cream text-3xl md:text-4xl leading-tight mt-3 mb-3 max-w-[620px]">
          Gère tes événements{" "}
          <span className="text-gold">sans</span> prise de tête.
        </h1>

        <p className="text-muted text-[15px] leading-relaxed max-w-[520px] mb-10">
          Publie un événement, suis les inscriptions et garde un œil sur les
          places restantes, en direct, pour chaque soirée, workshop ou tournoi.
        </p>

        {/* Grid */}
        <div
          className="grid gap-6 items-start"
          style={{
            gridTemplateColumns: "minmax(280px, 380px) 1fr",
          }}
        >

          {/* Form */}
          <section className="bg-cream rounded-2xl p-6 sticky top-[88px]">

            <div className="flex items-center justify-between">
              <p className="text-pink font-bold text-[11px] tracking-wider m-0">
                ACCÈS RAPIDE
              </p>

              <div className="w-[30px] h-[30px] rounded-[9px] bg-pink/10 flex items-center justify-center">
                <svg
                  width="16"
                  height="16"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="#ec4c82"
                  strokeWidth="2"
                >
                  <path d="M2 9a3 3 0 1 0 0 6v2a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-2a3 3 0 1 1 0-6V7a2 2 0 0 0-2-2H4a2 2 0 0 0-2 2z" />
                </svg>
              </div>
            </div>

            <h2
              className="font-sora font-extrabold text-2xl mt-2.5 mb-1"
              style={{ color: "#241636" }}
            >
              Créer un événement.
            </h2>

            <p
              className="text-[13.5px] leading-snug m-0"
              style={{ color: "#6b6178" }}
            >
              Remplis les infos ci-dessous pour le rendre visible et ouvert aux
              inscriptions.
            </p>

            <form className="mt-5">

              <div className="mb-3.5">
                <label
                  className="block text-xs font-semibold mb-1.5"
                  style={{ color: "#4a4157" }}
                >
                  Titre de l'événement
                </label>

                <input
                  type="text"
                  placeholder="Soirée d'intégration ENAA"
                  className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                  style={{
                    borderColor: "#ded5c4",
                    background: "#fffdf9",
                    color: "#241636",
                  }}
                />
              </div>

              <div className="mb-3.5">
                <label
                  className="block text-xs font-semibold mb-1.5"
                  style={{ color: "#4a4157" }}
                >
                  Description
                </label>

                <textarea
                  rows="3"
                  placeholder="Quelques lignes pour donner envie de venir."
                  className="w-full rounded-[9px] border px-3 py-2 text-[13.5px] resize-none"
                  style={{
                    borderColor: "#ded5c4",
                    background: "#fffdf9",
                    color: "#241636",
                  }}
                ></textarea>
              </div>

              <div className="flex gap-3">

                <div className="mb-3.5 flex-1">
                  <label
                    className="block text-xs font-semibold mb-1.5"
                    style={{ color: "#4a4157" }}
                  >
                    Date
                  </label>

                  <input
                    type="date"
                    className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                    style={{
                      borderColor: "#ded5c4",
                      background: "#fffdf9",
                      color: "#241636",
                    }}
                  />
                </div>

                <div className="mb-3.5 flex-1">
                  <label
                    className="block text-xs font-semibold mb-1.5"
                    style={{ color: "#4a4157" }}
                  >
                    Heure
                  </label>

                  <input
                    type="time"
                    className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                    style={{
                      borderColor: "#ded5c4",
                      background: "#fffdf9",
                      color: "#241636",
                    }}
                  />
                </div>

              </div>

              <div className="mb-3.5">
                <label
                  className="block text-xs font-semibold mb-1.5"
                  style={{ color: "#4a4157" }}
                >
                  Lieu
                </label>

                <input
                  type="text"
                  placeholder="Le Hangar, Casablanca"
                  className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                  style={{
                    borderColor: "#ded5c4",
                    background: "#fffdf9",
                    color: "#241636",
                  }}
                />
              </div>

              <div className="flex gap-3">

                <div className="mb-3.5 flex-1">
                  <label
                    className="block text-xs font-semibold mb-1.5"
                    style={{ color: "#4a4157" }}
                  >
                    Prix (MAD)
                  </label>

                  <input
                    type="number"
                    min="0"
                    placeholder="0"
                    className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                    style={{
                      borderColor: "#ded5c4",
                      background: "#fffdf9",
                      color: "#241636",
                    }}
                  />
                </div>

                <div className="mb-3.5 flex-1">
                  <label
                    className="block text-xs font-semibold mb-1.5"
                    style={{ color: "#4a4157" }}
                  >
                    Jauge maximale
                  </label>

                  <input
                    type="number"
                    min="1"
                    placeholder="250"
                    className="w-full h-10 rounded-[9px] border px-3 text-[13.5px]"
                    style={{
                      borderColor: "#ded5c4",
                      background: "#fffdf9",
                      color: "#241636",
                    }}
                  />
                </div>

              </div>

              <button
                type="submit"
                className="w-full h-11 mt-1.5 rounded-[10px] bg-gold font-sora font-bold text-sm flex items-center justify-center gap-2"
                style={{ color: "#241636" }}
              >
                <svg
                  width="16"
                  height="16"
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

          {/* Dashboard list */}
          <section className="min-w-0">

            <div className="flex items-center justify-between mb-4">
              <h2 className="font-sora font-bold text-cream text-xl m-0">
                Tableau de bord
              </h2>
            </div>

            <div className="flex flex-col gap-4">

              {/* Event Card */}
              <div className="bg-card border border-line rounded-2xl px-5 pt-[18px] pb-4">

                <div className="flex justify-between gap-3">

                  <div className="flex-1 min-w-0">
                    <h3 className="font-sora font-bold text-cream text-[16.5px] mb-1 mt-0">
                      Soirée d'intégration ENAA
                    </h3>

                    <p className="text-muted text-[13px] leading-relaxed m-0">
                      Quelques lignes sur l'événement.
                    </p>
                  </div>

                  <div className="flex-shrink-0 h-[22px] px-2.5 rounded-full text-[11px] font-bold flex items-center bg-gold/15 text-gold">
                    Ouvert
                  </div>

                </div>

                <div className="flex flex-wrap gap-x-4 gap-y-2 mt-3">

                  <span className="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                    Date
                  </span>

                  <span className="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                    Heure
                  </span>

                  <span className="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                    Lieu
                  </span>

                  <span className="flex items-center gap-1.5 text-[12.5px] text-creamdim">
                    Prix MAD
                  </span>

                </div>

                <div className="barcode h-[1px] my-4"></div>

                <div className="flex items-center gap-3.5">

                  <div className="flex-1">

                    <div className="flex justify-between items-center mt-3">

                      <span className="px-3 py-1 rounded-full bg-green-100 text-green-700 text-xs font-semibold">
                        100 places restantes
                      </span>

                      <span className="px-3 py-1 rounded-full bg-gray-100 text-gray-600 text-xs font-medium">
                        Capacité : 250
                      </span>

                    </div>

                  </div>

                </div>

              </div>

            </div>
          </section>

        </div>
      </main>
    </div>
  )
};

export default BdeDashboard;
