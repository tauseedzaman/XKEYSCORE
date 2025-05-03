<x-app-layout>
    <x-slot name="header">
        <x-search-bar />
    </x-slot>

    <div class="py-12 space-y-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            {{-- Statistic Cards --}}
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <x-dashboard-card title="Accounts" :value="$accountsCount" />
                <x-dashboard-card title="Activities" :value="$activitiesCount" />
                <x-dashboard-card title="Messages" :value="$messagesCount" />
                <x-dashboard-card title="Locations" :value="$locationsCount" />
                <x-dashboard-card title="Credentials" :value="$credentialsCount" />
                <x-dashboard-card title="Socials" :value="$socialsCount" />
            </div>
        </div>

        {{-- Charts --}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 p-6 rounded-lg shadow">
                <h3 class="text-lg font-semibold text-gray-800 dark:text-gray-100 mb-4">Users Over Time</h3>
                <canvas id="usersChart" height="100"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const usersChart = new Chart(document.getElementById('usersChart').getContext('2d'), {
            type: 'line'
            , data: {
                labels: {
                    !!json_encode($userChartLabels) !!
                }
                , datasets: [{
                    label: 'New Users'
                    , data: {
                        !!json_encode($userChartData) !!
                    }
                    , borderColor: '#3b82f6'
                    , backgroundColor: 'rgba(59, 130, 246, 0.1)'
                    , fill: true
                    , tension: 0.4
                }]
            }
            , options: {
                responsive: true
                , scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

    </script>
</x-app-layout>
