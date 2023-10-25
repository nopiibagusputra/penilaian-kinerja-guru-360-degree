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
            <div>Edit Guru Penilai
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
                <form action="{{ route('update_penilai',$data->id_penilai ) }}" method="POST">
                    @method('PUT')
                    @csrf
                   
                    <div class="position-relative row form-group">
                        <label for="nama_penilai" class="col-sm-2 col-form-label">Nama Guru Penilai</label>
                        <div class="col-sm-10">
                            <select name="nama_penilai" id="nama_penilai" class="multiselect-dropdown form-control">
                                @foreach($guru as $val)
                                    <option disabled value="{{ $val->id_guru }}" {{ ($data->id_guru_penilai==$val->id_guru)?'selected':'' }}>{{ $val->nama." | ".$val->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nama_guru" class="col-sm-2 col-form-label">Nama Guru</label>
                        <div class="col-sm-10">
                            <select name="nama_guru" id="nama_guru" class="multiselect-dropdown form-control">
                                @foreach($guru as $val)
                                    <option disabled value="{{ $val->id_guru }}" {{ ($data->id_guru==$val->id_guru)?'selected':'' }}>{{ $val->nama." | ".$val->nama_mapel }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="nomor_sk_penugasan" class="col-sm-2 col-form-label">Nomor SK Penugasan</label>
                        <div class="col-sm-10">
                            <input name="nomor_sk_penugasan" id="nomor_sk_penugasan" value="{{ $data->nomor_sk_penugasan_penilai }}" placeholder="Masukkan nomor SK Penugasan"
                                type="text" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tanggal_sk_penugasan" class="col-sm-2 col-form-label">Tanggal SK Penugasan</label>
                        <div class="col-sm-10">
                            <input name="tanggal_sk_penugasan" id="tanggal_sk_penugasan" value="{{ date('m/d/Y',strtotime($data->tanggal_sk_penilai)) }}"  data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tanggal_berlaku_sk_penugasan" class="col-sm-2 col-form-label">Tanggal Berlaku SK</label>
                        <div class="col-sm-10">
                            <input name="tanggal_berlaku_sk_penugasan" value="{{ date('m/d/Y',strtotime($data->tanggal_berlaku_sk)) }}" id="tanggal_berlaku_sk_penugasan" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="tahun_penilaian" class="col-sm-2 col-form-label">Tahun Penilaian</label>
                        <div class="col-sm-10">
                            <input name="tahun_penilaian" id="tahun_penilaian" value="{{ $data->tahun_penilaian }}" placeholder="Masukkan tahun penilaian"
                                type="text" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="position-relative row form-group">
                        <label for="tanggal_penilaian" class="col-sm-2 col-form-label">Tanggal Penilaian</label>
                        <div class="col-sm-10">
                            <input name="tanggal_penilaian" id="tanggal_penilaian" value="{{ date('m/d/Y',strtotime($data->tanggal_penilaian)) }}" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="periode_penilaian_awal" class="col-sm-2 col-form-label">Periode Penilaian Awal</label>
                        <div class="col-sm-10">
                            <input name="periode_penilaian_awal" id="periode_penilaian_awal" value="{{ date('m/d/Y',strtotime($data->periode_penilaian_awal)) }}" data-toggle="datepicker" class="form-control">
                        </div>
                    </div>
                    <div class="position-relative row form-group">
                        <label for="periode_penilaian_akhir" class="col-sm-2 col-form-label">Periode Penilaian Akhir</label>
                        <div class="col-sm-10">
                            <input name="periode_penilaian_akhir" id="periode_penilaian_akhir" value="{{ date('m/d/Y',strtotime($data->periode_penilaian_akhir)) }}" data-toggle="datepicker" class="form-control">
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
