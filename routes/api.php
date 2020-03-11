<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('products')->group(function () {
  Route::get('/', 'ProductsController@index'); // /products
  Route::get('/{id}', 'ProductsController@index'); // /products/{id}
  Route::get('/{id}/company', 'ProductsController@getCompany'); // /products/{id}/company
});

Route::post('/orders/add-product', 'OrdersController@addProduct');
Route::get('/orders', 'OrdersController@index');

Route::prefix('companies')->group(function () {
  Route::post('/', 'CompaniesCreateController@create')->middleware(CheckCompanyCreateData::class); // /companies
  Route::get('/', 'CompaniesIndexController@index'); // /companies
  Route::get('/{id}', 'CompaniesIndexController@getCompany'); // /companies/{id}
  Route::get('/{id}/products', 'CompaniesProductsController@getProducts'); // /companies/{id}/products
});
