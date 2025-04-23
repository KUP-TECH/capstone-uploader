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
                                    <th>Action</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d['title'] }}</td>
                                        <td>{{ $d['g_name'] }}</td>
                                        <td>{{ $d['year'] }}</td>


                                        <td>
                                            @if($d['user_id'] == Auth::user()->id)
                                            <form action="{{ route('delete') }}" method="POST">
                                                @csrf
                                                <input type="hidden" name="id" value="{{ $d['capstone_id'] }}">
                                                <button type="submit" class="btn btn-danger btn-sm" style="position: relative; z-index: 999;">Delete</button>
                                            </form>
                                            @endif


                                        </td>
                                        <td>
                                            <a href="{{ route('download', ['id' => $d['capstone_id']]) }}" class="btn btn-success btn-sm" style="position: relative; z-index: 999;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-download"
                                                    viewBox="0 0 16 16">
                                                    <path
                                                        d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                    <path
                                                        d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                                </svg>
                                            </a>
                                        </td>
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
