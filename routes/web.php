<?php

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



Route::get('/permission', function () {
    return "no permission";
})->name("nopermision");


Route::get('/admin', "ProductsController@index")->name("adminindex");
Route::get("/admin/create", "ProductsController@create")->name("admincreate");
Route::post("/admin/store", "ProductsController@store")->name('adminstore');
Route::get("/admin/show/{id}", "ProductsController@show")->name("adminshow");
Route::get("/admin/edit/{id}", "ProductsController@edit")->name("adminedit");
Route::post("/admin/delete", "ProductsController@destroy")->name("admindelete");
Route::post("/admin/update", "ProductsController@update")->name("admimnupdate");
Route::post("/admin/store/comment", "ProductsController@comment")->name("storecomment");
Route::post("admin/store/ldesc/", "ProductsController@longdesc")->name("adminlongdesc");

Route::get("/index", "SiteController@index")->name("siteindex");
Route::get("/single", "SiteController@single")->name("sitesingle");
