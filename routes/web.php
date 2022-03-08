<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleCompanyController;
use App\Http\Controllers\CompanyController;
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
    return view('home');
});

//Company information form endpoint
Route::get('/companies/companyAdd', [CompanyController::class, 'create']);

//Single Company Page endpoint
Route::get('/companies/single/{companyName}', [SingleCompanyController::class, 'show']); //->where('companyName', '[a-zA-Z]+')

//company Addition endpoint
Route::resource('/companies', CompanyController::class);
