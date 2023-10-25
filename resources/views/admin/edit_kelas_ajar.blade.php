@extends('layouts.app')

@section('title', 'Tambah Data Kompetensi')

@section('content')
<div class="app-page-title">
    <div class="page-title-wrapper">
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="pe-7s-drawer icon-gradient bg-happy-itmeo">
                </i>
            </div>
            <div>Edit Kelas Pengajar
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                
            </div>
        </div>
    </div>
</div>
@if(count($errors) > 0)
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{ $error }} <br />
        @endforeach
    </div>
@endif
<div class="row">
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title"></h5>
                <form action="{{ route('store_kelas_ajar', $kelas) }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{$kelas}}" name="nama_kelas">
                    <div class="position-relative row form-group">
                        <label for="nama_guru" class="col-sm-2 col-form-label">Nama pengajar</label>
                        <div class="col-sm-10">
                            <select multiple name="nama_guru[]" id="nama_guru" class="multiselect-dropdown form-control">
                                <optgroup label="Nama Pengajar">
                                @foreach($guru as $guru)
                                    <option value="{{ $guru->id_guru }}">{{ $guru->nama." | ".$guru->nama_mapel }}</option>
                                @endforeach
                                </optgroup>
                            </select>
                        </div>
                    </div>
                    
                    <div class="position-relative row form-check">
                        <div class="col-sm-10 offset-sm-2">
                            <button type="submit" class="btn btn-secondary">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Daftar Pengajar Kelas</h5>
                <table class="mb-0 table table-hover" id="example">
                    <thead>
                        <tr>
                            <th>Nama Guru</th>
                            <th class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($guru_ajar as $data)
                        <tr>
                            <td style="width: 250px">{{ $data->nama }}</td>
                            <td class="text-center">
                                <a href="{{route('hapus_kelas_ajar', $data->id_kelas_ajar)}}" style="color: red">
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
