@extends('dashboard.components.main')

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    {{-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    </div> --}}

    <!-- Content Row -->
    <div class="row">

        <!-- TASK PENDING Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Pendaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $totalSiswa }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-users fa-2x text-primary"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Task --}}
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Tabel Pendaftar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Jenis Kelamin</th>
                            <th>Asal Sekolah</th>
                            <th>Minat Jurusan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @php
                        $no = 1
                    @endphp
                    <tbody>
                        @foreach ($data as $siswa)
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{$siswa->nama}}</td>
                                <td>{{$siswa->email}}</td>
                                <td>{{$siswa->jenis_kelamin}}</td>
                                <td>{{$siswa->asal_sekolah}}</td>
                                <td>{{$siswa->minat_jurusan}}</td>
                                <td>
                                    <form method="POST" action="{{ route('delete', ['id' => $siswa->id]) }}" style="display: inline;">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" style="border: none; background-color: transparent;">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
        });
        document.getElementById("dashboard").classList.add("active");
    </script>
</div>
@endsection
