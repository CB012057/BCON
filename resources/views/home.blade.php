<x-app-layout>
    <main class="relative">
        <div class="relative h-screen bg-cover bg-center" style="background-image: url('{{ asset('Images/SSP - HomeBlade.jpg') }}');">
            <div class="absolute inset-0 bg-black opacity-40"></div>
            <div class="container mx-auto h-full flex items-left justify-left text-left pt-48">
                <div class="relative text-white bg-opacity-70 p-8 text-shadow-lg rounded-lg">
                    <p class="font-bold">Tired of chasing down client information,<br>
                    managing scattered project details,<br>
                    and missing out on leads?</p>
                    <br>
                    <br>
                    <h1 class="text-6xl font-bold">Introducing BCON</h1>
                    <br>
                    <h2 class= "text-2xl font-bold" >The All-In-One Solution</h2>
                </div>
            </div>
            </div>
        <br>
        <br>
        <br>
        <div class="container mx-auto p-4">
            <div class="flex items-center">
                <!-- Text Section -->
                <div class="w-1/2 p-32">
                    <h3 class="text-blue-500">What is BCON ?</h3>
                    <br>

                    <p class="text-3xl font-bold">
                        BCON streamlines your workflow,<br>
                        centralizes client data,<br>
                        and keeps your projects on track.
                    </p>
                </div>
                <!-- Image Section -->
                <div class="w-1/2 p-4 flex justify-center">
                    <img src="{{ asset('Images/Homeblade2.jpg') }}" alt="Description of image" class="w-3/4 h-auto rounded-lg">
                </div>
            </div>
        </div>
        <hr>


        <div class="container mx-auto p-4">
            <div class="flex items-center">
                <!-- Image Section -->
                <div class="w-1/2 p-4 flex justify-center">
                    <img src="{{ asset('Images/Homeblade3.jpg') }}" alt="Description of image" class="w-3/4 h-auto rounded-lg">
                </div>
                <!-- Text Section -->
                <div class="w-1/2 p-32">
                    <h3 class="text-blue-500">Our Mission</h3>
                    <br>

                    <p class="text-lg">
                        Unified Client Management: Store all client information, project
                        history, preferences. and communication logs in one central
                        location.
                        Enhanced Project Visibility: Track project details in plans,Modifications and communication with contractors, designers <br>
                        and clients in a single platform.
                        Streamlined Communication: Collaborate effectively through
                        project updates, milestone tracking, and centralized
                        discussions.
                    </p>
                </div>
            </div>
            <br> <br>
            <!-- More information section -->
            <section id="more-info" class="relative bg-gray-800 py-12">
                <!-- Background image with darker tint -->
                <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('Images/Homeblade9.jpg') }}'); opacity: 0.7;"></div>
                <!-- Content container -->
                <div class="container mx-auto text-center text-white relative z-10">
                    <h2 class="text-4xl font-bold mb-4">Benefits</h2>
                    <p class="text-lg mb-8">BCON empowers you to:</p>
                    <div class="flex flex-wrap justify-center">

                        <!-- Card elements -->
                        <!-- Card 1 -->
                        <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                            <img class="w-full h-64 object-cover" src="{{ asset('Images/Homeblade4.jpg') }}" alt="My Progress">
                            <!-- Increased height to h-64 -->
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">Client Service</div>
                                <p class="text-gray-300 text-base text-center">
                                    Deliver exceptional client service through personalized communication and project updates.
                                </p>
                            </div>
                        </div>
                        <!-- Card 2 -->
                        <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                            <img class="w-full h-64 object-cover" src="{{ asset('Images/Homeblade5.jpg') }}" alt="My Plans">
                            <!-- Increased height to h-64 -->
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">Collaborations</div>
                                <p class="text-gray-300 text-base text-center">
                                    Improve collaboration and build stronger relationships with your clients and partners.
                                </p>
                            </div>
                        </div>
                        <!-- Card 3 -->
                        <div class="max-w-md rounded-lg overflow-hidden shadow-lg bg-gray-700 mx-4 my-4 text-white transform transition duration-300 hover:scale-105">
                            <img class="w-full h-64 object-cover" src="{{ asset('Images/Homeblade6.jpg') }}" alt="My Coach">
                            <!-- Increased height to h-64 -->
                            <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-center">Efficient</div>
                                <p class="text-gray-300 text-base text-center">
                                    Increase project efficiency and eliminate costly mistakes due to scattered information.
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <br>
            <br>
            <br>
            <div class="bg-gray-100 py-12">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <h2 class="text-center text-3xl font-extrabold text-gray-900 mb-8">What our clients say?</h2>
                    <p class="text-center text-xl text-gray-600 mb-12">Hear from our satisfied clients.</p>
                    <div class="grid gap-8 lg:grid-cols-3 sm:grid-cols-1">
                        <!-- Testimonial 1 -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="mb-4">
                                <span class="block text-lg font-semibold text-gray-900">Sarah L.</span>
                                <span class="flex items-center">
                        <span class="text-yellow-500">4.9</span>
                        <svg class="w-5 h-5 text-yellow-500 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 3.227c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.381 2.454a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.381-2.454a1 1 0 00-1.176 0l-3.381 2.454c-.784.57-1.838-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.003 9.684c-.784-.57-.38-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.957z" />
                        </svg>
                    </span>
                            </div>
                            <p class="text-gray-700">"Since using BCON, our account manager always knows exactly where we stand on a project. It's a night and day difference from the scattered emails and sticky notes we used to deal with!"</p>
                        </div>
                        <!-- Testimonial 2 -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="mb-4">
                                <span class="block text-lg font-semibold text-gray-900">David B.</span>
                                <span class="flex items-center">
                        <span class="text-yellow-500">4.5</span>
                        <svg class="w-5 h-5 text-yellow-500 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 3.227c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.381 2.454a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.381-2.454a1 1 0 00-1.176 0l-3.381 2.454c-.784.57-1.838-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.003 9.684c-.784-.57-.38-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.957z" />
                        </svg>
                    </span>
                            </div>
                            <p class="text-gray-700">"BCON is a lifesaver! We can track every detail of our project in one place, from plans to budgets. No more confusion or missed deadlines."</p>
                        </div>
                        <!-- Testimonial 3 -->
                        <div class="bg-white p-6 rounded-lg shadow-md">
                            <div class="mb-4">
                                <span class="block text-lg font-semibold text-gray-900">Lisa T.</span>
                                <span class="flex items-center">
                        <span class="text-yellow-500">4.5</span>
                        <svg class="w-5 h-5 text-yellow-500 ml-1" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 3.227c.3-.921 1.603-.921 1.902 0l1.286 3.957a1 1 0 00.95.69h4.173c.969 0 1.371 1.24.588 1.81l-3.381 2.454a1 1 0 00-.364 1.118l1.287 3.957c.3.921-.755 1.688-1.54 1.118l-3.381-2.454a1 1 0 00-1.176 0l-3.381 2.454c-.784.57-1.838-.197-1.54-1.118l1.287-3.957a1 1 0 00-.364-1.118L2.003 9.684c-.784-.57-.38-1.81.588-1.81h4.173a1 1 0 00.95-.69l1.286-3.957z" />
                        </svg>
                    </span>
                            </div>
                            <p class="text-gray-700">"Having all the project communication and documentation in one system has made a huge difference. It's easier to find what we need and stay on the same page with everyone involved."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <!-- Footer Section -->
            <footer class="bg-blue-900 text-white py-12">
                <div class="container mx-10 px-8 relative">
                    <!-- Logo -->
                    <div class="FooterLogo ,absolute top-0 right-0 mt-4 mr-4 ">
                        <img src="{{ asset('Images/LOGOimg.png') }}" alt="BCON Logo" class="h-12">
                    </div>
                    <div class="flex flex-wrap justify-between">
                        <!-- About Us -->
                        <div class="w-full md:w-1/3 mb-6">
                            <h4 class="text-xl font-bold mb-2">About Us</h4>
                            <p class="text-gray-400">Welcome to Bcon, your trusted partner in construction project management. At Bcon, we believe in making the complex world of construction simple and efficient.</p>
                        </div>
                        <!-- Contact -->
                        <!--div class="w-full md:w-1/3 mb-6">
                            <h4 class="text-xl font-bold mb-2">Contact</h4>
                            <p class="text-gray-400">Email: support@fitfusion.com</p>
                            <p class="text-gray-400">Phone: (123) 456-7890</p>
                            <p class="text-gray-400">Address: 123 Fitness Street, Workout City, Country</p>
                        </div>
                        <-- Quick Links -->
                        <div class="w-full md:w-1/3 mb-6">
                            <h4 class="text-xl font-bold mb-2">Quick Links</h4>
                            <ul class="text-gray-400">
                                <li><a href="{{ route('home') }}" class="hover:text-white">Home</a></li>
                                <li><a href="{{ route('About Us') }}" class="hover:text-white">About Us</a></li>
                                <li><a href="{{ route('Product') }}" class="hover:text-white">Privacy Policy</a></li>
                                <li><a href="{{ route('Contact Us') }}" class="hover:text-white">Terms of Service</a></li>


                            </ul>
                        </div>
                    </div>
                    <div class="flex justify-center mt-8">
                        <a href="#" class="text-gray-400 mx-2 hover:text-white">Facebook</a>
                        <a href="#" class="text-gray-400 mx-2 hover:text-white">Twitter</a>
                        <a href="#" class="text-gray-400 mx-2 hover:text-white">Instagram</a>
                        <a href="#" class="text-gray-400 mx-2 hover:text-white">LinkedIn</a>
                    </div>
                    <div class="text-center text-gray-400 mt-8">
                        &copy; 2024 BCON
                    </div>
                </div>
            </footer>

            <script>
                // Smooth scroll function
                document.querySelector('a[href^="#"]').addEventListener('click', function (e) {
                    e.preventDefault();

                    const target = document.querySelector(this.getAttribute('href'));
                    window.scrollTo({
                        top: target.offsetTop,
                        behavior: 'smooth',
                    });
                });
            </script>
    </main>




    {{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Dashboard') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">--}}
{{--                <x-welcome />--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
</x-app-layout>
