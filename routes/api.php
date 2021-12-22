<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RDLController;
use App\Http\Controllers\RTDController;
use App\Http\Controllers\Screen1Controller;
use App\Http\Controllers\Screen2Controller;
use App\Http\Controllers\Screen3Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\GraphReport;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', [AuthController::class, 'login']);
//Route::post('/register', [AuthController::class, 'register']);

Route::get('/changedata/{id}',[AuthController::class,'changevalue']);
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::post('/register', [AuthController::class, 'Addregister']);
    Route::put('/edit', [AuthController::class, 'edit']);
    Route::delete('/logout', [AuthController::class, 'logout']);
    Route::get('/screen1', [Screen1Controller::class, 'index']);
    Route::get('/screen2', [Screen2Controller::class, 'index']);
    Route::get('/screen3', [Screen3Controller::class, 'index']);
    Route::post('/graphreporting', [Screen3Controller::class, 'showGraph']);
    Route::post('/rtd', [RTDController::class, 'create']);
    Route::post('/rdl', [RDLController::class, 'create']);
    Route::post('/pdfreporting', [Screen3Controller::class, 'PdfReporting']);
    Route::post('/rdlpdfreport', [Screen3Controller::class, 'RDLpdfreport']);
    Route::post('/fmpdfreport', [Screen3Controller::class, 'FMpdfreport']);
    Route::post('/fmgraphreport', [Screen3Controller::class, 'FMgraphReport']);
    Route::post('/pumponoffreport', [Screen3Controller::class, 'PumpReport']);
    Route::post('/rdlgraphreporting', [Screen3Controller::class, 'RDLGraphReport']);
    Route::post('/dplgraphreporting', [Screen3Controller::class, 'DPLGraphReport']);
    Route::post('/ptgraphreporting', [Screen3Controller::class, 'PtgraphReporting']);
    Route::post('/ptpdfreport', [Screen3Controller::class, 'PTpdfreport']);
    Route::post('/vgpdfreport', [Screen3Controller::class, 'VGpdfreport']);
    Route::post('/vggraphreport', [Screen3Controller::class, 'VGgraphReport']);
    Route::post('/fmtotalpdfreport', [Screen3Controller::class, 'flowTotall_pdfreport']);
    Route::get('/viewallusers', [AuthController::class, 'viewAllusers']);
    Route::get('/deleteuser/{id}', [AuthController::class, 'DeleteUser']);
    Route::get('/edituser/{id}', [AuthController::class, 'EditUser']);
    Route::post('/saveselection/', [Screen3Controller::class, 'SaveSelection']);
    //multi page
    Route::get('/showselection/{id}', [Screen3Controller::class, 'ShowSelection']);

    Route::get('/showselectiona/{id}', [Screen3Controller::class, 'ShowSelectionA']);
    Route::post('/saveselectionreport/', [Screen3Controller::class, 'SaveSelectionReport']);
    Route::post('/multigraph/', [Screen3Controller::class, 'MultiGraph']);
    Route::post('/formSubmit/', [Screen3Controller::class, 'FormSubmit']);
    Route::get('/getuploadedreports/', [Screen3Controller::class, 'GetUploadedReports']);
    Route::get('/deleteupload/{id}', [Screen3Controller::class, 'DeleteUpload']);
    Route::post('/showaverage', [Screen3Controller::class, 'ShowAverage']);
});




