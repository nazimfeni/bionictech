<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Laravel App') }}</title>
    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">

<!-- Top Bar -->
<div class="bg-slate-800 text-white text-sm">
    <div class="container mx-auto px-6 py-2 flex flex-col sm:flex-row justify-between items-center gap-2">
        <!-- Contact Info -->
        <div class="flex items-center gap-4">
            <span class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h2l3.6 7.59-1.35 2.45A1 1 0 008 17h9a1 1 0 001-1v-1.34a1 1 0 00-.64-.94L10 7H3z" />
                </svg>
                +61 1300 043 198
            </span>
            <span class="flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12H8m0 0l4-4m-4 4l4 4" />
                </svg>
                info@bionictech.com.au
            </span>
        </div>

        <!-- Social Icons -->
        <div class="flex items-center gap-3">
            <a href="https://www.facebook.com/BionicTechAustralia/" target="_blank" class="hover:text-blue-400 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M22 12a10 10 0 10-11.5 9.95V15.3h-2v-3.3h2v-2.5c0-2 1.2-3.1 3-3.1.9 0 1.8.1 1.8.1v2h-1c-1 0-1.3.6-1.3 1.2v1.9h2.2l-.4 3.3h-1.8v6.65A10 10 0 0022 12z"/>
                </svg>
            </a>
            <a href="https://twitter.com" target="_blank" class="hover:text-blue-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M23 3a10.9 10.9 0 01-3.14 1.53A4.48 4.48 0 0012.5 7.5v1A10.66 10.66 0 013 4.1a4.48 4.48 0 001.39 6A4.52 4.52 0 012 9.7v.05A4.48 4.48 0 004.5 14a4.52 4.52 0 01-2 .08A4.48 4.48 0 007.5 17a9 9 0 01-6.6 1.8A12.72 12.72 0 006.3 21c7.5 0 11.6-6.2 11.6-11.6v-.53A8.18 8.18 0 0023 3z"/>
                </svg>
            </a>
            <a href="https://linkedin.com" target="_blank" class="hover:text-blue-200 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M4.98 3.5C3.88 3.5 3 4.38 3 5.48s.88 1.98 1.98 1.98S6.96 6.58 6.96 5.48 6.08 3.5 4.98 3.5zM3 8.98h3.96V21H3V8.98zm7.02 0h3.8v1.62h.05c.53-1.01 1.82-2.08 3.76-2.08 4.02 0 4.76 2.65 4.76 6.08V21h-3.96v-5.48c0-1.3-.02-2.98-1.82-2.98s-2.1 1.42-2.1 2.88V21h-3.96V8.98z"/>
                </svg>
            </a>
        </div>
    </div>
</div>




    <!-- Header -->
    <header class="bg-blue-900 text-white shadow-lg">
        <nav class="container mx-auto flex justify-between items-center py-4 px-6 bg-blue-900 text-white shadow-lg">
            <a href="{{ route('home') }}" class="text-xl font-bold tracking-wide hover:text-gray-400 transition duration-300">{{env('APP_NAME')}}</a>
            
            <!-- Mobile Menu Button -->
            <div class="lg:hidden" x-data="{ open: false }">
                <button @click="open = !open" class="text-white focus:outline-none">
                    <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
                
                <!-- Sidebar -->
                <div x-show="open" @click.outside="open = false" class="fixed top-0 right-0 w-64 h-full bg-gray-800 text-white shadow-xl z-50 p-6 transition-transform transform translate-x-0">
                    <button @click="open = false" class="absolute top-4 right-4 text-white text-2xl">&times;</button>
                    <ul class="mt-8 space-y-4">
                        @auth
                            <li class="text-lg font-bold">{{ auth()->user()->username }}</li>
                            <hr class="border-gray-600 my-2">
                            <li><a href="{{ route('dashboard') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Dashboard</a></li>
                            <li>
                            <li><a href="{{ route('profile.index') }}" class="block px-4 py-2 rounded-lg  hover:bg-gray-600 transition">Profile</a></li>
                            <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 rounded-lg hover:bg-gray-600 transition">Logout</button>
                            </form>
                        </li>
                        @endauth
                        @guest
                            <li><a href="{{ route('home') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Home</a></li>
                            <li><a href="{{ route('about') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">About us</a></li>
                            <li><a href="{{ route('products') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Our Products</a></li>
                            <li><a href="{{ route('services') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Our Services</a></li>
                            <li><a href="{{ route('contact') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Contact Us</a></li>
                            <li><a href="https://blog.bionictech.com.au/" target="_blank" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Blog</a></li>
                            <li><a href="{{ route('login') }}" class="block px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-500 transition">Login</a></li>
                            {{-- <li><a href="{{ route('register') }}" class="block px-4 py-2 rounded-lg bg-green-600 hover:bg-green-500 transition">Register</a></li> --}}
                        @endguest
                    </ul>
                </div>
            </div>
            
            <!-- Desktop Menu -->
            <div class="hidden lg:flex items-center gap-6">
                @auth
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="rounded-full focus:outline-none">
                            <img src="https://picsum.photos/200" alt="User Avatar" class="w-10 h-10 rounded-full border-2 border-white shadow">
                        </button>
                        <div x-show="open" @click.outside="open=false" class="absolute right-0 mt-3 bg-white shadow-lg rounded-lg w-48 py-2 text-gray-900">
                            <p class="px-4 py-2 font-semibold">{{ auth()->user()->username }}</p>
                            <hr class="border-gray-300">
                            <a href="{{ route('dashboard') }}" class="block px-4 py-2 hover:bg-gray-200 transition">Dashboard</a>
                            <a href="{{ route('profile.index') }}" class="block px-4 py-2 hover:bg-gray-200 transition">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-200 transition">Logout</button>
                            </form>
                        
                        </div>
                    </div>
                @endauth
                @guest
                <a href="{{ route('home') }}" class="px-4 py-2 hover:text-gray-400 transition">Home</a>
                 <a href="{{ route('about') }}" class="px-4 py-2 hover:text-gray-400 transition">About us</a>
                 <a href="{{ route('products') }}" class="px-4 py-2 hover:text-gray-400 transition">Our Products</a>
                    <a href="{{ route('services') }}" class="px-4 py-2 hover:text-gray-400 transition">Our Services</a>
                    <a href="{{ route('contact') }}" class="px-4 py-2 hover:text-gray-400 transition">Contact Us</a>
                    <a href="https://blog.bionictech.com.au/" target="_blank" class="px-4 py-2 hover:text-gray-400 transition">Blog</a>
                    <a href="{{ route('login') }}" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-lg transition">Login</a>
                    {{-- <a href="{{ route('register') }}" class="px-4 py-2 bg-green-600 hover:bg-green-500 text-white rounded-lg transition">Register</a> --}}
                @endguest
            </div>
        </nav>
        
        
    </header>

    <!-- Main Content -->

 
        {{ $slot }}
   
    <x-footer />
</body>

</html>
