<x-layout>

    @auth
    <section class="py-20 bg-gray-100 w-full">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-4xl font-bold mb-4">{{ auth()->user()->username }}!</h1>
           
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Example Card 1 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">Your Profile</h3>
                    <p><strong>Name:</strong> {{ auth()->user()->username }}</p>
                    <p><strong>Email:</strong> {{ auth()->user()->email }}</p>
                    <a href="{{ route('profile.edit') }}" class="text-blue-600 hover:underline text-sm mt-2 inline-block">Edit Profile</a>
                </div>

                <!-- Example Card 2 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">Account Status</h3>
                    <p class="text-green-600 font-semibold">Active</p>
                    <p class="text-gray-600">Member since: {{ auth()->user()->created_at->format('F Y') }}</p>
                </div>

                <!-- Example Card 3 -->
                <div class="bg-white rounded-lg shadow p-6">
                    <h3 class="text-xl font-semibold mb-2">Quick Actions</h3>
                    <ul class="list-disc ml-4 text-sm text-gray-700">
                        <li><a href="{{ route('dashboard') }}" class="text-blue-500 hover:underline">View Dashboard</a></li>
                        <li><a href="{{ route('contact') }}" class="text-blue-500 hover:underline">Contact Support</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="text-red-500 hover:underline">Logout</a></li>
                    </ul>
                </div>
            </div>

            <!-- Logout Form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                @csrf
            </form>
        </div>
    </section>
    @endauth

    @guest
    <!-- All your current guest-facing hero, features, testimonials, etc. remain unchanged -->
    ...
    @endguest

</x-layout>
