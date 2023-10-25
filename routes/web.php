<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\GuruImport;
use App\Models\GuruModel;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [Auth\AuthController::class, 'index'])->name('login');
Route::post('/auth', [Auth\AuthController::class, 'login'])->name('auth_login');
Route::get('/logout', [Auth\AuthController::class, 'logout'])->name('logout');

//error
Route::view('/error_401', 'error.401')->name('error_401');

//level admin
Route::middleware('auth', 'validatelevels:admin')->group(function () {
    //get method
    Route::get('/admin/dashboard', [Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::view('admin/users/add', 'admin.add_user')->name('add_users');
    Route::get('/admin/users/list', [Admin\ManagementController::class, 'show'])->name('list_users');
    Route::get('/admin/users/edit/{id}', [Admin\ManagementController::class, 'edit'])->name('edit_users');
    Route::get('/admin/users/hapus/{id}', [Admin\ManagementController::class, 'delete'])->name('hapus_users');

    Route::get('admin/siswa/add', [Admin\ManagementController::class, 'add_siswa'])->name('add_siswa');
    Route::get('/admin/siswa/list', [Admin\ManagementController::class, 'show_siswa'])->name('list_siswa');
    Route::get('/admin/siswa/edit/{id}', [Admin\ManagementController::class, 'edit_siswa'])->name('edit_siswa');
    Route::get('/admin/siswa/hapus/{id}', [Admin\ManagementController::class, 'delete_siswa'])->name('hapus_siswa');

    Route::get('admin/guru/add', [Admin\ManagementController::class, 'add_guru'])->name('add_guru');
    Route::get('/admin/guru/list', [Admin\ManagementController::class, 'show_guru'])->name('list_guru');
    Route::get('/admin/guru/edit/{id}', [Admin\ManagementController::class, 'edit_guru'])->name('edit_guru');
    Route::get('/admin/guru/hapus/{id}', [Admin\ManagementController::class, 'delete_guru'])->name('hapus_guru');
    
    Route::view('admin/kompetensi/add', 'admin.add_kompetensi')->name('add_kompetensi');
    Route::get('/admin/kompetensi/list', [Admin\ManagementController::class, 'show_kompetensi'])->name('list_kompetensi');
    Route::get('/admin/kompetensi/edit/{id}', [Admin\ManagementController::class, 'edit_kompetensi'])->name('edit_kompetensi');
    Route::get('/admin/kompetensi/hapus/{id}', [Admin\ManagementController::class, 'delete_kompetensi'])->name('hapus_kompetensi');
 
    Route::get('admin/indikator/add', [Admin\ManagementController::class, 'add_indikator'])->name('add_indikator');
    Route::get('/admin/indikator/list', [Admin\ManagementController::class, 'show_indikator'])->name('list_indikator');
    Route::get('/admin/indikator/edit/{id}', [Admin\ManagementController::class, 'edit_indikator'])->name('edit_indikator');
    Route::get('/admin/indikator/hapus/{id}', [Admin\ManagementController::class, 'delete_indikator'])->name('hapus_indikator');

    Route::view('admin/responden/add', 'admin.add_respondensi')->name('add_responden');
    Route::get('/admin/responden/list', [Admin\ManagementController::class, 'show_responden'])->name('list_responden');
    Route::get('/admin/responden/edit/{id}', [Admin\ManagementController::class, 'edit_responden'])->name('edit_responden');
    Route::get('/admin/responden/hapus/{id}', [Admin\ManagementController::class, 'delete_responden'])->name('hapus_responden');

    Route::get('admin/komponen/add', [Admin\ManagementController::class, 'add_komponen'])->name('add_komponen');
    Route::get('/admin/komponen/list', [Admin\ManagementController::class, 'show_komponen'])->name('list_komponen');
    Route::get('/admin/komponen/edit/{id}', [Admin\ManagementController::class, 'edit_komponen'])->name('edit_komponen');
    Route::get('/admin/komponen/hapus/{id}', [Admin\ManagementController::class, 'delete_komponen'])->name('hapus_komponen');

    Route::get('admin/pernyataan/add', [Admin\ManagementController::class, 'add_pernyataan'])->name('add_pernyataan');
    Route::get('/admin/pernyataan/list', [Admin\ManagementController::class, 'show_pernyataan'])->name('list_pernyataan');
    Route::get('/admin/pernyataan/edit/{id}', [Admin\ManagementController::class, 'edit_pernyataan'])->name('edit_pernyataan');
    Route::get('/admin/pernyataan/hapus/{id}', [Admin\ManagementController::class, 'delete_pernyataan'])->name('hapus_pernyataan');

    Route::view('admin/mapel/add', 'admin.add_mapel')->name('add_mapel');
    Route::get('/admin/mapel/list', [Admin\ManagementController::class, 'show_mapel'])->name('list_mapel');
    Route::get('/admin/mapel/edit/{id}', [Admin\ManagementController::class, 'edit_mapel'])->name('edit_mapel');
    Route::get('/admin/mapel/hapus/{id}', [Admin\ManagementController::class, 'delete_mapel'])->name('hapus_mapel');

    Route::view('admin/kelas/add', 'admin.add_kelas')->name('add_kelas');
    Route::get('/admin/kelas/list', [Admin\ManagementController::class, 'show_kelas'])->name('list_kelas');
    Route::get('/admin/kelas/edit/{id}', [Admin\ManagementController::class, 'edit_kelas'])->name('edit_kelas');
    Route::get('/admin/kelas/hapus/{id}', [Admin\ManagementController::class, 'delete_kelas'])->name('hapus_kelas');

    Route::get('admin/kelasajar/add', [Admin\ManagementController::class, 'add_kelas_ajar'])->name('add_kelas_ajar');
    Route::get('/admin/kelasajar/list', [Admin\ManagementController::class, 'show_kelas_ajar'])->name('list_kelas_ajar');
    Route::get('/admin/kelasajar/edit/{id}', [Admin\ManagementController::class, 'edit_kelas_ajar'])->name('edit_kelas_ajar');
    Route::get('/admin/kelasajar/hapus/{id}', [Admin\ManagementController::class, 'delete_kelas_ajar'])->name('hapus_kelas_ajar');

    Route::get('admin/penilai/add', [Admin\ManagementController::class, 'add_penilai'])->name('add_penilai');
    Route::get('/admin/penilai/list', [Admin\ManagementController::class, 'show_penilai'])->name('list_penilai');
    Route::get('/admin/penilai/edit/{id}', [Admin\ManagementController::class, 'edit_penilai'])->name('edit_penilai');
    Route::get('/admin/penilai/hapus/{id}', [Admin\ManagementController::class, 'delete_penilai'])->name('hapus_penilai');

    //post method
    Route::post('/admin/users/store', [Admin\ManagementController::class, 'store'])->name('store_users');
    Route::post('/admin/siswa/store', [Admin\ManagementController::class, 'store_siswa'])->name('store_siswa');
    Route::post('/admin/guru/store', [Admin\ManagementController::class, 'store_guru'])->name('store_guru');
    Route::post('/admin/kompetensi/store', [Admin\ManagementController::class, 'store_kompetensi'])->name('store_kompetensi');
    Route::post('/admin/indikator/store', [Admin\ManagementController::class, 'store_indikator'])->name('store_indikator');
    Route::post('/admin/responden/store', [Admin\ManagementController::class, 'store_responden'])->name('store_responden');
    Route::post('/admin/komponen/store', [Admin\ManagementController::class, 'store_komponen'])->name('store_komponen');
    Route::post('/admin/pernyataan/store', [Admin\ManagementController::class, 'store_pernyataan'])->name('store_pernyataan');
    Route::post('/admin/mapel/store', [Admin\ManagementController::class, 'store_mapel'])->name('store_mapel');
    Route::post('/admin/kelas/store', [Admin\ManagementController::class, 'store_kelas'])->name('store_kelas');
    Route::post('/admin/kelasajar/store', [Admin\ManagementController::class, 'store_kelas_ajar'])->name('store_kelas_ajar');
    Route::post('/admin/penilai/store', [Admin\ManagementController::class, 'store_penilai'])->name('store_penilai');

    
    //import method
    Route::post('/admin/guru/import', function () {
        Excel::import(new GuruImport, request()->file('file'));
        return back();
    });

    //generate method
    Route::get('/admin/guru/generate', [Admin\ManagementController::class, 'generate_userpass_guru'])->name('generate_userpass_guru');
    Route::get('/admin/siswa/generate', [Admin\ManagementController::class, 'generate_userpass_siswa'])->name('generate_userpass_siswa');

    //put method
    Route::put('/admin/users/update/{id}', [Admin\ManagementController::class, 'update'])->name('update_users');
    Route::put('/admin/siswa/update/{id}', [Admin\ManagementController::class, 'update_siswa'])->name('update_siswa');
    Route::put('/admin/guru/update/{id}', [Admin\ManagementController::class, 'update_guru'])->name('update_guru');
    Route::put('/admin/kompetensi/update/{id}', [Admin\ManagementController::class, 'update_kompetensi'])->name('update_kompetensi');
    Route::put('/admin/indikator/update/{id}', [Admin\ManagementController::class, 'update_indikator'])->name('update_indikator');
    Route::put('/admin/responden/update/{id}', [Admin\ManagementController::class, 'update_responden'])->name('update_responden');
    Route::put('/admin/komponen/update/{id}', [Admin\ManagementController::class, 'update_komponen'])->name('update_komponen');
    Route::put('/admin/pernyataan/update/{id}', [Admin\ManagementController::class, 'update_pernyataan'])->name('update_pernyataan');
    Route::put('/admin/mapel/update/{id}', [Admin\ManagementController::class, 'update_mapel'])->name('update_mapel');
    Route::put('/admin/penilai/update/{id}', [Admin\ManagementController::class, 'update_penilai'])->name('update_penilai');
    Route::put('/admin/kelas/update/{id}', [Admin\ManagementController::class, 'update_kelas'])->name('update_kelas');
    Route::put('/admin/kelasajar/update/{id}', [Admin\ManagementController::class, 'update_kelas_ajar'])->name('update_kelas_ajar');


    Route::get('/admin/crs/{i}', [Admin\ManagementController::class, 'crs'])->name('cluster_random_sample');


});

//level guru
Route::middleware('auth', 'validatelevels:guru')->group(function () {
    //get method
    Route::get('/guru/dashboard', [Guru\ManagementController::class, 'list_penilaian'])->name('daftar_penilaian_guru');
    Route::get('/guru/penilaian/cetak', [Guru\ManagementController::class, 'laporan_akhir'])->name('laporan_akhir_guru');
    Route::get('/guru/penilaian/{id}', [Guru\ManagementController::class, 'penilaian'])->name('repondensi_guru');
    //post method
    Route::post('/guru/penilaian/store', [Guru\ManagementController::class, 'store_nilai_penilaian'])->name('store_nilai_repondensi_guru');
    Route::get('/guru/penilaian/print1c/{id}', [Guru\ManagementController::class, 'print_laporan_akhir'])->name('print_laporan_akhir_guru_1c');
    Route::get('/guru/penilaian/print1d/{id}', [Guru\ManagementController::class, 'print_laporan_akhir_1d'])->name('print_laporan_akhir_guru_1d');

});

//level penilai
Route::middleware('auth', 'validatelevels:penilai')->group(function () {
    //get method
    Route::get('/penilai/dashboard', [Penilai\ManagementController::class, 'list_penilaian'])->name('daftar_penilaian');
    Route::get('/penilai/penilaian/guru/{id}', [Penilai\ManagementController::class, 'penilaian'])->name('penilaian');
    Route::get('/penilai/penilaian/guru/{id}/{kompetensi}', [Penilai\ManagementController::class, 'penilaian_guru'])->name('penilaian_guru');
    //post method
    Route::post('/penilai/penilaian/store', [Penilai\ManagementController::class, 'store_nilai_penilaian_guru'])->name('store_nilai_penilaian_guru');
});

//level siswa
Route::middleware('auth', 'validatelevels:siswa')->group(function () {
    //get method
    Route::get('/siswa/dashboard', [Siswa\ManagementController::class, 'list_penilaian'])->name('daftar_penilaian_siswa');
    Route::get('/siswa/penilaian/{id}', [Siswa\ManagementController::class, 'penilaian'])->name('penilaian_siswa');
    //post method
    Route::post('/siswa/penilaian/store', [Siswa\ManagementController::class, 'store_nilai_penilaian'])->name('store_nilai_penilaian_siswa');
});

//level orang tua
Route::middleware('auth', 'validatelevels:wali')->group(function () {
    //get method
    Route::get('/wali/dashboard', [Wali\ManagementController::class, 'list_penilaian'])->name('daftar_penilaian_wali');
    Route::get('/wali/penilaian/{id}', [Wali\ManagementController::class, 'penilaian'])->name('penilaian_wali');
    //post method
    Route::post('/wali/penilaian/store', [Wali\ManagementController::class, 'store_nilai_penilaian'])->name('store_nilai_penilaian_wali');
});
