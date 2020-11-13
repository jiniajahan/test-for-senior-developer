<?php
ini_set('max_execution_time', 180);
use Illuminate\Support\Facades\Route;
use App\Record;
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

Route::get('/second-buyer-eloquent', 'BuyerPurchaseController@SecondBuyerElq')->name('second-buyer-eloquent.get');
Route::get('/second-buyer-no-eloquent', 'BuyerPurchaseController@SecondBuyerNoElq')->name('second-buyer-no-eloquent.get');

Route::get('/purchase-list-eloquent', 'BuyerPurchaseController@PurchaseListElq')->name('purchase-list-eloquent.get');
Route::get('/purchase-list-no-eloquent', 'BuyerPurchaseController@PurchaseListNoElq')->name('purchase-list-no-eloquent.get');


Route::get('/i-m-funny', 'BuyerPurchaseController@getAnalytic')->name('funny.get');

Route::get('/animation', 'BuyerPurchaseController@getAnimation')->name('animation.get');

Route::get('/sort-js', 'ExampleController@getSort')->name('sort.get');
Route::get('/foreach-js', 'ExampleController@getForeach')->name('foreach.get');
Route::get('/filter-js', 'ExampleController@getFilter')->name('filter.get');
Route::get('/map-js', 'ExampleController@getMap')->name('map.get');
Route::get('/reduce-js', 'ExampleController@getReduce')->name('reduce.get');

Route::get('/define-callback-js', 'ExampleController@getCallback')->name('callback.get');




