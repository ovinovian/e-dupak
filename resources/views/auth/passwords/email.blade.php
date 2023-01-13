<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Recover Password | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- App css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo -->
                        <div class="card-header pt-4 pb-4 text-center bg-white" >
                            <a href="{{url('/')}}">
                                <span><img src="{{ ('assets/images/logo-light.png') }}" alt="" style="width: 200px"></span>
                            </a>
                        </div>
                            
                            <div class="card-body p-4">
                                @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                                @endif
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Reset Password</h4>
                                    <p class="text-muted mb-4">Masukkan alamat email Anda dan kami akan mengirimi Anda email berisi petunjuk untuk mengatur ulang kata sandi Anda.</p>
                                </div>
                                
                                <form method="POST" action="{{ route('password.email') }}">
                                    @csrf
            
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email Address</label>
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
            
                                    <div class="mb-0 text-center">
                                            <button type="submit" class="btn btn-primary">
                                               Kirim Link Reset Password
                                            </button>
                                    </div>
                                </form>
                            </div> <!-- end card-body-->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Back to <a href="pages-login.html" class="text-muted ms-1"><b>Log In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - 2021 © Hyper - Coderthemes.com
        </footer>

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>
