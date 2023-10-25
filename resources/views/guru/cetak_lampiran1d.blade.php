<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css"
        integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <style>
        .table-borderless>tbody>tr>td,
        .table-borderless>tbody>tr>th,
        .table-borderless>tfoot>tr>td,
        .table-borderless>tfoot>tr>th,
        .table-borderless>thead>tr>td,
        .table-borderless>thead>tr>th {
            border: none;
        }

    </style>

</head>

<body>
    <div>
        <center>
            <img style="width: 80px; height:80px"
                src="data:image/png;base64,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"
                alt="">
        </center>
        <h4>
            <center>FORMAT PENGHITUNGAN ANGKA KREDIT</center>
            <center>PENILAIAN KINERJA GURU KELAS/GURU MATA PELAJARAN</center>
        </h4>
        <table>
            <tbody>
                <tr>
                    <td style="width: 200px">Nama</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->nama }}</td>
                </tr>
                <tr>
                    <td>NIP</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->nip }}</td>
                </tr>
                <tr>
                    <td>NUPTK</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->nuptk }}</td>
                </tr>
                <tr>
                    <td>Tempat / Tanggal Lahir</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->tempat_lahir.", ".$data_guru->tanggal_lahir }}</td>
                </tr>
                <tr>
                    <td>Pangkat</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->pangkat }}</td>
                </tr>
                <tr>
                    <td>TMT Sebagai Guru</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->tmt_guru }}</td>
                </tr>
                <tr>
                    <td>TMT Sekolah</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->tmt_sekolah }}</td>
                </tr>
                <tr>
                    <td>Masa Kerja</td>
                    <td>&nbsp;:</td>
                    <td>{{ floor(abs(strtotime($data_guru->tmt_sekolah) - strtotime(date('Y-m-d'))) / (365*60*60*24)) }}
                        Tahun</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->jk === 1 ? 'Laki - Laki' : 'Perempuan' }}
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->pendidikan }}</td>
                </tr>
                <tr>
                    <td>Program Keahlian yang diampu</td>
                    <td>&nbsp;:</td>
                    <td>{{ $data_guru->nama_mapel }}</td>
                </tr>
                <br>
            </tbody>
        </table>
        <hr>
        <table>
            <tbody>
                <tr>
                    <td style="width: 200px">Nama Instansi</td>
                    <td>&nbsp;:</td>
                    <td>SMA Negeri 19 Surabaya</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>&nbsp;:</td>
                    <td>JL. Kedung Cowek No 390 Surabaya</td>
                </tr>
                <tr>
                    <td>Telp/Fax</td>
                    <td>&nbsp;:</td>
                    <td>(031)51504844</td>
                </tr>
                <tr>
                    <td>Kelurahan</td>
                    <td>&nbsp;:</td>
                    <td>Tanah Kali Kedinding</td>
                </tr>
                <tr>
                    <td>Kecamatan</td>
                    <td>&nbsp;:</td>
                    <td>Kenjeran</td>
                </tr>
                <tr>
                    <td>Kabupaten/Kota</td>
                    <td>&nbsp;:</td>
                    <td>Surabaya</td>
                </tr>
                <tr>
                    <td>Provinsi</td>
                    <td>&nbsp;:</td>
                    <td>Jawa Timur</td>
                </tr>
            </tbody>
        </table>
    </div>
    <br>
    <table class="table table-bordered" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Penilaian</th>
                <th>Hasil Penilaian<br><small>Skala 100</small></th>
                <th>Proporsi</th>
                <th>Nilai</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: center">1</td>
                <td>Atasan (Kepala Sekolah/Pengawas/Guru Senior)</td>
                <td style="text-align: center">{{ $total_kompetensi }}</td>
                <td style="text-align: center">70%</td>
                <td style="text-align: center">{{ round($hasil_penilaian_penilai,2) }}</td>
            </tr>
            <tr>
                <td style="text-align: center">2</td>
                <td>Rerata Kuesioner Kinerja Oleh Guru Teman Sejawat</td>
                <td style="text-align: center">{{ $rerata_guru }}</td>
                <td style="text-align: center">10%</td>
                <td style="text-align: center">{{ round($hasil_penilaian_guru,2) }}</td>
            </tr>
            <tr>
                <td style="text-align: center">3</td>
                <td>Rerata Kuesioner Kinerja Oleh Peserta Didik</td>
                <td style="text-align: center">{{ $rerata_siswa }}</td>
                <td style="text-align: center">10%</td>
                <td style="text-align: center">{{ round($hasil_penilaian_siswa,2) }}</td>
            </tr>
            <tr>
                <td style="text-align: center">4</td>
                <td>Rerata Kuesioner Kinerja Oleh Orang Tua</td>
                <td style="text-align: center">{{ $rerata_wali }}</td>
                <td style="text-align: center">10%</td>
                <td style="text-align: center">{{ round($hasil_penilaian_wali,2) }}</td>
            </tr>
            <tr>
                <td colspan="2">Nilai PKG = Jumlah Nilai</td>
                <td colspan="3" style="text-align: center">{{ $total_nilai_pkg }}</td>
            </tr>
            <tr>
                <td colspan="2">Tidak Hadir Tanpa Keterangan = (a hari)</td>
                <td style="text-align: center">4</td>
                <td colspan="2" style="text-align: center">100%</td>
            </tr>
            <tr>
                <td colspan="2">Persentase Nilai PKG dari Kehadiran = 100% - (a/46) x 100%</td>
                <td colspan="3" style="text-align: center">100%</td>
            </tr>
            <tr>
                <td colspan="2">Nilai Akhir PKG = Nilai PKG x Persentase Nilai PKG dari Kehadiran</td>
                <td colspan="3" style="text-align: center">{{ $total_nilai_pkg*1 }}</td>
            </tr>
            <tr>
                <td colspan="2">Sebutan | Nilai Persentase Kinerja (NPK)</td>
                <td style="text-align: center">
                    @if($total_nilai_pkg <= 50)
                        <strong>Kurang</strong>
                    @elseif($total_nilai_pkg <= 50)
                        <strong>Kurang</strong>
                    @elseif($total_nilai_pkg <= 60)
                        <strong>Sedang</strong>
                    @elseif($total_nilai_pkg <= 75)
                        <strong>Cukup</strong>
                    @elseif($total_nilai_pkg <= 90)
                        <strong>Baik</strong>
                    @else
                        <strong>Amat Baik</strong>
                    @endif
                </td>
                <td colspan="2" style="text-align: center">
                    @if($total_nilai_pkg <= 25)
                        <strong>0%</strong>
                    @elseif($total_nilai_pkg <= 25)
                        <strong>0%</strong>
                    @elseif($total_nilai_pkg <= 50)
                        <strong>25%</strong>
                    @elseif($total_nilai_pkg <= 60)
                        <strong>50%</strong>
                    @elseif($total_nilai_pkg <= 75)
                        <strong>75%</strong>
                    @elseif($total_nilai_pkg <= 90)
                        <strong>100%</strong>
                    @else
                        <strong>125%</strong>
                    @endif
                </td>
            </tr>
            {{-- <tr>
                <td colspan="2"><img style="width: 400px; height:40px" src="{{ url('assets/images/rumus.png') }}"
            alt=""></td>
            <td colspan="3"></td>
            </tr> --}}
        </tbody>
    </table>

    <table class="table table-borderless">
        <tbody>
            <tr>
                <td>Guru yang dinilai</td>
                <td>Penilai</td>
                <td>Kepala Sekolah</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td>{{ $data_guru->nama }}</td>
                <td>{{ $data_guru->nama }}</td>
                <td>Drs. Moh Zainuri, M.Si</td>
            </tr>
            <tr>
                <td>NIP. {{ $data_guru->nip }}</td>
                <td>NIP. </td>
                <td>NIP. 196907131994031005</td>
            </tr>
        </tbody>
    </table>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</body>

</html>
