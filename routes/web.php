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

// Route::get('/', function(){
// 	return view('store.index');
// });

Route::get('/', [
	'uses' 	=> 'HomeController@getIndex',
	'as'	=> 	'store.index'
]);


// Route::get('about', function () {
//     return view('other.about');
// })->name('other.about');

Route::group(['prefix'=> 'dashboard'], function(){
	Route::get('', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.index'	
	]);
	
	Route::get('user', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_user'	
	]);
	Route::get('components', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.bootstrap_components'	
	]);
	Route::get('cards', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.ui_cards'	
	]);
	Route::get('widgets', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.widgets'	
	]);
	Route::get('charts', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.charts'	
	]);
	Route::get('form_components', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.form_components'	
	]);
	Route::get('form_custom', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.form_custom'	
	]);
	Route::get('form_samples', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.form_samples'	
	]);
	Route::get('form_notifications', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.form-notifications'	
	]);
	Route::get('table_basic', [
		'uses'	=>	'AdminController@getTableBasic',
		'as'	=>	'dashboard.table_basic'	
	]);
	Route::get('table_data_table', [
		'uses'	=>	'AdminController@getDataTable',
		'as'	=>	'dashboard.table_data-table'	
	]);

	Route::get('blank', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.blank_page'	
	]);
	Route::get('login', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_login'	
	]);
	Route::get('lockscreen', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_lockscreen'	
	]);
	Route::get('invoice', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_invoice'	
	]);
	Route::get('lockscreen', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_lockscreen'	
	]);
	Route::get('calendar', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_calendar'	
	]);
	Route::get('mailbox', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_mailbox'	
	]);
	Route::get('error', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_mailbox'	
	]);
	Route::get('mailbox', [
		'uses'	=>	'AdminController@getIndex',
		'as'	=>	'dashboard.page_error'	
	]);
	
})




	

?>
