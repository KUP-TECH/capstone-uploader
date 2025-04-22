<x-basecomponent>
  <x-sidebar> </x-sidebar>
    <style>
        body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        padding: 0;
        padding-bottom: 60px; /* Adjust based on your footer height */
        box-sizing: border-box;
        }
        *, *::before, *::after {
        box-sizing: inherit;
        }

        /* Responsive text sizing */
        html {
        font-size: 16px;
        }

        @media (max-width: 768px) {
        html {
            font-size: 14px;
        }
        }

        @media (max-width: 480px) {
        html {
            font-size: 13px;
        }
        }
      .header-title {
        background-color: #2e7d32;
        color: #ffffff;
        padding: 25px;
        margin: 0;
        width: 100%;
        text-align: left;
        font-size: 26px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        border-radius: 1px;
      }

      .custom-container {
        background-color: #40af45;
        padding: 25px 15px;
        margin: 0 auto;
        width: 100%;
        color: white;
        
      }

      .btn-primary {
        background-color: #2e7d32  ;
        border: none;
        padding: 10px 20px;
        font-weight: 500;
        transition: background-color 0.3s ease;
        border-radius: 6px;
      }

      .btn-primary:hover {
        background-color: #aedda0;
      }

      .bg-section {
        position: relative;
        background-image: url('images/logoCapstone.jpg');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 80vh;
        display: flex;
        align-items: flex-start;
        justify-content: center;
        overflow: hidden;
      }

      .bg-section::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(255, 255, 255, 0.6);
        z-index: 1;
      }

      .bg-section .content {
        position: relative;
        z-index: 2;
        text-align: center;
        color: #000;
        padding-top: 30px;
      }

      .total-label {
        font-size: 20px;
        font-weight: 600;
        color: #000;
      }

      .totalcapstone {
        background-color: #ffffff;
        color: #000000;
        font-size: 16px;
        font-weight: bold;
        padding: 8px 16px;
        border-radius: 8px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.15);
        display: inline-block;
        margin-top: 10px;
      }

      .chart-container {
        width: 100%;
        max-width: 800px;
        margin: 30px auto;
        padding-top: 20px;
      }

      .chart-wrapper {
        width: 100%;
        padding: 30px 20px;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
      }

      .footer-overlay {
  position: fixed; /* 🔁 Changed from absolute to fixed */
  bottom: 0;
  left: 0;
  width: 100%;
  background-color: #2e7d32;
  color: white;
  text-align: center;
  padding: 15px 0;
  z-index: 100;
  font-weight: 500;
  font-size: 14px;
  box-shadow: 0 -2px 6px rgba(0, 0, 0, 0.1);
      }
    </style>

    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" />

    <!-- Inline icon with title -->
    

    <div class="container custom-container d-flex flex-wrap justify-content-center text-center py-4 px-2">
      <div class="row gx-5">
        <div class="col d-flex justify-content-center mt-2 align-items-center">
            <a href="{{ route('list')  }}" class="btn btn-primary">List of Capstone</a>
          </div>
          <div class="col d-flex justify-content-center mt-2">
            <a href="{{ route('upload')  }}" class="btn btn-primary text-nowrap">Upload a Project</a>
          </div>
      </div>
    </div>

    <div class="bg-section">
      <div class="content mt-5">
        <div class="total-wrapper">
          <label class="total-label">Submitted Capstone:</label>
          <div class="totalcapstone">{{ $data['count'] }}</div>
        </div>

        <!-- Chart.js bar chart container -->
        <div class="container chart-container">
          <div class="chart-wrapper">
            <canvas id="myChart"></canvas>
          </div>
        </div>

        <!-- Chart.js script -->
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
          const ctx = document.getElementById('myChart').getContext('2d');
          const myChart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: ['IOT-based', 'APP-based', 'Web-based'],
              datasets: [{
                data: [{{$data['iot']}}, {{$data['app']}}, {{$data['web']}}],
                backgroundColor: [
                  'rgba(0, 123, 255, 0.5)',
                  'rgba(220, 53, 69, 0.5)',
                  'rgba(255, 193, 7, 0.5)'
                ],
                borderWidth: 1
              }]
            },
            options: {
              plugins: {
                legend: {
                  display: false
                }
              },
              scales: {
                y: {
                  beginAtZero: true,
                  ticks: {
                    stepSize: 5
                  },
                  grid: {
                    display: false
                  }
                },
                x: {
                  grid: {
                    display: false
                  }
                }
              }
            }
          });
        </script>
      </div>

      <div class="footer-overlay">
        <p>&copy; 2025 KUPtech Project</p>
      </div>
    </div>



    
  </x-basecomponent>
