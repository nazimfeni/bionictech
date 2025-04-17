<footer class="bg-blue-900 text-white py-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- Logo & About -->
            <div>
                <h2 class="text-2xl font-bold text-white mb-4">BionicTech</h2>
                <p class="text-sm text-slate-300">
                    Bionic Tech Australia is committed to providing innovative digital solutions that empower businesses worldwide.
                </p>
            </div>

            <!-- Contact Info -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Contact Us</h3>
                <ul class="text-sm space-y-2 text-slate-300">
                    <li>Email: <a href="mailto:info@bionictech.au" class="hover:text-white">info@bionictech.au</a></li>
                    <li>Phone: <a href="tel:+6112345678" class="hover:text-white">+61 123 456 78</a></li>
                    <li>Location: Sydney, Australia</li>
                </ul>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Quick Links</h3>
                <ul class="text-sm space-y-2 text-slate-300">
                    <li><a href="{{ url('/about') }}" class="hover:text-white">About Us</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:text-white">Contact</a></li>
                    <li><a href="{{ url('/privacy') }}" class="hover:text-white">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}" class="hover:text-white">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Social Media -->
            <div>
                <h3 class="text-lg font-semibold text-white mb-4">Follow Us</h3>
                <div class="flex space-x-4 text-xl text-slate-300">
                    <a href="#" class="hover:text-white"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="hover:text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>

       
    </div>

    <div class="mt-10 border-t border-white-900 pt-6 text-center text-sm text-white-800">
        <p>&copy; {{ date('Y') }} Bionic Tech Australia. All rights reserved.</p>
    </div>
</footer>
