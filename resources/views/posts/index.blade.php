<x-layout>

    @auth
        <h1>Logged In</h1>
    @endauth
    
    @guest
    
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-blue-500 to-teal-400 text-white py-20 w-full">
        <div class="w-full text-center">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Bionic Tech Australia</h1>
            <p class="text-lg md:text-xl mb-6">We offer the best solutions for your business needs. Simplify your tasks and focus on growth.</p>
            <a href="{{ route('services') }}" class="bg-white text-blue-500 px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-500 hover:text-white transition-all">Get Started</a>
        </div>
    </section>
    
    <!-- Features Section -->
    <section id="features" class="py-20 w-full">
        <div class="w-full text-center">
            <h2 class="text-3xl font-bold mb-8">Why Choose Us?</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 px-4">
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-cogs text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Reliable Technology</h3>
                    <p class="text-gray-600">We use the latest technologies to provide you with a seamless experience and high performance.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-users text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Dedicated Support</h3>
                    <p class="text-gray-600">Our team is always available to assist you and ensure smooth operations.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 text-center">
                    <i class="fas fa-shield-alt text-4xl text-blue-500 mb-4"></i>
                    <h3 class="text-xl font-semibold mb-2">Top-Notch Security</h3>
                    <p class="text-gray-600">We prioritize your security with advanced encryption and robust protection systems.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section id="testimonials" class="bg-gray-100 py-20 w-full">
        <div class="w-full text-center">
            <h2 class="text-3xl font-bold mb-8">What Our Clients Say</h2>
            <div class="flex flex-wrap justify-center gap-8 px-4">
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
                    <p class="text-gray-600 italic mb-4">"This service has transformed our workflow. Highly recommend it to anyone looking to optimize their business."</p>
                    <h4 class="text-xl font-semibold">John Doe</h4>
                    <p class="text-sm text-gray-500">CEO, Example Co.</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
                    <p class="text-gray-600 italic mb-4">"Excellent customer support and a user-friendly interface. It made managing our operations much easier."</p>
                    <h4 class="text-xl font-semibold">Jane Smith</h4>
                    <p class="text-sm text-gray-500">Marketing Manager, Tech Corp</p>
                </div>
                <div class="bg-white shadow-lg rounded-lg p-6 max-w-sm text-center">
                    <p class="text-gray-600 italic mb-4">"The best investment we've made for our business. It’s saved us so much time and effort."</p>
                    <h4 class="text-xl font-semibold">Alice Johnson</h4>
                    <p class="text-sm text-gray-500">Operations Head, Digital Inc.</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Call-to-Action Section -->
    <section class="bg-blue-500 text-white py-20 w-full">
        <div class="w-full text-center">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">Ready to Get Started?</h2>
            <p class="text-lg mb-6">Join thousands of satisfied customers and grow your business with us. Start your journey today!</p>
            <a href="{{ route('contact') }}" class="bg-white text-blue-500 px-6 py-3 rounded-full text-lg font-semibold hover:bg-blue-500 hover:text-white transition-all">Contact Us</a>
        </div>
    </section>
    
    @endguest
    
    </x-layout>
    