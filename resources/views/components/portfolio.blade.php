<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;700;900&display=swap');

        body {
            font-family: 'Inter', sans-serif;
        }
    </style>
</head>

@include('components.header')
<section class="py-20 bg-white overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center mb-12">
            <p class="text-sm font-bold text-gray-400 uppercase tracking-widest mb-2">PORTFOLIO</p>
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tight">
                Creative Services
            </h2>
        </div>

        <div class="relative">
            
            <div? id="portfolio-track" class="flex gap-6 transition-transform duration-700 ease-out will-change-transform py-4">
                
                <div class="w-full md:w-[calc(33.333%-16px)] flex-shrink-0 relative group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden h-[450px] relative shadow-md">
                        <img src="https://www.abcstudiogroup.com/wp-content/uploads/2025/07/Frame-13.png" 
                             alt="Fabric Conditioner" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-end p-8 opacity-0 transition-all duration-300 group-hover:opacity-100">
                            <h3 class="text-2xl font-bold text-white mb-1 transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">Soft & Fresh</h3>
                            <p class="text-[#ea580c] font-medium uppercase tracking-wider text-sm transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0 delay-75">Packaging Design</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[calc(33.333%-16px)] flex-shrink-0 relative group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden h-[450px] relative shadow-md">
                        <img src="https://www.abcstudiogroup.com/wp-content/uploads/2025/07/Frame-14.png" 
                             alt="Vikram Hygiene" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-end p-8 opacity-0 transition-all duration-300 group-hover:opacity-100">
                            <h3 class="text-2xl font-bold text-white mb-1 transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">Vikram Hygiene</h3>
                            <p class="text-[#ea580c] font-medium uppercase tracking-wider text-sm transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0 delay-75">Corporate Profile</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[calc(33.333%-16px)] flex-shrink-0 relative group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden h-[450px] relative shadow-md">
                        <img src="https://www.abcstudiogroup.com/wp-content/uploads/2025/07/1c6a5509baeb6199b393826fb3844dabb2dcd472-1.png" 
                             alt="Xotic Xosit" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-end p-8 opacity-0 transition-all duration-300 group-hover:opacity-100">
                            <h3 class="text-2xl font-bold text-white mb-1 transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">Xotic Xosit</h3>
                            <p class="text-[#ea580c] font-medium uppercase tracking-wider text-sm transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0 delay-75">Brand Identity</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[calc(33.333%-16px)] flex-shrink-0 relative group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden h-[450px] relative shadow-md">
                        <img src="https://images.unsplash.com/photo-1600607686527-6fb886090705?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Branding Project" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-end p-8 opacity-0 transition-all duration-300 group-hover:opacity-100">
                            <h3 class="text-2xl font-bold text-white mb-1 transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">Urban Architecture</h3>
                            <p class="text-[#ea580c] font-medium uppercase tracking-wider text-sm transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0 delay-75">Photography</p>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[calc(33.333%-16px)] flex-shrink-0 relative group cursor-pointer">
                    <div class="rounded-2xl overflow-hidden h-[450px] relative shadow-md">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Marketing Strategy" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110">
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/60 to-black/30 flex flex-col items-center justify-end p-8 opacity-0 transition-all duration-300 group-hover:opacity-100">
                            <h3 class="text-2xl font-bold text-white mb-1 transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0">Digital Growth</h3>
                            <p class="text-[#ea580c] font-medium uppercase tracking-wider text-sm transform translate-y-4 transition-transform duration-300 group-hover:translate-y-0 delay-75">Marketing Strategy</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-gray-50 overflow-hidden">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="text-center mb-20 relative">
            <span class="text-[#ea580c] font-bold tracking-widest uppercase text-sm mb-2 block">Our Work</span>
            <h2 class="text-5xl md:text-6xl font-black text-gray-900 tracking-tighter relative z-10">
                IT & Digital <br>
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-900 to-gray-500">Excellence</span>
            </h2>
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 text-9xl font-black text-gray-200 opacity-20 whitespace-nowrap select-none -z-0 pointer-events-none">
                DIGITAL
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 perspective-1000">

            <div class="group relative h-[500px] w-full transition-all duration-700 ease-out transform hover:-translate-y-4">
                <div class="absolute inset-0 bg-gradient-to-br from-green-900 to-green-700 rounded-3xl shadow-2xl transform transition-transform duration-700 group-hover:rotate-1 group-hover:scale-105"></div>
                
                <div class="relative h-full flex flex-col items-center justify-center p-8 z-10">
                    <div class="absolute top-8 left-8 text-white opacity-0 transform -translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 z-20">
                        <h3 class="text-2xl font-bold">Gurukrupa</h3>
                        <p class="text-green-200 text-sm">Web Development</p>
                    </div>

                    <div class="relative w-full transform transition-all duration-700 group-hover:scale-110 group-hover:-translate-y-6">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-green-400 blur-[80px] opacity-40 transition-opacity duration-500 group-hover:opacity-60"></div>
                        
                        <img src="https://images.unsplash.com/photo-1496181133206-80ce9b88a853?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Gurukrupa Website" 
                             class="relative z-10 rounded-lg shadow-2xl border-4 border-gray-800 bg-gray-900 animate-float">
                    </div>

                    <a href="#" class="absolute bottom-10 px-8 py-3 bg-white text-green-900 font-bold rounded-full shadow-lg transform translate-y-8 opacity-0 transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100 hover:bg-green-50">
                        View Project
                    </a>
                </div>
            </div>

            <div class="group relative h-[500px] w-full transition-all duration-700 ease-out transform hover:-translate-y-4 lg:mt-12"> <div class="absolute inset-0 bg-gradient-to-br from-orange-900 to-yellow-700 rounded-3xl shadow-2xl transform transition-transform duration-700 group-hover:-rotate-1 group-hover:scale-105"></div>
                
                <div class="relative h-full flex flex-col items-center justify-center p-8 z-10">
                    <div class="absolute top-8 left-8 text-white opacity-0 transform -translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 z-20">
                        <h3 class="text-2xl font-bold">Maruti Textiles</h3>
                        <p class="text-orange-200 text-sm">Digital Branding</p>
                    </div>

                    <div class="relative w-full transform transition-all duration-700 group-hover:scale-110 group-hover:-translate-y-6">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-orange-400 blur-[80px] opacity-40 transition-opacity duration-500 group-hover:opacity-60"></div>
                        
                        <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="Maruti Website" 
                             class="relative z-10 rounded-lg shadow-2xl border-4 border-gray-800 bg-gray-900 animate-float-delayed">
                    </div>

                    <a href="#" class="absolute bottom-10 px-8 py-3 bg-white text-orange-900 font-bold rounded-full shadow-lg transform translate-y-8 opacity-0 transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100 hover:bg-orange-50">
                        View Project
                    </a>
                </div>
            </div>

            <div class="group relative h-[500px] w-full transition-all duration-700 ease-out transform hover:-translate-y-4">
                <div class="absolute inset-0 bg-gradient-to-br from-red-900 to-red-700 rounded-3xl shadow-2xl transform transition-transform duration-700 group-hover:rotate-1 group-hover:scale-105"></div>
                
                <div class="relative h-full flex flex-col items-center justify-center p-8 z-10">
                    <div class="absolute top-8 left-8 text-white opacity-0 transform -translate-y-4 transition-all duration-500 group-hover:opacity-100 group-hover:translate-y-0 z-20">
                        <h3 class="text-2xl font-bold">SteriAttire</h3>
                        <p class="text-red-200 text-sm">eCommerce</p>
                    </div>

                    <div class="relative w-full transform transition-all duration-700 group-hover:scale-110 group-hover:-translate-y-6">
                        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-48 h-48 bg-red-400 blur-[80px] opacity-40 transition-opacity duration-500 group-hover:opacity-60"></div>
                        
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                             alt="SteriAttire Website" 
                             class="relative z-10 rounded-lg shadow-2xl border-4 border-gray-800 bg-gray-900 animate-float">
                    </div>

                    <a href="#" class="absolute bottom-10 px-8 py-3 bg-white text-red-900 font-bold rounded-full shadow-lg transform translate-y-8 opacity-0 transition-all duration-500 group-hover:translate-y-0 group-hover:opacity-100 hover:bg-red-50">
                        View Project
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-24 bg-white overflow-hidden relative">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-[100px]"></div>
    <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-[#ea580c]/10 rounded-full blur-[100px]"></div>

    <div class="max-w-7xl mx-auto px-6 relative z-10">
        
        <div class="text-center mb-16">
            <span class="text-[#ea580c] font-bold tracking-[0.2em] uppercase text-sm mb-3 block animate-pulse">Showreel</span>
            <h2 class="text-4xl md:text-6xl font-black text-gray-500 tracking-tight">
                Corporate <span class="text-transparent bg-clip-text bg-gradient-to-r from-gray-200 to-red-500 ">Stories</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

            <div class="group relative h-64 md:h-80 rounded-2xl overflow-hidden cursor-pointer transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-yellow-500/20">
                <img src="https://images.unsplash.com/photo-1618220179428-22790b461013?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Raja Furniture" 
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-300 group-hover:bg-black/40"></div>

                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center transform transition-all duration-300 group-hover:scale-125 group-hover:bg-[#ea580c] group-hover:border-[#ea580c]">
                        <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    
                    <div class="absolute bottom-6 text-center transform translate-y-4 opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                        <h3 class="text-xl font-bold text-white">Raja Furniture</h3>
                        <p class="text-yellow-300 text-xs font-medium tracking-wide uppercase mt-1">Brand Commercial</p>
                    </div>
                </div>
            </div>

            <div class="group relative h-64 md:h-80 rounded-2xl overflow-hidden cursor-pointer transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-red-500/20">
                <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="AJY Textile" 
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute inset-0 bg-black/70 transition-opacity duration-300 group-hover:bg-black/50"></div>

                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center transform transition-all duration-300 group-hover:scale-125 group-hover:bg-red-600 group-hover:border-red-600">
                        <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    
                    <div class="absolute bottom-6 text-center transform translate-y-4 opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                        <h3 class="text-xl font-bold text-white">AJY Textile</h3>
                        <p class="text-red-300 text-xs font-medium tracking-wide uppercase mt-1">Technical Textile</p>
                    </div>
                </div>
            </div>

            <div class="group relative h-64 md:h-80 rounded-2xl overflow-hidden cursor-pointer transform transition-all duration-500 hover:-translate-y-2 hover:shadow-2xl hover:shadow-blue-500/20">
                <img src="https://images.unsplash.com/photo-1556742049-0cfed4f7a07d?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80" 
                     alt="Artex" 
                     class="absolute inset-0 w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                
                <div class="absolute inset-0 bg-black/60 transition-opacity duration-300 group-hover:bg-black/40"></div>

                <div class="absolute inset-0 flex flex-col items-center justify-center">
                    <div class="w-16 h-16 rounded-full bg-white/20 backdrop-blur-md border border-white/30 flex items-center justify-center transform transition-all duration-300 group-hover:scale-125 group-hover:bg-blue-600 group-hover:border-blue-600">
                        <svg class="w-6 h-6 text-white ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                    </div>
                    
                    <div class="absolute bottom-6 text-center transform translate-y-4 opacity-0 transition-all duration-300 group-hover:translate-y-0 group-hover:opacity-100">
                        <h3 class="text-xl font-bold text-white">Artex</h3>
                        <p class="text-blue-300 text-xs font-medium tracking-wide uppercase mt-1">Creating Excellence</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<style>
    /* Custom Animation for Levitation */
    @keyframes float {
        0%, 100% { transform: translateY(0); }
        50% { transform: translateY(-10px); }
    }
    @keyframes float-delayed {
        0%, 100% { transform: translateY(-10px); }
        50% { transform: translateY(0); }
    }
    .animate-float {
        animation: float 4s ease-in-out infinite;
    }
    .animate-float-delayed {
        animation: float-delayed 4s ease-in-out infinite;
    }
    
    /* Perspective Class for Depth */
    .perspective-1000 {
        perspective: 1000px;
    }
</style>

<script>
    const track = document.getElementById('portfolio-track');
    let scrollAmount = 0;
    const gap = 24; // Corresponds to gap-6 (24px)
    
    function slideNext() {
        const cardWidth = track.firstElementChild.offsetWidth;
        const totalWidth = track.scrollWidth;
        const containerWidth = track.parentElement.offsetWidth;
        
        // Calculate move distance (Card width + gap)
        const moveDistance = cardWidth + gap;
        
        // Update Scroll Position
        scrollAmount += moveDistance;

        // Check if we reached the end
        if(scrollAmount >= (totalWidth - containerWidth)) {
            scrollAmount = 0; // Reset to start (Loop)
        }

        track.style.transform = `translateX(-${scrollAmount}px)`;
    }

    // Auto Play Logic (Runs every 3 seconds)
    let autoPlay = setInterval(slideNext, 3000);

    // Pause on Hover
    track.parentElement.addEventListener('mouseenter', () => {
        clearInterval(autoPlay);
    });

    // Resume on Mouse Leave
    track.parentElement.addEventListener('mouseleave', () => {
        autoPlay = setInterval(slideNext, 3000);
    });
</script>

@include('components.footer')


</body>

</html>