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

// use Symfony\Component\Routing\Annotation\Route;

// use Symfony\Component\Routing\Annotation\Route;

// use Symfony\Component\Routing\Route;

// use Symfony\Component\Routing\Annotation\Route;

Route::view('layout' , 'layout.layout');
//Route::view('contact-us' , 'pages.contact-us');
// Route::view('/' , 'pages.home');
Route::view('/about-us' , 'pages.about-us');//->middleware("test");
//Route::view('/customers' , 'pages.customers');
 

Route::post("/customers" , "CustomerController@store")->name('layout');

Route::get('/customers' , "CustomerController@index")->name("customers.index");
Route::get("/create" , "CustomerController@create")->name("customers.create");

Route::get("/customers/{customer}" , "CustomerController@show")->name("customers.show");
Route::get("/customers/{customer}/edit" , "CustomerController@edit")->name("customers.edit");
Route::PATCH("/customers/{customer}" , "CustomerController@update")->name("customers.update");
Route::DELETE("/customers/{customer}" , "CustomerController@delete")->name("customers.delete");

// Route::resource('customers' ,"CustomerController" );

///////////////contact
 Route::get("/contact-us" , "ContactFormController@create")->name("contact.contact-us");
 Route::post("/contact-us" , "ContactFormController@store")->name("contact.store");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
