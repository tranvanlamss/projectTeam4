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
Route::prefix('auth')->group(function () {
     Route::get('/create', [
            'as' => 'auth.create',
            'uses' =>'App\Http\Controllers\LoginController@create'
    ]);
     Route::post('/store', [
            'as' => 'auth.store',
            'uses' =>'App\Http\Controllers\LoginController@store'
    ]);
     Route::get('/auth', [
            'as' => 'auth.add',
            'uses' =>'App\Http\Controllers\LoginController@add'
    ]);
     Route::post('/auth', [
            'as' => 'auth.post',
            'uses' =>'App\Http\Controllers\LoginController@post'
    ]);
     Route::get('/logout', [
            'as' => 'auth.logout',
            'uses' =>'App\Http\Controllers\LoginController@logout'
    ]);
});

// Route::get('/', 'App\Http\Controllers\LoginController@create')->name('auth.create');
// Route::post('/', 'App\Http\Controllers\LoginController@store')->name('auth.store');
// Route::get('/auth', 'App\Http\Controllers\LoginController@add')->name('auth.add');
// Route::post('/auth', 'App\Http\Controllers\LoginController@post')->name('auth.post');
    

Auth::routes();
Route::get('/homeadmin', function () {
    return view('homeadmin');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('/Cofffee shop')->group(function () {
    Route::get('/Trang chủ','App\Http\Controllers\Controller_sanpham@homepage')->name('home');
    Route::get('/sanpham','App\Http\Controllers\Product@sp')->name('product');
    Route::get('/sanphamdet','App\Http\Controllers\Controller_productdetails@d')->name('det');
    Route::get('/tin tuc','App\Http\Controllers\Controllernews@w')->name('news');
    Route::get('/about us','App\Http\Controllers\Controllernews@us')->name('abus');
    Route::get('/tin tuc de','App\Http\Controllers\Controllernews@dn')->name('newdet');
    Route::get('/likeproduct','App\Http\Controllers\Controller_sanpham@like')->name('likeproduct');
    Route::get('/likeproduct1','App\Http\Controllers\Controller_sanpham@like1')->name('likeproduct1');
    Route::get('/likeproduct2','App\Http\Controllers\Controller_sanpham@like2')->name('likeproduct2');
    Route::get('/gio hang','App\Http\Controllers\Controllershopcart@shopc')->name('cart');
    Route::get('/san pham yeu thich','App\Http\Controllers\Controllershopcart@pagelike')->name('plike');
    Route::get('/addc','App\Http\Controllers\Controller_cart@adc')->name('addcart');
    Route::get('/del','App\Http\Controllers\Controller_cart@delete')->name('delete_cart');
    Route::get('/dellike','App\Http\Controllers\Controller_cart@dlike')->name('del_like');
    Route::get('/thanh toán','App\Http\Controllers\Controllershopcart@buy')->name('tt');
    Route::post('/thanh toán thành công','App\Http\Controllers\Controllershopcart@tc')->name('ttc');
});

Route::prefix('admin')->group(function () {
   
    Route::prefix('categories')->group(function () {
       Route::get('/', [
        'as' => 'categories.index',
        'uses' =>'App\Http\Controllers\CategoryController@index'
    ]);

    Route::get('/khoiphuc', [
        'as' => 'categories.khoiphuc',
        'uses' =>'App\Http\Controllers\CategoryController@khoiphuc'
    ]);

    Route::post('/store', [
        'as' => 'categories.store',
        'uses' =>'App\Http\Controllers\CategoryController@store'
    ]);
        Route::get('/deleteht', [
        'as' => 'categories.delete_ht',
        'uses' =>'App\Http\Controllers\CategoryController@delete_ht'
    ]);

    Route::get('/edit', [
        'as' => 'categories.edit',
        'uses' =>'App\Http\Controllers\CategoryController@edit'
    ]);

    Route::get('/delete', [
        'as' => 'categories.delete',
        'uses' =>'App\Http\Controllers\CategoryController@delete'
    ]); 
    });


    Route::prefix('products')->group(function () {

         Route::get('/', [
        'as' => 'products.index',
        'uses' =>'App\Http\Controllers\ProductController@index'
    ]);

    Route::get('/create', [
        'as' => 'products.create',
        'uses' =>'App\Http\Controllers\ProductController@create'
    ]);
    Route::get('/khoiphuc', [
        'as' => 'products.khoiphuc',
        'uses' =>'App\Http\Controllers\ProductController@khoiphuc'
    ]);
    Route::get('/delete_ht', [
        'as' => 'products.delete_ht',
        'uses' =>'App\Http\Controllers\ProductController@delete_ht'
    ]);

    Route::post('/store', [
        'as' => 'products.store',
        'uses' =>'App\Http\Controllers\ProductController@store'
    ]);

    Route::get('/edit', [
        'as' => 'products.edit',
        'uses' =>'App\Http\Controllers\ProductController@edit'
    ]);

    Route::get('/delete', [
        'as' => 'products.delete',
        'uses' =>'App\Http\Controllers\ProductController@delete'
    ]);
    });


    Route::prefix('bills')->group(function () {

        Route::get('/', [
            'as' => 'bills.index',
            'uses' =>'App\Http\Controllers\BillController@index'
        ]);

        Route::get('/create', [
            'as' => 'bills.create',
            'uses' =>'App\Http\Controllers\BillController@create'
        ]);

        Route::post('/store', [
            'as' => 'bills.store',
            'uses' =>'App\Http\Controllers\BillController@store'
        ]);

        Route::get('/edit', [
            'as' => 'bills.edit',
            'uses' =>'App\Http\Controllers\BillController@edit'
        ]);

        Route::get('/delete', [
            'as' => 'bills.delete',
            'uses' =>'App\Http\Controllers\BillController@delete'
        ]);
    });


    Route::prefix('users')->group(function () {

        Route::get('/', [
            'as' => 'users.index',
            'uses' =>'App\Http\Controllers\UserController@index'
        ]);

        Route::post('/update', [
            'as' => 'users.update',
            'uses' =>'App\Http\Controllers\UserController@update'
        ]);

        Route::get('/edit/{id}', [
            'as' => 'users.edit',
            'uses' =>'App\Http\Controllers\UserController@edit'
        ]);

        Route::get('/delete/{id}', [
            'as' => 'users.delete',
            'uses' =>'App\Http\Controllers\UserController@delete'
        ]);
    });

    Route::prefix('news')->group(function () {

            Route::get('/', [
            'as' => 'news.index',
            'uses' =>'App\Http\Controllers\NewController@index'
        ]);

            Route::get('/create', [
                'as' => 'news.create',
                'uses' =>'App\Http\Controllers\NewController@create'
            ]);

            Route::post('/store', [
                'as' => 'news.store',
                'uses' =>'App\Http\Controllers\NewController@store'
            ]);

            Route::get('/edit', [
                'as' => 'news.edit',
                'uses' =>'App\Http\Controllers\NewController@edit'
            ]);

            Route::get('/delete', [
                'as' => 'news.delete',
                'uses' =>'App\Http\Controllers\NewController@delete'
            ]);
            Route::get('/deleteht', [
                'as' => 'news.delete_ht',
                'uses' =>'App\Http\Controllers\NewController@delete_ht'
            ]);
                Route::get('/khoiphuc', [
                'as' => 'news.khoiphuc',
                'uses' =>'App\Http\Controllers\NewController@khoiphuc'
            ]);
    });
    Route::prefix('permission')->group(function () {

        Route::get('/', [
            'as' => 'permission.index',
            'uses' =>'App\Http\Controllers\PermissionController@index'
        ]);
        Route::get('/setting', [
            'as' => 'permission.setting',
            'uses' =>'App\Http\Controllers\PermissionController@setting'
        ]);
        Route::post('/save', [
            'as' => 'permission.save',
            'uses' =>'App\Http\Controllers\PermissionController@save'
        ]);
    });
});


