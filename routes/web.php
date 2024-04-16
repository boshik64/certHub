<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers\Cinema'], function () {
//Главная страница кинотеатров
    Route::get('/cinemas', 'IndexController')->name('cinemas.index');
//Создание нового кинотеатра
    Route::get('/cinemas/create', 'CreateController')->name('cinemas.create');
    Route::post('/cinemas/', 'StoreController')->name('cinemas.store');
//Отображение карточки кинотеатра
    Route::get('/cinemas/{cinema}', 'ShowController')->name('cinemas.show');
//Изменение карточки кинотеатра
    Route::get('/cinemas/{cinema}/edit', 'EditController')->name('cinemas.edit');
    Route::patch('/cinemas/{cinema}', 'UpdateController')->name('cinemas.update');
//Удаление карточки кинотеатра
    Route::delete('/cinemas/{cinema}', 'DestroyController')->name('cinemas.destroy');
});

Route::group(['namespace' => 'App\Http\Controllers\Merchant'], function () {//Главная страница мерчантов
    Route::get('/merchants', 'IndexController')->name('merchants.index');
//Создание нового мерчанта
    Route::get('/merchants/create', 'CreateController')->name('merchants.create');
    Route::post('/merchants/', 'StoreController')->name('merchants.store');
//Отображение карточки мерчанта
    Route::get('/merchants/{merchant}', 'ShowController')->name('merchants.show');
//Изменение карточки мерчанта
    Route::get('/merchants/{merchant}/edit', 'EditController')->name('merchants.edit');
    Route::patch('/merchants/{merchant}', 'UpdateController')->name('merchants.update');
//Удаление карточки мерчанта
    Route::delete('/merchants/{merchant}', 'DestroyController')->name('merchants.destroy');
});


Route::group(['namespace' => 'App\Http\Controllers\CompanyTitle'], function () {
    //Главная страница юр. лиц
    Route::get('/company_titles', 'IndexController')->name('company_titles.index');
//Создание нового юр. лица
    Route::get('/company_titles/create', 'CreateController')->name('company_titles.create');
    Route::post('/company_titles/', 'StoreController')->name('company_titles.store');
//Отображение карточки юр. лица
    Route::get('/company_titles/{company_title}', 'ShowController')->name('company_titles.show');
//Изменение карточки юр. лица
    Route::get('/company_titles/{company_title}/edit', 'EditController')->name('company_titles.edit');
    Route::patch('/company_titles/{company_title}', 'UpdateController')->name('company_titles.update');
//Удаление карточки юр. лица
    Route::delete('/company_titles/{company_title}', 'DestroyController')->name('company_titles.destroy');

});

