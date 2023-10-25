@extends('layouts.app')

@section('title', 'List Users')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>Daftar Siswa Generate
            </div>
        </div>

    </div>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has($msg))
<p class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="Close">&times;</a></p>
@endif
@endforeach
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">List</h5>
                <table class="mb-0 table table-hover" id="example">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Kelas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        @foreach($data as $siswa)
                        <tr>
                            <td scope="row">{{ $i++ }}</td>
                            <td>{{ $siswa->nama_siswa }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{ $siswa->nama_kelas }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@push('scripts')
<script>
    document.addEventListener("DOMContentLoaded", function(event) {
        document.getElementById("tbl").DataTable({
            buttons: [
                'print'
            ]
        });
    });
</script>
@endpush