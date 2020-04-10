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
    Route::get('/', 'ProductsController@index'); // api/products
    Route::post('/create', 'ProductsController@addProduct'); // api/products/create
    Route::get('/get-by-name', 'ProductsController@getByName'); // api/products/get-by-name
    Route::get('/{id}', 'ProductsController@getById'); // api/products/{id}
    Route::delete('/{id}', 'ProductsController@delete'); // api/products/{id}
    Route::get('/{id}/company', 'ProductsController@getCompany'); // api/products/{id}/company
});

Route::post('/orders/add-product', 'OrdersController@addProduct');
Route::get('/orders', 'OrdersController@index');

Route::prefix('companies')->group(function () {
  Route::post('/', 'CompaniesCreateController@create')->middleware(\App\Http\Middleware\CheckCompanyCreateData::class); // /companies
  Route::get('/', 'CompaniesIndexController@index'); // /companies
  Route::get('/{id}', 'CompaniesIndexController@getCompany'); // /companies/{id}
  Route::get('/{id}/products', 'CompaniesProductsController@getProducts'); // /companies/{id}/products
});
