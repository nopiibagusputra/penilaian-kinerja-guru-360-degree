<?php

namespace App\Http\Controllers\Wali;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KomponenModel;
use App\Models\PenilaianRespondensi;
use App\Models\GuruModel;
use App\Models\IndikatorModel;
use App\Models\KompetensiModel;
use App\Models\SkorkompetensiModel;
use App\Models\NilaikompetensiModel;
use App\Models\DataResponden;
use Auth;

class ManagementController extends Controller
{

    public function index()
    {
        echo "Hello World";
    }
    public function list_penilaian()
    {
        $type_reponden = 3;
        $id_siswa = Auth::user()->id_siswa;
        $data_kuis = DataResponden::join("guru", 'guru.id_guru', '=', 'data_responden.id_guru')->where(['id_penilai'=>$id_siswa,"id_responden"=>$type_reponden])->get();
        $kuis_data = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')->where('komponen_kuisioner.id_responden', $type_reponden)->get();
        $test = array_column($kuis_data->toArray(), 'id_pernyataan');
        $output = [];
        foreach ($data_kuis as $val) {
            $total = PenilaianRespondensi::where(['id_responden'=>$id_siswa,'id_guru'=>$val->id_guru])->whereIn('id_pernyataan', $test)->get();
            $obj=new \stdClass;
            $obj->id_data_responden = $val->id_data_responden;
            $obj->nama = $val->nama;
            $obj->done = count($total);
            $obj->total = count($kuis_data->toArray());
            $output[] = $obj;
        }
        //dd($output);
        return view('wali.daftar_penilaian', [
            'data' => $output
        ]);
    }

    public function penilaian($id)
    {
        $type_reponden = 3;
        $id_siswa = Auth::user()->id_siswa;
        $meta_penilaiaan = DataResponden::where(["id_data_responden"=>$id,"id_penilai"=>$id_siswa,"id_responden"=>$type_reponden])->first();
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
        return view('wali.penilaian_kuisioner', [
            'meta_penilaiaan' => $meta_penilaiaan,
            'guru'    => $data_guru,
            'kuis_data'   => $kuisnya,
            'total_nilai' => $total_nilai,
            'total_kuis' => count($kuis_data),
        ]);
    }
    public function store_nilai_penilaian(Request $request)
    {
        $type_reponden = 3;
        $total_nilai = 0;
        $this->validate($request, [
            'id_kuis' => 'required',
            'id_guru' => 'required',
            'id_kode_respondensi' => 'required',
        ]);
        $id_siswa = Auth::user()->id_siswa;

        //dd($request->request);
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
        $datres->total_nilai = round($total_nilai /(count($kuis_data)*2) * 100,2);
        $datres->save();

        $request->session()->flash('info', 'Penilaian berhasil disimpan');
        return redirect('/wali/penilaian/' . $request->id_kuis);
    }

}
