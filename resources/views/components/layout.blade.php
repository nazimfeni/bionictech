<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Laravel App') }}</title>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-100 text-slate-900">

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
                            <li><a href="{{ route('services') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Our Services</a></li>
                            <li><a href="{{ route('contact') }}" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Contact Us</a></li>
                            <li><a href="https://blog.bionictech.com.au/" class="block px-4 py-2 rounded-lg bg-gray-700 hover:bg-gray-600 transition">Blog</a></li>
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
                    <a href="{{ route('services') }}" class="px-4 py-2 hover:text-gray-400 transition">Our Service</a>
                    <a href="{{ route('contact') }}" class="px-4 py-2 hover:text-gray-400 transition">Contact Us</a>
                    <a href="https://blog.bionictech.com.au/" class="px-4 py-2 hover:text-gray-400 transition">Blog</a>
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
