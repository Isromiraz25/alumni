<?php

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
// Route::get("/", function () {
//     return view("admin.master.index");
// });

Route::get('/', function () {
    return view('admin.login.auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index'])->name('home');



Route::get('/alumni', [App\Http\Controllers\AlumniController::class, 'index'])->name('admin.dataalumni.alumni');
Route::get('/alumni/create', [App\Http\Controllers\AlumniController::class, 'create'])->name('admin.alumni.create');
Route::post('/alumni/store', [App\Http\Controllers\AlumniController::class, 'store'])->name('admin.alumni.store');
Route::get('/editalumni/{id}', [App\Http\Controllers\AlumniController::class, 'editalumni'])->name('admin.alumni.editalumni');
Route::post('/updatealumni/{id}', [App\Http\Controllers\AlumniController::class, 'updatealumni'])->name('admin.alumni.updatealumni');
Route::get('/deletealumni/{id}', [App\Http\Controllers\AlumniController::class, 'deletealumni'])->name('admin.alumni.deletealumni');

////search

// Route::get('/search', [App\Http\Controllers\AlumniController::class, 'search'])->name('alumni.search');



Route::get('/exportalumni', [App\Http\Controllers\AlumniController::class, 'export'])->name('exportalumni');

Route::get('/angkatan', [App\Http\Controllers\AngkatanController::class, 'index'])->name('admin.tambahangkatan.angkatan');
Route::get('/tambahangkatan/create', [App\Http\Controllers\AngkatanController::class, 'create'])->name('admin.tambahangkatan.create');
Route::post('/tambahangkatan/store', [App\Http\Controllers\AngkatanController::class, 'store'])->name('admin.tambahangkatan.store');
Route::get('/editangkatan/{id}', [App\Http\Controllers\AngkatanController::class, 'editangkatan'])->name('admin.tambahangkatan.editangkatan');
Route::post('/updateangkatan/{id}', [App\Http\Controllers\AngkatanController::class, 'updateangkatan'])->name('admin.tambahangkatan.updateangkatan');
Route::get('/deleteangkatan/{id}', [App\Http\Controllers\AngkatanController::class, 'deleteangkatan'])->name('admin.tambahangkatan.deleteangkatan');


Route::get('/gallery', [App\Http\Controllers\GalleryController::class, 'index'])->name('admin.gallery.gallery');
Route::get('/gallery/create', [App\Http\Controllers\GalleryController::class, 'create'])->name('admin.gallery.create');
Route::post('/gallery/store', [App\Http\Controllers\GalleryController::class, 'store'])->name('admin.gallery.store');
Route::get('/editgallery/{id}', [App\Http\Controllers\GalleryController::class, 'editgallery'])->name('admin.gallery.editgallery');
Route::post('/updategallery/{id}', [App\Http\Controllers\GalleryController::class, 'updategallery'])->name('admin.gallery.updategallery');
Route::get('/deletegallery/{id}', [App\Http\Controllers\GalleryController::class, 'deletegallery'])->name('admin.gallry.deletegallery');


Route::get('/work', [App\Http\Controllers\WorkController::class, 'index'])->name('admin.work.work');
Route::get('/work/create', [App\Http\Controllers\WorkController::class, 'create'])->name('admin.work.create');
Route::post('/work/store', [App\Http\Controllers\WorkController::class, 'store'])->name('admin.work.store');
Route::get('/editwork/{id}', [App\Http\Controllers\WorkController::class, 'editwork'])->name('admin.work.editwork');
Route::post('/updatework/{id}', [App\Http\Controllers\WorkController::class, 'updatework'])->name('admin.work.updatework');
Route::get('/deletework/{id}', [App\Http\Controllers\WorkController::class, 'deletework'])->name('admin.work.deletework');


Route::get('/infoalumni', [App\Http\Controllers\InfoAlumniController::class, 'index'])->name('admin.infoalumni.infoalumni');
Route::get('/infoalumni/create', [App\Http\Controllers\InfoAlumniController::class, 'create'])->name('admin.infoalumni.create');
Route::post('/infoalumni/store', [App\Http\Controllers\InfoAlumniController::class, 'store'])->name('admin.infoalumni.store');
Route::get('/editinfoalumni/{id}', [App\Http\Controllers\InfoAlumniController::class, 'editinfoalumni'])->name('admin.infoalumni.editinfoalumni');
Route::post('/updateinfoalumni/{id}', [App\Http\Controllers\InfoAlumniController::class, 'updateinfoalumni'])->name('admin.infoalumni.updateinfoalumni');
Route::get('/deleteinfoalumni/{id}', [App\Http\Controllers\InfoAlumniController::class, 'deleteinfoalumni'])->name('admin.infoalumni.deleteinfoalumni');


Route::get('/infosantri', [App\Http\Controllers\InfoSantriController::class, 'index'])->name('admin.infosantri.infosantri');
Route::get('/infosantri/create', [App\Http\Controllers\InfoSantriController::class, 'create'])->name('admin.infosantri.create');
Route::post('/infosantri/store', [App\Http\Controllers\InfoSantriController::class, 'store'])->name('admin.infosantri.store');
Route::get('/editinfosantri/{id}', [App\Http\Controllers\InfoSantriController::class, 'editinfosantri'])->name('admin.infosantri.editinfosantri');
Route::post('/updateinfosantri/{id}', [App\Http\Controllers\InfoSantriController::class, 'updateinfosantri'])->name('admin.infosantri.updateinfosantri');
Route::get('/deleteinfosantri/{id}', [App\Http\Controllers\InfoSantriController::class, 'deleteinfosantri'])->name('admin.infosantri.deleteinfosantri');




Route::get('/mudir', [App\Http\Controllers\MudirController::class, 'index'])->name('admin.mudir.mudir');
Route::get('/mudir/create', [App\Http\Controllers\MudirController::class, 'create'])->name('admin.mudir.create');
Route::post('/mudir/store', [App\Http\Controllers\MudirController::class, 'store'])->name('admin.mudir.store');
Route::get('/editmudir/{id}', [App\Http\Controllers\MudirController::class, 'editmudir'])->name('admin.mudir.editmudir');
Route::post('/updatemudir/{id}', [App\Http\Controllers\MudirController::class, 'updatemudir'])->name('admin.mudir.updatemudir');
Route::get('/deletemudir/{id}', [App\Http\Controllers\MudirController::class, 'deletemudir'])->name('admin.mudir.deletemudir');

Route::get('/ust', [App\Http\Controllers\UstController::class, 'index'])->name('admin.ust.ust');
Route::get('/ust/create', [App\Http\Controllers\UstController::class, 'create'])->name('admin.ust.create');
Route::post('/ust/store', [App\Http\Controllers\UstController::class, 'store'])->name('admin.ust.store');
Route::get('/editust/{id}', [App\Http\Controllers\UstController::class, 'editust'])->name('admin.ust.editust');
Route::post('/updateust/{id}', [App\Http\Controllers\UstController::class, 'updateust'])->name('admin.ust.updateust');
Route::get('/deleteust/{id}', [App\Http\Controllers\UstController::class, 'deleteust'])->name('admin.ust.deleteust');


Route::get('/siswa', [App\Http\Controllers\SiswaController::class, 'index'])->name('admin.siswa.siswa');
Route::get('/siswa/create', [App\Http\Controllers\SiswaController::class, 'create'])->name('admin.siswa.create');
Route::post('/siswa/store', [App\Http\Controllers\SiswaController::class, 'store'])->name('admin.siswa.store');
Route::get('/editsiswa/{id}', [App\Http\Controllers\SiswaController::class, 'editsiswa'])->name('admin.siswa.editsiswa');
Route::post('/updatesiswa/{id}', [App\Http\Controllers\SiswaController::class, 'updatesiswa'])->name('admin.siswa.updatesiswa');
Route::get('/deletesiswa/{id}', [App\Http\Controllers\SiswaController::class, 'deletesiswa'])->name('admin.siswa.deletesiswa');


Route::get('/struktur', [App\Http\Controllers\StrukturController::class, 'index'])->name('admin.struktur.index');
Route::get('/struktur/create', [App\Http\Controllers\StrukturController::class, 'create'])->name('admin.struktur.create');
Route::post('/struktur/store', [App\Http\Controllers\StrukturController::class, 'store'])->name('admin.struktur.store');
Route::get('/editstruktur/{id}', [App\Http\Controllers\StrukturController::class, 'editstruktur'])->name('admin.struktur.editstruktur');
Route::post('/updatestruktur/{id}', [App\Http\Controllers\StrukturController::class, 'updatestruktur'])->name('admin.struktur.updatestruktur');
Route::get('/deletestruktur/{id}', [App\Http\Controllers\StrukturController::class, 'deletestruktur'])->name('admin.struktur.deletestruktur');





Route::get('/saran', [App\Http\Controllers\SaranController::class, 'index'])->name('admin.saran.index');
Route::get('/saran/create', [App\Http\Controllers\SaranController::class, 'create'])->name('admin.saran.create');
Route::post('/saran', [App\Http\Controllers\SaranController::class, 'store'])->name('admin.saran.store');
Route::get('/delete/{id}', [App\Http\Controllers\SaranController::class, 'deletesaran'])->name('admin.saran.deletesaran');




Route::get('/youtube', [App\Http\Controllers\YoutubeController::class, 'index'])->name('admin.youtube.index');
Route::get('/youtube/create', [App\Http\Controllers\YoutubeController::class, 'create'])->name('admin.youtube.create');
Route::post('/youtube', [App\Http\Controllers\YoutubeController::class, 'store'])->name('admin.youtube.store');
Route::get('/edityoutube/{id}', [App\Http\Controllers\YoutubeController::class, 'edityoutube'])->name('admin.youtube.edityoutube');
Route::post('/updateyoutube/{id}', [App\Http\Controllers\YoutubeController::class, 'updateyoutube'])->name('admin.youtube.updateyoutube');
Route::get('/deleteyoutube/{id}', [App\Http\Controllers\YoutubeController::class, 'deleteyoutube'])->name('admin.youtube.deleteyoutube');




Route::get('/', [App\Http\Controllers\FrontendController::class, 'index'])->name('frontend.master');

Route::get('/frontalumni', [App\Http\Controllers\TemplatealumniController::class, 'frontalumni'])->name('frontend.include.alumni');


Route::get('/frontsiswa', [App\Http\Controllers\TempletSiswaController::class, 'frontsiswa'])->name('frontend.include.siswa');
Route::post('/proses-pendaftaran', [App\Http\Controllers\TempletSiswaController::class, 'store'])->name('siswa-store');




Route::get('/frontmisi', [App\Http\Controllers\TemplatemisiController::class, 'frontmisi'])->name('frontend.include.visi');
Route::get('/frontgalerry', [App\Http\Controllers\TemplategalerryController::class, 'frontgalerry'])->name('frontend.include.galerry');
Route::get('/frontinformasi', [App\Http\Controllers\TemplateinformasiController::class, 'frontinformasi'])->name('frontend.include.informasi');
Route::get('/frontinformasi', [App\Http\Controllers\TemplateinformasiController::class, 'frontinformasi'])->name('frontend.include.informasi');
Route::get('/frontyoutube', [App\Http\Controllers\TempletYoutubeController::class, 'frontyoutube'])->name('frontend.include.youtube');
Route::get('/frontsarans', [App\Http\Controllers\TempletSaranController::class, 'frontsarans'])->name('frontend.include.sarans');

Route::get('/frontstruktur', [App\Http\Controllers\TempletStrukturController::class, 'frontstruktur'])->name('frontend.include.struktur');



Route::get('/frontguru', [App\Http\Controllers\TempletguruController::class, 'frontguru'])->name('frontend.include.guru');
Route::get('/get-data-alumni/{id}', [App\Http\Controllers\HomeController::class, 'getDataAlumin']);





