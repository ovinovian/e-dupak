<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <link rel="shortcut icon" href="{{ asset('assets/images/users/16.png')}}">

    <!-- App css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
    <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

</head>

<body class="loading authentication-bg"
    data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">
                        <!-- Logo-->
                        <div class="card-header pt-4 pb-4 text-center bg-white"">
                            <a href="{{url('/')}}">
                                <span><img src="{{ ('assets/images/logo-light.png') }}" alt="" style="width: 200px"></span>
                            </a>
                        </div>
                       
                        <div class="card-body p-4">
                            @if(count($errors) > 0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger">{{ $error }}</div>
                            @endforeach
                            @endif
                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center mt-0 fw-bold">{{ __('Daftar Akun') }}</h4>
                            </div>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="nip" class="col-md-4 col-form-label text-md">{{ __('NIP')
                                        }}</label>
                                    <input id="nip" type="text" class="nip-validate form-control @error('nip') is-invalid @enderror"
                                        name="nip" value="{{ old('nip') }}" required autocomplete="nip" maxlength="18" autofocus>
                                    
                                    <div id="error-nip" style="display: none" class="text-danger">

                                    </div>
                                    @error('nip')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="name" class="col-md-4 col-form-label text-md">{{ __('Nama')
                                        }}</label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="col-md-4 col-form-label text-md">{{ __('Email
                                        Address')
                                        }}</label>

                                    <input id="email" type="email"
                                        class="email-valid form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">
                                    
                                    <div id="error_email" style="display: none" class="text-danger"></div>

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="col-md-6 col-form-label text-md">{{ __('Password')
                                        }}</label>

                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md">{{
                                        __('Confirm
                                        Password') }}</label>

                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>

                                <div class="mb-3 text-center">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>

                            </form>
                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p class="text-muted">Sudah Punya Akun? <a href="{{ route('login') }}"
                                    class="text-muted ms-1"><b>Masuk</b></a></p>
                        </div> <!-- end col-->
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
        2018 - 2021 ?? Hyper - Coderthemes.com
    </footer>

    <!-- bundle -->
    <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <script>
        $('.nip-validate').keyup(function(){

            this.value = this.value.replace(/[^0-9\.]/g,'');
            var validNip = $(this).val().length;
            if(validNip == 0) {
              $('#error-nip').hide();
            
            } else if(validNip > 0 && validNip <= 17) {
                 $('#error-nip').text("NIP harus 18 karakter angka").show();
            } else {
                 $('#error-nip').hide();
            }
            
        });
        $('.email-valid').keyup(function(){
            var emailGet = $('.email-valid').val();
            var regEmail = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if(!regEmail.test(emailGet)) {
            $('#error_email').html("<span style='color:blue'>-->> "+emailGet+"</span>" + "<br>" +"<span style='font-weight:bold'> format email tidak sesuai</span>").show();
            emailGet.focus;
            } else if (emailGet == '') {
            $('#error_email').hide();
            } else {
            $('#error_email').hide();
            }
            
        });
    </script>

</body>


</html>