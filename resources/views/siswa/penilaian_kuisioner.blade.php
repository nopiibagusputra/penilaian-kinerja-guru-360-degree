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
            <div>Daftar Guru
                <div class="page-title-subheading">Tables are the backbone of almost all web applications.</div>
            </div>
        </div>
        <div class="page-title-actions">
            {{-- <div class="d-inline-block dropdown">
                <a class="btn-shadow btn btn-info" href="{{ route('add_kelas') }}">
            <span class="btn-icon-wrapper pr-2 opacity-7">
                <i class="fa fa-user-plus fa-w-20"></i>
            </span>
            Tambah Kelas
            </a>
        </div> --}}
    </div>
</div>
</div>
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
@if(Session::has($msg))
<p class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="Close">&times;</a></p>
@endif
@endforeach
<form action="{{ route('store_nilai_penilaian_siswa') }}" id="form_kuis" method="POST">
    <input type="hidden" name="id_kuis" value="{{$meta_penilaiaan->id_data_responden}}">
    <input type="hidden" name="id_kode_respondensi" value="{{$meta_penilaiaan->id_responden}}">
    <input type="hidden" name="id_guru" value="{{$guru->id_guru}}">
    @csrf
    <div class="row">
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Data Guru</h5>
                    <table>
                        <tbody>
                            <tr>
                                <th>Nama</th>
                                <th>&nbsp;: </th>
                                <td>{{$guru->nama}}</td>
                            </tr>
                            <tr>
                                <th>NIP</th>
                                <th>&nbsp;: </th>
                                <td>{{$guru->nip}}</td>
                            </tr>
                            <tr>
                                <th>NUPTK</th>
                                <th>&nbsp;: </th>
                                <td>{{$guru->nuptk}}</td>
                            </tr>
                            <tr>
                                <th>Pangkat</th>
                                <th>&nbsp;: </th>
                                <td>{{$guru->pangkat}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        @foreach($kuis_data as $meta_kuis)
        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <h5 class="card-title">Komponen {{$meta_kuis === null ? '' : $meta_kuis['komponen'] }}</h5>
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th colspan="2" rowspan="2" style="text-align:center;">Pernyataan</th>
                                <th style="text-align:center;" width="200px">Penilaian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            @foreach($meta_kuis['data'] as $pernyataan)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td colspan="2">{{ $pernyataan->nama_pernyataan }}</td>
                                <td>

                                    <select name="nilai[{{$pernyataan->id_komponen}}][{{$pernyataan->id_pernyataan}}]" id="skor" class="form-control">
                                        <option disabled selected></option>
                                        <option value="0" {{ ($pernyataan->nilai!=null && $pernyataan->nilai->skor_penilaian==0)?'selected':'' }}>Tidak Pernah</option>
                                        <option value="1" {{ ($pernyataan->nilai!=null && $pernyataan->nilai->skor_penilaian==1)?'selected':'' }}>Kadang Kadang</option>
                                        <option value="2" {{ ($pernyataan->nilai!=null && $pernyataan->nilai->skor_penilaian==2)?'selected':'' }}>Sering</option>
                                    </select>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endforeach

        <div class="col-lg-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    {{-- <h5 class="card-title">Nilai Kinerja</h5>

                    <table class="table">
                        <tbody>
                            <tr>
                                <th>Jumlah Skor</th>
                                <td> {{ $total_nilai }}</td>
                            </tr>
                            <tr>
                                <th>Skor Maksimum = Jumlah indikator x 2</th>
                                <td> {{ $total_kuis*2 }}</td>
                            </tr>
                            <tr>
                                <th>Nilai Kinerja= (Jumlah skor/skor maksimum) x 100</th>
                                <td> {{ round($total_nilai /($total_kuis*2) * 100,2); }}</td>
                                <?php $t_kinerja = round($total_nilai /($total_kuis*2) * 100,2); ?>
                            </tr>
                            <tr>

                                <th>Sebutan<br>(0% < X = 25% = Kurang; 25% < X = 50% = Sedang; 50% < X = 75% = Cukup; 75% < X = 100% = Baik)</th>
                                <td> <span class="badge badge-success">{{ ($t_kinerja<=25)?'Kurang':(($t_kinerja<=50)?'Sedang':(($t_kinerja<=75)?'Cukup':'Baik')) }}</span></td>
                            </tr>
                        </tbody>
                    </table> --}}
                    <button style="float: right" onclick="document.getElementById('form_kuis').submit();" class="mt-2 mb-2 mr-3 btn-pill btn-transition btn btn-outline-primary" type="submit">Simpan</button>
                </div>
            </div>
        </div>

    </div>
</form>
@endsection