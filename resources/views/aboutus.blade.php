<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="container mt-5 text-center">
        <!-- Achievements Section -->
        <div class="mt-5">
            <h2 style="
                font-size: 28px;
                font-weight: 700;
                text-transform: uppercase;
                color: midnightblue;
                padding-bottom: 10px;
                border-bottom: 2px solid #4CAF50;
                letter-spacing: 1.5px;">
                Our Achievements
            </h2>
            <br>

            <p>Visualizing our completed projects and company growth over the years.</p>
            <br>
            <br>
            <br>
            <div class="flex justify-center">
                <!-- Successful Projects Chart -->
                <div class="mx-4" style="width: 400px; margin: 20px;">
                    <canvas id="successfulProjectsChart"></canvas>
                </div>

                <!-- Popularity Growth Chart -->
                <div class="mx-4" style="width: 400px; margin: 20px;">
                    <canvas id="popularityGrowthChart"></canvas>
                </div>

                <!-- Project Type Distribution Chart -->
                <div class="mx-4" style="width: 400px; margin: 20px;">
                    <canvas id="projectTypeDistributionChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Projects Slideshow Section -->
        <div class="mt-10">
            <h2 style="
                font-size: 28px;
                font-weight: 700;
                text-transform: uppercase;
                color: midnightblue;
                padding-bottom: 10px;
                border-bottom: 2px solid #4CAF50;
                letter-spacing: 1.5px;">
                Our Projects
            </h2>
            <br>
            <br>

            <div id="projectsSlideshow" class="slideshow-container mx-auto" style="max-width: 900px; max-height: 500px;">
                <img src="{{ asset('Images/Homeblade12.jpg') }}" alt="Project 1" class="slideshow-image" style="width:100%; max-height: 400px;">
                <img src="{{ asset('Images/Homeblade11.jpg') }}" alt="Project 2" class="slideshow-image" style="width:100%; max-height: 400px;">
                <img src="{{ asset('Images/Homeblade10.jpg') }}" alt="Project 3" class="slideshow-image" style="width:100%; max-height: 400px;">
                <img src="{{ asset('Images/Homeblade6.jpg') }}" alt="Project 3" class="slideshow-image" style="width:100%; max-height: 400px;">
            </div>
        </div>
    </div>

    <!-- Include Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Successful Projects Chart
        const successfulProjectsChartCtx = document.getElementById('successfulProjectsChart').getContext('2d');
        const successfulProjectsChart = new Chart(successfulProjectsChartCtx, {
            type: 'bar',
            data: {
                labels: ['2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Successful Projects',
                    data: [30, 45, 50, 70],
                    backgroundColor: '#4CAF50'
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Number of Projects'
                        }
                    }
                }
            }
        });

        // Popularity Growth Chart
        const popularityGrowthChartCtx = document.getElementById('popularityGrowthChart').getContext('2d');
        const popularityGrowthChart = new Chart(popularityGrowthChartCtx, {
            type: 'line',
            data: {
                labels: ['2019', '2020', '2021', '2022', '2023'],
                datasets: [{
                    label: 'Popularity Index',
                    data: [10, 30, 45, 60, 90],
                    borderColor: '#FF5733',
                    fill: false
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Popularity Index'
                        }
                    }
                }
            }
        });

        // Project Type Distribution Chart
        const projectTypeDistributionChartCtx = document.getElementById('projectTypeDistributionChart').getContext('2d');
        const projectTypeDistributionChart = new Chart(projectTypeDistributionChartCtx, {
            type: 'pie',
            data: {
                labels: ['Residential', 'Commercial', 'Industrial', 'Infrastructure'],
                datasets: [{
                    data: [40, 30, 20, 10],
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
                }]
            },
            options: {
                responsive: true
            }
        });

        // Slideshow Script
        let slideIndex = 0;
        const slides = document.getElementsByClassName("slideshow-image");

        function showSlides() {
            for (let i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) { slideIndex = 1 }
            slides[slideIndex - 1].style.display = "block";
            setTimeout(showSlides, 3000); // Change slide every 3 seconds
        }

        showSlides();
    </script>

    <br><br><br>

    <!-- Footer Section -->
    <footer class="bg-blue-900 text-white py-12">
        <div class="container mx-10 px-8 relative">
            <!-- Logo -->
            <div class="FooterLogo ,absolute top-0 right-0 mt-4 mr-4">
                <img src="{{ asset('Images/LOGOimg.png') }}" alt="BCON Logo" class="h-12">
            </div>
            <div class="flex flex-wrap justify-between">
                <!-- About Us -->
                <div class="w-full md:w-1/3 mb-6">
                    <h4 class="text-xl font-bold mb-2">About Us</h4>
                    <p class="text-gray-400">Welcome to Bcon, your trusted partner in construction project management. At Bcon, we believe in making the complex world of construction simple and efficient.</p>
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
        </div>
    </footer>
</x-app-layout>







