<footer class="bg-slate-900 text-slate-100 py-4">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
            <!-- Contact Us Section -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Reah Us</h5>
                <p class="text-white">info@bionictech.au</p>
            </div>
            <!-- Quick Links Section -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Quick Links</h5>
                <ul class="text-white space-y-2">
                    <li><a href="{{ url('/about') }}" class="hover:underline">About</a></li>
                    <li><a href="{{ url('/contact') }}" class="hover:underline">Contact</a></li>
                    <li><a href="{{ url('/privacy') }}" class="hover:underline">Privacy Policy</a></li>
                    <li><a href="{{ url('/terms') }}" class="hover:underline">Terms of Service</a></li>
                </ul>
            </div>
            <!-- Follow Us Section -->
            <div>
                <h5 class="text-lg font-semibold mb-2">Follow Us</h5>
                <div class="space-y-2">
                    <a href="#" class="text-white hover:underline"><i class="fab fa-facebook-f"></i> Facebook</a><br>
                    <a href="#" class="text-white hover:underline"><i class="fab fa-twitter"></i> Twitter</a><br>
                    <a href="#" class="text-white hover:underline"><i class="fab fa-linkedin-in"></i> LinkedIn</a><br>
                    <a href="#" class="text-white hover:underline"><i class="fab fa-instagram"></i> Instagram</a>
                </div>
            </div>
        </div>
        <hr class="my-4 border-slate-300">
        <div class="text-center text-white">
            <p>&copy; {{ date('Y') }} Bionic Tech Australia. All rights reserved.</p>
        </div>
    </div>
</footer>
