
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title id="title">Homepage</title>
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">

    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --chart-bg-color: #ffffff;
        }

        .dark-mode {
            --bg-color: #121212;
            --text-color: #717171;
            --chart-bg-color: #1e1e1e;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            right: 100px;
        }

        .content {
            margin-left: 280px;
        }

        .category-container {
            display: flex;
            background: #cbc3d8;
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-radius: 15px;
            margin-right:0.5cm;
    
    /* Outer glow */
    box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
        }

        .category-title {
            font-size: 20px;
            margin-bottom: 10px;
            margin-bottom: 0.5cm;
        }

        .chart-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 20px;
            background-color: transparent ;
        }

        .chart-container .title {
            width: 40%;
        }

        @media screen and (max-width: 768px) {
            .chart-container .title {
                width: 100%;
            }
        }

        canvas{
            max-width: 200px;
            max-height: 200px;
        }

        .btn {
            display: inline-block;
            padding: 8px 12px;
            background-color: #007bff; /* Your button color */
            color: #fff; /* Text color */
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        .demande-item,
        .client-item,
        .breakdown-item,
        .bywilaya-item {
            margin-top: 1cm;
            margin: 0.5cm;
        }

       .add{
        display: flex;
        background: #cbc3d8;
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-radius: 15px;
            /* margin-left: 280px; */
            margin-right:0.5cm;
    
    /* Outer glow */
    box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
    /* position: fixed; */

       }

       #downloadDetails{
margin-left:1cm;

       }
       .breakdown-container {
        gap: 20px;
        padding:15px;
        border-radius: 15px;
        background: #cbc3d8;
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: space-between;
            margin-top: 10px;
            box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
            margin-right:0.5cm;
        }
        .wilaya-container {
            /* display: flex; */
            background: #cbc3d8;
            padding: 15px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-radius: 5px;
            border-radius: 15px;
            margin-right:0.5cm;
    
    /* Outer glow */
    box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
        }

        /* .breakdown-item {
            flex: 1 0 calc(50% - 10px);
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
        }

        .breakdown-item h3 {
            margin-top: 0;
        } */

        @media screen and (max-width: 768px) {
            .breakdown-item {
                flex: 1 0 100%; /* Full width on smaller screens */
            }
        }
        .chart-container  {
    background-color: transparent ; /* Remove background color for Plotly charts */
}
    </style>
</head>
<body>
 
    @include('sidebarfr')
    
    <div class="content">
        <h1>Statestiques Algerie Telecom:</h1>
        <div class="category-container">
            <h2 class="category-title" id="title_demands">Demandes Stats:</h2>
            <div class="demande-item">
                <h3 id="title_total_demands">Demandes Totale : {{ $totalDemands }}</h3>
                
                <div class="chart-container">
                    <canvas id="totalDemandsChart"></canvas>
                </div>
            </div>
            <div class="demande-item">
                <h3 id="title_demands_not_done">Demandes non satisfaites: {{ $demandsNotDone }}</h3>
                <div class="chart-container">
                    <canvas id="demandsNotDoneChart"></canvas>
                </div>
            </div>
            <div class="demande-item">
                <h3 id="title_demands_done">Demandes faites:  {{ $demandsDone }}</h3>
                <div class="chart-container">
                    <canvas id="demandsDoneChart"></canvas>
                </div>
            </div>
            <div class="demande-item">
                <h3 id="title_ratio_demande">Ratio demande:  {{ $ratioDemande }}% </h3>
                <div class="chart-container">
                    <canvas id="ratioDemandeChart"></canvas>
                </div>
            </div>
        </div>


        <div class="category-container">
            
            <h2 class="category-title" id="title_clients">Client Stats</h2>
            <div class="client-item">
                <h3 id="title_total_clients">Total clients: {{ $totalClients }}</h3>
                
                <div class="chart-container">
                   
                    <canvas id="totalClientsChart"></canvas>
                </div>
            </div>
        </div>

        
        
        {{-- <h2 class="category-title" id="title_breakdown_plotly">Breakdown Stats</h2> --}}
        <div class="breakdown-container">
            <h2 class="category-title" id="title_breakdown_plotly">Derangements Stats</h2>
            
            <div class="breakdown-item">
                
                <h3 id="title_total_breakdowns_plotly">Derangements Totale : {{ $totalBreakdowns }}</h3>
                <div class="chart-container">
                    <div id="totalBreakdownsPlotly"></div>
                </div>
            </div>



            <div class="breakdown-item">
                <h3 id="title_total_breakdowns_plotly">Derangements faites:  {{ $derangementsDone }}</h3>
                
                <div class="chart-container">
                    <div id="BreakdownsDonePlotly"></div>
                </div>
            </div>



            <div class="breakdown-item">
                <h3 id="title_total_breakdowns_plotly">Derangement non satisfaites: {{ $derangementsNotDone }}</h3>
                
                <div class="chart-container">
                    <div id="BreakdownsNotDonePlotly"></div>
                </div>
            </div>



            <div class="breakdown-item">
                <h3 id="title_total_breakdowns_plotly">Ratio Derangement: {{ $ratioDerangement }}</h3>
                
                <div class="chart-container">
                    <div id="RatioBreakdownsPlotly"></div>
                </div>
            </div>
        </div>


        <div class="wilaya-container">
            <div class="bywilaya-item">
                <h3 id="title_dots_wilaya_plotly">Dots par Wilaya:</h3>
                @foreach($dotsByWilaya as $dot)
                <div>{{ $dot->Wilaya_user }}: {{ $dot->count }}</div>
            @endforeach
                <div class="chart-container">
                    <div id="dotsByWilayaPlotly" class="plotly-chart"></div>
                </div>
            </div>
        {{-- </div> --}}


        {{-- <div class="wilaya-container"> --}}
            {{-- <h2 class="category-title" id="title_wilaya_plotly">Admins and Dots par Wilaya</h2> --}}
            @php
            $user = session('user');
        @endphp
            @if($user && $user->Role !== 'dot') 
            <div class="bywilaya-item">
                <h3 id="title_admins_wilaya_plotly">Admins par Wilaya:</h3>
                @foreach($adminsByWilaya as $admin)
                    <div>{{ $admin->Wilaya_user }}: {{ $admin->count }}</div>
                @endforeach
                <div class="chart-container">
                    <div id="adminsByWilayaPlotly" class="plotly-chart"></div>
                </div>
            </div>
            @endif</div>
            

            

   
<div class="add">
        <h1 >Télécharger les détails des statistiques : </h1>
        <button class="btn" id="downloadDetails">Telecharger</button>
    </div></div>

    
    @include('footer')

    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

    <script>
       
        var totalDemands = {!! json_encode($totalDemands) !!};
        var demandsNotDone = {!! json_encode($demandsNotDone) !!};
        var demandsDone = {!! json_encode($demandsDone) !!};
        var ratioDemande = {!! json_encode($ratioDemande) !!};
        var totalClients = {!! json_encode($totalClients) !!};

        // Chart.js charts
        new Chart(document.getElementById('totalDemandsChart').getContext('2d'), {
            type: 'pie',
            data: {
                // labels: ['Total Demands'],
                datasets: [{
                    data: [totalDemands],
                    backgroundColor: [
                      
                      'rgba(54, 162, 235, 0.6)',
                      'rgba(255, 206, 86, 0.6)',
                      'rgba(75, 192, 192, 0.6)',
                      'rgba(153, 102, 255, 0.6)',
                      'rgba(255, 159, 64, 0.6)',
                      'rgba(255, 99, 132, 0.6)'
                  ]
                }]
            }
        });

        

        new Chart(document.getElementById('totalClientsChart').getContext('2d'), {
            type: 'pie',
            data: {
                // labels: ['Total Clients'],
                datasets: [{
                    // label: 'Total Clients',
                    data: [totalClients],
                    backgroundColor: [
                      
                      
                      'rgba(255, 99, 132, 0.6)'
                  ]
                }]
            }
        });

        new Chart(document.getElementById('demandsNotDoneChart').getContext('2d'), {
            type: 'pie',
            data: {
                // labels: ['Demands Not Done'],
                datasets: [{
                    // label: 'Demands Not Done',
                    data: [demandsNotDone],
                    backgroundColor: [
                     
                      'rgba(75, 192, 192, 0.6)',
                      'rgba(153, 102, 255, 0.6)',
                      'rgba(255, 159, 64, 0.6)',
                      'rgba(255, 99, 132, 0.6)'
                  ]
                }]
            }
        });

        new Chart(document.getElementById('demandsDoneChart').getContext('2d'), {
            type: 'pie',
            data: {
                // labels: ['Demands Done'],
                datasets: [{
                    // label: 'Demands Done',
                    data: [demandsDone],
                    backgroundColor: [
                      
                      'rgba(153, 102, 255, 0.6)',
                      'rgba(255, 159, 64, 0.6)',
                      'rgba(255, 99, 132, 0.6)'
                  ]
                }]
            }
        });

        new Chart(document.getElementById('ratioDemandeChart').getContext('2d'), {
    type: 'pie',
    data: {
        // labels: ['Ratio Demande'],
        datasets: [{
            data: [ratioDemande], // Pass ratioDemande as the data directly
            backgroundColor: [
               
                'rgba(255, 159, 64, 0.6)',
                'rgba(255, 99, 132, 0.6)'
            ]
        }]
    },
    options: {
        // Add options as needed
        // Example: scales, plugins, etc.
    }
});

        
       



        function downloadStatistics() {
            const statisticsData = {
                totalDemands: {!! json_encode($totalDemands) !!},
                totalBreakdowns: {!! json_encode($totalBreakdowns) !!},
                adminsByWilaya: {!! json_encode($adminsByWilaya) !!},
                dotsByWilaya: {!! json_encode($dotsByWilaya) !!},
                totalClients: {!! json_encode($totalClients) !!},
                demandsNotDone: {!! json_encode($demandsNotDone) !!},
                demandsDone: {!! json_encode($demandsDone) !!},
                ratioDemande: {!! json_encode($ratioDemande) !!}
            };

            const jsonData = JSON.stringify(statisticsData, null, 2);
            const blob = new Blob([jsonData], { type: 'application/json' });
            const a = document.createElement('a');
            a.href = window.URL.createObjectURL(blob);
            a.download = 'statisticsdata.json';
            document.body.appendChild(a);
            a.click();
            document.body.removeChild(a);
        }

        // Event listener for the Download Details button
        document.getElementById('downloadDetails').addEventListener('click', downloadStatistics);
    </script>
    <script>
        // Fetch PHP variables from Blade
        var derangementsDone = {!! json_encode($derangementsDone) !!};
        var derangementsNotDone = {!! json_encode($derangementsNotDone) !!};
        var ratioDerangement = {!! json_encode($ratioDerangement) !!};
        var totalBreakdowns = {!! json_encode($totalBreakdowns) !!};
        var adminsByWilaya = {!! json_encode($adminsByWilaya) !!};
        var dotsByWilaya = {!! json_encode($dotsByWilaya) !!};
    
        // Plotly chart for total breakdowns
        var plotlyTotalBreakdowns = {
            values: [totalBreakdowns], // Ensure this is structured correctly based on your data
            labels: ['Derangements Totale'], // Labels for the chart
            type: 'pie'
        };
        

        var plotlyderangementsNotDone = {
            values: [derangementsNotDone], // Ensure this is structured correctly based on your data
            labels: ['Derangement non satisfaites'], // Labels for the chart
            type: 'pie',
            marker: {
            colors: [
            
            
            
           '#9467bd', // Purple
        ]}
        };

        var plotlyderangementsDone = {
            values: [derangementsDone], // Ensure this is structured correctly based on your data
            labels: ['Derangements faites'], // Labels for the chart
            type: 'pie',
            marker: {
            colors: [
            
            
            
            '#2E8B57'  // Sea Green
        ]}
        };


        var plotlyRatioBreakdowns = {
            values: [ratioDerangement], // Ensure this is structured correctly based on your data
            labels: ['Ratio Derangement'], // Labels for the chart
            type: 'pie',
            marker: {
        colors: [
            
            
        '#d62728', // Dark Red
        ]
    }
        };

        var colors = [
    '#1f77b4', // Dark Blue
    '#ff7f0e', // Dark Orange
    '#2ca02c', // Dark Green
    '#d62728', // Dark Red
    '#9467bd', // Purple
    '#8c564b', // Brown
    '#e377c2', // Light Pink
    '#7f7f7f', // Gray
    '#bcbd22', // Lime Green
    '#17becf', // Cyan
    '#aec7e8', // Light Blue
    '#ffbb78', // Light Orange
    '#98df8a', // Light Green
    '#ff9896', // Light Red
    '#c5b0d5', // Light Purple
    '#c49c94', // Light Brown
    '#f7b6d2', // Light Pink 2
    '#c7c7c7', // Light Gray
    '#dbdb8d', // Yellow Green
    '#9edae5'  // Light Cyan
];

// Plotly chart for admins by Wilaya
var plotlyAdminsByWilaya = {
    x: adminsByWilaya.map(item => item.Wilaya_user),
    y: adminsByWilaya.map(item => item.count),
    type: 'bar',
    name: 'Admins by Wilaya',
    marker: {
        color: colors  // Assign colors dynamically from the colors array
    }
};

// Plotly chart for dots by Wilaya
var plotlyDotsByWilaya = {
    x: dotsByWilaya.map(item => item.Wilaya_user),
    y: dotsByWilaya.map(item => item.count),
    type: 'bar',
    name: 'Dots by Wilaya',
    marker: {
        color: colors  // Assign colors dynamically from the colors array
    }
};
    
var layout = {
    // Add layout configuration options as needed
    // For example, specify width and height:
    width: 600,  // Adjust width as needed
    height: 400, // Adjust height as needed
    paper_bgcolor: 'rgba(0, 0, 0, 0)',
    plot_bgcolor: 'rgba(0, 0, 0, 0)',
    colors: [ '#1f77b4', // Dark Blue
    '#ff7f0e', // Dark Orange
    '#2ca02c', // Dark Green
    '#d62728', // Dark Red
    '#9467bd', // Purple
    '#8c564b', // Brown
    '#e377c2', // Light Pink
    '#7f7f7f', // Gray
    '#bcbd22', // Lime Green
    '#17becf', // Cyan
    '#aec7e8', // Light Blue
    '#ffbb78', // Light Orange
    '#98df8a', // Light Green
    '#ff9896', // Light Red
    '#c5b0d5', // Light Purple
    '#c49c94', // Light Brown
    '#f7b6d2', // Light Pink 2
    '#c7c7c7', // Light Gray
    '#dbdb8d', // Yellow Green
    '#9edae5'  // Light Cyan]
        ]
    // margin: {
    //     l: 50, r: 50, b: 50, t: 50, pad: 4
    // }
};
Plotly.newPlot('BreakdownsNotDonePlotly', [plotlyderangementsNotDone], layout);
Plotly.newPlot('BreakdownsDonePlotly', [plotlyderangementsDone], layout);
Plotly.newPlot('RatioBreakdownsPlotly', [plotlyRatioBreakdowns], layout);
Plotly.newPlot('totalBreakdownsPlotly', [plotlyTotalBreakdowns], layout);
@php
      $user = session('user');
  @endphp
      @if($user && $user->Role !== 'dot')  
Plotly.newPlot('adminsByWilayaPlotly', [plotlyAdminsByWilaya], layout);
@endif
Plotly.newPlot('dotsByWilayaPlotly', [plotlyDotsByWilaya], layout);
        
        


        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });
    </script>

    
</body>
</html>
