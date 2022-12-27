<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Register | Hyper - Responsive Bootstrap 5 Admin Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset(' assets/images/favicon.ico') }}">

        <!-- App css -->
        <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>

        <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xxl-4 col-lg-5">
                        <div class="card">
                            <!-- Logo-->
                            <div class="card-header pt-4 pb-4 text-center bg-primary">
                                <a href="index.html">
                                    <span><img src="{{ asset('assets/images/logo.png') }}" alt="" height="18"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold">Free Sign Up</h4>
                                    <p class="text-muted mb-4">Don't have an account? Create your account, it takes less than a minute </p>
                                </div>

                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 fw-bold" style="font-weight: bold;color:#000000; margin-bottom:20px">Daftar</h4>
                                </div>

                                <form action="{{url('/proses_register')}}" method="POST" enctype="multipart/form-data" name="form_regis">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label" style="color:#000000">Nama Lengkap</label>
                                        <input class="form-control" type="text" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan Nama Lengkap" style="border: 1px solid rgb(161, 161, 161);" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="fullname" class="form-label" style="color:#000000">Nomor Identitas Pegawai (NIP)</label>
                                        <input class="form-control" type="text" id="nip" name="nip" placeholder="Masukan Nomor Indentitas Pegawai" style="border: 1px solid rgb(161, 161, 161);" required>
                                        <span id="error_nip" style="display: none;color:red"></span>
                                    </div>

                                    <div class="mb-3">
                                        <label for="emailaddress" class="form-label" style="color:#000000">Email</label>
                                        <input class="form-control" type="email" id="email" style="border: 1px solid rgb(161, 161, 161);" name="email" required placeholder="Masukan Email">
                                    </div>

                                    <div class="mb-3">
                                        <label for="password" class="form-label" style="color:#000000">Password</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" style="border: 1px solid rgb(161, 161, 161);" placeholder="Masukan Password">
                                            <div class="input-group-text" data-password="false">
                                                <span class="password-eye"></span>
                                            </div>
                                        </div>
                                        <span class="alertt" style='color: red;'></span>
                                    </div>

                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary" type="submit"> Daftar </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Already have account? <a href="pages-login.html" class="text-muted ms-1"><b>Log In</b></a></p>
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
            2018 - 2021 © Hyper - Coderthemes.com
        </footer>

        <!-- bundle -->
        <script src="{{ asset('assets/js/vendor.min.js') }}"></script>
        <script src="{{ asset('assets/js/app.min.js') }}"></script>
        
    </body>
</html>
