
function Navbar() {
  return (
    <header className="relative z-10 flex items-center justify-between px-8 lg:px-16 py-8">
      <div className="flex items-center gap-3">
        <div className="w-10 h-10 rounded-xl bg-[var(--amber)] flex items-center justify-center display font-bold text-[var(--ink)] text-lg stamp">B</div>
        <span className="display text-white font-semibold tracking-tight text-lg">BDE-Events</span>
      </div>
      <a href="" className="text-sm text-white/70 hover:text-white transition px-5 py-2.5 rounded-full border border-white/15 hover:border-white/40">
        Se connecter
      </a> 
    </header>
  )
}

export default Navbar