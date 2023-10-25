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
            <div>Daftar Kelas
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                <a class="btn-shadow btn btn-info" href="{{ route('add_kelas') }}">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-user-plus fa-w-20"></i>
                    </span>
                    Tambah Kelas
                </a>
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
                            <th>Nama Kelas</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i=1; ?>
                        @foreach($data as $data)
                        <tr>
                            <td>{{ $data->nama_kelas }}</td>
                            <td class="text-center">
                                <a href="{{ route('edit_kelas', $data->id_kelas) }}" class="pr-2">
                                    <span class="btn-icon-wrapper opacity-7">
                                        <i class="fa fa-user-plus fa-w-20"></i>
                                    </span>
                                    Edit
                                </a>
                                <a href="{{ route('hapus_kelas', $data->id_kelas) }}" style="color: red">
                                    <span class="btn-icon-wrapper opacity-7">
                                        <i class="fa fa-user-times fa-w-20"></i>
                                    </span>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
