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


Route::post('/slide_images',		'Ajax\SlideController@getSlideImages');
Route::post('/upload_slide_image',	'Ajax\SlideController@uploadSlideImages');
Route::post('/active_image',		'Ajax\SlideController@activeImage');
Route::post('/deactive_image',		'Ajax\SlideController@deActiveImage');
Route::post('/delete_image',		'Ajax\SlideController@deleteImage');


Route::post('/new_product',				'Ajax\ProductController@newProduct');
Route::post('/catalog',					'Ajax\ProductController@newCatalog');
Route::post('/show_catalogs',			'Ajax\ProductController@showCatalogs');
Route::post('/active_catalog',			'Ajax\ProductController@activeCatalog');
Route::post('/deactive_catalog',		'Ajax\ProductController@deActiveCatalog');
Route::post('/show_catalog_products',	'Ajax\ProductController@showCatalogProducts');
Route::post('/show_admin_products',		'Ajax\ProductController@showCatalogProducts');
Route::post('/edit_product',		    'Ajax\ProductController@editProduct');
Route::post('/show_modal_product',		 'Ajax\ProductController@showModalProduct');
Route::post('/shop_card',				 'Ajax\ProductController@shopCard');


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

	Route::get('products', [
		'uses'	=>	'AdminController@getProducts',
		'as'	=>	'dashboard.table_products'	
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
