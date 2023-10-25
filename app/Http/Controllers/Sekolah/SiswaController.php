<?php

namespace App\Http\Controllers\Sekolah;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\SiswaModel;

class SiswaController extends Controller
{
    public function show(){
        // $siswa = SiswaModel::all();
        $siswa = SiswaModel::select('id_siswa','nis', 'nama_siswa')->get();
        return view('sekolah.list_siswa', [
            'siswa' => $siswa
        ]);
    }

    public function store(Request $request){
        $this->validate($request, [
            // data inti
            'nis' => 'required|numeric',
            'nisn' => 'numeric|nullable', 

            // keterangan tentang peserta didik
            // 'nama' => 'alpha|nullable',
            // 'panggilan' => 'alpha|nullable',
            // 'JK' => 'numeric|nullable',
            // 'tempat_lahir' => 'alpha|nullable',
            // 'tanggal_lahir' => 'date|nullable',
            // 'agama' => 'alpha|nullable',
            // 'kewarganegaraan' => 'alpha|nullable',
            // 'anak_ke' => 'numeric|nullable',
            // 'jum_saudara_kandung' => 'numeric|nullable',
            // 'jum_saudara_tiri' => 'numeric|nullable',
            // 'jum_saudara_angkat' => 'numeric|nullable',
            // 'status_anak' => 'alpha|nullable',
            // 'bahasa' => 'alpha|nullable',
            
            // keterangan tempat tinggal
            // 'alamat' => 'alpha_dash|nullable',
            // 'hp' => 'alpha_dash|nullable',
            // 'status_tinggal' => 'nullable',
            // 'jarak_tempat_tinggal' => 'numeric|nullable',

            // keterangan kesehatan
            // 'goldar' => 'alpha|nullable',
            // 'penyakit_diderita' => 'alpha|nullable',
            // 'kelainan_jasmani' => 'alpha|nullable',
            // 'tinggi_badan' => 'numeric|nullable',
            // 'berat_badan' => 'numeric|nullable',

            // keterangan pendidikan
            // 'pendidikan_sebelumnya' => 'alpha|nullable',
            // 'tamatan_dari' => 'alpha|nullable',
            // 'tanggal_nomor_ijazah' => 'alpha_dash|nullable',
            // 'tanggal_nomor_skhun' => 'alpha_dash|nullable',
            // 'lama_belajar' => 'numeric|nullable',
            // 'pindahan_sekolah' => 'alpha|nullable',
            // 'alasan_pindah' => 'alpha|nullable',
            // 'diterima_kelas' => 'alpha_dash|nullable',
            // 'kelompok_studi' => 'alpha_dash|nullable',
            // 'tanggal_diterima' => 'date|nullable',

            // keterangan tentang ayah kandung
            // 'nama_ayah' => 'alpha|nullable',
            // 'tempat_lahir_ayah' => 'alpha|nullable',
            // 'tanggal_lahir_ayah' => 'date|nullable',
            // 'agama_ayah' => 'alpha|nullable',
            // 'kewarganegaraan_ayah' => 'alpha|nullable',
            // 'pendidikan_ayah' => 'alpha|nullable',
            // 'pekerjaan_ayah' => 'alpha_dash|nullable',
            // 'pengeluaran_ayah' => 'numeric|nullable',
            // 'alamat_ayah' => 'alpha_dash|nullable',
            // 'telp_ayah' => 'alpha_dash|nullable',
            // 'status_ayah' => 'nullable',

            // keterangan tentang ibu kandung
            // 'nama_ibu' => 'alpha|nullable',
            // 'tempat_lahir_ibu' => 'alpha|nullable',
            // 'tanggal_lahir_ibu' => 'date|nullable',
            // 'agama_ibu' => 'alpha|nullable',
            // 'kewarganegaraan_ibu' => 'alpha|nullable',
            // 'pendidikan_ibu' => 'alpha|nullable',
            // 'pekerjaan_ibu' => 'alpha_dash|nullable',
            // 'pengeluaran_ibu' => 'numeric|nullable',
            // 'alamat_ibu' => 'alpha_dash|nullable',
            // 'telp_ibu' => 'alpha_dash|nullable',
            // 'status_ibu' => 'nullable',

            // keterangan tentang wali
            // 'nama_wali' => 'alpha|nullable',
            // 'tempat_lahir_wali' => 'alpha|nullable',
            // 'tanggal_lahir_wali' => 'date|nullable',
            // 'agama_wali' => 'alpha|nullable',
            // 'kewarganegaraan_wali' => 'alpha|nullable',
            // 'pendidikan_wali' => 'alpha|nullable',
            // 'pekerjaan_wali' => 'alpha_dash|nullable',
            // 'pengeluaran_wali' => 'numeric|nullable',
            // 'alamat_wali' => 'alpha_dash|nullable',
            // 'telp_wali' => 'alpha_dash|nullable',

            // kegemaran peserta didik
            // 'kesenian' => 'alpha|nullable',
            // 'olahraga' => 'alpha|nullable',
            // 'organisasi' => 'alpha|nullable',
            // 'lainlain' => 'alpha|nullable',

            // keterangan perkembangan peserta didik
            // 'tahun_bea1' => 'numeric|nullable',
            // 'kelas_bea1' => 'alpha_dash|nullable',
            // 'asal_bea1' => 'alpha|nullable',
            // 'tahun_bea2' => 'numeric|nullable',
            // 'kelas_bea2' => 'alpha_dash|nullable',
            // 'asal_bea2' => 'alpha|nullable',
            // 'tahun_bea3' => 'numeric|nullable',
            // 'kelas_bea3' => 'alpha_dash|nullable',
            // 'asal_bea3' => 'alpha|nullable',
            // 'alasan_meninggalkan_sekolah' => 'alpha_dash|nullable',
            // 'tanggal_meninggalkan_sekolah' => 'date|nullable',
            // 'tanggal_lulus' => 'date|nullable',
            // 'nomor_ijazah_lulus' => 'alpha_dash|nullable',
            // 'nomor_STL_lulus' => 'alpha_dash|nullable',
            // 'nilai_rata' => 'numeric|nullable',

            // keterangan setelah selesai pendidikan
            // 'melanjutkan_ke' => 'alpha_dash|nullable',
            // 'bekerja_di' => 'alpha_dash|nullable',
            // 'tanggal_mulai_bekerja' => 'date|nullable',
            // 'nama_tempat_bekerja' => 'alpha_dash|nullable',
            // 'penghasilan' => 'numeric|nullable',
        ]);

        $data = $request->all();
        $data['tanggal_lahir'] = $request->tanggal_lahir ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d') : null;
        $data['tanggal_lahir_ayah'] = $request->tanggal_lahir_ayah ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_ayah)->format('Y-m-d') : null;
        $data['tanggal_lahir_ibu'] = $request->tanggal_lahir_ibu ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_ibu)->format('Y-m-d') : null;
        $data['tanggal_lahir_wali'] = $request->tanggal_lahir_wali ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir_wali)->format('Y-m-d') : null;
        $data['tanggal_diterima'] = $request->tanggal_diterima ? Carbon::createFromFormat('m/d/Y', $request->tanggal_diterima)->format('Y-m-d') : null;
        $data['tanggal_meninggalkan_sekolah'] = $request->tanggal_meninggalkan_sekolah ? Carbon::createFromFormat('m/d/Y', $request->tanggal_meninggalkan_sekolah)->format('Y-m-d') : null;
        $data['tanggal_lulus'] = $request->tanggal_lulus ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lulus)->format('Y-m-d') : null;
        $data['tanggal_mulai_bekerja'] = $request->tanggal_mulai_bekerja ? Carbon::createFromFormat('m/d/Y', $request->tanggal_mulai_bekerja)->format('Y-m-d') : null;
        $input = SiswaModel::create($data);

        $request->session()->flash('info', 'Siswa berhasil ditambahkan');
        return redirect('/sekolah/siswa/list');
    }

    public function delete($id){
        $siswa = SiswaModel::find($id);
        $siswa->delete();

        return redirect('/sekolah/siswa/list')->with([
            'success' => 'Siswa berhasil dihapus'
        ]);
    }



}