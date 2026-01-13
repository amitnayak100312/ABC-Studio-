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

<div class="relative w-full">
    
    <div class="relative h-96 md:h-[500px] lg:h-[600px] overflow-hidden">
        
        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-100" data-index="0">
            <img src="https://images.unsplash.com/photo-1497366216548-37526070297c?ixlib=rb-1.2.1&auto=format&fit=crop&w=1950&q=80" 
                 class="absolute block w-full h-full object-cover" alt="Slide 1">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <div class="text-center px-4">
                    <h2 class="text-white text-4xl md:text-6xl font-bold tracking-tight mb-4">Creative Solutions</h2>
                    <p class="text-gray-200 text-lg md:text-xl max-w-2xl mx-auto">We build digital experiences that matter.</p>
                </div>
            </div>
        </div>

        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-index="1">
            <img src="https://images.unsplash.com/photo-1557804506-669a67965ba0?ixlib=rb-1.2.1&auto=format&fit=crop&w=1567&q=80" 
                 class="absolute block w-full h-full object-cover" alt="Slide 2">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <div class="text-center px-4">
                    <h2 class="text-white text-4xl md:text-6xl font-bold tracking-tight mb-4">Grow Your Business</h2>
                    <p class="text-gray-200 text-lg md:text-xl max-w-2xl mx-auto">Strategic branding for the modern world.</p>
                </div>
            </div>
        </div>

        <div class="slide absolute inset-0 transition-opacity duration-1000 ease-in-out opacity-0" data-index="2">
            <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-1.2.1&auto=format&fit=crop&w=1351&q=80" 
                 class="absolute block w-full h-full object-cover" alt="Slide 3">
            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                <div class="text-center px-4">
                    <h2 class="text-white text-4xl md:text-6xl font-bold tracking-tight mb-4">Teamwork & Strategy</h2>
                    <p class="text-gray-200 text-lg md:text-xl max-w-2xl mx-auto">Collaborate with experts to reach your goals.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="absolute z-30 flex -translate-x-1/2 bottom-8 left-1/2 space-x-3">
        <button type="button" class="indicator w-3 h-3 rounded-full bg-white transition-all duration-300" onclick="goToSlide(0)"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300" onclick="goToSlide(1)"></button>
        <button type="button" class="indicator w-3 h-3 rounded-full bg-white/50 hover:bg-white transition-all duration-300" onclick="goToSlide(2)"></button>
    </div>

    <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="prevSlide()">
        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/30 group-hover:bg-black/50 transition-colors backdrop-blur-sm">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
        </span>
    </button>
    
    <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" onclick="nextSlide()">
        <span class="inline-flex items-center justify-center w-12 h-12 rounded-full bg-black/30 group-hover:bg-black/50 transition-colors backdrop-blur-sm">
            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
        </span>
    </button>
</div>



<section class="py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6">
        
        <div class="mb-16 flex flex-col md:flex-row md:items-end justify-between gap-6">
            <h2 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tight leading-none">
                Our Areas of <br>
                <span class="text-[#ea580c]">Expertise</span>
            </h2>
            <p class="text-gray-500 max-w-md text-sm md:text-base">
                We combine creative strategy with technical precision to dominate these four key sectors.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">

            <div class="group relative h-[450px] overflow-hidden rounded-2xl bg-gray-900 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1556761175-5973dc0f32e7?q=80&w=1632&auto=format&fit=crop" 
                     alt="B2B Catalyst" 
                     class="absolute inset-0 h-full w-full object-cover opacity-60 transition-all duration-700 ease-in-out group-hover:scale-110 group-hover:opacity-100 group-hover:grayscale-0 grayscale">
                
                <div class="absolute inset-0 bg-gradient-to-t from-[#ea580c] via-[#ea580c]/60 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-90"></div>

                <div class="absolute inset-0 flex flex-col justify-between p-8">
                    <span class="text-6xl font-black text-white/10 transition-colors duration-500 group-hover:text-white/30">01</span>
                    
                    <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">B2B <br>Catalyst</h3>
                        <div class="h-1 w-12 bg-white rounded-full transition-all duration-500 group-hover:w-full"></div>
                        <p class="mt-3 text-sm text-white opacity-0 transition-opacity duration-500 delay-100 group-hover:opacity-100">
                            Driving business growth through targeted strategies.
                        </p>
                    </div>
                </div>
            </div>

            <div class="group relative h-[450px] overflow-hidden rounded-2xl bg-gray-900 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1492691527719-9d1e07e534b4?q=80&w=1000&auto=format&fit=crop" 
                     alt="Corporate Video" 
                     class="absolute inset-0 h-full w-full object-cover opacity-60 transition-all duration-700 ease-in-out group-hover:scale-110 group-hover:opacity-100 group-hover:grayscale-0 grayscale">
                
                <div class="absolute inset-0 bg-gradient-to-t from-[#ea580c] via-[#ea580c]/60 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-90"></div>

                <div class="absolute inset-0 flex flex-col justify-between p-8">
                    <span class="text-6xl font-black text-white/10 transition-colors duration-500 group-hover:text-white/30">02</span>
                    
                    <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">Corporate <br>Video</h3>
                        <div class="h-1 w-12 bg-white rounded-full transition-all duration-500 group-hover:w-full"></div>
                        <p class="mt-3 text-sm text-white opacity-0 transition-opacity duration-500 delay-100 group-hover:opacity-100">
                            Visual storytelling that builds brand authority.
                        </p>
                    </div>
                </div>
            </div>

            <div class="group relative h-[450px] overflow-hidden rounded-2xl bg-gray-900 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1573164713988-8665fc963095?q=80&w=1000&auto=format&fit=crop" 
                     alt="Whatsapp Marketing" 
                     class="absolute inset-0 h-full w-full object-cover opacity-60 transition-all duration-700 ease-in-out group-hover:scale-110 group-hover:opacity-100 group-hover:grayscale-0 grayscale">
                
                <div class="absolute inset-0 bg-gradient-to-t from-[#ea580c] via-[#ea580c]/60 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-90"></div>

                <div class="absolute inset-0 flex flex-col justify-between p-8">
                    <span class="text-6xl font-black text-white/10 transition-colors duration-500 group-hover:text-white/30">03</span>
                    
                    <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">Whatsapp <br>Marketing</h3>
                        <div class="h-1 w-12 bg-white rounded-full transition-all duration-500 group-hover:w-full"></div>
                        <p class="mt-3 text-sm text-white opacity-0 transition-opacity duration-500 delay-100 group-hover:opacity-100">
                            Direct connection with your customer base.
                        </p>
                    </div>
                </div>
            </div>

            <div class="group relative h-[450px] overflow-hidden rounded-2xl bg-gray-900 cursor-pointer">
                <img src="https://images.unsplash.com/photo-1611926653458-09294b3142bf?q=80&w=1000&auto=format&fit=crop" 
                     alt="LinkedIn Marketing" 
                     class="absolute inset-0 h-full w-full object-cover opacity-60 transition-all duration-700 ease-in-out group-hover:scale-110 group-hover:opacity-100 group-hover:grayscale-0 grayscale">
                
                <div class="absolute inset-0 bg-gradient-to-t from-[#ea580c] via-[#ea580c]/60 to-transparent opacity-0 transition-opacity duration-500 group-hover:opacity-90"></div>

                <div class="absolute inset-0 flex flex-col justify-between p-8">
                    <span class="text-6xl font-black text-white/10 transition-colors duration-500 group-hover:text-white/30">04</span>
                    
                    <div class="transform translate-y-4 transition-transform duration-500 group-hover:translate-y-0">
                        <h3 class="text-2xl font-bold text-white mb-2 leading-tight">LinkedIn <br>Marketing</h3>
                        <div class="h-1 w-12 bg-white rounded-full transition-all duration-500 group-hover:w-full"></div>
                        <p class="mt-3 text-sm text-white opacity-0 transition-opacity duration-500 delay-100 group-hover:opacity-100">
                            Professional networking and lead generation.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slide');
    const indicators = document.querySelectorAll('.indicator');
    const totalSlides = slides.length;
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide) => {
            slide.classList.remove('opacity-100');
            slide.classList.add('opacity-0');
        });

        indicators.forEach((dot) => {
            dot.classList.remove('bg-[#ea580c]', 'w-8'); // Reset active style
            dot.classList.add('bg-white/50', 'w-3'); // Reset to inactive
        });

        slides[index].classList.remove('opacity-0');
        slides[index].classList.add('opacity-100');

        // Modern "Stretch" effect for active dot
        indicators[index].classList.remove('bg-white/50', 'w-3');
        indicators[index].classList.add('bg-[#ea580c]', 'w-8'); 
        
        currentSlide = index;
    }

    function nextSlide() {
        let next = (currentSlide + 1) % totalSlides;
        showSlide(next);
    }

    function prevSlide() {
        let prev = (currentSlide - 1 + totalSlides) % totalSlides;
        showSlide(prev);
    }

    function goToSlide(index) {
        showSlide(index);
        resetTimer();
    }

    function startTimer() {
        slideInterval = setInterval(nextSlide, 4000); 
    }

    function resetTimer() {
        clearInterval(slideInterval);
        startTimer();
    }

    showSlide(0);
    startTimer();
</script>
@include('components.footer')


</body>

</html>