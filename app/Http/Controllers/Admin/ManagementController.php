<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DataResponden;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Facades\Excel;
use App\Models\User;
use App\Models\GuruModel;
use App\Models\KompetensiModel;
use App\Models\PernyataanModel;
use App\Models\RespondenModel;
use App\Models\KomponenModel;
use App\Models\IndikatorModel;
use App\Models\KelasModel;
use App\Models\MapelModel;
use App\Models\SiswaModel;
use App\Models\Kelas_ajarModel;
use App\Models\PenilaiModel;
use Barryvdh\DomPDF\Facade\Pdf;
use Auth;
use DB;
use Session;

class ManagementController extends Controller
{
    // admin functions
    public function store(Request $request)
    {

        $this->validate($request, [
            'name'  => 'required|max:255|alpha',
            'email' => 'required|max:100|email',
            'level' => 'required',
            'password'  => 'required|confirmed',
            'password_confirmation' => 'required|same:password',
        ]);

        User::create([
            'nama'  => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'active' => '1',
            'password'  => bcrypt($request->password),
            'remember_token' => Str::random(60),
            'verificationcode' => Str::random(20),
        ]);

        $request->session()->flash('info', 'User Add Successfully');
        return redirect('/admin/users/list');
    }

    public function show()
    {
        $users = User::leftjoin('guru', 'users.id_guru', '=', 'guru.id_guru')
            ->leftjoin('siswa', 'users.id_siswa', '=', 'siswa.id_siswa')
            ->get();
        return view('admin.list_user', [
            'data' => $users
        ]);
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('users.edit', [
            'data' => $users
        ]);
    }

    public function update($id, Request $request)
    {

        if ($request->password != '') {
            $this->validate($request, [
                'name'  => 'required|max:255|alpha',
                'email' => 'required|max:100|email',
                'level' => 'required',
                'password'  => 'required|confirmed',
                'password_confirmation' => 'required|same:password',
            ]);

            $data           = User::find($id);
            $data->name     = $request->name;
            $data->email    = $request->email;
            $data->level    = $request->level;
            $data->password = bcrypt($request->password);
            $data->save();

            $request->session()->flash('info', 'User Edit Successfully');
            return redirect('/admin/users/list');
        } else {
            $this->validate($request, [
                'name'  => 'required|max:255|alpha',
                'email' => 'required|max:100|email',
                'level' => 'required',
            ]);

            $data           = User::find($id);
            $data->name     = $request->name;
            $data->email    = $request->email;
            $data->level    = $request->level;
            $data->save();

            $request->session()->flash('info', 'User Edit Successfully');
            return redirect('/admin/users/list');
        }
    }

    public function delete($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/admin/users/list')->with([
            'success' => 'User Delete Successfully'
        ]);
    }

    // function siswa
    public function add_siswa()
    {
        $kelas = KelasModel::all();
        return view('admin.add_siswa', [
            'data_kelas' => $kelas
        ]);
    }

    public function store_siswa(Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required',
            'nama_siswa' => 'required',
        ]);

        SiswaModel::create([
            'id_kelas'  => $request->nama_kelas,
            'nama_siswa' => $request->nama_siswa,
        ]);

        $request->session()->flash('info', 'Siswa Berhasil Ditambahkan!');
        return redirect('/admin/siswa/list');
    }

    public function show_siswa()
    {
        $siswa = SiswaModel::join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')->get();
        return view('admin.list_siswa', [
            'data' => $siswa
        ]);
    }

    public function edit_siswa($id)
    {
        $siswa = SiswaModel::find($id);
        $kelas = KelasModel::all();

        return view('admin.edit_siswa', [
            'data' => $siswa,
            'kelas' => $kelas
        ]);
    }

    public function update_siswa($id, Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required',
            'nama_siswa' => 'required|max:255',
        ]);

        $data             = SiswaModel::find($id);
        $data->id_kelas   = $request->nama_kelas;
        $data->nama_siswa = $request->nama_siswa;
        $data->save();

        $request->session()->flash('info', 'Siswa Berhasil Diubah!');
        return redirect('/admin/siswa/list');
    }

    public function delete_siswa($id)
    {
        $siswa = SiswaModel::find($id);
        $siswa->delete();

        return redirect('/admin/siswa/list')->with([
            'success' => 'Siswa ' . $siswa->nama_siswa . ' Berhasil Dihapus!'
        ]);
    }

    public function generate_userpass_siswa()
    {
        ini_set('max_execution_time', 300); //5 minutes
        $siswa = SiswaModel::select('siswa.*', 'kelas.nama_kelas', 'kelas_ajar.id_guru as id_guru_pengajar')
            ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
            ->join('kelas_ajar', 'kelas.id_kelas', '=', 'kelas_ajar.id_kelas')
            ->get();
        $guru = GuruModel::all();

        foreach ($siswa as $key => $value) {
            foreach ($guru as $data => $data_guru) {

                // dd($value);
                //     User::updateOrCreate(
                //         [
                //             'email' => $value->nis,
                //         ],[
                //             'level' => 'siswa',
                //             'id_siswa' => $value->id_siswa,
                //             'password' => bcrypt(123456),
                //             'active'    => 1
                //         ]);
                //    User::updateOrCreate(
                //         [
                //             'email' => "wali_".$value->nis,
                //         ],[
                //             'level' => 'wali',
                //             'id_siswa' => $value->id_siswa,
                //             'password' => bcrypt(123456),
                //             'active'    => 1
                //         ]);


            }
        }
        die();

        return redirect('/admin/siswa/list')->with([
            'success' => 'User siswa berhasil dibuat, Password default 123456'
        ]);
    }

    // guru functions
    public function add_guru()
    {
        $mapel = MapelModel::all();
        return view('admin.add_guru', [
            'data_mapel' => $mapel
        ]);
    }

    public function store_guru(Request $request)
    {

        $this->validate($request, [
            'nama_guru' => 'required',
            'jk'        => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_mapel' => 'required',
            'nip' => 'required',
            'karpeg' => 'required',
            'nuptk' => 'required',
            'pangkat' => 'required',
            'tmt_golongan' => 'required',
            'tmt_guru' => 'required',
            'tmt_sekolah' => 'required',
            'pendidikan' => 'required',
            'mapel_ampu' => 'required',
            'sk' => 'required',
            'tanggal_sk' => 'required',

        ]);

        GuruModel::create([
            'nama' => $request->nama_guru,
            'jk'        => $request->jk,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d') : null,
            'id_mapel' => $request->nama_mapel,
            'nip' => $request->nip,
            'nomor_seri_karpeg' => $request->karpeg,
            'nuptk' => $request->nuptk,
            'pangkat' => $request->pangkat,
            'tmt_golongan' => $request->tmt_golongan ? Carbon::createFromFormat('m/d/Y', $request->tmt_golongan)->format('Y-m-d') : null,
            'tmt_guru' => $request->tmt_guru ? Carbon::createFromFormat('m/d/Y', $request->tmt_guru)->format('Y-m-d') : null,
            'tmt_sekolah' => $request->tmt_sekolah ? Carbon::createFromFormat('m/d/Y', $request->tmt_sekolah)->format('Y-m-d') : null,
            'pendidikan' => $request->pendidikan,
            'id_mapel' => $request->mapel_ampu,
            'nomor_sk_penugasan' => $request->sk,
            'program_keahlian' => $request->mapel_ampu,
            'tanggal_sk' => $request->tanggal_sk ? Carbon::createFromFormat('m/d/Y', $request->tanggal_sk)->format('Y-m-d') : null,
            'status' => 1, // 1 = aktif guru, 0 pensiun, 2 aktif kepala sekolah
        ]);

        $request->session()->flash('info', 'Guru Berhasil Ditambahkan!');
        return redirect('/admin/guru/list');
    }

    public function show_guru()
    {
        $guru = GuruModel::join('mapel', 'guru.id_mapel', '=', 'mapel.id_mapel')->get();
        return view('admin.list_guru', [
            'data' => $guru
        ]);
    }

    public function edit_guru($id)
    {
        $guru = GuruModel::find($id);
        $mapel = MapelModel::all();

        return view('admin.edit_guru', [
            'data' => $guru,
            'data_mapel' => $mapel
        ]);
    }

    public function update_guru($id, Request $request)
    {

        $this->validate($request, [
            'nama_guru' => 'required',
            'jk'        => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'nama_mapel' => 'required',
            'nip' => 'required',
            'karpeg' => 'required',
            'nuptk' => 'required',
            'pangkat' => 'required',
            'tmt_golongan' => 'required',
            'tmt_guru' => 'required',
            'tmt_sekolah' => 'required',
            'pendidikan' => 'required',
            'mapel_ampu' => 'required',
            'sk' => 'required',
            'tanggal_sk' => 'required',
        ]);

        $data             = GuruModel::find($id);
        $data->nama       = $request->nama_guru;
        $data->jk         = $request->jk;
        $data->tempat_lahir = $request->tempat_lahir;
        $data->tanggal_lahir = $request->tanggal_lahir ? Carbon::createFromFormat('m/d/Y', $request->tanggal_lahir)->format('Y-m-d') : null;
        $data->id_mapel   = $request->nama_mapel;
        $data->nip        = $request->nip;
        $data->nomor_seri_karpeg = $request->karpeg;
        $data->nuptk      = $request->nuptk;
        $data->pangkat    = $request->pangkat;
        $data->tmt_golongan = $request->tmt_golongan ? Carbon::createFromFormat('m/d/Y', $request->tmt_golongan)->format('Y-m-d') : null;
        $data->tmt_guru   = $request->tmt_guru ? Carbon::createFromFormat('m/d/Y', $request->tmt_guru)->format('Y-m-d') : null;
        $data->tmt_sekolah = $request->tmt_sekolah ? Carbon::createFromFormat('m/d/Y', $request->tmt_sekolah)->format('Y-m-d') : null;
        $data->pendidikan = $request->pendidikan;
        $data->id_mapel   = $request->mapel_ampu;
        $data->nomor_sk_penugasan = $request->sk;
        $data->program_keahlian = $request->mapel_ampu;
        $data->tanggal_sk = $request->tanggal_sk ? Carbon::createFromFormat('m/d/Y', $request->tanggal_sk)->format('Y-m-d') : null;
        $data->save();

        $request->session()->flash('info', 'Guru Berhasil Diubah!');
        return redirect('/admin/guru/list');
    }

    public function delete_guru($id)
    {
        $guru = GuruModel::find($id);
        $guru->delete();

        return redirect('/admin/guru/list')->with([
            'success' => 'Guru ' . $guru->nama_guru . ' Berhasil Dihapus!'
        ]);
    }

    public function generate_userpass_guru()
    {
        $guru = GuruModel::all();

        foreach ($guru as $key => $value) {
            if ($key < 1) continue;
            //dd($value);
            $user = User::where('id_guru', $value->id_guru)->first();
            if($user==null){
                $user = new User;
                $user->level='guru';
                $user->id_guru = $value->id_guru;
                $user->email = $value->nip;
                $user->active = 1;
                $user->password = bcrypt(123456);
                $user->save();
            }else if($user->level=="guru"){
                $user->email = $value->nip;
                $user->active = 1;
                $user->password=bcrypt(123456);
                $user->save();
            }
        }

        return redirect('/admin/guru/list')->with([
            'success' => 'User guru berhasil dibuat, Password default 123456'
        ]);
    }


    // kompetensi functions
    public function store_kompetensi(Request $request)
    {

        $this->validate($request, [
            'nama_kompetensi'  => 'required|max:255',
        ]);

        KompetensiModel::create([
            'nama_kompetensi'  => $request->nama_kompetensi,
        ]);

        $request->session()->flash('info', 'Kompetensi Berhasil Ditambahkan!');
        return redirect('/admin/kompetensi/list');
    }

    public function show_kompetensi()
    {
        $kompetensi = KompetensiModel::all();
        return view('admin.list_kompetensi', [
            'data' => $kompetensi
        ]);
    }

    public function edit_kompetensi($id)
    {
        $kompetensi = KompetensiModel::find($id);
        return view('admin.edit_kompetensi', [
            'data' => $kompetensi
        ]);
    }

    public function update_kompetensi($id, Request $request)
    {

        $this->validate($request, [
            'nama_kompetensi'  => 'required|max:255',
        ]);

        $data                   = KompetensiModel::find($id);
        $data->nama_kompetensi  = $request->nama_kompetensi;
        $data->save();

        $request->session()->flash('info', 'Kompetensi Berhasil Diubah!');
        return redirect('/admin/kompetensi/list');
    }

    public function delete_kompetensi($id)
    {
        $kompetensi = KompetensiModel::find($id);
        $kompetensi->delete();

        return redirect('/admin/kompetensi/list')->with([
            'success' => 'Kompetensi Berhasil Dihapus!'
        ]);
    }

    // indikator functions

    public function add_indikator()
    {
        $kompetensi = KompetensiModel::all();
        return view('admin.add_indikator', [
            'data_kompetensi' => $kompetensi
        ]);
    }

    public function store_indikator(Request $request)
    {

        $this->validate($request, [
            'nama_indikator'  => 'required',
            'nama_kompetensi'   => 'required',
        ]);

        IndikatorModel::create([
            'nama_indikator'  => $request->nama_indikator,
            'id_kompetensi'   => $request->nama_kompetensi,
        ]);

        $request->session()->flash('info', 'Indikator Berhasil Ditambahkan!');
        return redirect('/admin/indikator/list');
    }

    public function show_indikator()
    {
        // $indikator = IndikatorModel::all();
        $kompetensi = KompetensiModel::join('indikator', 'kode_kompetensi.id_kompetensi', '=', 'indikator.id_kompetensi')->get();
        return view('admin.list_indikator', [
            'data' => $kompetensi,
        ]);
    }

    public function edit_indikator($id)
    {
        $kompetensi = KompetensiModel::join('indikator', 'kode_kompetensi.id_kompetensi', '=', 'indikator.id_kompetensi')
            ->where('indikator.id_indikator', $id)
            ->first();
        $data_kompetensi = KompetensiModel::all();
        return view('admin.edit_indikator', [
            'data' => $kompetensi,
            'kompetensi' => $data_kompetensi
        ]);
    }

    public function update_indikator($id, Request $request)
    {

        $this->validate($request, [
            'nama_indikator'  => 'required',
            'nama_kompetensi'   => 'required',
        ]);

        $data                   = IndikatorModel::find($id);
        $data->nama_indikator   = $request->nama_indikator;
        $data->id_kompetensi    = $request->nama_kompetensi;
        $data->save();

        $request->session()->flash('info', 'Indikator Berhasil Diubah!');
        return redirect('/admin/indikator/list');
    }

    public function delete_indikator($id)
    {
        $indikator = IndikatorModel::find($id);
        $indikator->delete();

        return redirect('/admin/indikator/list')->with([
            'success' => 'Indikator Berhasil Dihapus!'
        ]);
    }

    // function respondensi

    public function store_responden(Request $request)
    {

        $this->validate($request, [
            'nama_respondensi'  => 'required|max:255',
        ]);

        RespondenModel::create([
            'nama_respondensi'  => $request->nama_respondensi,
        ]);

        $request->session()->flash('info', 'Kode Responden Berhasil Ditambahkan!');
        return redirect('/admin/responden/list');
    }

    public function show_responden()
    {
        $respondensi = RespondenModel::all();
        return view('admin.list_respondensi', [
            'data' => $respondensi
        ]);
    }

    public function edit_responden($id)
    {
        $respondensi = RespondenModel::find($id);
        return view('admin.edit_respondensi', [
            'data' => $respondensi
        ]);
    }

    public function update_responden($id, Request $request)
    {

        $this->validate($request, [
            'nama_respondensi'  => 'required|max:255',
        ]);

        $data                    = RespondenModel::find($id);
        $data->nama_respondensi  = $request->nama_respondensi;
        $data->save();

        $request->session()->flash('info', 'Kode Responden Berhasil Diubah!');
        return redirect('/admin/responden/list');
    }

    public function delete_responden($id)
    {
        $respondensi = RespondenModel::find($id);
        $respondensi->delete();

        return redirect('/admin/responden/list')->with([
            'success' => 'Kode Responden Berhasil Dihapus!'
        ]);
    }

    // function komponen
    public function add_komponen()
    {
        $responden = RespondenModel::all();
        return view('admin.add_komponen', [
            'data_responden' => $responden
        ]);
    }
    public function store_komponen(Request $request)
    {

        $this->validate($request, [
            'nama_komponen'  => 'required|max:255',
            'id_responden'  => 'required|max:255',
        ]);

        $let = new KomponenModel;
        $let->nama_komponen = $request->nama_komponen;
        $let->id_responden = $request->id_responden;
        $let->save();

        $request->session()->flash('info', 'Komponen Berhasil Ditambahkan!');
        return redirect('/admin/komponen/list');
    }

    public function show_komponen()
    {
        $komponen = KomponenModel::all();
        return view('admin.list_komponen', [
            'data' => $komponen
        ]);
    }

    public function edit_komponen($id)
    {
        $komponen = KomponenModel::find($id);
        return view('admin.edit_komponen', [
            'data' => $komponen
        ]);
    }

    public function update_komponen($id, Request $request)
    {

        $this->validate($request, [
            'nama_komponen'  => 'required|max:255',
        ]);

        $data                    = KomponenModel::find($id);
        $data->nama_komponen    = $request->nama_komponen;
        $data->save();

        $request->session()->flash('info', 'Komponen Berhasil Diubah!');
        return redirect('/admin/komponen/list');
    }

    public function delete_komponen($id)
    {
        $komponen = KomponenModel::find($id);
        $komponen->delete();

        return redirect('/admin/komponen/list')->with([
            'success' => 'Komponen Berhasil Dihapus!'
        ]);
    }

    // pernyataan

    public function add_pernyataan()
    {
        $komponen = KomponenModel::all();
        $respondensi = RespondenModel::all();
        return view('admin.add_pernyataan', [
            'data_komponen' => $komponen,
            'data_respondensi' => $respondensi
        ]);
    }

    public function store_pernyataan(Request $request)
    {

        $this->validate($request, [
            'nama_pernyataan'  => 'required',
            'nama_komponen'   => 'required',
            'nama_respondensi'  => 'required',
        ]);

        PernyataanModel::create([
            'nama_pernyataan'  => $request->nama_pernyataan,
            'id_komponen'   => $request->nama_komponen,
            'id_responden'  => $request->nama_respondensi,
        ]);

        $request->session()->flash('info', 'Pernyataan Berhasil Ditambahkan!');
        return redirect('/admin/pernyataan/list');
    }

    public function show_pernyataan()
    {
        // $pernyataan = PernyataanModel::all();
        $komponen = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')
            ->join('kode_respondensi', 'komponen_kuisioner.id_responden', '=', 'kode_respondensi.id_kode_respondensi')
            ->get();
        return view('admin.list_pernyataan', [
            'data' => $komponen,
        ]);
    }

    public function edit_pernyataan($id)
    {
        $komponen = KomponenModel::join('pernyataan_kuisioner', 'komponen_kuisioner.id_komponen', '=', 'pernyataan_kuisioner.id_komponen')
            ->where('pernyataan_kuisioner.id_pernyataan', $id)
            ->first();
        $data_komponen = KomponenModel::all();
        return view('admin.edit_pernyataan', [
            'data' => $komponen,
            'komponen' => $data_komponen
        ]);
    }

    public function update_pernyataan($id, Request $request)
    {

        $this->validate($request, [
            'nama_pernyataan'  => 'required|max:255',
            'nama_komponen'   => 'required',
        ]);

        $data                   = PernyataanModel::find($id);
        $data->nama_pernyataan   = $request->nama_pernyataan;
        $data->id_komponen    = $request->nama_komponen;
        $data->save();

        $request->session()->flash('info', 'Pernyataan Berhasil Diubah!');
        return redirect('/admin/pernyataan/list');
    }

    public function delete_pernyataan($id)
    {
        $pernyataan = PernyataanModel::find($id);
        $pernyataan->delete();

        return redirect('/admin/pernyataan/list')->with([
            'success' => 'Pernyataan Berhasil Dihapus!'
        ]);
    }

    // function kelas

    public function store_kelas(Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required|max:255',
        ]);

        KelasModel::create([
            'nama_kelas'  => $request->nama_kelas,
        ]);

        $request->session()->flash('info', 'Kelas Berhasil Ditambahkan!');
        return redirect('/admin/kelas/list');
    }

    public function show_kelas()
    {
        $kelas = KelasModel::all();
        return view('admin.list_kelas', [
            'data' => $kelas
        ]);
    }

    public function edit_kelas($id)
    {
        $kelas = KelasModel::find($id);
        return view('admin.edit_kelas', [
            'data' => $kelas
        ]);
    }

    public function update_kelas($id, Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required|max:255',
        ]);

        $data                = KelasModel::find($id);
        $data->nama_kelas    = $request->nama_kelas;
        $data->save();

        $request->session()->flash('info', 'Kelas Berhasil Diubah!');
        return redirect('/admin/kelas/list');
    }

    public function delete_kelas($id)
    {
        $kelas = KelasModel::find($id);
        $kelas->delete();

        return redirect('/admin/kelas/list')->with([
            'success' => 'Kelas Berhasil Dihapus!'
        ]);
    }

    // function mapel

    public function store_mapel(Request $request)
    {

        $this->validate($request, [
            'nama_mapel'  => 'required|max:255',
        ]);

        MapelModel::create([
            'nama_mapel'  => $request->nama_mapel,
        ]);

        $request->session()->flash('info', 'Mapel Berhasil Ditambahkan!');
        return redirect('/admin/mapel/list');
    }

    public function show_mapel()
    {
        $mapel = MapelModel::all();
        return view('admin.list_mapel', [
            'data' => $mapel
        ]);
    }

    public function edit_mapel($id)
    {
        $mapel = MapelModel::find($id);
        return view('admin.edit_mapel', [
            'data' => $mapel
        ]);
    }

    public function update_mapel($id, Request $request)
    {

        $this->validate($request, [
            'nama_mapel'  => 'required|max:255',
        ]);

        $data                = MapelModel::find($id);
        $data->nama_mapel    = $request->nama_mapel;
        $data->save();

        $request->session()->flash('info', 'Mapel Berhasil Diubah!');
        return redirect('/admin/mapel/list');
    }

    public function delete_mapel($id)
    {
        $mapel = MapelModel::find($id);
        $mapel->delete();

        return redirect('/admin/mapel/list')->with([
            'success' => 'Mapel Berhasil Dihapus!'
        ]);
    }

    // function kelas ajar

    public function store_kelas_ajar(Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required',
            'nama_guru'  => 'required',
        ]);

        foreach ($request->nama_guru as $key => $value) {
            Kelas_ajarModel::create([
                'id_kelas'  => $request->nama_kelas,
                'id_guru'  => $value,
            ]);
        }

        $request->session()->flash('info', 'Kelas Ajar Berhasil Ditambahkan!');
        return redirect('/admin/kelasajar/list');
    }

    public function show_kelas_ajar()
    {
        $kelas_ajar = KelasModel::all();
        return view('admin.list_kelas_ajar', [
            'data' => $kelas_ajar
        ]);
    }

    public function edit_kelas_ajar($id)
    {
        $kelas_ajar = Kelas_ajarModel::all();
        $guru_ajar = GuruModel::join('kelas_ajar', 'kelas_ajar.id_guru', '=', 'guru.id_guru')
            ->where('kelas_ajar.id_kelas', $id)
            ->get();
        $guru = GuruModel::leftjoin('mapel', 'mapel.id_mapel', '=', 'guru.id_mapel')
            ->get();
        $kelas = $id;

        return view('admin.edit_kelas_ajar', [
            'data' => $kelas_ajar,
            'guru' => $guru,
            'kelas' => $kelas,
            'guru_ajar' => $guru_ajar
        ]);
    }

    public function update_kelas_ajar($id, Request $request)
    {

        $this->validate($request, [
            'nama_kelas'  => 'required|max:255',
            'nama_guru'  => 'required|max:255',
        ]);

        $data             = Kelas_ajarModel::find($id);
        $data->id_kelas   = $request->nama_kelas;
        $data->id_guru    = $request->nama_guru;
        $data->save();

        $request->session()->flash('info', 'Kelas Ajar Berhasil Diubah!');
        return redirect('/admin/kelas_ajar/list');
    }

    public function delete_kelas_ajar($id)
    {
        $kelas_ajar = Kelas_ajarModel::find($id);
        $kelas_ajar->delete();

        return redirect('/admin/kelasajar/list')->with([
            'success' => 'Kelas Ajar Berhasil Dihapus!'
        ]);
    }

    // function penilai

    public function add_penilai()
    {
        $guru = GuruModel::join('mapel', 'guru.id_mapel', '=', 'mapel.id_mapel')->get();
        return view('admin.add_penilai', [
            'guru' => $guru
        ]);
    }

    public function store_penilai(Request $request)
    {

        $this->validate($request, [
            'nama_penilai'  => 'required',
            'nama_guru'  => 'required',
            'nomor_sk_penugasan' => 'required',
            'tanggal_sk_penugasan' => 'required',
            'tanggal_berlaku_sk_penugasan' => 'required',
            'tahun_penilaian' => 'required',
            // 'status_formatif' => 'required',
            // 'status_sumatif' => 'required',
            'tanggal_penilaian' => 'required',
            'periode_penilaian_awal' => 'required',
            'periode_penilaian_akhir' => 'required',
        ]);

        PenilaiModel::create([
            'id_guru'  => $request->nama_guru,
            'id_guru_penilai' => $request->nama_penilai,
            'nomor_sk_penugasan_penilai' => $request->nomor_sk_penugasan,
            'tanggal_sk_penilai' => $request->tanggal_sk_penugasan ? Carbon::createFromFormat('m/d/Y', $request->tanggal_sk_penugasan)->format('Y-m-d') : null,
            'tanggal_berlaku_sk' => $request->tanggal_berlaku_sk_penugasan ? Carbon::createFromFormat('m/d/Y', $request->tanggal_berlaku_sk_penugasan)->format('Y-m-d') : null,
            'tahun_penilaian' => $request->tahun_penilaian,
            'status_formatif' => 1,
            'status_sumatif' => 1,
            'tanggal_penilaian' => $request->tanggal_penilaian ? Carbon::createFromFormat('m/d/Y', $request->tanggal_penilaian)->format('Y-m-d') : null,
            'periode_penilaian_awal' => $request->periode_penilaian_awal ? Carbon::createFromFormat('m/d/Y', $request->periode_penilaian_awal)->format('Y-m-d') : null,
            'periode_penilaian_akhir' => $request->periode_penilaian_akhir ? Carbon::createFromFormat('m/d/Y', $request->periode_penilaian_akhir)->format('Y-m-d') : null,
        ]);
        $userpenilai = User::where(['id_guru' => $request->nama_penilai])->first();
        $userpenilai->level = "penilai";
        $userpenilai->save();
        $request->session()->flash('info', 'Penilai Berhasil Ditambahkan!');
        return redirect('/admin/penilai/list');
    }

    public function show_penilai()
    {
        $penilai = PenilaiModel::select('penilai.id_penilai', 'guru1.nama as guru_penilai', 'guru2.nama as guru')
            ->join('guru as guru1', 'penilai.id_guru_penilai', '=', 'guru1.id_guru')
            ->join('guru as guru2', 'penilai.id_guru', '=', 'guru2.id_guru')
            ->get();
        return view('admin.list_penilai', [
            'penilai' => $penilai,
        ]);
    }

    public function edit_penilai($id)
    {
        $penilai = PenilaiModel::find($id);
        $guru = GuruModel::join('mapel', 'guru.id_mapel', '=', 'mapel.id_mapel')->get();
        return view('admin.edit_penilai', [
            'data' => $penilai, 'guru' => $guru
        ]);
    }

    public function update_penilai($id, Request $request)
    {

        $this->validate($request, [
            'nomor_sk_penugasan' => 'required',
            'tanggal_sk_penugasan' => 'required',
            'tanggal_berlaku_sk_penugasan' => 'required',
            'tahun_penilaian' => 'required',
            'tanggal_penilaian' => 'required',
            'periode_penilaian_awal' => 'required',
            'periode_penilaian_akhir' => 'required',
        ]);

        $data = PenilaiModel::find($id);
        $data->nomor_sk_penugasan_penilai = $request->nomor_sk_penugasan;
        $data->tanggal_sk_penilai = $request->tanggal_sk_penugasan ? Carbon::createFromFormat('m/d/Y', $request->tanggal_sk_penugasan)->format('Y-m-d') : null;
        $data->tanggal_berlaku_sk = $request->tanggal_berlaku_sk_penugasan ? Carbon::createFromFormat('m/d/Y', $request->tanggal_berlaku_sk_penugasan)->format('Y-m-d') : null;
        $data->tahun_penilaian = $request->tahun_penilaian;
        $data->tanggal_penilaian = $request->tanggal_penilaian ? Carbon::createFromFormat('m/d/Y', $request->tanggal_penilaian)->format('Y-m-d') : null;
        $data->periode_penilaian_awal = $request->periode_penilaian_awal ? Carbon::createFromFormat('m/d/Y', $request->periode_penilaian_awal)->format('Y-m-d') : null;
        $data->periode_penilaian_akhir = $request->periode_penilaian_akhir ? Carbon::createFromFormat('m/d/Y', $request->periode_penilaian_akhir)->format('Y-m-d') : null;
        $data->save();

        $request->session()->flash('info', 'Penilai Berhasil Diubah!');
        return redirect('/admin/penilai/list');
    }

    public function delete_penilai($id)
    {
        $penilai = PenilaiModel::find($id);
        $penilai->delete();

        return redirect('/admin/penilai/list')->with([
            'success' => 'Penilai Berhasil Dihapus!'
        ]);
    }
    public function crs($idguru)
    { //
        $target = GuruModel::find($idguru);
        //dd($target);
        $siswas = [];
        $mapels = MapelModel::all();
        if (DataResponden::where(["id_guru" => $idguru])->count() > 0) {
            $siswas = DataResponden::where(["id_guru" => $idguru, "id_responden" => 2])
                ->join("siswa", 'siswa.id_siswa', '=', 'data_responden.id_penilai')
                ->join("kelas", 'kelas.id_kelas', '=', 'siswa.id_kelas')
                ->get();
            //return view('admin.print_out_siswa_ext', [
            //    'data' => $siswas
            //]);
            $pdf = PDF::loadView('admin.print_out_siswa_ext', [
                'data' => $siswas,
            ])->setOptions(['defaultFont' => 'sans-serif']);
            // Storage::put('public/pdf/'.$data_guru->nama.'.pdf', $pdf->output());
            return $pdf->setPaper('letter')->download("Lampiran Responden Siswa - $target->nama.pdf");
        }
        $kelas_ajars = Kelas_ajarModel::where(["id_guru" => $target->id_guru])->get();
        foreach ($kelas_ajars as $val) {
            $random_siswa = SiswaModel::where(["siswa.id_kelas" => $val->id_kelas])
                ->orderByRaw('RAND()')
                ->join("kelas", 'kelas.id_kelas', '=', 'siswa.id_kelas')
                ->limit(5)->get();
            if ($random_siswa == null || count($random_siswa) == 0) continue;
            foreach ($random_siswa as $siswa) {
                dd($siswa->id_siswa);
                $dr = new DataResponden();
                $dr->id_penilai = $siswa->id_siswa;
                $dr->id_responden = 2;
                $dr->id_guru = $target->id_guru;
                $dr->save();
                $dr1 = new DataResponden();
                $dr1->id_penilai = $siswa->id_siswa;
                $dr1->id_responden = 3;
                $dr1->id_guru = $target->id_guru;
                $dr1->save();
                User::updateOrCreate(
                    [
                        'email' => $siswa->nis,
                    ],
                    [
                        'level' => 'siswa',
                        'id_siswa' => $siswa->id_siswa,
                        'password' => bcrypt(123456),
                        'active'    => 1
                    ]
                );
                User::updateOrCreate(
                    [
                        'email' => "wali_" . $siswa->nis,
                    ],
                    [
                        'level' => 'wali',
                        'id_siswa' => $siswa->id_siswa,
                        'password' => bcrypt(123456),
                        'active'    => 1
                    ]
                );
                $siswas[] = $siswa;
            }
        }
        if (count($siswas) > 0) {
            foreach ($mapels as $val) {
                $random_guru = GuruModel::where(["guru.id_mapel" => $val->id_mapel])
                    ->orderByRaw('RAND()')
                    ->first();
                if ($random_guru == null) continue;
                $dr = new DataResponden();
                $dr->id_penilai = $random_guru->id_guru;
                $dr->id_responden = 1;
                $dr->id_guru = $target->id_guru;
                $dr->save();
            }
            Session::flash('success', count($siswas).' akun Siswa dan Wali Berhasil Ditambahkan dengan Password 123456!');
        }else{
            Session::flash('danger', 'Tidak ditemukan Siswa ajar untuk guru ini!');
        }
        return view('admin.print_out_siswa', [
            'data' => $siswas
        ]);
    }
}
