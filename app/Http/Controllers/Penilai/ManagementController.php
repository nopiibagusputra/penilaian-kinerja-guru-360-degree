<?php

namespace App\Http\Controllers\Penilai;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PenilaiModel;
use App\Models\GuruModel;
use App\Models\IndikatorModel;
use App\Models\KompetensiModel;
use App\Models\SkorkompetensiModel;
use App\Models\NilaikompetensiModel;
use DB;
use Auth;

class ManagementController extends Controller
{
    public function list_penilaian(){
        $guru_id = Auth::user()->id_guru;
        $data_guru = PenilaiModel::join('guru', 'penilai.id_guru', '=', 'guru.id_guru')->where(['penilai.id_guru_penilai'=>$guru_id])->get();
        return view('penilaian.daftar_penilaian', [
            'data' => $data_guru
        ]);
    }

    public function penilaian($id){
        // $indikator = IndikatorModel::join('kode_kompetensi', 'indikator.id_kompetensi', '=', 'kode_kompetensi.id_kompetensi')->get();
        $kompetensi = KompetensiModel::all();
        $data_guru = GuruModel::find($id);
        $nilai = NilaikompetensiModel::all();

        return view('penilaian.daftar_pk', [
            'indikator' => $kompetensi,
            'guru'    => $data_guru,
            'nilai'   => $nilai
        ]);
    }

    public function penilaian_guru($id, $kompetensi){
        $data_indikator = IndikatorModel::select('indikator.*', 'kode_kompetensi.nama_kompetensi', 'skor_kompetensi.id_indikator as indikator_skor', 'skor_kompetensi.skor_kompetensi')
        ->join('kode_kompetensi', 'indikator.id_kompetensi', '=', 'kode_kompetensi.id_kompetensi')
        ->leftJoin('skor_kompetensi', function($join) use ($id){
            $join->on('skor_kompetensi.id_indikator', '=', 'indikator.id_indikator');
            $join->on('skor_kompetensi.id_guru','=',DB::raw("'".$id."'"));
        })
        ->where('indikator.id_kompetensi', $kompetensi)            
        ->get();
        // dd($data_indikator);
        // foreach ($data_indikator as $key) {
        //     # code...
        //     echo $key;
        // }
        
        // die();
        $total_indikator = count($data_indikator);
        $nama_kompetensi = KompetensiModel::find($kompetensi);
        $data_guru = GuruModel::find($id);
        $nilai = NilaikompetensiModel::where('id_guru', $id)->where('id_kompetensi', $kompetensi)->get();
        
        return view('penilaian.penilaian_guru', [
            'indikator' => $data_indikator,
            'kompetensi' => $nama_kompetensi,
            'guru'   => $data_guru,
            'nilai' => $nilai,
            'total_indikator' => $total_indikator
        ]); 
    }

    public function store_nilai_penilaian_guru(Request $request){
        $this->validate($request, [
            'id_guru' => 'required',
            'id_indikator' => 'required',
            'id_kompetensi' => 'required',
        ]);
        $total = 0;
        $skor_kompetensi = 0;
        foreach ($request->skor as $key => $value) {
            $total += $value;
            $skor_maksimum = count($request->id_indikator)*2;
            $data = SkorkompetensiModel::updateOrCreate([
                'id_indikator' => $request->id_indikator[$key],
                'id_guru' => $request->id_guru,
            ],[
                'id_kompetensi' => $request->id_kompetensi,
                'skor_kompetensi' => $value,
            ]);
        }
        $skor_kompetensi = ($total / $skor_maksimum) * 100;
        $nilai = NilaikompetensiModel::updateOrCreate([
            'id_kompetensi' => $request->id_kompetensi,
            'id_guru' => $request->id_guru,
        ],[     
            'jumlah_skor_kompetensi' => $total,
            'nilai_kompetensi' => $skor_kompetensi,
        ]);

        $request->session()->flash('info', 'Penilaian berhasil disimpan');
        return redirect('/penilai/penilaian/guru/'.$request->id_guru);

    }

    
}
