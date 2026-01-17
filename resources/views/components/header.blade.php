<nav class="fixed w-full z-50 bg-opacity-1 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <div class="text-2xl font-black tracking-tighter">
                <a href="/">
                    <img src="https://abcstudiogroup.com/wp-content/uploads/2023/08/cropped-ABC-LOGO-350.png" width="112" alt="">
                </a>
            </div>
            <div class="hidden md:flex space-x-8 text-lg font-medium text-gray-500">
                <a href="/" class="hover:text-orange-500 transition">Home</a>
                <a href="/about" class="hover:text-orange-500 transition">About</a>
                <a href="/services" class="hover:text-orange-500 transition">Services</a>
                <a href="/portfolio" class="hover:text-orange-500 transition">Portfolio</a>
                <a href="/contact" class="hover:text-orange-500 transition">Contact Us</a>
            </div>
            <button onclick="openModal()" class="bg-orange-600 hover:bg-orange-500 text-white font-bold px-6 py-2 rounded-full transition transform hover:scale-105">
                Let's Talk
            </button>    
        </div>
    </nav>
    @include('components.model')
    
