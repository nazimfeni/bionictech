<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME', 'Bionic Tech Australia') }}</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        body { font-family: 'Inter', sans-serif; }

        [x-cloak] { display: none !important; }

        .site-header { position: sticky; top: 0; z-index: 100; }

        .topbar { background: linear-gradient(90deg, #0f172a 0%, #1e3a5f 100%); }

        .main-header {
            background: linear-gradient(135deg, #0f172a 0%, #1e40af 60%, #1d4ed8 100%);
            box-shadow: 0 4px 30px rgba(0,0,0,0.3);
        }

        .nav-link { position: relative; padding-bottom: 4px; }
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0; left: 0;
            width: 0; height: 2px;
            background: linear-gradient(90deg, #60a5fa, #a78bfa);
            border-radius: 2px;
            transition: width 0.3s ease;
        }
        .nav-link:hover::after { width: 100%; }

        .logo-text {
            background: linear-gradient(135deg, #ffffff, #93c5fd);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .mobile-sidebar-overlay { background: rgba(0,0,0,0.55); backdrop-filter: blur(4px); }
        .mobile-sidebar { background: linear-gradient(180deg, #0f172a 0%, #1e3a5f 100%); }

        .btn-cta {
            background: linear-gradient(135deg, #3b82f6, #6366f1);
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(99,102,241,0.4);
        }
        .btn-cta:hover {
            background: linear-gradient(135deg, #2563eb, #4f46e5);
            transform: translateY(-1px);
            box-shadow: 0 6px 20px rgba(99,102,241,0.5);
        }
    </style>
</head>
<body class="bg-white text-slate-900 antialiased">

<!-- ===== STICKY HEADER ===== -->
<div class="site-header">

    <!-- Top Bar — hidden on mobile, visible md+ -->
    <div class="topbar text-white text-xs hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-2 flex justify-between items-center">

            <!-- Left: contact info -->
            <div class="flex items-center gap-4">
                <a href="tel:+611300043198" class="flex items-center gap-1.5 text-slate-200 hover:text-blue-300 transition-colors">
                    <i class="fas fa-phone-alt text-blue-400"></i>
                    <span>+61 1300 043 198</span>
                </a>
                <span class="text-slate-500">|</span>
                <a href="mailto:info@bionictech.com.au" class="flex items-center gap-1.5 text-slate-200 hover:text-blue-300 transition-colors">
                    <i class="fas fa-envelope text-blue-400"></i>
                    <span>info@bionictech.com.au</span>
                </a>
                <span class="hidden lg:block text-slate-500">|</span>
                <span class="hidden lg:flex items-center gap-1.5 text-slate-300">
                    <i class="fas fa-map-marker-alt text-blue-400"></i>
                    Adelaide, SA, Australia
                </span>
            </div>

            <!-- Right: social icons -->
            <div class="flex items-center gap-2">
                <a href="https://www.facebook.com/BionicTechAustralia/" target="_blank"
                   class="w-6 h-6 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-600 transition-all">
                    <i class="fab fa-facebook-f text-xs"></i>
                </a>
                <a href="https://twitter.com" target="_blank"
                   class="w-6 h-6 flex items-center justify-center rounded-full bg-white/10 hover:bg-sky-500 transition-all">
                    <i class="fab fa-x-twitter text-xs"></i>
                </a>
                <a href="https://linkedin.com" target="_blank"
                   class="w-6 h-6 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-700 transition-all">
                    <i class="fab fa-linkedin-in text-xs"></i>
                </a>
                <a href="https://instagram.com" target="_blank"
                   class="w-6 h-6 flex items-center justify-center rounded-full bg-white/10 hover:bg-pink-600 transition-all">
                    <i class="fab fa-instagram text-xs"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header" x-data="{ mobileOpen: false }">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center py-3 md:py-4">

            <!-- Logo -->
            <a href="{{ route('home') }}" class="flex items-center gap-2.5 group flex-shrink-0">
                <div class="w-8 h-8 md:w-9 md:h-9 rounded-xl bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center shadow-lg group-hover:scale-105 transition-transform duration-200">
                    <i class="fas fa-bolt text-white text-sm"></i>
                </div>
                <div>
                    <span class="logo-text text-base md:text-lg font-bold tracking-tight">Bionic Tech</span>
                    <span class="block text-blue-300 text-[10px] font-medium -mt-1 tracking-widest uppercase">Australia</span>
                </div>
            </a>

            <!-- Desktop Nav (lg+) -->
            <div class="hidden lg:flex items-center gap-0.5">
                @guest
                    <a href="{{ route('home') }}"     class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Home</a>
                    <a href="{{ route('about') }}"    class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">About</a>
                    <a href="{{ route('products') }}" class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Products</a>
                    <a href="{{ route('services') }}" class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Services</a>
                    <a href="{{ route('careers') }}"  class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Careers</a>
                    <a href="https://blog.bionictech.com.au/" target="_blank" class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Blog</a>
                    <a href="{{ route('contact') }}"  class="nav-link text-white/90 hover:text-white text-sm font-medium px-3 py-2 rounded-lg hover:bg-white/10 transition-all duration-200">Contact</a>
                    <div class="ml-2 pl-3 border-l border-white/20">
                        <a href="{{ route('login') }}" class="btn-cta text-white text-sm font-semibold px-5 py-2 rounded-xl inline-flex items-center gap-2">
                            <i class="fas fa-sign-in-alt text-xs"></i> Login
                        </a>
                    </div>
                @endguest

                @auth
                    <div class="relative" x-data="{ userOpen: false }">
                        <button @click="userOpen = !userOpen"
                                class="flex items-center gap-2 px-3 py-2 rounded-xl bg-white/10 hover:bg-white/20 transition-all text-white text-sm font-medium">
                            <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white text-xs font-bold">
                                {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                            </div>
                            <span class="hidden xl:block">{{ auth()->user()->username }}</span>
                            <i class="fas fa-chevron-down text-xs text-white/70" :class="userOpen ? 'rotate-180' : ''" style="transition:transform .2s"></i>
                        </button>
                        <div x-show="userOpen" x-cloak @click.outside="userOpen = false"
                             x-transition:enter="transition ease-out duration-200"
                             x-transition:enter-start="opacity-0 scale-95 -translate-y-1"
                             x-transition:enter-end="opacity-100 scale-100 translate-y-0"
                             class="absolute right-0 mt-2 w-52 bg-white rounded-2xl shadow-2xl border border-slate-100 overflow-hidden z-50">
                            <div class="px-4 py-3 bg-gradient-to-r from-blue-50 to-indigo-50 border-b border-slate-100">
                                <p class="text-xs text-slate-500">Signed in as</p>
                                <p class="font-semibold text-slate-800 text-sm truncate">{{ auth()->user()->username }}</p>
                            </div>
                            <a href="{{ route('dashboard') }}"   class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 transition-colors"><i class="fas fa-th-large text-blue-500 w-4"></i> Dashboard</a>
                            <a href="{{ route('profile.index') }}" class="flex items-center gap-2 px-4 py-2.5 text-sm text-slate-700 hover:bg-slate-50 transition-colors"><i class="fas fa-user text-blue-500 w-4"></i> Profile</a>
                            <div class="border-t border-slate-100">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="w-full flex items-center gap-2 px-4 py-2.5 text-sm text-red-600 hover:bg-red-50 transition-colors">
                                        <i class="fas fa-sign-out-alt w-4"></i> Logout
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endauth
            </div>

            <!-- Mobile: right side actions -->
            <div class="flex items-center gap-2 lg:hidden">
                @guest
                    <a href="{{ route('login') }}" class="btn-cta text-white text-xs font-semibold px-4 py-2 rounded-lg inline-flex items-center gap-1.5">
                        <i class="fas fa-sign-in-alt text-xs"></i>
                        <span class="hidden sm:inline">Login</span>
                    </a>
                @endguest
                @auth
                    <div class="w-8 h-8 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white text-xs font-bold">
                        {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                    </div>
                @endauth
                <button @click="mobileOpen = true"
                        class="w-10 h-10 flex items-center justify-center rounded-xl bg-white/10 hover:bg-white/20 transition text-white">
                    <i class="fas fa-bars text-lg"></i>
                </button>
            </div>
        </nav>

        <!-- Mobile Overlay -->
        <div x-show="mobileOpen" x-cloak @click="mobileOpen = false"
             x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
             class="fixed inset-0 mobile-sidebar-overlay z-40 lg:hidden">
        </div>

        <!-- Mobile Sidebar -->
        <div x-show="mobileOpen" x-cloak
             x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 translate-x-full" x-transition:enter-end="opacity-100 translate-x-0"
             x-transition:leave="transition ease-in duration-200" x-transition:leave-start="opacity-100 translate-x-0" x-transition:leave-end="opacity-0 translate-x-full"
             class="fixed top-0 right-0 w-72 h-full mobile-sidebar z-50 lg:hidden shadow-2xl flex flex-col">

            <!-- Sidebar top -->
            <div class="flex items-center justify-between px-5 py-4 border-b border-white/10">
                <div class="flex items-center gap-2.5">
                    <div class="w-8 h-8 rounded-xl bg-gradient-to-br from-blue-400 to-indigo-600 flex items-center justify-center">
                        <i class="fas fa-bolt text-white text-xs"></i>
                    </div>
                    <span class="text-white font-bold text-sm">Bionic Tech Australia</span>
                </div>
                <button @click="mobileOpen = false" class="w-8 h-8 flex items-center justify-center rounded-lg bg-white/10 hover:bg-white/20 text-white transition">
                    <i class="fas fa-times"></i>
                </button>
            </div>

            <!-- Mobile contact info strip -->
            <div class="px-5 py-3 border-b border-white/10 space-y-1.5">
                <a href="tel:+611300043198" class="flex items-center gap-2 text-xs text-slate-200 hover:text-blue-300 transition-colors">
                    <i class="fas fa-phone-alt text-blue-400 text-xs w-3"></i> +61 1300 043 198
                </a>
                <a href="mailto:info@bionictech.com.au" class="flex items-center gap-2 text-xs text-slate-200 hover:text-blue-300 transition-colors">
                    <i class="fas fa-envelope text-blue-400 text-xs w-3"></i> info@bionictech.com.au
                </a>
            </div>

            <!-- Nav links -->
            <nav class="flex-1 overflow-y-auto px-4 py-4 space-y-0.5">
                @guest
                    <a href="{{ route('home') }}"     class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-home text-blue-400 w-4 text-center"></i> Home</a>
                    <a href="{{ route('about') }}"    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-info-circle text-blue-400 w-4 text-center"></i> About Us</a>
                    <a href="{{ route('products') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-box text-blue-400 w-4 text-center"></i> Our Products</a>
                    <a href="{{ route('services') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-cogs text-blue-400 w-4 text-center"></i> Our Services</a>
                    <a href="{{ route('careers') }}"  class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-briefcase text-blue-400 w-4 text-center"></i> Careers</a>
                    <a href="https://blog.bionictech.com.au/" target="_blank" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium">
                        <i class="fas fa-pen-nib text-blue-400 w-4 text-center"></i> Blog
                        <i class="fas fa-external-link-alt text-xs text-slate-400 ml-auto"></i>
                    </a>
                    <a href="{{ route('contact') }}"  class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-envelope text-blue-400 w-4 text-center"></i> Contact Us</a>
                @endguest

                @auth
                    <div class="flex items-center gap-3 px-4 py-3 mb-2 bg-white/10 rounded-xl">
                        <div class="w-9 h-9 rounded-full bg-gradient-to-br from-blue-400 to-indigo-500 flex items-center justify-center text-white font-bold text-sm flex-shrink-0">
                            {{ strtoupper(substr(auth()->user()->username, 0, 1)) }}
                        </div>
                        <div class="min-w-0">
                            <p class="text-white font-semibold text-sm truncate">{{ auth()->user()->username }}</p>
                            <p class="text-slate-300 text-xs">Logged in</p>
                        </div>
                    </div>
                    <a href="{{ route('dashboard') }}"    class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-th-large text-blue-400 w-4 text-center"></i> Dashboard</a>
                    <a href="{{ route('profile.index') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl text-slate-100 hover:bg-white/10 hover:text-white transition text-sm font-medium"><i class="fas fa-user text-blue-400 w-4 text-center"></i> Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full flex items-center gap-3 px-4 py-3 rounded-xl text-red-400 hover:bg-red-500/10 transition text-sm font-medium">
                            <i class="fas fa-sign-out-alt w-4 text-center"></i> Logout
                        </button>
                    </form>
                @endauth
            </nav>

            <!-- Sidebar social + CTA -->
            <div class="px-4 pb-6 space-y-3">
                <div class="flex items-center justify-center gap-3 py-3 border-t border-white/10">
                    <a href="https://www.facebook.com/BionicTechAustralia/" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-600 transition text-white text-xs"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://twitter.com" target="_blank"  class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-sky-500 transition text-white text-xs"><i class="fab fa-x-twitter"></i></a>
                    <a href="https://linkedin.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-blue-700 transition text-white text-xs"><i class="fab fa-linkedin-in"></i></a>
                    <a href="https://instagram.com" target="_blank" class="w-8 h-8 flex items-center justify-center rounded-full bg-white/10 hover:bg-pink-600 transition text-white text-xs"><i class="fab fa-instagram"></i></a>
                </div>
                @guest
                <a href="{{ route('login') }}" class="btn-cta flex items-center justify-center gap-2 w-full py-3 rounded-xl text-white text-sm font-semibold">
                    <i class="fas fa-sign-in-alt"></i> Login to Your Account
                </a>
                @endguest
            </div>
        </div>
    </header>
</div>
<!-- ===== END HEADER ===== -->

<!-- Page Content -->
{{ $slot }}

<x-footer />
</body>
</html>
