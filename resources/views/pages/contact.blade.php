<x-layout>
    <div class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8">
        <div class="max-w-xl mx-auto text-center">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Contact Us</h2>
          <p class="mt-4 text-lg text-gray-600">We'd love to hear from you! Reach out for any queries, suggestions, or feedback.</p>
        </div>
        <div class="mt-12 max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
          <form action="#" method="POST" class="space-y-6">
            @csrf
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
              <input type="text" id="name" name="name" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your full name">
            </div>
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
              <input type="email" id="email" name="email" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your email address">
            </div>
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
              <textarea id="message" name="message" rows="4" required class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" placeholder="Your message"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" class="inline-block px-6 py-3 mt-4 text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 rounded-md shadow-md text-lg font-semibold">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
      
</x-layout>