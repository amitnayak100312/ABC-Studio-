<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Reviews - ABC Studio</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap');
        body { font-family: 'Inter', sans-serif; }
        
        /* Custom Swiper Styles to match layout */
        .swiper {
            width: 100%;
            height: 100%;
            padding-bottom: 40px !important; /* Space for dots */
        }
        .swiper-pagination-bullet-active {
            background-color: #ea580c !important; /* Orange dots */
        }
    </style>
</head>
<body class="bg-gray-50">
    <section class="pt-12 pb-8 px-4 sm:px-6 lg:px-8 text-center bg-white border-b border-gray-100">
        <h2 class="text-3xl font-extrabold text-gray-900 tracking-tight sm:text-4xl">
            Client <span class="text-orange-600">Success Stories</span>
        </h2>
        <p class="mt-3 text-lg text-gray-500 max-w-2xl mx-auto">
            Real feedback from partners we've helped grow.
        </p>
    </section>

    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <div class="lg:col-span-8">
                
                @if($reviews->isEmpty())
                    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-10 text-center">
                        <p class="text-gray-400 text-lg">No reviews yet. Be the first to share your experience!</p>
                    </div>
                @else
                    <div class="swiper mySwiper">
                        <div class="swiper-wrapper">
                            
                            @foreach($reviews as $review)
                            <div class="swiper-slide h-auto">
                                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-8 h-full flex flex-col relative">
                                    
                                    <div class="mb-4">
                                        <span class="inline-block bg-orange-50 text-orange-600 text-[10px] font-bold px-2 py-1 rounded-full uppercase tracking-wide">
                                            {{ $review->service_type }}
                                        </span>
                                    </div>

                                    <div class="flex text-yellow-400 mb-4 text-xs">
                                        @for($i=0; $i<$review->rating; $i++) <i class="fa-solid fa-star"></i> @endfor
                                    </div>

                                    <div class="flex-grow">
                                        <i class="fa-solid fa-quote-left text-gray-200 text-2xl mb-2 block"></i>
                                        <p class="text-gray-600 italic text-sm leading-relaxed mb-4">
                                            "{{ $review->message }}"
                                        </p>
                                    </div>

                                    <div class="flex items-center border-t border-gray-50 pt-4 mt-auto">
                                        <div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-800 flex items-center justify-center text-white font-bold text-sm">
                                            {{ substr($review->name, 0, 1) }}
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-bold text-gray-900">{{ $review->name }}</p>
                                            <p class="text-xs text-gray-500">{{ $review->company_name }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                @endif
            </div>

            <div class="lg:col-span-4 lg:sticky lg:top-5">
                <div class="bg-white rounded-xl shadow-lg border-t-4 border-orange-600 p-6">
                    
                    <div class="mb-5">
                        <h3 class="text-xl font-bold text-gray-900">Add Your Review</h3>
                        <p class="text-gray-500 text-sm mt-1">How was your experience?</p>
                    </div>

                    <form action="{{ route('reviews.store') }}" method="POST" class="space-y-4">
                        @csrf

                        <div>
                            <label class="block text-xs font-semibold text-gray-700 uppercase mb-1">Service Provided</label>
                            <select name="service_type" required
                                class="block w-full rounded-md border border-gray-300 bg-gray-50 px-3 py-2 text-sm focus:border-orange-500 focus:ring-orange-500">
                                <option value="" disabled selected>Select...</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Web Design">Web Design</option>
                                <option value="Graphic Design">Graphic Design</option>
                                <option value="Consulting">Consulting</option>
                            </select>
                        </div>

                        <div class="grid grid-cols-1 gap-3">
                            <div>
                                <input type="text" name="name" placeholder="Your Name" required
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-orange-500 focus:ring-orange-500">
                            </div>
                            <div>
                                <input type="text" name="company_name" placeholder="Company (Optional)"
                                    class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-orange-500 focus:ring-orange-500">
                            </div>
                        </div>

                            <textarea name="message" rows="3" placeholder="Write your feedback..." required
                                class="block w-full rounded-md border border-gray-300 px-3 py-2 text-sm focus:border-orange-500 focus:ring-orange-500"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full rounded-md bg-orange-600 px-4 py-3 text-sm font-bold text-white shadow hover:bg-orange-700 transition-colors">
                            Submit Review
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    @if(session('success'))
        <div id="success-toast" class="fixed bottom-5 right-5 z-50 flex items-center p-4 text-gray-500 bg-white border-l-4 border-green-500 rounded shadow-2xl animate-bounce" role="alert">
            <div class="text-green-500 mr-3">
                <i class="fa-solid fa-circle-check text-xl"></i>
            </div>
            <div class="text-sm font-medium text-gray-800">{{ session('success') }}</div>
        </div>
        <script>
            setTimeout(() => {
                const toast = document.getElementById('success-toast');
                if (toast) toast.remove();
            }, 4000);
        </script>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,     
            spaceBetween: 30,     
            loop: true,            
            autoplay: {
                delay: 3000,       
                disableOnInteraction: false, 
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                768: {
                    slidesPerView: 2, 
                },
            },
        });
    </script>