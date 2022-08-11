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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/beranda', function () {
    return view('layouts.beranda');
});
Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
Route::group(['middleware' => ['role:admin']], function(){
    Route::resource('/user','App\Http\Controllers\UserController');
    Route::get('/user/hapus/{id}',[App\Http\Controllers\UserController::class, 'destroy']);
    Route::get('/user/edit/{id}',[App\Http\Controllers\UserController::class, 'update']);
});

Route::resource('/register','App\Http\Controllers\RegisterController');   
Route::resource('/indexagama','App\Http\Controllers\IndexAgamaController');
Route::get('/indexagama/edit/{id}',[App\Http\Controllers\IndexAgamaController::class, 'update']);
Route::get('/indexagama/hapus/{id}',[App\Http\Controllers\IndexAgamaController::class, 'destroy']);
Route::resource('/indexaliransesat','App\Http\Controllers\IndexAliranSesatController');
Route::get('/indexaliransesat/edit/{id}',[App\Http\Controllers\IndexAliranSesatController::class, 'update']);
Route::get('/indexaliransesat/hapus/{id}',[App\Http\Controllers\IndexAliranSesatController::class, 'destroy']);
Route::resource('/indexaliranaswaja','App\Http\Controllers\IndexAliranAswajaController');
Route::get('/indexaliranaswaja/edit/{id}',[App\Http\Controllers\IndexAliranAswajaController::class, 'update']);
Route::get('/indexaliranaswaja/hapus/{id}',[App\Http\Controllers\IndexAliranAswajaController::class, 'destroy']);
Route::resource('/indexempatslimas','App\Http\Controllers\IndexEmpatsLimasController');
Route::get('/indexempatslimas/edit/{id}',[App\Http\Controllers\IndexEmpatsLimasController::class, 'update']);
Route::get('/indexempatslimas/hapus/{id}',[App\Http\Controllers\IndexEmpatsLimasController::class, 'destroy']);
Route::resource('/indexalatkesehatan','App\Http\Controllers\IndexAlatKesehatanController');
Route::get('/indexalatkesehatan/edit/{id}',[App\Http\Controllers\IndexAlatKesehatanController::class, 'update']);
Route::get('/indexalatkesehatan/hapus/{id}',[App\Http\Controllers\IndexAlatKesehatanController::class, 'destroy']);
Route::resource('/indexcovid','App\Http\Controllers\IndexCovidController');
Route::get('/indexcovid/edit/{id}',[App\Http\Controllers\IndexCovidController::class, 'update']);
Route::get('/indexcovid/hapus/{id}',[App\Http\Controllers\IndexCovidController::class, 'destroy']);
Route::resource('/indexobat','App\Http\Controllers\IndexObatController');
Route::get('/indexobat/edit/{id}',[App\Http\Controllers\IndexObatController::class, 'update']);
Route::get('/indexobat/hapus/{id}',[App\Http\Controllers\IndexObatController::class, 'destroy']);
Route::resource('/indexvaksin','App\Http\Controllers\IndexVaksinController');
Route::get('/indexvaksin/edit/{id}',[App\Http\Controllers\IndexVaksinController::class, 'update']);
Route::get('/indexvaksin/hapus/{id}',[App\Http\Controllers\IndexVaksinController::class, 'destroy']);
Route::resource('/indexvirus','App\Http\Controllers\IndexVirusController');
Route::get('/indexvirus/edit/{id}',[App\Http\Controllers\IndexVirusController::class, 'update']);
Route::get('/indexvirus/hapus/{id}',[App\Http\Controllers\IndexVirusController::class, 'destroy']);
Route::resource('/indexberitaterupdate','App\Http\Controllers\IndexBeritaTerupdateController');
Route::get('/indexberitaterupdate/edit/{id}',[App\Http\Controllers\IndexBeritaTerupdateController::class, 'update']);
Route::get('/indexberitaterupdate/hapus/{id}',[App\Http\Controllers\IndexBeritaTerupdateController::class, 'destroy']);
Route::resource('/indexcatatanterbaik','App\Http\Controllers\IndexCatatanTerbaikController');
Route::get('/indexcatatanterbaik/edit/{id}',[App\Http\Controllers\IndexCatatanTerbaikController::class, 'update']);
Route::get('/indexcatatanterbaik/hapus/{id}',[App\Http\Controllers\IndexCatatanTerbaikController::class, 'destroy']);
Route::resource('/indexcatatanterburuk','App\Http\Controllers\IndexCatatanTerburukController');
Route::get('/indexcatatanterburuk/edit/{id}',[App\Http\Controllers\IndexCatatanTerburukController::class, 'update']);
Route::get('/indexcatatanterburuk/hapus/{id}',[App\Http\Controllers\IndexCatatanTerburukController::class, 'destroy']);
Route::resource('/indexlainnya','App\Http\Controllers\IndexLainnyaController');
Route::get('/indexlainnya/edit/{id}',[App\Http\Controllers\IndexLainnyaController::class, 'update']);
Route::get('/indexlainnya/hapus/{id}',[App\Http\Controllers\IndexLainnyaController::class, 'destroy']);
Route::resource('/indexanonymous','App\Http\Controllers\IndexAnonymousController');
Route::get('/indexanonymous/edit/{id}',[App\Http\Controllers\IndexAnonymousController::class, 'update']);
Route::get('/indexanonymous/hapus/{id}',[App\Http\Controllers\IndexAnonymousController::class, 'destroy']);
Route::resource('/indexartificialintelligence','App\Http\Controllers\IndexArtificialIntelligenceController');
Route::get('/indexartificialintelligence/edit/{id}',[App\Http\Controllers\IndexArtificialIntelligenceController::class, 'update']);
Route::get('/indexartificialintelligence/hapus/{id}',[App\Http\Controllers\IndexArtificialIntelligenceController::class, 'destroy']);
Route::resource('/indexcybersecurity','App\Http\Controllers\IndexCyberSecurityController');
Route::get('/indexcybersecurity/edit/{id}',[App\Http\Controllers\IndexCyberSecurityController::class, 'update']);
Route::get('/indexcybersecurity/hapus/{id}',[App\Http\Controllers\IndexCyberSecurityController::class, 'destroy']);
Route::resource('/indexdatabase','App\Http\Controllers\IndexDatabaseController');
Route::get('/indexdatabase/edit/{id}',[App\Http\Controllers\IndexDatabaseController::class, 'update']);
Route::get('/indexdatabase/hapus/{id}',[App\Http\Controllers\IndexDatabaseController::class, 'destroy']);
Route::resource('/indexhardware','App\Http\Controllers\IndexHardwareController');
Route::get('/indexhardware/edit/{id}',[App\Http\Controllers\IndexHardwareController::class, 'update']);
Route::get('/indexhardware/hapus/{id}',[App\Http\Controllers\IndexHardwareController::class, 'destroy']);
Route::resource('/indexandroiddeveloper','App\Http\Controllers\IndexAndroidDeveloperController');
Route::get('/indexandroiddeveloper/edit/{id}',[App\Http\Controllers\IndexAndroidDeveloperController::class, 'update']);
Route::get('/indexandroiddeveloper/hapus/{id}',[App\Http\Controllers\IndexAndroidDeveloperController::class, 'destroy']);
Route::resource('/indexiosdeveloper','App\Http\Controllers\IndexIosDeveloperController');
Route::get('/indexiosdeveloper/edit/{id}',[App\Http\Controllers\IndexIosDeveloperController::class, 'update']);
Route::get('/indexiosdeveloper/hapus/{id}',[App\Http\Controllers\IndexIosDeveloperController::class, 'destroy']);
Route::resource('/indexwebdeveloper','App\Http\Controllers\IndexWebDeveloperController');
Route::get('/indexwebdeveloper/edit/{id}',[App\Http\Controllers\IndexWebDeveloperController::class, 'update']);
Route::get('/indexwebdeveloper/hapus/{id}',[App\Http\Controllers\IndexWebDeveloperController::class, 'destroy']);
Route::resource('/indexuiux','App\Http\Controllers\IndexUiUxController');
Route::get('/indexuiux/edit/{id}',[App\Http\Controllers\IndexUiUxController::class, 'update']);
Route::get('/indexuiux/hapus/{id}',[App\Http\Controllers\IndexUiUxController::class, 'destroy']);
Route::resource('/indexsoftware','App\Http\Controllers\IndexSoftwareController');
Route::get('/indexsoftware/edit/{id}',[App\Http\Controllers\IndexSoftwareController::class, 'update']);
Route::get('/indexsoftware/hapus/{id}',[App\Http\Controllers\IndexSoftwareController::class, 'destroy']);

Route::resource('/agama','App\Http\Controllers\AgamaController');
Route::resource('/komentaragama','App\Http\Controllers\KomentarAgamaController');
Route::resource('/aliransesat','App\Http\Controllers\AliranSesatController');
Route::resource('/komentaraliransesat','App\Http\Controllers\KomentarAliranSesatController');
Route::resource('/aliranaswaja','App\Http\Controllers\AliranAswajaController');
Route::resource('/komentaraliranaswaja','App\Http\Controllers\KomentarAliranAswajaController');
Route::resource('/empatslimas','App\Http\Controllers\EmpatsLimasController');
Route::resource('/komentarempatslimas','App\Http\Controllers\KomentarEmpatsLimasController');
Route::resource('/alatkesehatan','App\Http\Controllers\AlatKesehatanController');
Route::resource('/komentaralatkesehatan','App\Http\Controllers\KomentarAlatKesehatanController');
Route::resource('/covid','App\Http\Controllers\CovidController');
Route::resource('/komentarcovid','App\Http\Controllers\KomentarCovidController');
Route::resource('/obat','App\Http\Controllers\ObatController');
Route::resource('/komentarobat','App\Http\Controllers\KomentarObatController');
Route::resource('/vaksin','App\Http\Controllers\VaksinController');
Route::resource('/komentarvaksin','App\Http\Controllers\KomentarVaksinController');
Route::resource('/virus','App\Http\Controllers\VirusController');
Route::resource('/komentarvirus','App\Http\Controllers\KomentarVirusController');
Route::resource('/beritaterupdate','App\Http\Controllers\BeritaTerupdateController');
Route::resource('/komentarberitaterupdate','App\Http\Controllers\KomentarBeritaTerupdateController');
Route::resource('/catatanterbaik','App\Http\Controllers\CatatanTerbaikController');
Route::resource('/komentarcatatanterbaik','App\Http\Controllers\KomentarCatatanTerbaikController');
Route::resource('/catatanterburuk','App\Http\Controllers\CatatanTerburukController');
Route::resource('/komentarcatatanterburuk','App\Http\Controllers\KomentarCatatanTerburukController');
Route::resource('/lainnya','App\Http\Controllers\LainnyaController');
Route::resource('/komentarlainnya','App\Http\Controllers\KomentarLainnyaController');
Route::resource('/anonymous','App\Http\Controllers\AnonymousController');
Route::resource('/komentaranonymous','App\Http\Controllers\KomentarAnonymousController');
Route::resource('/artificialintelligence','App\Http\Controllers\ArtificialIntelligenceController');
Route::resource('/komentarartificialintelligence','App\Http\Controllers\KomentarArtificialIntelligenceController');
Route::resource('/cybersecurity','App\Http\Controllers\CyberSecurityController');
Route::resource('/komentarcybersecurity','App\Http\Controllers\KomentarCyberSecurityController');
Route::resource('/database','App\Http\Controllers\DatabaseController');
Route::resource('/komentardatabase','App\Http\Controllers\KomentarDatabaseController');
Route::resource('/hardware','App\Http\Controllers\HardwareController');
Route::resource('/komentarhardware','App\Http\Controllers\KomentarHardwareController');
Route::resource('/androiddeveloper','App\Http\Controllers\AndroidDeveloperController');
Route::resource('/komentarandroiddeveloper','App\Http\Controllers\KomentarAndroidDeveloperController');
Route::resource('/iosdeveloper','App\Http\Controllers\IosDeveloperController');
Route::resource('/komentariosdeveloper','App\Http\Controllers\KomentarIosDeveloperController');
Route::resource('/webdeveloper','App\Http\Controllers\WebDeveloperController');
Route::resource('/komentarwebdeveloper','App\Http\Controllers\KomentarWebDeveloperController');
Route::resource('/uiux','App\Http\Controllers\UiUxController');
Route::resource('/komentaruiux','App\Http\Controllers\KomentarUiUxController');
Route::resource('/software','App\Http\Controllers\SoftwareController');
Route::resource('/komentarsoftware','App\Http\Controllers\KomentarSoftwareController');
Route::resource('/profile','App\Http\Controllers\ProfileController');
Route::get('/profile/edit/{id}',[App\Http\Controllers\ProfileController::class, 'update']);

