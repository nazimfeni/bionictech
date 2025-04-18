<x-layout>
    <div class="bg-gray-100 py-16 px-4 sm:px-6 lg:px-8">
      @if(session('success'))
  <div class="mb-4 text-green-600 font-semibold text-center">
    {{ session('success') }}
  </div>
@endif

        <div class="max-w-xl mx-auto text-center">
          <h2 class="text-3xl font-extrabold text-gray-900 sm:text-4xl">Contact Us</h2>
          <p class="mt-4 text-lg text-gray-600">We'd love to hear from you! Reach out for any queries, suggestions, or feedback.</p>
        </div>
        <div class="mt-12 max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-lg">
          <form action="{{ route('contact.send') }}" method="POST" class="space-y-6">
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
            <div class="g-recaptcha" data-sitekey="6Lex398qAAAAAM22Lk6B_j1AHOnNjv9Nlw90YFBT"></div>
              <script src="https://www.google.com/recaptcha/api.js" async defer></script>

            <div class="text-center">
              <button type="submit" class="inline-block px-6 py-3 mt-4 text-white bg-indigo-600 hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 rounded-md shadow-md text-lg font-semibold">
                Send Message
              </button>
            </div>
          </form>
        </div>
      </div>
      
      <p><strong>Address:</strong> Adelaide, South Australia, Australia</p>

      <div style="width: 100%; height: 450px; margin-top: 20px;">
        <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d418339.51582496404!2d138.28150688359077!3d-34.999758796790346!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x491337677356c5d5%3A0xd9085d941c3ea3ee!2sBionic%20Tech%20Australia!5e0!3m2!1sen!2sbd!4v1744975569049!5m2!1sen!2sbd" 
        width="100%" 
        height="450" 
        style="border:0;" 
        allowfullscreen="" 
        loading="lazy" 
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
      </div>
  </div>

</x-layout>