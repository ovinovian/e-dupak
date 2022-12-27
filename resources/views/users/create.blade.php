@extends('layouts.app')

@section('content')

<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Form Elements</li>
                    </ol>
                </div>
                <h4 class="page-title"><a class="btn btn-primary" href="{{ route('users.index') }}">Kembali</a></h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    @if (count($errors) > 0)

                    <div class="alert alert-danger">
                        <strong>Uppss!</strong> Ada yang salah dengan isian Anda.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>

                    @endif
                    <h4 class="header-title">Form Tambah User Baru
                    </h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            <form action="{{ route('users.store') }}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="exampleInputName" class="form-label">Nama</label>
                                            <input type="text" class="form-control" id="exampleInputName" name="name"
                                                placeholder="Masukkan Nama">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1"
                                                name="email" aria-describedby="emailHelp" placeholder="Masukkan Email">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="exampleInputPassword1" name="password"
                                                    class="form-control" placeholder="Masukkan Password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword2" class="form-label">Ulangi
                                                Password</label>
                                            <div class="input-group input-group-merge">
                                                <input type="password" id="exampleInputPassword2"
                                                    name="confirm-password" class="form-control"
                                                    placeholder="Ulangi Password">
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="example-select" class="form-label">Hak Akses</label>
                                            <select class="form-select" id="example-select" name="roles[]" multiple>
                                                @foreach ($roles as $item)
                                                <option>{{ $item }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="submit" class="btn btn-primary"
                                            onclick="return confirm('Apakah yakin ingin menambah data?');">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div> <!-- end tab-content-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div><!-- end col -->
        </div><!-- end row -->

    </div> <!-- container -->

    @endsection