<div class="container-fluid py-2 d-flex flex-row justify-content-around align-items-center"
    style="background-color: #2e7d32;">

    <a class="text-white" data-bs-toggle="offcanvas" href="#sidebar" role="button" aria-controls="offcanvasExample">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list text-white"
            viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
        </svg>
    </a>

    <h2 class="fw-bold text-white fs-1">
        Capstone Project Portal
        <a href="{{ route('home')  }}" class="text-white me-2" style="text-decoration: none;">
            <i class="bi bi-house-door-fill"></i>
        </a>
    </h2>
</div>


<div class="offcanvas offcanvas-start text-white" tabindex="-1" id="sidebar" aria-labelledby="offcanvasLabel" style="background-color: #2e7d32;">
    <div class="offcanvas-header border">
        <h5 class="offcanvas-title" id="offcanvasLabel">Capstone Project Portal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="d-flex flex-column align-items-start ">
            <a href="{{ route('home') }}" class="text-decoration-none text-white mb-2">
                <i class="bi bi-house-door-fill"></i> Home
            </a>
            <a href="{{ route('logout') }}" class="text-decoration-none text-white mb-2">
                <i class="bi bi-box-arrow-in-left"></i> Sign Out
            </a>
        </div>
    </div>
</div>