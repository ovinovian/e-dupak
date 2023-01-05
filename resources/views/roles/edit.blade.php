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
                <h4 class="page-title"><a class="btn btn-primary" href="{{ route('roles.index') }}">Kembali</a></h4>
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
                    <h4 class="header-title">Form Rubah Permission
                    </h4>
                    <div class="tab-content">
                        <div class="tab-pane show active" id="floating-preview">
                            {!! Form::model($role, ['method' => 'PATCH','route' => ['roles.update', $role->id]]) !!}

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong>Name:</strong>

                                        {!! Form::text('name', null, array('placeholder' => 'Name','class' =>
                                        'form-control')) !!}

                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12">

                                    <div class="form-group">

                                        <strong>Permission:</strong>

                                        <br />

                                        @foreach($permission as $value)

                                        <label>{{ Form::checkbox('permission[]', $value->id, in_array($value->id,
                                            $rolePermissions) ? true : false,
                                            array('class' => 'name')) }}

                                            {{ $value->name }}</label>

                                        <br />

                                        @endforeach

                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-12 col-md-12 text-center">

                                    <button type="submit" class="btn btn-primary">Submit</button>

                                </div>

                            </div>

                            {!! Form::close() !!}
                        </div>
                    </div> <!-- end tab-content-->
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div><!-- end col -->
    </div><!-- end row -->

</div> <!-- container -->

@endsection