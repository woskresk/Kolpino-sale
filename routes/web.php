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


// ТЕСТ

Route::get('/testi', 'TestController@index');
Route::post('/tes', 'TestController@inde');
Route::get('/test', 'TestController@test')->name('test');
Route::get('/testos', 'TestController@testos')->name('testos');


// Авторизация
// login               Войти
// register            Зарегистрироватся
// logout              Выйти 
// password/reset      Сбросить пароль  
Auth::routes();

// ГЛАВНАЯ
Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@index');

// CRUD РЕАЛИЗАЦИЯ КОНТРОЛЛЕРА просто
//  Метод        Адрес URL                 Метод    Имя роута         Функциональность
//  GET	        /products	               index	products.index     Кабинет клиента
//  GET	        /products/create	       create	products.create    Форма создания товара
//  POST	    /products	               store	products.store         Post создания товара
//  GET	        /products/{product}	       show	    products.show      Просмотр товара
//  GET	        /products/{product}/edit   edit	    products.edit      Форма редактирования товара
//  PUT/PATCH	/products/{product}	       update	products.update        Post редактирования товара
//  DELETE	    /products/{product}	       destroy	products.destroy   Удаление товара
Route::resource('products', 'ProductController');
Route::resource('/products', 'ProductController', ['only' => [
    'index', 'create', 'store', 'edit'
 ]]);
Route::post('/products/{product}', 'ProductController@update')->name('products.update');
Route::get('/products/{product}/destroy', 'ProductController@destroy')->name('products.destroy');
Route::get('/products/{product}', 'ProductController@show')->name('products.show');


// КАТЕГОРИИ 
Route::get('/category/{name}', 'HomeController@categoryAll')->name('take.category');
Route::post('/category/{name}', 'HomeController@categoryPut')->name('catos');
Route::post('/search', 'HomeController@search')->name('search');

Route::get('/contacts', 'ReviewController@index');
Route::post('/contacts', 'ReviewController@contacts')->name('contacts');


// Eximine

// Route::get('ajax', 'TestController@index');

// Route::post('ajaxRequest', 'TestController@ajaxRequest');

// Route::get('ajax',function() {
//     return view('testi.test');
//  });
//  Route::post('/getmsg','TestController@ajax');

Route::get('ajax', 'TestController@index');

Route::post('ajaxRequest', 'TestController@ajax');
