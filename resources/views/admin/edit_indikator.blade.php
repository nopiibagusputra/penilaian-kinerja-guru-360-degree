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
                <form action="{{ route('update_indikator', $data->id_indikator) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="position-relative row form-group">
                        <label for="nama_indikator" class="col-sm-2 col-form-label">Nama Indikator</label>
                        <div class="col-sm-10">
                            <textarea name="nama_indikator" id="nama_indikator" value="{{ $data->nama_indikator }}"
                                type="text" class="form-control" style="height: 200px;"> {{ $data->nama_indikator }}</textarea>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nama_kompetensi" class="col-sm-2 col-form-label">Nama Kompetensi</label>
                        <div class="col-sm-10">
                            <select name="nama_kompetensi" id="nama_kompetensi" class="form-control">
                                @foreach($kompetensi as $kompetensi))
                                    <option {{ $kompetensi->id_kompetensi == $data->id_kompetensi ? 'selected' : '' }} value="{{ $kompetensi->id_kompetensi }}">{{ $kompetensi->nama_kompetensi }}</option>
                                @endforeach
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
