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
            <div>Cetak
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
                <h5 class="card-title">Cetak Laporan Akhir</h5>
                <div class="m-3 p-3">
                    <a class="btn btn-primary" href="{{route('print_laporan_akhir_guru_1c', Auth::user()->id_guru)}}" class="ml-2 text-info">
                        <span class="btn-icon-wrapper opacity-7">
                            <i class="fa fa-list-ul fa-w-20"></i>
                        </span>
                        Cetak Lampiran 1C
                    </a>
                    <br>
                    <br>
                    <a class="btn btn-primary" href="{{route('print_laporan_akhir_guru_1d', Auth::user()->id_guru)}}" class="ml-2 text-info">
                        <span class="btn-icon-wrapper opacity-7">
                            <i class="fa fa-list-ul fa-w-20"></i>
                        </span>
                        Cetak Lampiran 1D
                    </a>
{{--                     
                    <form action="{{ route('print_laporan_akhir_guru',Auth::user()->id_guru) }}" id="form_kuis" method="POST">
                        @csrf
                        <center><button hreff class="btn btn-outline-primary btn-lg px-5">Cetak Laporan</button></center>
                    </form> --}}
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
