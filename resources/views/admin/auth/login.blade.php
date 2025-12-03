<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Sign In | ReproServe</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
     <script src="{{ asset('assets/js/config.min.js') }}"></script>

</head>

<body class="authentication-bg">

     <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
          <div class="container">
               <div class="row justify-content-center">
                    <div class="col-xl-5">
                         <div class="card auth-card">
                              <div class="card-body px-3 py-5">
                                   <div class="mx-auto mb-4 text-center auth-logo">
                                        <a href="{{ route('admin.login') }}" class="logo-dark">
                                             <img src="{{ asset('logo.png') }}" height="32" alt="ReproServe">
                                             <span class="font-bold text-xl text-black drop-shadow-lg">ReproServe</span>
                                        </a>

                                        <a href="{{ route('admin.login') }}" class="logo-light">
                                             <img src="{{ asset('logo.png') }}" height="28" alt="ReproServe">
                                        </a>
                                   </div>

                                   <h2 class="fw-bold text-uppercase text-center fs-18">Sign In </h2>
                                   <p class="text-muted text-center mt-1 mb-4">Enter your email address and password to access admin panel.</p>

                                   <div class="px-4">
                                        @if ($errors->any())
                                        <div class="alert alert-danger text-center py-2">
                                             <strong>{{ $errors->first() }}</strong>
                                        </div>
                                        @endif

                                        <form action="{{ route('admin.login.post') }}" method="POST" class="authentication-form">
                                        @csrf

                                        <div class="mb-3">
                                             <label class="form-label">Email</label>
                                             <input type="email" name="email" value="admin@gmail.com"
                                                  class="form-control bg-light bg-opacity-50 border-light py-2"
                                                  placeholder="Enter your email" required>
                                             
                                             @error('email')
                                                  <small class="text-danger d-block mt-1">{{ $message }}</small>
                                             @enderror
                                        </div>

                                        <div class="mb-3" style="position: relative;">
                                             <label class="form-label">Password</label>

                                             <input type="password" name="password" id="login_password" value="12345678"
                                                  class="form-control bg-light bg-opacity-50 border-light py-2"
                                                  placeholder="Enter your password" required style="padding-right: 45px;">
                                             
                                             @error('password')
                                                  <small class="text-danger d-block mt-1">{{ $message }}</small>
                                             @enderror

                                             <!-- <i class="fa fa-eye" id="togglePassword"
                                             style="position: absolute; right: 15px; top: 38px; cursor: pointer;"></i> -->
                                        </div>

                                        <button class="btn btn-danger py-2 fw-medium w-100" type="submit">
                                             Sign In
                                        </button>

                                        <div class="text-center mt-2">
                                             <a href="{{ route('admin.forgot') }}">Reset password</a>
                                        </div>

                                        </form>


                                   </div> <!-- end col -->
                              </div> <!-- end card-body -->
                         </div> <!-- end card -->

                         <!-- <p class="mb-0 text-center text-white">New here? <a href="auth-signup.html" class="text-reset text-unline-dashed fw-bold ms-1">Sign Up</a></p> -->

                    </div> <!-- end col -->
               </div> <!-- end row -->
          </div>
     </div>

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/vendor.js') }}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/app.js') }}"></script>

     <script>
        const togglePassword = document.getElementById("togglePassword");
        const passwordInput = document.getElementById("login_password");

        togglePassword.addEventListener("click", () => {
            // Toggle type
            const type = passwordInput.type === "password" ? "text" : "password";
            passwordInput.type = type;

            // Toggle icon
            togglePassword.classList.toggle("fa-eye");
            togglePassword.classList.toggle("fa-eye-slash");
        });
    </script>



</body>

</html>