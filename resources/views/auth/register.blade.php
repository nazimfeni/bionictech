<x-layout>
    <h1 class="text-4xl font-bold text-center text-slate-800 mb-6">Register a New Account</h1>

    <div class="mx-auto max-w-lg bg-white shadow-lg rounded-lg p-8">
        <form action="{{ route('register') }}" method="POST" class="space-y-4">
            @csrf
            
            <!-- Username Field -->
            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">User Name</label>
                <input type="text" name="username" id="username" value="{{ old('username') }}"
                class="mt-1 w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                {{ $errors->has('username') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                placeholder="Enter your username">

            @error('username')
                <p class="text-red-500 text-sm mt-1"> {{ $message }}</p>
            @enderror

            </div>
            

             <!-- email Field -->
             <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" id="email" value="{{ old('email') }}"
                    class="mt-1 w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 
                    {{ $errors->has('email') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                    placeholder="Enter your email">
            
                @error('email')
                    <p class="text-red-500 text-sm mt-1"> {{ $message }}</p>
                @enderror
            </div>
            

                  <!-- password Field -->
                  <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        {{ $errors->has('password') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        placeholder="Enter your password">
                        @error('password')
                        <p class="text-red-500 text-sm mt-1"> {{ $message }}</p>
                    @enderror
                </div>

    
                <!-- Confirmed password Field -->
                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" 
                        class="mt-1 w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500
                        {{ $errors->has('password_confirmation') ? 'border-red-500 focus:ring-red-500 focus:border-red-500' : 'border-gray-300' }}"
                        placeholder="Enter your confirm password">
                        @error('password_confirmation')
                        <p class="text-red-500 text-sm mt-1"> {{ $message }}</p>
                    @enderror
                </div>
    

            <!-- Submit Button -->
            <div class="mt-4">
                <button type="submit" 
                    class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg font-semibold hover:bg-blue-700 transition duration-300">
                    Register
                </button>
            </div>
        </form>
    </div>
</x-layout>
