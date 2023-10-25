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
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">{{$kompetensi === null ? '' : $kompetensi->nama_kompetensi }}</h5>
                <form action="{{ route('store_nilai_penilaian_guru') }}" method="POST">
                    @csrf
                    <table class="mb-0 table table-hover">
                        <thead>
                            <tr>
                                <th rowspan="2">No</th>
                                <th colspan="2" rowspan="2" style="text-align:center;">INDIKATOR</th>
                                <th style="text-align:center;">SKOR</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i=1; ?>
                            @foreach($indikator as $indikator)
                                <tr>
                                    <td>{{ $i++ }}</td>
                                    <td colspan="2">{{ $indikator->nama_indikator }}</td>
                                    <td>    
                                        <input type="hidden" name="id_indikator[]" value="{{$indikator->id_indikator}}">
                                        <input type="hidden" name="id_kompetensi" value="{{$kompetensi->id_kompetensi}}">
                                        <input type="hidden" name="id_guru" value="{{$guru->id_guru}}">
                                            <select name="skor[]" id="skor" class="form-control">
                                                <option disabled selected></option>
                                                <option value="0" {{ ($indikator!=null && $indikator->skor_kompetensi==0)?'selected':'' }}>Tidak ada Bukti (Tidak Terpenuhi)</option>
                                                <option value="1" {{ ($indikator!=null && $indikator->skor_kompetensi==1)?'selected':'' }}>Terpenuhi Sebagian</option>
                                                <option value="2" {{ ($indikator!=null && $indikator->skor_kompetensi==2)?'selected':'' }}>Seluruhnya Terpenuhi</option>
                                            </select>
                                    </td>
                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <button style="float: right" class="mb-2 mr-2 btn-pill btn-transition btn btn-outline-primary" type="submit">Simpan</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-card mb-3 card">
            <div class="card-body">
                <h5 class="card-title">Skor Penilaian</h5>
                <table>
                    <tbody>
                        @foreach ($nilai as $nilai)
                        <tr>
                            <th>Total perolehan skor {{$kompetensi === null ? '' : $kompetensi->nama_kompetensi }}</th>
                            <th>&nbsp;: </th>
                            <td>{{$nilai->jumlah_skor_kompetensi}}</td>
                        </tr>
                        <tr>
                            <th>Skor Maksimum {{$kompetensi === null ? '' : $kompetensi->nama_kompetensi }} = Jumlah Indikator x 2</th>
                            <th>&nbsp;: </th>
                            <td>{{$total_indikator*2}}</td>
                        </tr>
                        <tr>
                            <th>Persentase = (Total Skor/{{$total_indikator*2}}) x 100%</th>
                            <th>&nbsp;: </th>
                            <td>{{$nilai->nilai_kompetensi}}%</td>
                        </tr>
                        <tr>
                            <td> Nilai Kompetensi 1<br>(0% < X = 25% = 1; 25% < X = 50% = 2; 50% < X = 75% = 3; 75% < X = 100% = 4)</td>
                            <th>&nbsp;: </th>
                            <td>
                                @if ($nilai->nilai_kompetensi <= 25)
                                    <span class="badge badge-pill badge-danger">1</span>
                                    
                                @elseif($nilai->nilai_kompetensi <= 50)
                                    <span class="badge badge-pill badge-warning">2</span>
                                
                                @elseif($nilai->nilai_kompetensi <= 75)
                                    <span class="badge badge-pill badge-primary">3</span>
                                
                                @else
                                    <span class="badge badge-pill badge-success">4</span>
                                    
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <hr>
            </div>
        </div>
    </div>
</div>
@endsection
