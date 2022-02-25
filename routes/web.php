<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\TestController;
use App\Models\Test;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('/auth.login');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/base', function () {
    return view('base');
});

Route::get('/bases', function () {
    return view('dashboard');
});

Route::get('/dashboard', function () {
    return view('bases');
});
// ->middleware(['auth'])->name('dashboard');

Route::get('/dashboard1', function () {
    return view('dashboard1');
});

// Route::get('/permohonan_sebutharga', function () {
//     return view('permohonan_sebutharga');
// });
Route::get('/s', [ProductController::class, 'index']);  
Route::get('cart', [ProductController::class, 'cart'])->name('cart');
Route::get('add-to-cart/{id}', [ProductController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-cart', [ProductController::class, 'update'])->name('update.cart');
Route::delete('remove-from-cart', [ProductController::class, 'remove'])->name('remove.from.cart');

Route::resource('/berita','App\Http\Controllers\BeritaController'::class);
// Route::resource('/pesanan','App\Http\Controllers\PesananController'::class);

Route::resource('/permohonan_sebutharga_dalaman','App\Http\Controllers\PermohonanSebuthargaDalamanController'::class);

Route::get('/search','App\Http\Controllers\PesananController@search');


Route::resource('/spp_pusat_khidmat_servis','App\Http\Controllers\SppPusatKhidmatServisController'::class);
Route::post('/spp_pusat_khidmat_servis/create','App\Http\Controllers\SppPusatKhidmatServisController@create'::class);
Route::post('/spp_pusat_khidmat_servis_store','App\Http\Controllers\SppPusatKhidmatServisController@store'::class);
Route::post('kategori_servis','App\Http\Controllers\SppPusatKhidmatServisController@getKodKategoriServis');
Route::get('/spp_pusat_khidmat_servis/delete/{id}','App\Http\Controllers\SppPusatKhidmatServisController@destroy');

Route::get('carts', [SppPusatKhidmatServisController::class, 'cart'])->name('cart');
Route::get('add-to-carts/{id}', [SppPusatKhidmatServisController::class, 'addToCart'])->name('add.to.cart');
Route::patch('update-carts', [SppPusatKhidmatServisController::class, 'updateC'])->name('update.cart');
Route::delete('remove-from-carts  ', [SppPusatKhidmatServisController::class, 'remove'])->name('remove.from.cart');



Route::resource('/permohonan_sebutharga_luaran','App\Http\Controllers\PermohonanSebuthargaLuaranController'::class);
Route::post('pusat_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getPusatPerkhidmatan');
Route::post('jenis_perkhidmatan','App\Http\Controllers\PermohonanSebuthargaLuaranController@getJenisPerkhidmatan');
Route::post('pusat_perkhidmatan_servis','App\Http\Controllers\SppPusatKhidmatServisController@getPusatPerkhidmatanServis');

Route::resource('/spp_profil_harga_servis','App\Http\Controllers\SppProfilHargaServisController'::class);
// Route::post('/spp_profil_harga_servis/create','App\Http\Controllers\SppProfilHargaServisController@create'::class);
// Route::post('/spp_profil_harga_servis_store','App\Http\Controllers\SppProfilHargaServisController@store'::class);

Route::resource('/spp_profil_syarikat','App\Http\Controllers\SppProfilSyarikatController'::class);
Route::post('daerah','App\Http\Controllers\SppProfilSyarikatController@getDaerah');
Route::post('kod_syarikat','App\Http\Controllers\SppProfilSyarikatController@getKodKatSyarikat');
Route::post('carian_syarikat','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');

Route::resource('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController'::class);
// Route::get('syarikat_carian','App\Http\Controllers\SppProfilSyarikatController@getSyarikat');
// Route::get('/spp_pusat_khidmat','App\Http\Controllers\SppPusatKhidmatController@index');

Route::resource('/kod_bank','App\Http\Controllers\KodBankController'::class);
Route::delete('bank_DeleteAll', 'App\Http\Controllers\KodBankController@deleteAll');


Route::resource('/kod_status_syarikat','App\Http\Controllers\KodStatusSyarikatController'::class);


Route::resource('/kod_bayaran','App\Http\Controllers\KodBayaranController'::class);
Route::delete('bayaran_DeleteAll', 'App\Http\Controllers\KodBayaranController@deleteAll');

Route::resource('/kod_negeri','App\Http\Controllers\KodNegeriController'::class);

Route::resource('/kod_kategori_servis','App\Http\Controllers\KodKategoriServisController'::class);
Route::post('/kategori_proses_template','App\Http\Controllers\KodKategoriServisController@getProsesTemplate'::class);
Route::post('/detail_proses','App\Http\Controllers\KodKategoriServisController@getDetailProses'::class);
Route::delete('kod_kategori_DeleteAll', 'App\Http\Controllers\KodKategoriServisController@deleteAll');


Route::resource('/kod_daerah','App\Http\Controllers\KodDaerahController'::class);
Route::post('/idNegSel','App\Http\Controllers\KodDaerahController@getNegeri');
Route::delete('kod_daerah_DeleteAll', 'App\Http\Controllers\KodDaerahController@deleteAll');


Route::resource('/kod_sijil_iso','App\Http\Controllers\KodSijilIsoController'::class);

Route::resource('/kod_status_syarikat','App\Http\Controllers\KodStatusSyarikatController'::class);

Route::resource('/template_perjanjian_main','App\Http\Controllers\TemplatePerjanjianMainController'::class);
Route::delete('template_perjanjian_DeleteAll', 'App\Http\Controllers\TemplatePerjanjianMainController@deleteAll');
Route::post('/template_detail','App\Http\Controllers\TemplatePerjanjianMainController@getDetailTemplate');

Route::delete('template_perjanjian_D_DeleteAll', 'App\Http\Controllers\TemplatePerjanjianDetailController@deleteAll');
Route::resource('/template_perjanjian_detail','App\Http\Controllers\TemplatePerjanjianDetailController'::class);

Route::resource('/spp_proses_template_detail','App\Http\Controllers\SppProsesTemplateDetailController'::class);

Route::resource('/spp_proses_template_sijil','App\Http\Controllers\SppProsesTemplateSijilController'::class);

Route::resource('/spp_proses_template_sijil_detail','App\Http\Controllers\SppProsesTemplateSijilDetailController'::class);
Route::post('/spp_proses_template_sijil_detail_index','App\Http\Controllers\SppProsesTemplateSijilDetailController@index');

Route::resource('/sw_menu_main','App\Http\Controllers\SwMenuMainController'::class);
Route::delete('menu_DeleteAll', 'App\Http\Controllers\SwMenuMainController@deleteAll');

Route::resource('/sw_menu_detail','App\Http\Controllers\SwMenuDetailController'::class);
Route::delete('delete1/{id}', 'App\Http\Controllers\SwMenuDetailController@destroy');
Route::delete('sw_mm_DeleteAll', 'App\Http\Controllers\SwMenuDetailController@deleteAll');

Route::resource('/psm_biodata','App\Http\Controllers\PsmBiodataController'::class);
Route::post('carian_kakitangan','App\Http\Controllers\PsmBiodataController@getKakitangan');

Route::resource('/spp_pelanggan_syarikat','App\Http\Controllers\SppPelangganSyarikatController'::class);
Route::post('carian_pelanggan','App\Http\Controllers\SppPelangganSyarikatController@getPelanggan');
Route::post('carian_pelanggan_tambah','App\Http\Controllers\SppPelangganSyarikatController@getPelangganTambah');

// Route::get('/jualan/pesanan/jana_invois','App\Http\Controllers\JualanInvoisController@jana_invois');


Route::get('/jualan/permohonan_sebutharga/permohonan_sebutharga','App\Http\Controllers\JualanPermohonanSebuthargaController@permohonan_sebutharga');
Route::get('/jualan/pesanan/jana_pesanan','App\Http\Controllers\JualanPesananController@jana_pesanan');
Route::get('/jualan/pesanan/kelulusan_pesanan','App\Http\Controllers\JualanPesananController@kelulusan_pesanan');
Route::get('/jualan/pesanan/pesanan_berjadual_perjanjian','App\Http\Controllers\JualanPesananController@pesanan_berjadual_perjanjian');
Route::get('/jualan/pesanan/kelulusan_pesanan_berjadual','App\Http\Controllers\JualanPesananController@kelulusan_pesanan_berjadual');
Route::get('/jualan/pesanan/senarai_pesanan','App\Http\Controllers\JualanPesananController@senarai_pesanan');
Route::get('/jualan/pesanan/jana_pro_forma','App\Http\Controllers\JualanPesananController@jana_pro_forma');
Route::get('/jualan/pesanan/senarai_pro_forma','App\Http\Controllers\JualanPesananController@senarai_pro_forma');
Route::get('/jualan/pesanan/laporan_pro_forma','App\Http\Controllers\JualanPesananController@laporan_pro_forma');
Route::get('/jualan/pesanan/pro_forma_invois','App\Http\Controllers\JualanPesananController@pro_forma_invois');
Route::get('/jualan/pesanan/pro_forma_tiada_invois','App\Http\Controllers\JualanPesananController@pro_forma_tiada_invois');
Route::get('/jualan/sebutharga/sebutharga_rfq','App\Http\Controllers\JualanSebuthargaController@sebutharga_rfq');
Route::get('/jualan/sebutharga/sebutharga','App\Http\Controllers\JualanSebuthargaController@sebutharga');
Route::get('/jualan/sebutharga/senarai_sebutharga','App\Http\Controllers\JualanSebuthargaController@senarai_sebutharga');
Route::get('/jualan/sebutharga/kelulusan','App\Http\Controllers\JualanSebuthargaController@kelulusan');
Route::get('/jualan/sebutharga/sebutharga_lama','App\Http\Controllers\JualanSebuthargaController@sebutharga_lama');

Route::get('/jualan/kad_kerja/jana_kad_kerja','App\Http\Controllers\JualanKadKerjaController@jana_kad_kerja');
Route::get('/jualan/kad_kerja/kad_kerja_masuk','App\Http\Controllers\JualanKadKerjaController@kad_kerja_masuk');
Route::get('/jualan/kad_kerja/irradiation','App\Http\Controllers\JualanKadKerjaController@irradiation');
Route::get('/jualan/kad_kerja/calibration','App\Http\Controllers\JualanKadKerjaController@calibration');
Route::get('/jualan/kad_kerja/external','App\Http\Controllers\JualanKadKerjaController@external');
Route::get('/jualan/kad_kerja/fabrication','App\Http\Controllers\JualanKadKerjaController@fabrication');
Route::get('/jualan/kad_kerja/personal_dosimeter','App\Http\Controllers\JualanKadKerjaController@personal_dosimeter');
Route::get('/jualan/kad_kerja/production','App\Http\Controllers\JualanKadKerjaController@production');
Route::get('/jualan/kad_kerja/repair','App\Http\Controllers\JualanKadKerjaController@repair');
Route::get('/jualan/kad_kerja/testing','App\Http\Controllers\JualanKadKerjaController@testing');
Route::get('/jualan/kad_kerja/perkhidmatan_sewa','App\Http\Controllers\JualanKadKerjaController@perkhidmatan_sewa');

Route::get('/jualan/kod/kod_notifikasi','App\Http\Controllers\JualanKodController@kod_notifikasi');
Route::get('/jualan/kod/servis_pusat_khidmat','App\Http\Controllers\JualanKodController@servis_pusat_khidmat');
Route::get('/jualan/kod/profil_harga','App\Http\Controllers\JualanKodController@profil_harga');
Route::get('/jualan/kod/profil_kakitangan','App\Http\Controllers\JualanKodController@profil_kakitangan');
Route::get('/jualan/kod/profil_syarikat','App\Http\Controllers\JualanKodController@profil_syarikat');
Route::get('/jualan/kod/pelanggan','App\Http\Controllers\JualanKodController@pelanggan');
Route::get('/jualan/kod/pelanggan_aktif','App\Http\Controllers\JualanKodController@pelanggan_aktif');
Route::get('/jualan/kod/pembekal','App\Http\Controllers\JualanKodController@pembekal');
Route::get('/jualan/kod/kod_bank','App\Http\Controllers\JualanKodController@kod_bank');
Route::get('/jualan/kod/kod_bayaran','App\Http\Controllers\JualanKodController@kod_bayaran');
Route::get('/jualan/kod/kod_pusat_khidmat','App\Http\Controllers\JualanKodController@kod_pusat_khidmat');
Route::get('/jualan/kod/kod_iso','App\Http\Controllers\JualanKodController@kod_iso');
Route::get('/jualan/kod/kod_status_syarikat','App\Http\Controllers\JualanKodController@kod_status_syarikat');
Route::get('/jualan/kod/kod_negeri','App\Http\Controllers\JualanKodController@kod_negeri');
Route::get('/jualan/kod/kod_daerah','App\Http\Controllers\JualanKodController@kod_daerah');
Route::get('/jualan/kod/kod_proses','App\Http\Controllers\JualanKodController@kod_proses');
Route::get('/jualan/kod/kod_proses_config','App\Http\Controllers\JualanKodController@kod_proses_config');
Route::get('/jualan/kod/setup_format_sijil','App\Http\Controllers\JualanKodController@setup_format_sijil');
Route::get('/jualan/kod/kod_template_sijil','App\Http\Controllers\JualanKodController@kod_template_sijil');
Route::get('/jualan/kod/semak_stok','App\Http\Controllers\JualanKodController@semak_stok');
Route::get('/jualan/kod/daftar_alat','App\Http\Controllers\JualanKodController@daftar_alat');
Route::get('/jualan/kod/batal_transaksi','App\Http\Controllers\JualanKodController@batal_transaksi');
Route::get('/jualan/kod/kod_notifikasi_abt','App\Http\Controllers\JualanKodController@kod_notifikasi_abt');
Route::get('/jualan/kod/tukar_staf','App\Http\Controllers\JualanKodController@tukar_staf');
Route::get('/jualan/kod/pindah_milik_syarikat','App\Http\Controllers\JualanKodController@pindah_milik_syarikat');
Route::get('/jualan/kod/hapus_pro_forma','App\Http\Controllers\JualanKodController@hapus_pro_forma');
Route::get('/jualan/invois/jana_invois','App\Http\Controllers\JualanInvoisController@jana_invois');
Route::get('/jualan/invois/senarai_invois','App\Http\Controllers\JualanInvoisController@senarai_invois');
Route::get('/jualan/invois/nota_debit_nota_kredit','App\Http\Controllers\JualanInvoisController@nota_debit_nota_kredit');
Route::get('/jualan/invois/kelulusan','App\Http\Controllers\JualanInvoisController@kelulusan');
Route::get('/jualan/invois/invois_lama','App\Http\Controllers\JualanInvoisController@invois_lama');
Route::get('/jualan/invois/senarai_hitam','App\Http\Controllers\JualanInvoisController@senarai_hitam');
Route::get('/jualan/invois/invois','App\Http\Controllers\JualanInvoisController@invois');
Route::get('/jualan/invois/penyata_invois','App\Http\Controllers\JualanInvoisController@penyata_invois');
Route::get('/jualan/laporan/penyata_invois','App\Http\Controllers\JualanLaporanController@penyata_invois');
Route::get('/jualan/laporan/akaun_subsidiari_abt','App\Http\Controllers\JualanLaporanController@akaun_subsidiari_abt');
Route::get('/jualan/laporan/nota_debit_nota_kredit','App\Http\Controllers\JualanLaporanController@nota_debit_nota_kredit');
Route::get('/jualan/laporan/akaun_belum_terima','App\Http\Controllers\JualanLaporanController@akaun_belum_terima');
Route::get('/jualan/laporan/prestasi_pusat_khidmat','App\Http\Controllers\JualanLaporanController@prestasi_pusat_khidmat');
Route::get('/jualan/laporan/semakan_kutipan','App\Http\Controllers\JualanLaporanController@semakan_kutipan');
Route::get('/jualan/laporan/prestasi_bulanan','App\Http\Controllers\JualanLaporanController@prestasi_bulanan');
Route::get('/jualan/laporan/prestasi_pelanggan','App\Http\Controllers\JualanLaporanController@prestasi_pelanggan');
Route::get('/jualan/laporan/penyata_suku_tahunan','App\Http\Controllers\JualanLaporanController@penyata_suku_tahunan');
Route::get('/jualan/laporan/statistik_penggunaan','App\Http\Controllers\JualanLaporanController@statistik_penggunaan');
Route::get('/jualan/nota_hantaran/jana_nota_hantaran','App\Http\Controllers\JualanNotaHantaranController@jana_nota_hantaran');
Route::get('/jualan/nota_hantaran/nota_hantaran','App\Http\Controllers\JualanNotaHantaranController@nota_hantaran');
Route::get('/jualan/nota_hantaran/nota_hantaran_lama','App\Http\Controllers\JualanNotaHantaranController@nota_hantaran_lama');
Route::get('/jualan/pembayaran/bayaran','App\Http\Controllers\JualanPembayaranController@bayaran');
Route::get('/jualan/pembayaran/kemaskini_bayaran','App\Http\Controllers\JualanPembayaranController@kemaskini_bayaran');
Route::get('/jualan/pembayaran/bayaran_invois_lama','App\Http\Controllers\JualanPembayaranController@bayaran_invois_lama');
Route::get('/jualan/pembayaran/notis_pemberitahuan_resit','App\Http\Controllers\JualanPembayaranController@notis_pemberitahuan_resit');
Route::get('/jualan/pembayaran/senarai_import','App\Http\Controllers\JualanPembayaranController@senarai_import');
Route::get('/jualan/pembayaran/import','App\Http\Controllers\JualanPembayaranController@import');
Route::get('/jualan/pembayaran/lebihan_bayaran','App\Http\Controllers\JualanPembayaranController@lebihan_bayaran');
Route::get('/jualan/setup/kategori','App\Http\Controllers\JualanSetupController@kategori');
Route::get('/jualan/setup/pautan_menu','App\Http\Controllers\JualanSetupController@pautan_menu');
Route::get('/jualan/setup/kawalan_menu','App\Http\Controllers\JualanSetupController@kawalan_menu');
Route::get('/jualan/setup/salin_kawalan','App\Http\Controllers\JualanSetupController@salin_kawalan');




require __DIR__.'/auth.php';
