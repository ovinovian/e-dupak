<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>DUPAK - DISKOMINFO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">

                            <div class="card-header pt-4 pb-4 text-center bg-white" >
                                <a href="{{url('/')}}">
                                    <span><img src="https://user-images.githubusercontent.com/52773931/211714752-7346cc32-1e02-442f-bbc2-38436393f504.png" alt="" style="width: 200px"></span>
                                </a>
                            </div>
    
                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center pb-0 fw-bold">Reset Password</h4>
                                    
                                </div>
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
            
                                    <input type="hidden" name="token" value="{{ $token }}">
            
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
            
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="mb-3">
                                        <label for="password" class="form-label text">Password</label>
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
            
                                    <div class="mb-3">
                                        <label for="password-confirm" class="form-label">Konfirmasi Password</label>
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
            
                                    <div class="mb-0 text-center">
                                            <button type="submit" class="btn btn-primary">
                                               Reset Password
                                            </button>
                                    </div>
                                </form>
                            </div> <!-- end card-body -->
                        </div>
                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js')}}"></script>
        <script src="{{ asset('assets/js/app.min.js')}}"></script>
        
    </body>
</html>


