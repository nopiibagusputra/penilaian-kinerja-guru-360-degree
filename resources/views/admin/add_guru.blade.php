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
            <div>Tambah Guru
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            <div class="d-inline-block dropdown">
                {{-- <button type="button" data-toggle="modal" data-target="#exampleModal" aria-haspopup="true"
                    aria-expanded="false" class="btn-shadow btn btn-info">
                    <span class="btn-icon-wrapper pr-2 opacity-7">
                        <i class="fa fa-user-plus fa-w-20"></i>
                    </span>
                    Import Guru
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
                <form action="{{ route('store_guru') }}" method="POST">
                    @csrf
                    <div class="position-relative row form-group">
                        <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
                        <div class="col-sm-10">
                            <input name="nama_guru" id="nama_guru" placeholder="Masukkan nama guru" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                        <div class="col-sm-10">
                            <select name="jk" id="jk" class="form-control">
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-5">
                            <div class="position-relative row form-group">
                                <label for="tempat_lahir" class="col-sm-6 col-form-label">Tempat Lahir</label>
                                <div class="col-sm-12">
                                    <input name="tempat_lahir" id="tempat_lahir" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="position-relative row form-group">
                                <label for="tanggal_lahir" class="col-sm-6 col-form-label">Tanggal Lahir</label>
                                <div class="col-sm-12">
                                    <input name="tanggal_lahir" id="tanggal_lahir" data-toggle="datepicker"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nama_mapel" class="col-sm-2 col-form-label">Nama Mata Pelajaran</label>
                        <div class="col-sm-10">
                            <select name="nama_mapel" id="nama_mapel" class="form-control">
                                @foreach($data_mapel as $mapel)
                                    <option value="{{ $mapel->id_mapel }}">{{ $mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nip" class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input name="nip" id="nip" placeholder="Masukkan NIP" type="number" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="karpeg" class="col-sm-2 col-form-label">Nomor seri karpeg</label>
                        <div class="col-sm-10">
                            <input name="karpeg" id="karpeg" placeholder="Masukkan nomor seri karpeg" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nuptk" class="col-sm-2 col-form-label">NUPTK</label>
                        <div class="col-sm-10">
                            <input name="nuptk" id="nuptk" placeholder="Masukkan NUPTK" type="text"
                                class="form-control">
                        </div>
                    </div>

                    <div class="position-relative row form-group">
                        <label for="pangkat" class="col-sm-2 col-form-label">Pangkat</label>
                        <div class="col-sm-10">
                            <input name="pangkat" id="pangkat" placeholder="Masukkan pangkat" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tmt_golongan" class="col-sm-2 col-form-label">TMT Golongan</label>
                        <div class="col-sm-10">
                            <input name="tmt_golongan" id="tmt_golongan" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tmt_guru" class="col-sm-2 col-form-label">TMT Sebagai Guru</label>
                        <div class="col-sm-10">
                            <input name="tmt_guru" id="tmt_guru" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tmt_sekolah" class="col-sm-2 col-form-label">TMB Di Sekolah Ini</label>
                        <div class="col-sm-10">
                            <input name="tmt_sekolah" id="tmt_sekolah" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="pendidikan" class="col-sm-2 col-form-label">Pendidikan Terkahir</label>
                        <div class="col-sm-10">
                            <input name="pendidikan" id="pendidikan" placeholder="Masukkan pendidikan terkahir"
                                type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="mapel_ampu" class="col-sm-2 col-form-label">Program Keahlian yang diampu</label>
                        <div class="col-sm-10">
                            <select name="mapel_ampu" id="mapel_ampu" class="form-control">
                                @foreach($data_mapel as $mapel)
                                    <option value="{{ $mapel->id_mapel }}">{{ $mapel->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="sk" class="col-sm-2 col-form-label">Nomor SK Penugasan</label>
                        <div class="col-sm-10">
                            <input name="sk" id="sk" placeholder="Masukkan nomor sk penugasan" type="text"
                                class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tanggal_sk" class="col-sm-2 col-form-label">Tanggal SK</label>
                        <div class="col-sm-10">
                            <input name="tanggal_sk" id="tanggal_sk" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-check">
                        <div class="col-sm-12">
                            <button type="submit" class="btn btn-secondary float-right">Submit</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection
