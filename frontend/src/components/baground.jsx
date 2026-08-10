function Background() {
    return (
        <>
            <div className="absolute inset-0 noise pointer-events-none opacity-40"></div>

            <div className="absolute w-[520px] h-[520px] rounded-full bg-[radial-gradient(circle,rgba(255,107,107,.25),transparent_70%)] -top-40 -right-32 blur-2xl drift-slow"></div>

            <div className="absolute w-[420px] h-[420px] rounded-full bg-[radial-gradient(circle,rgba(255,182,39,.2),transparent_70%)] bottom-0 -left-24 blur-2xl drift"></div>
        </>
    );
}

export default Background;