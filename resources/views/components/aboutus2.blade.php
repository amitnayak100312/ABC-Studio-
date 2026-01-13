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

<section class="py-16 px-6 md:px-12 bg-white">
    <br><br><br><br>

    <div class="max-w-7xl mx-auto">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">

            <div class="w-full">
                <img src="https://www.salesforce.com/ap/blog/wp-content/uploads/sites/8/2024/05/blog-sales-and-marketing-alignment.jpg"
                    class="w-full h-autoobject-cover" alt="About ABC Studio">
            </div>

            <div class="text-left">
                <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl mb-6">
                    About Us
                </h2>

                <div class="text-lg text-gray-700 leading-relaxed">
                    <p>
                        <span class="text-orange-600 font-bold text-xl">ABC Studio</span> is more than a design agency;
                        we are your full-cycle growth partner.
                        We fuse future-forward branding with robust IT infrastructure to build businesses that lead.
                    </p>
                    <p class="mt-4">
                        From crafting high-impact brand identities to engineering custom ERP solutions and business
                        automation, we provide the tools you need to scale.
                        We don't just help you compete through precision SEO and performance marketing, we ensure you
                        dominate your market.
                    </p>
                    <p class="mt-4 font-semibold text-gray-900">
                        Grow. Connect. Lead.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="py-20 bg-white">
    <div class="max-w-6xl mx-auto px-6 lg:px-8">
        <div class="flex flex-col-reverse lg:flex-row items-center gap-12 lg:gap-20">

            <div class="lg:w-1/2 space-y-6">
                <div class="text-4xl text-gray-400 font-serif">“</div>

                <div class="text-gray-600 leading-relaxed text-lg text-justify">
                    <p>
                        <span class="font-bold text-orange-500">Founder, Brand Consultant, and Creative Director</span> of
                        ABC Studio, Surat.
                        With over 13 years in strategic branding, he guides businesses toward growth through
                        human-centered design, distinct brand identity, and marketing innovation.
                    </p>
                    <p class="mt-4">
                        A graduate of <span class="font-semibold text-orange-500">NIFT Bhopal</span> (STF Swiss Textile
                        College exchange) and holding a <span class="font-semibold text-orange-500">Global MBA</span>
                        (Deakin Australia & IMT Ghaziabad), he blends artistic creativity with sharp business insight.
                    </p>
                    <p class="mt-4">
                        At ABC Studio, he delivers comprehensive brand strategy, product design, and digital consulting,
                        empowering clients to elevate productivity, profitability, and brand equity through innovation.
                    </p>
                    
                    <div class="text-4xl text-gray-400 font-serif">”</div>
                </div>

                <div class="pt-6 border-t border-gray-100">
                    <p class="text-[#ea580c] font-medium text-lg leading-snug">
                        "Trust is the foundation of every brand we build. At ABC Studio, we believe in growing
                        businesses by staying honest, creative, and client-focused."
                    </p>
                </div>
            </div>

            <div class="lg:w-1/2 flex flex-col items-center">
                <div class="relative">
                    <img src="https://www.abcstudiogroup.com/wp-content/uploads/2025/07/about-3-3.png"
                        alt="Abhijit Banik"
                        class="w-full max-w-sm rounded-lg shadow-xl grayscale hover:grayscale-0 transition duration-500 object-cover"
                        style="box-shadow: 20px 20px 0px 0px #ea580c;">
                </div>

                <div class="mt-10 text-center">
                    <h3 class="text-3xl font-bold text-[#ea580c]">Abhijit Banik</h3>
                    <p class="text-gray-800 font-medium mt-1 uppercase tracking-wide text-sm">Founder & Director</p>
                </div>
            </div>

        </div>
    </div>
</section>




@include('components.footer')


</body>

</html>