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
Route::get('/', function () {
    return view('index');
});
Route::get('mail','mailController@index');
Route::post('mail','MailController@post');
Route::get('test-mail', function() {
	// \Mail::send('mail.mail', [ 'bodyMessage' => 'Hello World' ], function($message) {
	// 	$message->to('md-adil@live.com');
	// 	$message->subject('Test Mail');
	// });
	// return 'Message sent successfully.';
});