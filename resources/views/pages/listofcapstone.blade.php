<x-basecomponent>
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
        padding: 30px;
        margin: 0;
        width: 100%;
        text-align: left;
        font-size: 26px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
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
    .search-container {
        position: absolute;
        top: 20px;
        right: 20px;
        z-index: 10;
        width: 300px;
        display: flex;
        gap: 5px;
    }
    .search-input {
        flex: 1;
        padding: 8px 12px;
        border-radius: 6px;
        border: 1px solid #ccc;
        font-size: 14px;
    }
    .search-btn {
        background-color: #2e7d32;
        border: none;
        color: white;
        padding: 8px 12px;
        border-radius: 6px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .search-btn:hover {
        background-color: #256428;
    }

    </style>

    <!-- Bootstrap Icons CDN -->
    

    <!-- Inline icon with title -->
    <h2 class="header-title d-flex align-items-center">
        <a href="{{ route('home')  }}" class="text-white me-2" style="text-decoration: none;">
            <i class="bi bi-house-door-fill"></i>
        </a>
        Capstone Project Portal
    </h2>

    <div class="container custom-container d-flex flex-wrap justify-content-center text-center py-4 px-2">
        <div class="row gx-6">
            <div class="col d-flex justify-content-center mt-2 align-items-center">
                <a href="{{ route('list')  }}" class="btn btn-primary">List of Capstone</a>
            </div>
            <div class="col d-flex justify-content-center mt-2 align-items-center">
                <a href="{{ route('upload')  }}" class="btn btn-primary text-nowrap">Upload a Project</a>
            </div>
        </div>
    </div>

    <div class="bg-section">
        <form action="{{ route('list') }}" method="GET">
            <div class="search-container d-flex align-items-center flex-row flex-nowrap">

                    <input type="text" class="form-control search-input" name="search" placeholder="Search projects...">
                    <button type="submit" class="search-btn">
                        <i class="bi bi-search"></i>
                    </button>
            </div>
        </form>
        
        <div class="footer-overlay">
            <p>&copy; 2025 KUPtech Project</p>
        </div>


        <div class="container mt-4 mb-5">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card shadow-sm border-0"> 
                        <h4 class="mb-5"></h4>
                    <div class="card-body table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-success">
                                <tr>
                                    <th scope="col">Capstone Title</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Year</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d['title'] }}</td>
                                        <td>{{ $d['g_name'] }}</td>
                                        <td>{{ $d['year'] }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        

  </x-basecomponent>
