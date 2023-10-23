<?php

use App\Http\Controllers\Website\Home\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\user\addtocartController;
use App\Http\Controllers\user\getproduct\AjaxGetProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\user\userlogin\UserloginController;
use App\Http\Controllers\user\buynow\buynowController;

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

Route::get('/register', [AuthController::class, 'register']);
Route::get('/', function () {
    return view('auth.userlogin');
});
Route::get('userlogin', function () {
    $viewBag['error'] = '';     
    return view('auth.userlogin');
})->name('userlogin');


//Route::post('login', [AuthController::class, 'userlogin'])->name('userlogin');

// Route::get('home', [HomeController::class, 'index'])->name('home');

Route::get('authhome/{id}', [HomeController::class, 'userlogin1'])->name('authhome');

//Route::resource('usersignin', UserloginController::class, ['names' => 'usersignin']);


Route::resource('/', HomeController::class, ['names' => 'home']);
Route::get('home', [HomeController::class, 'index'])->name('home');
Route::get('index', [HomeController::class, 'menu'])->name('homeindex');
Route::get('productshow/{id}', [HomeController::class, 'show'])->name('productshow');
Route::get('productshow', [HomeController::class, 'productshow'])->name('productallshow');


Route::get('allproductshow', [HomeController::class, 'allproductshow'])->name('allproductshow');
Route::get('allvendors', [HomeController::class, 'allvendors'])->name('allvendors');
Route::get('alloffers', [HomeController::class, 'alloffers'])->name('alloffers');

Route::get('productsearchdetails', [HomeController::class, 'productsearchdetails'])->name('productsearchdetails');

Route::get('Categoryproductshow/{id}', [HomeController::class, 'categoryshow'])->name('Categoryproductshow');
Route::get('MainCatergoryproductshow/{id}', [HomeController::class, 'maincategoryshow'])->name('MainCatergoryproductshow');
Route::get('Subcategoryproductshow/{id}', [HomeController::class, 'subcategoryshow'])->name('Subcategoryproductshow');
Route::POST('filterproduct', [HomeController::class, 'filterproduct'])->name('filterproduct');
Route::POST('subfilterproducts', [HomeController::class, 'subfilterproducts'])->name('subfilterproducts');

Route::get('categorymainshow/{id}', [HomeController::class, 'categorymainshow'])->name('categorymainshow');
// Route::resource('addtocart', addtocartController::class, ['names' => 'addtocart']);
Route::resource('usersignin', UserloginController::class, ['names' => 'usersignin']);
Route::post('login', [AuthController::class, 'userlogin'])->name('userlogin');

Route::get('login', [AuthController::class, 'userlogin'])->name('userlogin');

Route::get('UserSettings', [UserloginController::class, 'show'])->name('UserSettings');

Route::post('UpdateUserProfile', [UserloginController::class, 'update'])->name('UpdateUserProfile');
Route::get('userlogout', [AuthController::class, 'userlogout'])->name('userlogout');
Route::post('ajaxAdd', [AjaxGetProductController::class, 'ajaxAdd'])->name('ajaxAdd');

Route::post('buynow', [buynowController::class, 'buynow'])->name('buynow');


Route::post('/updatecart', [AjaxGetProductController::class,'updatecart'])->name('updatecart');;
Route::get('getcart', [AjaxGetProductController::class, 'getcart'])->name('getcart');
Route::get('viewcart', [AjaxGetProductController::class, 'viewcart'])->name('viewcart');
Route::get('checkout', [AjaxGetProductController::class, 'checkout'])->name('checkout');
Route::get('checklogin', [AjaxGetProductController::class, 'checklogin'])->name('checklogin');
Route::post('placeorder', [AjaxGetProductController::class, 'placeorder'])->name('placeorder');

Route::get('order_success/{orders_id}', [AjaxGetProductController::class, 'order_success'])->name('order_success');

Route::get('order_tracking/{orders_id}', [AjaxGetProductController::class, 'order_tracking'])->name('order_tracking');

Route::get('ordersdetails', [AjaxGetProductController::class, 'ordersdetails'])->name('ordersdetails');



Route::get('ordersreturn/{ordid}', [AjaxGetProductController::class, 'ordersreturn'])->name('ordersreturn');
Route::get('orderscancel/{ordid}', [AjaxGetProductController::class, 'orderscancel'])->name('orderscancel');

Route::post('rating', [AjaxGetProductController::class, 'rating'])->name('rating');

Route::get('auction', [AjaxGetProductController::class, 'auction'])->name('auction');

/*Vendor all product*/
Route::get('vendorallproduct/{productdetail_id}', [HomeController::class, 'vendorallproduct'])->name('vendorallproduct');
Route::post('productsearchdetails', [HomeController::class, 'productsearchdetails'])->name('productsearchdetails');

Route::get('Categoryproductshow/{id}', [HomeController::class, 'categoryshow'])->name('vendorCategoryproductshow');
Route::get('vendorMainCatergoryproductshow/{id}', [HomeController::class, 'vendormaincategoryshow'])->name('vendorMainCatergoryproductshow');
Route::get('Subcategoryproductshow/{id}', [HomeController::class, 'subcategoryshow'])->name('vendorSubcategoryproductshow');






Route::get('discountoffere', [AjaxGetProductController::class, 'discountoffere'])->name('discountoffere');

Route::get('cartdelete', [AjaxGetProductController::class, 'delete'])->name('cartdelete');
Route::get('addtocart/{productdetail_id}', [addtocartController::class, 'datashow'])->name('addtocart');

Route::get('View_Product/{productdetail_id}', [addtocartController::class, 'productshow'])->name('View_Product');

Route::get('colorsize/{id}', [addtocartController::class, 'colorsize'])->name('colorsize');

Route::get('sizedetails/{size}', [addtocartController::class, 'sizedetails'])->name('sizedetails');

Route::get('colorvalue/{colorvalue}', [addtocartController::class, 'colorvalue'])->name('colorvalue');
Route::post('bidamt', [addtocartController::class, 'bidamount'])->name('bidamt');