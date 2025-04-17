<x-layout>
    <div class="max-w-2xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-4">Edit Profile</h1>
        @if (session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">
        {{ session('success') }}
    </div>
@endif
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')
        
            <div class="mb-4">
                <label for="name" class="block font-medium">User Name:</label>
                <input type="text" id="username" name="username" value="{{ $user->username }}" class="w-full border px-4 py-2 rounded">
            </div>
        
            <div class="mb-4">
                <label for="email" class="block font-medium">Email:</label>
                <input type="email" id="email" name="email" value="{{ $user->email }}" class="w-full border px-4 py-2 rounded">
            </div>
        
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
        </form>
        
    </div>
</x-layout>
