<x-layout>
    <div class="container py-10 ml-10">
        <!-- Header Section with Image and Intro -->
        <div class="flex flex-col md:flex-row items-center md:items-start gap-10 mb-12">
            <!-- Text Left -->
            <div class="md:w-1/2">
                <h1 class="text-4xl font-bold text-gray-900 mb-6">Join the BionicTech Team</h1>
                <p class="mb-4 text-gray-700 leading-relaxed">
                    At BionicTech, we’re on a mission to innovate and deliver cutting-edge digital solutions.
                    We're constantly on the lookout for driven, creative, and talented professionals ready to shape the future of tech with us.
                </p>
                <p class="text-gray-700 leading-relaxed">
                    Explore our open roles and discover how you can be a part of our collaborative, forward-thinking culture.
                    Your journey starts here.
                </p>
            </div>

            <!-- Image Right -->
            <div class="md:w-1/2 flex justify-center md:justify-end">
                <img src="{{ asset('images/careers-preview.jpg') }}" alt="Join Our Team at BionicTech" class="w-full max-w-md h-auto rounded-xl shadow-lg">
            </div>
        </div>

        <!-- Job Listings -->
        <div class="grid gap-10">
            <!-- Frontend Developer Card -->
            <div class="border p-8 rounded-2xl shadow-xl bg-white">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900">Frontend Developer</h2>
                <p class="text-sm text-gray-600 mb-3">Location: Remote</p>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    We’re seeking a skilled Frontend Developer with expertise in Vue.js to craft modern, responsive, and intuitive web interfaces.
                    Collaborate closely with design and backend teams to bring ideas to life.
                </p>
                <h3 class="font-medium text-gray-800 mt-4">Key Responsibilities:</h3>
                <ul class="list-disc pl-5 mt-2 text-gray-700 text-sm space-y-1">
                    <li>Build high-quality user interfaces with Vue.js and modern JavaScript frameworks.</li>
                    <li>Translate UI/UX designs into interactive, responsive web applications.</li>
                    <li>Collaborate across teams to define and deliver innovative features.</li>
                    <li>Ensure performance, scalability, and maintainability of applications.</li>
                    <li>Adopt best practices and participate in code reviews.</li>
                    <li>Stay up to date with frontend trends and technologies.</li>
                </ul>
                <p class="mt-6 text-gray-800 font-medium">
                    To apply, email your CV to:
                    <a href="mailto:careers@bionictech.com.au" class="text-blue-600 underline">careers@bionictech.com.au</a>
                </p>
            </div>

            <!-- Backend Developer Card -->
            <div class="border p-8 rounded-2xl shadow-xl bg-white">
                <h2 class="text-2xl font-semibold mb-2 text-gray-900">Backend Developer (Laravel)</h2>
                <p class="text-sm text-gray-600 mb-3">Location: Remote / Hyderabad</p>
                <p class="text-gray-700 mb-4 leading-relaxed">
                    We’re hiring a Backend Developer with Laravel expertise to architect and maintain scalable backend services and APIs.
                    Join our team to help power robust digital platforms for a global audience.
                </p>
                <h3 class="font-medium text-gray-800 mt-4">Key Responsibilities:</h3>
                <ul class="list-disc pl-5 mt-2 text-gray-700 text-sm space-y-1">
                    <li>Design and implement backend systems and REST APIs using Laravel.</li>
                    <li>Work closely with frontend teams to enable seamless integration.</li>
                    <li>Ensure data security and system performance.</li>
                    <li>Optimize database operations for efficiency and reliability.</li>
                    <li>Contribute to system architecture and participate in reviews.</li>
                    <li>Write comprehensive tests to ensure code quality and stability.</li>
                </ul>
                <p class="mt-6 text-gray-800 font-medium">
                    To apply, email your CV to:
                    <a href="mailto:careers@bionictech.com.au" class="text-blue-600 underline">careers@bionictech.com.au</a>
                </p>
            </div>
        </div>
    </div>
</x-layout>
