<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
Route::get('/','HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');
//Route::get('/about','AboutController@index');
//Route::get('/admin/{id?}','AdminController@index');
//Route::resource('/contact/{id?}','ContactController');
//Route::resource('/contactus/{id?}','ContactPageController',['as'=>'contactus'],function ($id=null) {
//	echo $id;
//});

Route::group(['middleware' => ['admin']], function () {
    Route::get('shop/admin','Admin\AdminController@index');
    Route::get('shop/admin/dashboard','Admin\DashboardController@dashboard');
    Route::get('logout','Admin\AdminController@logout');
     Route::match(['get','post'], 'shop/admin/check-pwd','Admin\AdminController@chkPassword');
    Route::get('shop/admin/settings','Admin\AdminController@settings');
    Route::match(['get','post'],'shop/admin/update-pwd','Admin\AdminController@updatePassword');

    //Categories Routes (Admin)
    Route::match(['get','post'],'shop/admin/add-category','Admin\CategoryController@addCategory');
    Route::match(['get','post'],'shop/admin/edit-category/{id}','Admin\CategoryController@editCategory');
    Route::match(['get','post'],'shop/admin/delete-category/{id}','Admin\CategoryController@deleteCategory');
    Route::get('shop/admin/view-categories','Admin\CategoryController@viewCategories')->name('view');
});
Route::get('/test1', 'Admin\CategoryController@test1')->name('test1');
    Route::get('/test2', 'Admin\CategoryController@test2')->name('test2');
    
Route::get('shop/search','SearchController@search');
Route::resource('/shop','mainShopController');
Route::resource('shop/category','CategoryController');
//Route::post('/shop/search','SearchController@index');




Route::resource('/news','MainnewsController');
Route::resource('/about','AboutController');

/*Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'AdminController@index');
    Route::get('/category', 'CategoryController@index');
    
}); */


Route::get('/home', 'HomeController@index')->name('home');
