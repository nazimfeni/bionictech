<x-layout>

    <div class="container mx-auto px-6 py-12">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-8">Our Services</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            <!-- Card Example -->
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/web-development.jpeg') }}" alt="Web Development" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Web Development</h3>
                    <p class="text-gray-600">We build modern and scalable web applications using the latest technologies.</p>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/mobile-app.jpeg') }}" alt="Mobile App Development" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Mobile App Development</h3>
                    <p class="text-gray-600">We create high-performance mobile applications for both Android and iOS.</p>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/ui-ux.jpeg') }}" alt="UI/UX Design" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">UI/UX Design</h3>
                    <p class="text-gray-600">We design intuitive and user-friendly interfaces to enhance user experience.</p>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/seo.jpeg') }}" alt="SEO Optimization" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">SEO Optimization</h3>
                    <p class="text-gray-600">We improve your website ranking with advanced SEO strategies.</p>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/saas.jpeg') }}" alt="Business Operations" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Business Operations</h3>
                    <p class="text-gray-600">We provide SaaS solutions for scalable and secure applications.</p>
                </div>
            </div>
    
            <div class="bg-white rounded-lg shadow-md hover:shadow-xl transition overflow-hidden">
                <img src="{{ asset('images/services/ai.jpeg') }}" alt="Artificial Intelligence" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Artificial Intelligence</h3>
                    <p class="text-gray-600">We implement AI-driven solutions to enhance business operations.</p>
                </div>
            </div>
        </div>
    </div>
    
    </x-layout>
    