<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Title Meta -->
     <meta charset="utf-8" />
     <title>Forgot Password | ReproServe</title>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta name="description" content="A fully responsive premium admin dashboard template, Real Estate Management Admin Template" />
     <meta name="author" content="Techzaa" />
     <meta http-equiv="X-UA-Compatible" content="IE=edge" />

     <!-- App favicon -->
     <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

     <!-- Vendor css (Require in all Page) -->
     <link href="{{ asset('assets/css/vendor.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Icons css (Require in all Page) -->
     <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- App css (Require in all Page) -->
     <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />

     <!-- Theme Config js (Require in all Page) -->
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
                                        <a href="index.html" class="logo-dark">
                                             <img src="{{ asset('logo.png') }}" height="32" alt="ReproServe">
                                             <span class="font-bold text-xl text-black drop-shadow-lg">ReproServe</span>
                                        </a>

                                        <a href="{{ route('admin.login') }}" class="logo-light">
                                             <img src="{{ asset('logo.png') }}" height="28" alt="ReproServe">
                                        </a>
                                   </div>

                                   <h2 class="fw-bold text-uppercase text-center fs-18">Reset Password</h2>
                                   <p class="text-muted text-center mt-1 mb-4">Enter your email address and we'll send you an email with instructions <br/> to reset your password.</p>

                                   <div class="px-4">
                                             @if(session('success'))
                                             <div class="alert alert-success text-center">{{ session('success') }}</div>
                                             @endif

                                             @if(session('error'))
                                             <div class="alert alert-danger text-center">{{ session('error') }}</div>
                                             @endif

                                             <form action="{{ route('admin.forgot.post') }}" method="POST">
                                             @csrf
                                             <div class="mb-3">
                                                  <label class="form-label" for="example-email">Email</label>
                                                  <input type="email" id="example-email" name="email" class="form-control bg-light bg-opacity-50 border-light py-2" placeholder="Enter your email">
                                             </div>
                                             <div class="mb-1 text-center d-grid">
                                                  <button class="btn btn-danger py-2 fw-medium" type="submit">Send Reset Password</button>
                                             </div>
                                        </form>
                                   </div> <!-- end col -->
                              </div> <!-- end card-body -->
                         </div> <!-- end card -->
                         <p class="mb-0 text-center text-white">Back to <a href="{{ route('admin.login') }}" class="text-reset text-unline-dashed fw-bold ms-1">Sign In</a></p>
                    </div> <!-- end col -->
               </div> <!-- end row -->
          </div>
     </div>

     <!-- Vendor Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/vendor.js') }}"></script>

     <!-- App Javascript (Require in all Page) -->
     <script src="{{ asset('assets/js/app.js') }}"></script>


</body>

</html>