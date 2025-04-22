<x-basecomponent>
    <style>
        body {
            background-color: #ffffff00;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .top-banner {
            background-color: #2e7d32;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-right-radius: 12px;
            border-top-left-radius: 12px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: rgb(255, 255, 255);
        }

        .form-control::placeholder {
            color: #999;
        }

        .form-icon-left {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: green;
        }

        .form-icon-right {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: green;
        }

        .form-group {
            position: relative;
        }

        .form-control {
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }

        .register-btn {
            background-color: #2e7d32;
            color: #fff;
            border-radius: 10px;
        }

        .register-btn:hover {
            background-color: #256428;
        }

        .login-link {
            color: #2e7d32;
            font-weight: 500;
        }

        .card-border {
            border: 1px solid #2e7d32;
            border-radius: 15px;
            max-width: 450px;
            margin: 40px auto;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 0;
        }
    </style>

    <div class="container">
        <div class="card-border">
            <div class="card-body">
                <div class="top-banner text-center">
                    <img src="{{asset('images/capstonelogo.png')}}" class="mb-2" alt="" style="border-radius: 50%; width: 70px; height: 70px;">
                    <h1>Registration</h1>
                </div>

                <div class="px-4 pt-4 pb-3">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group mb-3">
                            <i class="bi bi-person-fill form-icon-left"></i>
                            <input type="text" class="form-control" name="username" placeholder="Full Name">
                            <i class="bi bi-check-circle-fill form-icon-right"></i>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-envelope-fill form-icon-left"></i>
                            <input type="email" class="form-control" name="email" placeholder="Email">
                            <i class="bi bi-check-circle-fill form-icon-right"></i>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-lock-fill form-icon-left"></i>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                            <i class="bi bi-eye-slash-fill form-icon-right" onclick="showPassword()" id="eye-icon"></i>
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-lock-fill form-icon-left"></i>
                            <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password">
                            <i class="bi bi-eye-slash-fill form-icon-right" onclick="showPassword()" id="eye-icon-2"></i>
                        </div>
                        <div class="d-flex flex-row justify-content-center mb-3">
                            <button type="submit" class="btn register-btn px-5">Register</button>
                        </div>
                        <div class="text-center">
                            <h6>Already have an account? <a href="{{ route('login') }}" class="login-link">Log in</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @if ($errors->any())
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            @foreach ($errors->all() as $error)
                <p class="fs-5 fw-bold text-danger">{{ $error }}</p>

            @endforeach
        </div>
    @endif


    @if (session('msg'))
        <div class="alert alert-primary alert-dismissible fade show" role="alert">
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            <p class="fs-5 fw-bold text-danger">{{ session('msg') }}</p>
        </div>
    @endif

   
    
    
</x-basecomponent>
