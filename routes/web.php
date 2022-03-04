<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::group(['namespace'=>'Frontend','prefix'=>'frontend'],function(){
    Route::group(['prefix'=>'login'],function (){
        Route::get('/','LoginController@Login');
        Route::post('/','LoginController@PostLogin');
    });
    Route::group(['prefix'=>'register'],function (){
        Route::get('/','RegisterController@Register');
        Route::post('/','RegisterController@PostRegister');
    });
    Route::get('/home','FrontendController@Home');
    Route::get('/logout','FrontendController@Logout');
    Route::get('/home/about','FrontendController@About');
    Route::group(['prefix'=>'product'],function (){
        Route::get('/new','ProductController@GetNewProduct');
        Route::get('/sale','ProductController@GetSaleProduct');
        Route::get('/{pro_id}','FrontendController@ProfileProduct');
        Route::post('/{pro_id}','FrontendController@PostComment')->middleware('CheckLoginFrontend');
    });
    Route::group(['prefix'=>'profile','middleware'=>'CheckLoginProfile'],function (){
        Route::get('/','UserController@Profile');
        Route::post('/','UserController@PostProfile');
    });
    Route::group(['prefix'=>'cart','middleware'=>'CheckLoginFrontend'],function (){
        Route::get('/add/{id}','FrontendController@AddCart');
        Route::get('/delete/{id}','FrontendController@DeleteCart');
        Route::get('/','FrontendController@ListCart');
        Route::post('/','FrontendController@UpdateCart');
    });
    Route::get('/error','FrontendController@Error');
    
    
});
Route::group(['namespace'=>'Admin'],function (){
    Route::group(['prefix'=>'login','middleware'=>'CheckLogin'],function (){
        Route::get('/','LoginController@GetLogin');
        Route::post('/','LoginController@PostLogin');
    });
    Route::group(['prefix'=>'admin','middleware'=>'CheckLogout'],function (){
        Route::get('/profile','HomeController@GetProfile');
        Route::post('/profile','HomeController@UpdateProfile');
        Route::get('/addBlog','BlogController@getInsertBlog');
        Route::post('/addBlog','BlogController@postInsertBlog');
        Route::get('/blog','BlogController@getBlog');
        Route::get('/home','HomeController@Index');
        Route::get('/logout','HomeController@Logout')->name('logout');
        Route::group(['prefix'=>'product'],function(){
            Route::get('/','ProductController@GetProduct');
            Route::get('/add','ProductController@AddProduct');
            Route::post('/add','ProductController@PostAddProduct');
            Route::get('/edit/{id}','ProductController@EditProduct');
            Route::post('/edit/{id}','ProductController@PostEditProduct');
            Route::delete('/delete/{pro_id}','ProductController@DeleteProduct');

        });
        Route::group(['prefix'=>'cate'],function(){
            Route::get('/','CategoryController@GetCategory');
            Route::get('/add','CategoryController@AddCategory');
            Route::post('/add','CategoryController@PostAddCategory');
            Route::get('/edit/{category_id}','CategoryController@EditCategory');
            Route::post('/edit/{category_id}','CategoryController@PostEditCategory');
            Route::delete('/delete/{category_id}','CategoryController@DeleteCategory');

        });
    });
    Route::group(['prefix'=>'register'],function (){
        Route::get('/','RegisterController@GetRegister');
        Route::post('/','RegisterController@PostRegister');
    });


});

