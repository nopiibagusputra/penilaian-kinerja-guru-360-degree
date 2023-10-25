@section('sidebar')
<div class="app-sidebar sidebar-shadow">
    <div class="app-header__logo">
        <div><h2>PKG</h2></div>
        <div class="header__pane ml-auto">
            <div>
                <button type="button" class="hamburger close-sidebar-btn hamburger--elastic"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="scrollbar-sidebar">
        <div class="app-sidebar__inner">
            <ul class="vertical-nav-menu">
                @if(Auth::user()->level == 'admin')
                    {{-- <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href="{{ route('dashboard') }}"
                            class="{{ (request()->is('admin/dashboard*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                        </a>
                    </li> --}}
                    <li class="app-sidebar__heading">Manajement</li>
                    <li
                        class="{{ (request()->is('admin/users*')) ? 'mm-active' : '' || (request()->is('admin/guru*')) ? 'mm-active' : '' || (request()->is('admin/siswa*')) ? 'mm-active' : '' || (request()->is('admin/penilai*')) ? 'mm-active' : ''}}">
                        <a href="#"
                            {{ (request()->is('admin/users*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' }}>
                            <i class="metismenu-icon pe-7s-users"></i>
                            Manajemen Akun
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul
                            {{ (request()->is('admin/users/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_users') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Akun
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/guru/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_guru') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Guru
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/siswa/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_siswa') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Siswa
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/penilai/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_penilai') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Penilai
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="{{ (request()->is('admin/kompetensi*')) ? 'mm-active' : '' || (request()->is('admin/indikator*')) ? 'mm-active' : '' }}">
                        <a href="#"
                            {{ (request()->is('admin/kompetensi*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' || (request()->is('admin/indikator*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' }}>
                            <i class="metismenu-icon pe-7s-users"></i>
                            Data Kompetensi
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul
                            {{ (request()->is('admin/kompetensi/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_kompetensi') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Kompetensi
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/indikator/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_indikator') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Indikator
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="{{ (request()->is('admin/responden*')) ? 'mm-active' : '' || (request()->is('admin/komponen*')) ? 'mm-active' : '' || (request()->is('admin/pernyataan*')) ? 'mm-active' : '' }}">
                        <a href="#"
                            {{ (request()->is('admin/users*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' }}>
                            <i class="metismenu-icon pe-7s-users"></i>
                            Data Respondensi
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul
                            {{ (request()->is('admin/responden/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_responden') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Responden
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/komponen/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_komponen') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Komponen
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/pernyataan/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_pernyataan') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Pernyataan
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="{{ (request()->is('admin/mapel*')) ? 'mm-active' : '' }}">
                        <a href="#"
                            {{ (request()->is('admin/mapel*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' }}>
                            <i class="metismenu-icon pe-7s-users"></i>
                            Data Mata Pelajaran
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul
                            {{ (request()->is('admin/mapel/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_mapel') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Mata Pelajaran
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="{{ (request()->is('admin/kelas*')) ? 'mm-active' : '' }}">
                        <a href="#"
                            {{ (request()->is('admin/kelas*')) ? 'aria-expanded="true"' : 'aria-expanded="false"' }}>
                            <i class="metismenu-icon pe-7s-users"></i>
                            Data Kelas
                            <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                        </a>
                        <ul
                            {{ (request()->is('admin/kelas/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_kelas') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Kelas
                                </a>
                            </li>
                        </ul>
                        <ul
                            {{ (request()->is('admin/kelasajar/list')) ? 'mm-show' : '' }}>
                            <li>
                                <a href="{{ route('list_kelas_ajar') }}">
                                    <i class="metismenu-icon"></i>
                                    Daftar Kelas Pengajar
                                </a>
                            </li>
                        </ul>
                    </li>

                @endif

                @if(Auth::user()->level == 'penilai')
                    <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href=""
                            class="{{ (request()->is('sekolah/dashboard*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Daftar Penilaian</li>
                    <li>
                        <a href=""
                            class="{{ (request()->is('sekolah/siswa*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Daftar Penilaian Guru
                        </a>
                    </li>
                @endif

                @if(Auth::user()->level == 'guru')
                    {{-- <li class="app-sidebar__heading">Dashboards</li>
                    <li>
                        <a href="{{ url(Auth::user()->level.'/dashboard') }}"
                            class="{{ (request()->is('sekolah/dashboard*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-rocket"></i>
                            Dashboard
                        </a>
                    </li> --}}
                    <li class="app-sidebar__heading">Daftar Penilaian</li>
                    <li>
                        <a href="{{ url(Auth::user()->level.'/dashboard') }}"
                            class="{{ (request()->is('sekolah/siswa*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Daftar Penilaian Guru
                        </a>
                    </li>
                    <li class="app-sidebar__heading">Hasil Penilaian</li>
                    <li>
                        <a href="{{ route('laporan_akhir_guru') }}"
                            class="{{ (request()->is('sekolah/siswa*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Cetak Penilaian
                        </a>
                    </li>
                @endif

                @if(Auth::user()->level == 'siswa')
                    <li class="app-sidebar__heading">Daftar Penilaian</li>
                    <li>
                        <a href="{{ url(Auth::user()->level.'/dashboard') }}"
                            class="{{ (request()->is('sekolah/siswa*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Daftar Penilaian Guru
                        </a>
                    </li>
                @endif

                @if(Auth::user()->level == 'wali')
                    <li class="app-sidebar__heading">Daftar Penilaian</li>
                    <li>
                        <a href="{{ url(Auth::user()->level.'/dashboard') }}"
                            class="{{ (request()->is('sekolah/siswa*')) ? 'mm-active' : '' }}">
                            <i class="metismenu-icon pe-7s-users"></i>
                            Daftar Penilaian Guru
                        </a>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</div>
