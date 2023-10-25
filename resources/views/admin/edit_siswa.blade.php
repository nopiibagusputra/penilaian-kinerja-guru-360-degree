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
            <div>Edit Indikator
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
                <form action="{{ route('update_siswa', $data->id_siswa) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="position-relative row form-group">
                        <label for="nama_siswa" class="col-sm-2 col-form-label">Nama Siswa</label>
                        <div class="col-sm-10">
                            <input name="nama_siswa" id="nama_siswa" value="{{ $data->nama_siswa }}"
                                type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nama_kelas" class="col-sm-2 col-form-label">Nama Kelas</label>
                        <div class="col-sm-10">
                            <select name="nama_kelas" id="nama_kelas" class="multiselect-dropdown form-control">
                                <optgroup label="Nama Kelas">
                                @foreach($kelas as $kelas)
                                    <option {{ $kelas->id_kelas == $data->id_kelas ? 'selected' : '' }} value="{{ $kelas->id_kelas }}">{{ $kelas->nama_kelas }}</option>
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
</div>
@endsection
