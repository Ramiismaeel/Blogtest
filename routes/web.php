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

//** Home **/
// Route::get('/', function () {
//     return view('home');
// });
Route::get('/', 'PagesController@getHome');


//** About **/
// Route::get('/about', function () {
//     return view('about');
// });
Route::get('/about', 'PagesController@getAbout');


//** Contact **/
// Route::get('/contact', function () {
//     return view('contact');
// });
Route::get('/contact', 'PagesController@getContact');

//** Message **/
Route::get('/messages', 'MessagesController@getMessages');


//** Submit **/
Route::post('/contact/submit', 'MessagesController@submit');

