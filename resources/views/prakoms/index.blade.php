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
                <h4 class="page-title">Pranata Komputer</h4>
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
                    <h4 class="header-title">
                    </h4>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>NIP</th>
                                        <th>Email</th>
                                        <th>Hak Akses</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $key => $prakom)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $prakom->name }}</td>
                                        <td>{{ $prakom->nip }}</td>
                                        <td>{{ $prakom->email }}</td>
                                        <td><label class="badge badge-success-lighten">User</label></td>
                                        <td>
                                            @if($prakom->status == 0)
                                            <label class="badge badge-danger-lighten">Belum Disetujui</label>
                                            @else
                                            <label class="badge badge-success-lighten">Sudah Disetujui</label>
                                            @endif
                                        </td>
                                        <td>
                                            <div>
                                                <form action="{{ route('angkat',$prakom->id) }}" method="GET">
                                                    @csrf
                                                    @method('GET')
                                                    @php
                                                    $role =
                                                    \App\Models\ModelHasRole::where('model_id',$prakom->id)->where('role_id','3')->count();
                                                    @endphp
                                                    @if($role == 0)
                                                    <button type="submit" class="btn btn-success"
                                                        onclick="return confirm('Apakah yakin ingin mengangkat jadi tim penilai?');">Angkat
                                                        Tim Penilai</button>
                                                    @else
                                                    <button class="btn btn-success" disabled>Angkat
                                                        Tim Penilai</button>
                                                    @endif
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div>
                                                <form action="{{ route('prakoms.destroy',$prakom->id) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah yakin ingin menghapus prakom?');">Hapus</button>
                                                </form>

                                            </div>
                                        </td>
                                        <td>
                                            @if($prakom->status == 0)
                                            <form action="{{ route('setuju',$prakom->id) }}" method="GET">
                                                @else
                                                <form action="{{ route('nonaktif',$prakom->id) }}" method="GET">
                                                    @endif
                                                    @csrf
                                                    @method('GET')
                                                    @if($prakom->status == 0)
                                                    <button type="submit" class="btn btn-info"
                                                        onclick="return confirm('Apakah yakin disetujui?');">Setujui</button>
                                                    @else
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah yakin dinonaktifkan?');">Non
                                                        Aktifkan</button>
                                                    @endif
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


@endsection