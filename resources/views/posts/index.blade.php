<x-layout>

    @auth
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-10">
            <h1 class="text-2xl font-bold text-slate-800">Hello {{ auth()->user()->username }}</h1>
        </div>
    @endauth

    @guest

        <!-- Hero Section -->
        <section id="home"
            class="relative bg-blue-800 text-white flex items-center justify-center bg-cover bg-center overflow-hidden"
            style="min-height: calc(100vh - 56px); background-image: url('https://via.placeholder.com/1920x1080');">
            <div class="absolute inset-0 bg-black opacity-50"></div>
            <div class="relative z-10 text-center max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 py-20">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold mb-4 text-white leading-tight">Innovating the
                    Future of Technology</h2>
                <p class="text-base sm:text-lg mb-8 text-white">Providing innovative IT solutions and services to help
                    businesses grow and succeed in the digital world.</p>
                <a href="{{ route('products') }}"
                    class="bg-yellow-500 text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-600 transition">Our
                    Products</a>
                <a href="{{ route('services') }}"
                    class="bg-yellow-500 text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-600 transition">Our
                    Services</a>
            </div>
        </section>

        <!-- Features Section -->
        <section id="features" class="py-20 bg-white">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-12">Why Choose Us?</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <i class="fas fa-cogs text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Reliable Technology</h3>
                        <p class="text-gray-600">We use the latest technologies to provide you with a seamless experience
                            and high performance.</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <i class="fas fa-users text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Dedicated Support</h3>
                        <p class="text-gray-600">Our team is always available to assist you and ensure smooth operations.
                        </p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <i class="fas fa-shield-alt text-4xl text-blue-500 mb-4"></i>
                        <h3 class="text-xl font-semibold mb-2">Top-Notch Security</h3>
                        <p class="text-gray-600">We prioritize your security with advanced encryption and robust protection
                            systems.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testimonials Section -->
        <section id="testimonials" class="bg-gray-100 py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl font-bold mb-12">What Our Clients Say</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <p class="text-gray-600 italic mb-4">"This service has transformed our workflow. Highly recommend it
                            to anyone looking to optimize their business."</p>
                        <h4 class="text-xl font-semibold">John Doe</h4>
                        <p class="text-sm text-gray-500">CEO, Example Co.</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <p class="text-gray-600 italic mb-4">"Excellent customer support and a user-friendly interface. It
                            made managing our operations much easier."</p>
                        <h4 class="text-xl font-semibold">Jane Smith</h4>
                        <p class="text-sm text-gray-500">Marketing Manager, Tech Corp</p>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                        <p class="text-gray-600 italic mb-4">"The best investment we've made for our business. It's saved us
                            so much time and effort."</p>
                        <h4 class="text-xl font-semibold">Alice Johnson</h4>
                        <p class="text-sm text-gray-500">Operations Head, Digital Inc.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Call-to-Action Section -->
        <section class="bg-blue-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
                <p class="text-base sm:text-lg mb-6 text-blue-100">Join thousands of satisfied customers and grow your
                    business with us. Start your journey today!</p>
                <a href="{{ route('contact') }}"
                    class="bg-yellow-500 text-black px-6 py-3 rounded-full text-lg font-semibold hover:bg-yellow-600 transition">Contact
                    Us</a>
            </div>
        </section>

    @endguest

</x-layout>
