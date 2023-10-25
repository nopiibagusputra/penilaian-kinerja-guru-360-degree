<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KomponenModel;
use App\Models\PenilaianRespondensi;
use App\Models\GuruModel;
use App\Models\IndikatorModel;
use App\Models\KompetensiModel;
use App\Models\SkorkompetensiModel;
use App\Models\NilaikompetensiModel;
use App\Models\KodeRespondensi;
use App\Models\DataResponden;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Auth;
use DB;

class ManagementController extends Controller
{

    public function index()
    {
        echo "Hello World";
    }

    public function list_penilaian()
    {
        $type_reponden = 1;
        $id_siswa = Auth::user()->id_guru;
        $data_kuis = DataResponden::join("guru", 'guru.id_guru', '=', 'data_responden.id_guru')->where(['id_penilai' => $id_siswa, "id_responden" => $type_reponden])->get();
        $kuis_data = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')->where('komponen_kuisioner.id_responden', $type_reponden)->get();
        $test = array_column($kuis_data->toArray(), 'id_pernyataan');
        $output = [];
        foreach ($data_kuis as $val) {
            $total = PenilaianRespondensi::where(['id_responden' => $id_siswa, 'id_guru' => $val->id_guru])->whereIn('id_pernyataan', $test)->get();
            $obj = new \stdClass;
            $obj->id_data_responden = $val->id_data_responden;
            $obj->nama = $val->nama;
            $obj->done = count($total);
            $obj->total = count($kuis_data->toArray());
            $output[] = $obj;
        }
        //dd($output);
        return view('guru.daftar_penilaian', [
            'data' => $output
        ]);
    }

    public function penilaian($id)
    {
        $type_reponden = 1;
        $id_siswa = Auth::user()->id_guru;
        $meta_penilaiaan = DataResponden::where(["id_data_responden" => $id, "id_penilai" => $id_siswa, "id_responden" => $type_reponden])->first();
        $kuis_data = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')->where('komponen_kuisioner.id_responden', $type_reponden)->get();
        $data_guru = GuruModel::find($meta_penilaiaan->id_guru);
        $kuisnya = [];
        $total_nilai = 0;
        foreach ($kuis_data as $val) {
            $kuisnya[$val->id_komponen]['komponen'] = $val->nama_komponen;
            $val->nilai = PenilaianRespondensi::where(['id_guru' => $meta_penilaiaan->id_guru, 'id_responden' => $id_siswa, 'id_pernyataan' => $val->id_pernyataan])->first();
            $kuisnya[$val->id_komponen]['data'][] = $val;
            $total_nilai += ($val->nilai != null) ? $val->nilai->skor_penilaian : 0;
        }

        //dd($kuisnya);
        return view('guru.penilaian_kuisioner', [
            'meta_penilaiaan' => $meta_penilaiaan,
            'guru'    => $data_guru,
            'kuis_data'   => $kuisnya,
            'total_nilai' => $total_nilai,
            'total_kuis' => count($kuis_data),
            'total_kinerja' =>  $total_nilai / (count($kuis_data) * 2) * 100
        ]);
    }
    public function store_nilai_penilaian(Request $request)
    {
        //untuk Laporan 1E (Col 2-4)
        $type_reponden = 1;
        $total_nilai = 0;
        $this->validate($request, [
            'id_kuis' => 'required',
            'id_guru' => 'required',
            'id_kode_respondensi' => 'required',

        ]);
        $id_siswa = Auth::user()->id_guru;
   
         //untuk Laporan 1E (Col 1)
        foreach ($request->nilai as $id_komponen => $data_komponen) {

            foreach ($data_komponen as $id_pernyataan => $skor) {
                $data = PenilaianRespondensi::updateOrCreate([
                    'id_pernyataan' => $id_pernyataan,
                    'id_komponen' => $id_komponen,
                    'id_responden' => $id_siswa,
                    'id_guru' => $request->id_guru,
                    'id_kode_respondensi' => $request->id_kode_respondensi,
                ], [
                    'skor_penilaian' => $skor,
                ]);
                $total_nilai += $skor;
            }
        }
        $kuis_data = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')->where('komponen_kuisioner.id_responden', $type_reponden)->get();
        $datres = DataResponden::find($request->id_kuis);
        $datres->total_nilai = round($total_nilai / (count($kuis_data) * 2) * 100, 2);
        $datres->save();

        $request->session()->flash('info', 'Penilaian berhasil disimpan');
        return redirect('/guru/penilaian/' . $request->id_kuis);
    }
    public function laporan_akhir()
    {
        return view('guru.laporan_akhir', []);
    }
    public function print_laporan_akhir($id)
    {
        $data_guru = GuruModel::leftJoin('mapel', 'mapel.id_mapel', '=', 'guru.program_keahlian')->where('guru.id_guru', $id)->first();
        $id_guru = $id;//
        $id_guru_hehe = Auth::user()->id_guru;
        $kode_resp = KodeRespondensi::all();
        $output = [];
        foreach ($kode_resp as $val) {
            $meta_penilaiaan = DataResponden::select(DB::raw('(sum(total_nilai)/count(total_nilai)) as total'))
                ->where(["id_guru" => $id_guru_hehe, 'id_responden' => $val->id_kode_respondensi])
                ->where('total_nilai', '<>', 'null')
                ->first();
            $val->nilai = $meta_penilaiaan->total;
            $output[] = $val;
        }
        //dd($output);
        $kode_komp = KompetensiModel::all();
        $nilai_komps = NilaikompetensiModel::where(["id_guru"=>$id_guru])->get();
        $total_kom = 0;
        $pk_info = [];
        //dd($nilai_komps);
        foreach($nilai_komps as $val){
            //(0% < X = 25% = 1; 25% < X = 50% = 2; 50% < X = 75% = 3; 75% < X = 100% = 4)
            $range = ($val->nilai_kompetensi<25)?1:(
                ($val->nilai_kompetensi<50)?2:(
                    ($val->nilai_kompetensi<75)?3:4
                )
            );
            $total_kom += $range;
            $pk_info[$val->id_kompetensi] = $range;
        }
        
        //dd($total_kom/(count($kode_komp)*4)*100);
        // return view('guru.cetak_lampiran1c', [
        //     // 'output' => $output,
        //     'data' => $kode_komp,
        //     'total_kom' => $total_kom,
        //     'pk_info' => $pk_info,
        //     'data_guru' => $data_guru
        // ]);

        $pdf = PDF::loadView('guru.cetak_lampiran1c', [
            // 'output' => $output,
            'data' => $kode_komp,
            'total_kom' => $total_kom,
            'pk_info' => $pk_info,
            'data_guru' => $data_guru
        ])->setOptions(['defaultFont' => 'sans-serif']);
        // Storage::put('public/pdf/'.$data_guru->nama.'.pdf', $pdf->output());
        return $pdf->setPaper('letter')->download('Lampiran 1C_'.$data_guru->nama.'.pdf');
        // echo "<table border=1 style='width:100%;'>";
        // foreach($kode_komp as $pk){
        //     echo "
        //         <tr>
        //             <td>$pk->nama_kompetensi</td>
        //             <td>  ". ((isset($pk_info[$pk->id_kompetensi]))?$pk_info[$pk->id_kompetensi]:"-") ."</td>
        //         </tr>
        //     ";
        // }
        // echo "</table>";
        // echo "<table border=1 style='width:100%;'>";
        // echo "<tr><td>Jumlah (Hasil Penilaian Kinerja Guru)</td><td>$total_kom</td></tr>";
        // echo "<tr><td>Konversi nilai PK Guru ke dalam skala 0 - 100</td><td>".round($total_kom/(count($kode_komp)*4)*100,2)."</td></tr>";
        // echo "</table>";
        // echo 
    }

    public function print_laporan_akhir_1d($id)
    {
        $data_guru = GuruModel::leftJoin('mapel', 'mapel.id_mapel', '=', 'guru.program_keahlian')->where('guru.id_guru', $id)->first();
        $id_guru = $id;
        $id_guru_hehe = Auth::user()->id_guru;
        $kode_resp = KodeRespondensi::all();
        
        $responden_siswa = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '2')
                        ->where('total_nilai', '<>', 'null')
                        ->get();
        $responden_guru = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '1')
                        ->where('total_nilai', '<>', 'null')
                        ->get();
        $responden_wali = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '3')
                        ->where('total_nilai', '<>', 'null')
                        ->get();
        $total_nilai_siswa = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '2')
                        ->where('total_nilai', '<>', 'null')
                        ->sum('total_nilai');
        $total_nilai_guru = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '1')
                        ->where('total_nilai', '<>', 'null')
                        ->sum('total_nilai');
        $total_nilai_wali = DataResponden::where('id_guru', $id_guru)
                        ->where('id_responden', '=', '3')
                        ->where('total_nilai', '<>', 'null')
                        ->sum('total_nilai');
        $nilai_rerata_siswa = round($total_nilai_siswa / count($responden_siswa), 2);
        $nilai_rerata_guru = round($total_nilai_guru / count($responden_guru), 2);
        $nilai_rerata_wali = round($total_nilai_wali / count($responden_wali), 2);

        $output = [];
        foreach ($kode_resp as $val) {
            $meta_penilaiaan = DataResponden::select(DB::raw('(sum(total_nilai)/count(total_nilai)) as total'))
                ->where(["id_guru" => $id_guru_hehe, 'id_responden' => $val->id_kode_respondensi])
                ->where('total_nilai', '<>', 'null')
                ->first();
            $val->nilai = $meta_penilaiaan->total;
            $output[] = $val;
        }
        //dd($output);
        $kode_komp = KompetensiModel::all();
        $nilai_komps = NilaikompetensiModel::where(["id_guru"=>$id_guru])->get();
        $total_kom = 0;
        $pk_info = [];
        //dd($nilai_komps);
        foreach($nilai_komps as $val){
            //(0% < X = 25% = 1; 25% < X = 50% = 2; 50% < X = 75% = 3; 75% < X = 100% = 4)
            $range = ($val->nilai_kompetensi<25)?1:(
                ($val->nilai_kompetensi<50)?2:(
                    ($val->nilai_kompetensi<75)?3:4
                )
            );
            $total_kom += $range;
            $pk_info[$val->id_kompetensi] = $range;
        }

        $total_kompetensi = round($total_kom/(count($kode_komp)*4)*100,2);

        $hasil_penilaian_siswa = $nilai_rerata_siswa*0.1;
        $hasil_penilaian_guru = $nilai_rerata_guru*0.1;
        $hasil_penilaian_wali = $nilai_rerata_wali*0.1;
        $hasil_penilaian_penilai = $total_kompetensi*0.7;

        $total_nilai_pkg = $hasil_penilaian_guru+$hasil_penilaian_siswa+$hasil_penilaian_wali+$hasil_penilaian_penilai;

        // return view('guru.cetak_lampiran1d', [
        //     // 'output' => $output,
        //     'data_guru' => $data_guru,
        //     'rerata_siswa' => $nilai_rerata_siswa,
        //     'rerata_guru' => $nilai_rerata_guru,
        //     'rerata_wali' => $nilai_rerata_wali,
        //     'hasil_penilaian_siswa' => $hasil_penilaian_siswa,
        //     'hasil_penilaian_guru' => $hasil_penilaian_guru,
        //     'hasil_penilaian_wali' => $hasil_penilaian_wali,
        //     'total_kompetensi' => $total_kompetensi,
        //     'hasil_penilaian_penilai' => $hasil_penilaian_penilai,
        //     'total_nilai_pkg' => $total_nilai_pkg,
        // ]);

        $pdf = PDF::loadView('guru.cetak_lampiran1d', [
            // 'output' => $output,
            'data_guru' => $data_guru,
            'rerata_siswa' => $nilai_rerata_siswa,
            'rerata_guru' => $nilai_rerata_guru,
            'rerata_wali' => $nilai_rerata_wali,
            'hasil_penilaian_siswa' => $hasil_penilaian_siswa,
            'hasil_penilaian_guru' => $hasil_penilaian_guru,
            'hasil_penilaian_wali' => $hasil_penilaian_wali,
            'total_kompetensi' => $total_kompetensi,
            'hasil_penilaian_penilai' => $hasil_penilaian_penilai,
            'total_nilai_pkg' => $total_nilai_pkg,
        ])->setOptions(['defaultFont' => 'sans-serif']);
        // Storage::put('public/pdf/'.$data_guru->nama.'.pdf', $pdf->output());
        return $pdf->setPaper('letter')->download('Lampiran 1D_'.$data_guru->nama.'.pdf');
       
    }
}
