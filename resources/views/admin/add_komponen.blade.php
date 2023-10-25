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
            <div>Tambah Komponen
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                {{-- <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                    class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-user-plus fa-w-20"></i>
                    </span>
                    Import Komponen
                </button> --}}
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
                <form action="{{ route('store_komponen') }}" method="POST">
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="nama_komponen" class="col-sm-2 col-form-label">Nama Komponen</label>
                        <div class="col-sm-10">
                            <input name="nama_komponen" id="nama_komponen" placeholder="Masukkan nama komponen"
                                type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nama_penilai" class="col-sm-2 col-form-label">Responden</label>
                        <div class="col-sm-10">
                            <select name="id_responden" id="id_responden" class="multiselect-dropdown form-control">
                                @foreach($data_responden as $res)
                                    <option value="{{ $res->id_kode_respondensi }}">{{ $res->nama_respondensi }}</option>
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
