<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ClusteringController;
use App\Http\Controllers\ClusteringProcessClontroller;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\HasilClusteringController;
use App\Http\Controllers\HasilSurveyController;
use App\Http\Controllers\OpsiJawabanController;
use App\Http\Controllers\PendudukController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\ProvincesController;
use App\Http\Controllers\RegenciesController;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\StoreController;
// use App\Http\Controllers\SurveyorController;

use App\Http\Controllers\VillageController;
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

// Route::get('/', function () {
//     return view('coba');
// });


// Route::prefix('admin')->group(function () {
//     Route::get('/login', [SurveyorLoginController::class, 'showLoginForm'])->name('admin.login');
//     Route::post('/login', [SurveyorLoginController::class, 'login'])->name('admin.login.submit');
//     Route::get('logout/', [SurveyorLoginController::class, 'logout'])->name('admin.logout');
//     Route::get('/', [SurveyorController::class, 'dashboard'])->name('admin.dashboard');
// });


Route::get('penduduk/index', [PendudukController::class, 'index']);
Route::get('penduduk/read', [PendudukController::class, 'read']);
Route::get('penduduk/create', [PendudukController::class, 'create']);
Route::get('penduduk/store', [PendudukController::class, 'store']);
Route::get('penduduk/show/{id}', [PendudukController::class, 'show']);
Route::get('penduduk/update/{id}', [PendudukController::class, 'update']);
Route::get('penduduk/destroy/{id}', [PendudukController::class, 'destroy']);
Route::get('/export', [PendudukController::class, 'export']);
Route::post('/import', [PendudukController::class, 'import'])->name('import');
// Route::get('/export-users', [UserController::class, 'exportUsers'])->name('export-users');
Route::get('/getDatadesa', [PendudukController::class, 'getdesa'])->name('getdesa');

// // Surveyor
// Route::get('surveyor/index', [SurveyorController::class, 'index']);
// Route::get('surveyor/read', [SurveyorController::class, 'read']);
// Route::get('surveyor/create', [SurveyorController::class, 'create']);
// Route::get('surveyor/store', [SurveyorController::class, 'store']);
// Route::get('surveyor/show/{id}', [SurveyorController::class, 'show']);
// Route::get('surveyor/update/{id}', [SurveyorController::class, 'update']);
// Route::get('surveyor/destroy/{id}', [SurveyorController::class, 'destroy']);
// // Route::get('/getDatadesa', [SurveyorController::class, 'getdesa'])->name('getDesaSurveyor');

// //Crud Status
// Route::get('status/index', [StatusController::class, 'index']);
// Route::get('status/read', [StatusController::class, 'read']);
// Route::get('status/create', [StatusController::class, 'create']);
// Route::get('status/store', [StatusController::class, 'store']);
// Route::get('status/show/{id}', [StatusController::class, 'show']);
// Route::get('status/update/{id}', [StatusController::class, 'update']);
// Route::get('status/destroy/{id}', [StatusController::class, 'destroy']);

// Route::get('store/index', [StoreController::class, 'index']);
// Route::get('store/create', [StoreController::class, 'create']);
// Route::get('store/read', [StoreController::class, 'read']);


// Route::get('hasil/index', [HasilSurveyController::class, 'index']);
// Route::get('hasil/read', [HasilSurveyController::class, 'read']);

// Route::get('pertanyaan/opsi', [HasilSurveyController::class, 'pertanyaan']);




// Route::get('/provinces', [ProvinceController::class, 'select'])->name('provinces.select');
// Route::get('/regencies', [RegencyController::class, 'select'])->name('regencies.select');
// Route::get('/districts', [DistrictController::class, 'select'])->name('districts.select');
// Route::get('/villages', [VillageController::class, 'select'])->name('villages.select');

Route::get('/silhoutte', [ClusteringController::class, 'getData']);
// Route::get('/clustering', [ClusteringController::class, 'getClustering']);
Route::get('/clustering', [ClusteringController::class, 'index']);
Route::get('/clustering/read', [ClusteringController::class, 'getDataTampil']);


// Route::get('provinsi/index', [ProvincesController::class, 'index']);
// Route::get('provinsi/read', [ProvincesController::class, 'read']);
// Route::get('provinsi/create', [ProvincesController::class, 'create']);
// Route::get('provinsi/store', [ProvincesController::class, 'store']);
// Route::get('provinsi/show/{id}', [ProvincesController::class, 'show']);
// Route::get('provinsi/update/{id}', [ProvincesController::class, 'update']);
// Route::get('provinsi/destroy/{id}', [ProvincesController::class, 'destroy']);

// Route::get('kabupaten/index', [RegenciesController::class, 'index']);
// Route::get('kabupaten/read', [RegenciesController::class, 'read']);
// Route::get('kabupaten/create', [RegenciesController::class, 'create']);
// Route::get('kabupaten/store', [RegenciesController::class, 'store']);
// Route::get('kabupaten/show/{id}', [RegenciesController::class, 'show']);
// Route::get('kabupaten/update/{id}', [RegenciesController::class, 'update']);
// Route::get('kabupaten/destroy/{id}', [RegenciesController::class, 'destroy']);

// Route::get('kecamatan/index', [DistrictController::class, 'index']);
// Route::get('kecamatan/read', [DistrictController::class, 'read']);
// Route::get('kecamatan/create', [DistrictController::class, 'create']);
// Route::get('kecamatan/store', [DistrictController::class, 'store']);
// Route::get('kecamatan/show/{id}', [DistrictController::class, 'show']);
// Route::get('kecamatan/update/{id}', [DistrictController::class, 'update']);
// Route::get('kecamatan/destroy/{id}', [DistrictController::class, 'destroy']);

// Route::get('desa/index', [VillageController::class, 'index']);
// Route::get('desa/read', [VillageController::class, 'read']);
// Route::get('desa/create', [VillageController::class, 'create']);
// Route::get('desa/store', [VillageController::class, 'store']);
// Route::get('desa/show/{id}', [VillageController::class, 'show']);
// Route::get('desa/update/{id}', [VillageController::class, 'update']);
// Route::get('desa/destroy/{id}', [VillageController::class, 'destroy']);


// // crud Pertanyaan

Route::get('pertanyaan/index', [PertanyaanController::class, 'index']);
Route::get('pertanyaan/read', [PertanyaanController::class, 'read']);
Route::get('pertanyaan/create', [PertanyaanController::class, 'create']);
Route::get('pertanyaan/store', [PertanyaanController::class, 'store']);
Route::get('pertanyaan/show/{id}', [PertanyaanController::class, 'show']);
Route::get('pertanyaan/update/{id}', [PertanyaanController::class, 'update']);
Route::get('pertanyaan/destroy/{id}', [PertanyaanController::class, 'destroy']);

Route::get('opsiJawaban/index', [OpsiJawabanController::class, 'index']);
Route::get('opsiJawaban/read', [OpsiJawabanController::class, 'read']);
Route::get('opsiJawaban/create', [OpsiJawabanController::class, 'create']);
Route::get('opsiJawaban/store', [OpsiJawabanController::class, 'store']);
Route::get('opsiJawaban/show/{id}', [OpsiJawabanController::class, 'show']);
Route::get('opsiJawaban/update/{id}', [OpsiJawabanController::class, 'update']);
Route::get('opsiJawaban/destroy/{id}', [OpsiJawabanController::class, 'destroy']);


Route::get('hasilSurvey/index', [HasilSurveyController::class, 'index']);
Route::get('hasilSurvey/read', [HasilSurveyController::class, 'read']);
Route::get('hasilSurvey/create', [HasilSurveyController::class, 'create']);
Route::get('hasilSurvey/store', [HasilSurveyController::class, 'store']);
Route::get('hasilSurvey/show/{id}', [HasilSurveyController::class, 'show']);
Route::get('hasilSurvey/update/{id}', [HasilSurveyController::class, 'update']);
Route::get('hasilSurvey/destroy/{id}', [HasilSurveyController::class, 'destroy']);



Route::get('/', function () {
    return view('welcome');
});

Route::get('/logincoba', function () {
    return view('cobalogin');
});

Auth::routes();
Route::group(['middleware' => 'checkRole:admin'], function () {
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home');
});

Route::group(['middleware' => 'checkRole:surveyor'], function () {
    Route::get('admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home.surveyor');
});

Route::get('/hasilClustering', [HasilClusteringController::class, 'index']);
Route::get('/hasilClustering/read', [HasilClusteringController::class, 'read']);
Route::get('/newClustering', [HasilClusteringController::class, 'getHasilClustering']);

Route::get('/chart', [HasilClusteringController::class, 'chart']);

Route::get('/groupCluster', [HasilClusteringController::class, 'clusterByDistrict']);
Route::get('/groupCluster/dua', [HasilClusteringController::class, 'clusterDua']);
Route::get('/groupCluster/satu', [HasilClusteringController::class, 'clusterSatu']);
Route::get('/groupCluster/echart', [HasilClusteringController::class, 'echart']);
