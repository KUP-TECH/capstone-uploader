<x-basecomponent>

    <style>
        body {
            background-color: #fff;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .top-banner {
            background-color: #c4c4c4;
            border-bottom-left-radius: 50px;
            border-bottom-right-radius: 50px;
            border-top-right-radius: 13px;
            border-top-left-radius: 13px;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            color: white;
        }

        .form-control::placeholder {
            color: #999;
        }

        .form-icon {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            color: rgb(107, 107, 107);
        }

        .form-group {
            position: relative;
        }

        .form-control {
            padding-left: 2.5rem;
        }

        .login-btn {
            background-color: #686868;
            color: #fff;
            border-radius: 10px;
        }

        .login-btn:hover {
            background-color: #4e4e4e;
        }

        .register-link,
        .forgot-password {
            color: #666666;
            font-weight: 500;
        }

        .card-border {
            border: 1px solid #2e7d32;
            border-radius: 15px;
            max-width: 450px;
            margin: 40px auto;
            box-shadow: 0 1px 15px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding:0;
        }
    </style>

    <div class="container">
        <div class="card card-border">
            <div class="card-body">
                <div class="top-banner text-center">
                    <img src="{{('')}}" class="mb-2" alt="Logo" style="border-radius: 50%; width: 60px; height: 60px;">
                    <h2>Welcome!</h2>
                </div>

                <div class="px-4 pt-4 pb-3">
                    <form>
                        <div class="form-group mb-3">
                            <i class="bi bi-envelope-fill form-icon"></i>
                            <input type="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group mb-3">
                            <i class="bi bi-lock-fill form-icon"></i>
                            <input type="password" class="form-control" placeholder="Password">
                            <span class="position-absolute top-50 end-0 translate-middle-y me-3">
                                <i class="bi bi-eye-slash-fill"></i>
                            </span>
                        </div>
                        <div class="mb-3 text-end">
                            <a href="#" class="forgot-password">Forgot Password?</a>
                        </div>
                        <div class="d-grid mb-3">
                            <button type="submit" class="btn login-btn">Log in</button>
                        </div>
                        <div class="text-center">
                            <h6>Don't have an account? <a href="#" class="register-link">Register</a></h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>




</x-basecomponent>
