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
                <h4 class="page-title">Jadwal</h4>
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
                    <h4 class="header-title"><a class="btn btn-success" href="{{ route('jadwals.create') }}"> Tambah</a>
                    </h4>

                    <div class="tab-content">
                        <div class="tab-pane show active" id="scroll-horizontal-preview">
                            <table id="scroll-horizontal-datatable" class="table w-100 nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tahun</th>
                                        <th>Tahap</th>
                                        <th>Daftar Mulai</th>
                                        <th>Daftar Selesai</th>
                                        <th>Persiapan Mulai</th>
                                        <th>Persiapan Selesai</th>
                                        <th>Nilai Mulai</th>
                                        <th>Nilai Selesai</th>
                                        <th>Sidang Mulai</th>
                                        <th>Sidang Selesai</th>
                                        <th>Aksi</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($jadwals as $key => $jadwal)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $jadwal->tahun }}</td>
                                        <td>{{ $jadwal->tahap }}</td>
                                        <td>{{ $jadwal->daftar_mulai }}</td>
                                        <td>{{ $jadwal->daftar_selesai }}</td>
                                        <td>{{ $jadwal->siap_mulai }}</td>
                                        <td>{{ $jadwal->siap_selesai }}</td>
                                        <td>{{ $jadwal->nilai_mulai }}</td>
                                        <td>{{ $jadwal->nilai_selesai}}</td>
                                        <td>{{ $jadwal->sidang_mulai }}</td>
                                        <td>{{ $jadwal->sidang_selesai }}</td>
                                        <td>
                                            <div>
                                                <form action="{{ route('jadwals.destroy',$jadwal->id) }}" method="POST">
                                                    <a class="btn btn-primary"
                                                        href="{{ route('jadwals.edit',$jadwal->id) }}">Rubah</a>

                                                    @csrf
                                                    @method('DELETE')
                                                    @if($jadwal->publish == 0)
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('Apakah yakin ingin menghapus jadwal?');">Hapus</button>
                                                    @else
                                                    <button class="btn btn-danger" disabled>Hapus</button>
                                                    @endif
                                                </form>

                                            </div>
                                        </td>
                                        <td>
                                            <form action="{{ route('publishJadwal',$jadwal->id) }}" method="GET">
                                                @csrf
                                                @method('GET')
                                                @if($jadwal->publish == 0)
                                                <button type="submit" class="btn btn-success"
                                                    onclick="return confirm('Apakah yakin ingin publish jadwal?');">Publish</button>
                                                @else
                                                <button class="btn btn-success" disabled>Published</button>
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