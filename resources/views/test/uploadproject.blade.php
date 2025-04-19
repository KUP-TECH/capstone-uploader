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
    <h2 class="header-title d-flex align-items-center">
        <a href="{{ route('home') }}" class="text-white me-2" style="text-decoration: none;">
          <i class="bi bi-house-door-fill"></i>
        </a>
        Capstone Project Portal
      </h2>

    <div class="container custom-container d-flex flex-wrap justify-content-center text-center py-4 px-2">
      <div class="row gx-5">
        <div class="col d-flex justify-content-center mt-2 align-items-center">
            <a href="{{ route('list') }}" class="btn btn-primary">List of Capstone</a>
          </div>
          <div class="col d-flex justify-content-center mt-2 align-items-center">
            <a href="{{ route('uploads') }}" class="btn btn-primary text-nowrap">Upload a Project</a>
          </div>

      </div>
    </div>

    <div class="bg-section">
        <div class="content container">
            <div class="bg-white p-5 rounded-4 shadow-lg" style="max-width: 700px; margin: 0 auto; border: 1px solid #e0e0e0;">
                <h3 class="text-center mb-4 fw-bold" style="color: #2e7d32;">Project Submission & Document Management</h3>

                <form method="POST" action="#" enctype="multipart/form-data">
                  <!-- Laravel CSRF token -->
                  <input type="hidden" name="_token" value="7f6KEI6I8PEuwLKVbv3RfYVPWuzCBxrrmdVv0ovs">

                  <!-- Project Title -->
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control shadow-sm" id="projectTitle" placeholder="Enter project title">
                    <label for="projectTitle">Project Title</label>
                  </div>

                  <!-- Project Year -->
                  <div class="form-floating mb-4">
                    <input type="number" class="form-control shadow-sm" id="projectYear" placeholder="e.g. 2025">
                    <label for="projectYear">Year Project Uploaded</label>
                  </div>

                  <!-- Category -->
                  <div class="form-floating mb-4">
                    <select class="form-select shadow-sm" id="category" aria-label="Select category">
                      <option selected disabled>Select category</option>
                      <option value="iot">IOT-based</option>
                      <option value="app">APP-based</option>
                      <option value="web">Web-based</option>
                    </select>
                    <label for="category">Category</label>
                  </div>

                  <!-- Group Name -->
                  <div class="form-floating mb-4">
                    <input type="text" class="form-control shadow-sm" id="groupName" placeholder="Enter group name">
                    <label for="groupName">Group Name</label>
                  </div>

                  <!-- File Upload -->
                  <div class="mb-4">
                    <label for="capstoneFile" class="form-label fw-semibold">Upload Capstone File</label>
                    <input type="file" class="form-control shadow-sm" id="capstoneFile">
                  </div>

                  <!-- Submit Button -->
                  <div class="d-flex flex-row justify-content-center">
                    <button type="submit" class="btn btn-success py-2 fw-semibold" style="background-color: #2e7d32; border: none;">
                      <i class="bi bi-upload me-2"></i>Submit Project
                    </button>
                  </div>
                </form>
              </div>

        </div>
      </div>

      <div class="footer-overlay">
        <p>&copy; 2025 KUPtech Project</p>
      </div>


  </x-basecomponent>
