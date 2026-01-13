<style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap');
        body { font-family: 'Inter', sans-serif; }

        /* Custom CSS for the Flip Effect */
        .perspective-1000 {
            perspective: 1000px;
        }
        .transform-style-3d {
            transform-style: preserve-3d;
        }
        .backface-hidden {
            backface-visibility: hidden;
            -webkit-backface-visibility: hidden; /* Safari support */
        }
        .rotate-y-180 {
            transform: rotateY(180deg);
        }
        /* Class to flip the inner container on hover */
        .group:hover .flip-card-inner {
            transform: rotateY(180deg);
        }
    </style>

<section class="py-20 px-6 md:px-12 bg-white">
        <div class="container mx-auto max-w-7xl">
            
            <div class="text-center mb-16">
                <h4 class="text-sm font-bold tracking-widest text-gray-500 uppercase mb-3">
                    Our Core Expertise
                </h4>
                <h2 class="text-4xl md:text-5xl font-extrabold text-black tracking-tight">
                    Innovating Solutions in Our Specialty Fields
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div class="group h-[450px] w-full perspective-1000 cursor-pointer">
                    <div class="flip-card-inner relative h-full w-full transition-transform duration-700 transform-style-3d shadow-xl rounded-sm">
                        
                        <div class="absolute inset-0 h-full w-full backface-hidden bg-white">
                            <div class="h-full w-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                                 style="background-image: url('https://images.unsplash.com/photo-1523895665936-7bfe172b757d?q=80&w=2070&auto=format&fit=crop');">
                                <div class="absolute inset-0 bg-black/40"></div>
                            </div>
                            <div class="absolute bottom-8 left-0 w-[90%] bg-white py-6 px-6 shadow-lg">
                                <div class="absolute -top-6 right-8 w-14 h-14 bg-orange-600 rounded-full flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-4.5 6.01 6.01 0 00-1.5 4.5M13.5 12.75l-3-3m0 0l-3 3" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 leading-tight pr-4">Textile/Technical Textile</h3>
                            </div>
                        </div>

                        <div class="absolute inset-0 h-full w-full backface-hidden rotate-y-180 bg-gray-900 text-white p-8 flex flex-col justify-center items-center text-center">
                            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-6 shadow-lg animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a6.01 6.01 0 001.5-4.5 6.01 6.01 0 00-1.5 4.5M13.5 12.75l-3-3m0 0l-3 3" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-orange-500">Textile Engineering</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We specialize in advanced weaving technologies and technical fabric solutions. From raw material processing to finished goods, we drive innovation in the textile industry.
                            </p>
                            <a href="#" class="mt-8 px-6 py-2 border border-orange-500 text-orange-500 font-semibold rounded-full hover:bg-orange-600 hover:text-white transition-colors">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>

                <div class="group h-[450px] w-full perspective-1000 cursor-pointer">
                    <div class="flip-card-inner relative h-full w-full transition-transform duration-700 transform-style-3d shadow-xl rounded-sm">
                        
                        <div class="absolute inset-0 h-full w-full backface-hidden bg-white">
                            <div class="h-full w-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                                 style="background-image: url('https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2070&auto=format&fit=crop');">
                                <div class="absolute inset-0 bg-black/40"></div>
                            </div>
                            <div class="absolute bottom-8 left-0 w-[90%] bg-white py-6 px-6 shadow-lg">
                                <div class="absolute -top-6 right-8 w-14 h-14 bg-orange-600 rounded-full flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 leading-tight pr-4">Machine Manufacturing</h3>
                            </div>
                        </div>

                        <div class="absolute inset-0 h-full w-full backface-hidden rotate-y-180 bg-gray-900 text-white p-8 flex flex-col justify-center items-center text-center">
                            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-6 shadow-lg animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.34 15.84c-.688-.06-1.386-.09-2.09-.09H7.5a4.5 4.5 0 110-9h.75c.704 0 1.402-.03 2.09-.09m0 9.18c.253.962.584 1.892.985 2.783.247.55.06 1.21-.463 1.511l-.657.38c-.551.318-1.26.117-1.527-.461a20.845 20.845 0 01-1.44-4.282m3.102.069a18.03 18.03 0 01-.59-4.59c0-1.586.205-3.124.59-4.59m0 9.18a23.848 23.848 0 018.835 2.535M10.34 6.66a23.847 23.847 0 008.835-2.535m0 0A23.74 23.74 0 0018.795 3m.38 1.125a23.91 23.91 0 011.014 5.395m-1.014 8.855c-.118.38-.245.754-.38 1.125m.38-1.125a23.91 23.91 0 001.014-5.395m0-3.46c.495.413.811 1.035.811 1.73 0 .695-.316 1.317-.811 1.73m0-3.46a24.347 24.347 0 010 3.46" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-orange-500">Precision Engineering</h3>
                            <p class="text-gray-300 leading-relaxed">
                                Our capabilities in machine manufacturing ensure high efficiency and durability. We build custom heavy machinery for industrial scale operations.
                            </p>
                            <a href="#" class="mt-8 px-6 py-2 border border-orange-500 text-orange-500 font-semibold rounded-full hover:bg-orange-600 hover:text-white transition-colors">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>

                <div class="group h-[450px] w-full perspective-1000 cursor-pointer">
                    <div class="flip-card-inner relative h-full w-full transition-transform duration-700 transform-style-3d shadow-xl rounded-sm">
                        
                        <div class="absolute inset-0 h-full w-full backface-hidden bg-white">
                            <div class="h-full w-full bg-cover bg-center grayscale group-hover:grayscale-0 transition-all duration-500"
                                 style="background-image: url('https://images.unsplash.com/photo-1583258292688-d0213dc5a3a8?q=80&w=1974&auto=format&fit=crop');">
                                <div class="absolute inset-0 bg-black/40"></div>
                            </div>
                            <div class="absolute bottom-8 left-0 w-[90%] bg-white py-6 px-6 shadow-lg">
                                <div class="absolute -top-6 right-8 w-14 h-14 bg-orange-600 rounded-full flex items-center justify-center shadow-lg">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900 leading-tight pr-4">FMCGs</h3>
                            </div>
                        </div>

                        <div class="absolute inset-0 h-full w-full backface-hidden rotate-y-180 bg-gray-900 text-white p-8 flex flex-col justify-center items-center text-center">
                            <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mb-6 shadow-lg animate-pulse">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-white">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold mb-4 text-orange-500">Consumer Goods</h3>
                            <p class="text-gray-300 leading-relaxed">
                                We help streamline the FMCG supply chain, from packaging design to retail distribution strategies, ensuring products reach the market faster.
                            </p>
                            <a href="#" class="mt-8 px-6 py-2 border border-orange-500 text-orange-500 font-semibold rounded-full hover:bg-orange-600 hover:text-white transition-colors">
                                Learn More
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>