import { useState } from 'react'
import Background from "./components/baground";
import Navbar from "./components/Navbar";
import Hero from "./components/Hero";
import Events from "./components/Events";
import About from "./components/About";
import Contact from "./components/Contact";


function App() {
  return (
    <div className="min-h-screen overflow-x-hidden relative bg-[var(--ink)]">
      {/* Background Elements */}
      <Background />
      
      {/* Navbar */}
      <Navbar />
      
      {/* Hero Section */}
      <Hero />
      
      {/* Main Content Container */}
      <div className="relative max-w-7xl mx-auto px-8 lg:px-16 py-20
                  rounded-[40px]
                  bg-white/5
                  backdrop-blur-2xl
                  border border-white/10
                  shadow-2xl
                  overflow-hidden">
        
        {/* Blur Effects */}
        <div className="absolute -top-20 -right-20 w-72 h-72 bg-purple-500/20 rounded-full blur-3xl"></div>
        <div className="absolute -bottom-20 -left-20 w-72 h-72 bg-amber-400/20 rounded-full blur-3xl"></div>
        
        <div className="relative z-10 space-y-24">
          {/* Events Section */}
          <Events />
          
          {/* About Section */}
          <About />
          
          {/* Contact Section */}
          <Contact />
        </div>
      </div>
    </div>
  )
}

export default App

