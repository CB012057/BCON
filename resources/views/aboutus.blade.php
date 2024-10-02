<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-white leading-tight" style="background-color: midnightblue; color: white; padding: 10px; border-radius: 8px;">
            {{ __('About Us') }}
        </h2>
    </x-slot>

    <div class="container mt-5 text-center">
        <!-- Successful Projects & Popularity Growth Section (One Below the Other) -->
        <div class="mt-5">
            <h2>Our Achievements</h2>
            <p>Visualizing our completed projects and company growth over the years.</p>

            <!-- Successful Projects Chart -->
            <div class="mx-auto" style="max-width: 400px;">
                <canvas id="successfulProjectsChart" style="max-width: 100%; height: 250px;"></canvas>
            </div>

            <!-- Popularity Growth Chart -->
            <div class="mx-auto mt-4" style="max-width: 400px;">
                <canvas id="popularityGrowthChart" style="max-width: 100%; height: 250px;"></canvas>
            </div>
        </div>

        <!-- Project Type Distribution Section -->
        <div class="mt-5">
            <h2>Project Type Distribution</h2>
            <p>See how our projects are distributed across various sectors.</p>
            <div class="mx-auto" style="max-width: 400px;">
                <canvas id="projectTypeDistributionChart" style="max-width: 100%; height: 250px;"></canvas>
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
                    data: [30, 45, 50, 70], // Example data
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
                    data: [10, 30, 45, 60, 90], // Example data
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
                    data: [40, 30, 20, 10], // Example data
                    backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
                }]
            },
            options: {
                responsive: true
            }
        });
    </script>
</x-app-layout>




