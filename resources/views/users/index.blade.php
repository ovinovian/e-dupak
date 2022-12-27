@extends('layouts.app')

@section('style')

<!-- third party css -->
<link href="{{ asset('assets/css/vendor/dataTables.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/responsive.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/buttons.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/vendor/select.bootstrap5.css') }}" rel="stylesheet" type="text/css">
<!-- third party css end -->

@endsection

@section('content')

<!-- Start Content-->
<div class="container-fluid">

    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Hyper</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Data Tables</li>
                    </ol>
                </div>
                <h4 class="page-title">Data Pengguna</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->

    @if ($message = Session::get('success'))

    <div class="alert alert-success">

        <p>{{ $message }}</p>

    </div>

    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title"><a class="btn btn-success" href="{{ route('users.create') }}"> Tambah</a>
                    </h4>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-vertical-preview">
                            <table id="scroll-vertical-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Hak Akses</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $user)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>
                                            @if(!empty($user->getRoleNames()))

                                            @foreach($user->getRoleNames() as $v)

                                            <label class="badge badge-success-lighten">{{ $v }}</label>

                                            @endforeach

                                            @endif
                                        </td>
                                        <td>
                                            <form action="{{ route('users.destroy',$user->id) }}" method="POST"> <a
                                                    class="btn btn-info"
                                                    href="{{ route('users.show',$user->id) }}">Lihat</a>

                                                <a class="btn btn-primary"
                                                    href="{{ route('users.edit',$user->id) }}">Rubah</a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger"
                                                    onclick="return confirm('Apakah yakin ingin menghapus user?');">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->

</div>
<!-- container -->

@endsection

@section('script')

<!-- third party js -->
<script src="{{ asset('assets/js/vendor/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.bootstrap5.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/responsive.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.bootstrap5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.html5.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.flash.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/buttons.print.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/dataTables.select.min.js') }}"></script>
<!-- third party js ends -->

<!-- demo app -->
<script src="{{ asset('assets/js/pages/demo.datatable-init.js') }}"></script>
<!-- end demo js-->

<script type="text/javascript">
    if( $('.message').is(':visible') ) {
        $(".message").fadeOut(2000);
    }
</script>

@endsection