<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\CompareController;
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
Route::get('/Offer',[OfferController::class,'NewOffer']);
Route::post('/Offeradd',[OfferController::class,'create']);
Route::get('/OfferList',[OfferController::class,'OfferList']);
Route::get('/index',[CompareController::class,'OfferMainPage']);
Route::get('/editOffer/{id}',[OfferController::class,'Editoffer']);
Route::post('/updateOffer',[OfferController::class,'updateoffer']);
Route::get('/popupdetail/{id}',[CompareController::class,'get_offer']);
Route::get('/NewComparisonOffer',[CompareController::class,'NewComparisonOffer']);
Route::post('/SaveComparisonOffer',[CompareController::class,'SaveComparisonOffer']);
Route::get('/ComparisonList',[CompareController::class,'ComparisonList']);
Route::get('/indexComparison',[CompareController::class,'OfferMainPage']);
Route::get('/editComparison/{id}',[CompareController::class,'editComparison']);
Route::post('/updateComparison',[CompareController::class,'updateComparison']);
Route::get('/comparepopup/{$varpr->id}',[CompareController::class,'comparepopup']);
Route::get('/star',[CompareController::class,'star']);
Route::group(['middleware' => ['auth', 'verified']], function()
{
Route::get('/Offer',[OfferController::class,'NewOffer']);
    

    
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.Offer.CreateOffer');
    })->name('dashboard');
    
    
});
