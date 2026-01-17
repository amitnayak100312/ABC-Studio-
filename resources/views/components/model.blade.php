<div id="contactModal" class="fixed inset-0 z-50 hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">

    <div class="fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity backdrop-blur-sm" onclick="closeModal()">
    </div>

    <div class="fixed inset-0 z-10 overflow-y-auto">
        <div class="flex min-h-full items-center justify-center p-4 text-center sm:p-0">

            <div
                class="relative transform overflow-hidden rounded-2xl bg-white text-left shadow-2xl transition-all sm:my-8 sm:w-full sm:max-w-lg border-t-4 border-[#ea580c]">

                <button onclick="closeModal()"
                    class="absolute top-4 right-4 text-gray-400 hover:text-gray-600 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                        stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>

                <div class="px-8 py-8">
                    <div class="text-center mb-6">
                        <div class="mx-auto flex h-12 w-12 items-center justify-center rounded-full bg-orange-100 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-6 h-6 text-[#ea580c]">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold leading-6 text-gray-900" id="modal-title">Get in Touch</h3>
                        <p class="mt-2 text-sm text-gray-500">Fill out the form below and we'll get back to you
                            shortly.</p>
                    </div>

                    <form onsubmit="handleSubmit(event)" class="space-y-5" action="send-mail" method="post">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                            <input type="text" name="name" id="name" required
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 sm:text-sm"
                                placeholder="John Doe">
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                            <input type="email" name="email" id="email" required
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 sm:text-sm"
                                placeholder="john@example.com">
                        </div>

                        <div>
                            <label for="service" class="block text-sm font-medium text-gray-700">Select Service</label>
                            <select name="service" id="service" required
                                class="mt-1 block w-full rounded-md border border-gray-300 bg-white px-3 py-2 shadow-sm focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 sm:text-sm">
                                <option value="" disabled selected>Choose a service...</option>
                                <option value="digital-marketing">Digital Marketing</option>
                                <option value="content-writing">Content Writing</option>
                                <option value="graphic-design">Graphic Design</option>
                                <option value="web-design">Web Design</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                            <textarea name="message" id="message" rows="4" required
                                class="mt-1 block w-full rounded-md border border-gray-300 px-3 py-2 shadow-sm focus:border-orange-500 focus:outline-none focus:ring-1 focus:ring-orange-500 sm:text-sm"
                                placeholder="How can we help you?"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full rounded-md bg-[#ea580c] px-3 py-3 text-sm font-semibold text-white shadow-sm hover:bg-[#c2410b] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-orange-600 transition-colors">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@if(session('success'))
        <div id="success-toast" class="fixed bottom-5 right-5 z-50 flex items-center p-4 text-gray-500 bg-white border-l-4 border-green-500 rounded shadow-2xl animate-bounce" role="alert">
            <div class="text-green-500 mr-3">
                <i class="fa-solid fa-circle-check text-xl"></i>
            </div>
            <div class="text-sm font-medium text-gray-800">{{ session('success') }}</div>
        </div>
    @endif


    <script>
        setTimeout(() => {
            const toast = document.getElementById('success-toast');
            if (toast) {
                toast.style.transition = "opacity 0.5s ease";
                toast.style.opacity = "0";
                setTimeout(() => toast.remove(), 500);
            }
        }, 4000);
    </script>


<script>
    const modal = document.getElementById('contactModal');

    // Function to Open Modal
    function openModal() {
        modal.classList.remove('hidden');
        // Prevent body scroll when modal is open
        document.body.style.overflow = 'hidden';
    }

    // Function to Close Modal
    function closeModal() {
        modal.classList.add('hidden');
        // Re-enable body scroll
        document.body.style.overflow = 'auto';
    }

    // Close modal if user clicks ESC key
    document.addEventListener('keydown', function (event) {
        if (event.key === "Escape" && !modal.classList.contains('hidden')) {
            closeModal();
        }
    });

    // Handle Form Submit (Simulation)
    // function handleSubmit(event) {
    //     event.preventDefault(); // Stop page reload

    //     // Get values
    //     const name = document.getElementById('name').value;
    //     const message = document.getElementById('message').value;

    //     // Simulate sending (In real life, you would use fetch() here to send data to your server)
    //     const btn = event.target.querySelector('button');
    //     const originalText = btn.innerText;

    //     btn.innerText = "Sending...";
    //     btn.disabled = true;

    //     setTimeout(() => {
    //         alert(`Thanks ${name}! Your message has been sent.\n\nMessage: ${message}`);

    //         // Reset form
    //         event.target.reset();
    //         btn.innerText = originalText;
    //         btn.disabled = false;
    //         closeModal();
    //     }, 1000);
    // }
</script>