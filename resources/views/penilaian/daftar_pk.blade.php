@extends('layouts.app')

@section('title', 'List Users')

@section('content')
@foreach (['danger', 'warning', 'success', 'info'] as $msg)
    @if(Session::has($msg))
        <p class="alert alert-{{ $msg }} alert-dismissible fade show" role="alert">{{ Session::get($msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="Close">&times;</a></p>
    @endif
@endforeach
<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Data Guru</h5>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>&nbsp;: </th>
                    <td>{{ $guru->nama }} |</td>
                    <th>NIP</th>
                    <th>&nbsp;: </th>
                    <td>{{ $guru->nip }} |</td>
                    <th>NUPTK</th>
                    <th>&nbsp;: </th>
                    <td>{{ $guru->nuptk }} |</td>
                    <th>Pangkat</th>
                    <th>&nbsp;: </th>
                    <td>{{ $guru->pangkat }}</td>
                </tr>
            </thead>
        </table>
        <hr>
        {{-- <table>
            <tbody>
                <tr>
                    <td>Skor PK 1</td>
                    <td>&nbsp;:</td>
                    <td>{{$nilai->id_kompetensi === 1 ? 'test' : 'ha'}}</td>
                    <td>Skor PK 4</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 7</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 10</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 13</td>
                    <td>&nbsp;:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Skor PK 2</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 5</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 8</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 11</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 14</td>
                    <td>&nbsp;:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Skor PK 3</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 6</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 9</td>
                    <td>&nbsp;:</td>
                    <td></td>
                    <td>Skor PK 12</td>
                    <td>&nbsp;:</td>
                    <td></td>
                </tr>
            </tbody>
        </table> --}}
    </div>
</div>
<div class="card mb-3">
    <div class="card-header pl-0 pr-0">
        <div class="row w-100 no-gutters align-items-center">
            <div class="col font-weight-bold pl-3">Kompetensi Penilaian</div>
            <div class="d-none d-md-block col-3 text-muted">
                <div class="row no-gutters align-items-center">
                    <div class="col-3">Action</div>
                </div>
            </div>
        </div>
    </div>
    <?php $i=1; ?>
    @foreach($indikator as $item)
        <div class="card-body py-3">
            <div class="row no-gutters align-items-center">
                <div class="col">
                    <p class="text-big font-weight-semibold">Penilaian Kinerja
                        {{ $i++." | ".$item->nama_kompetensi }}</p>
                </div>
                <div class="d-none d-md-block col-3">
                    <div class="row no-gutters align-items-center">
                        <div class="col-3">
                            <a href="{{ route('penilaian_guru', [$guru->id_guru, $item->id_kompetensi]) }}"
                                class="ladda-button mb-2 mr-2 btn btn-primary" data-style="expand-left">
                                <span class="ladda-label">Penilaian</span>
                                <span class="ladda-spinner"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="m-0">
    @endforeach

</div>
@endsection
