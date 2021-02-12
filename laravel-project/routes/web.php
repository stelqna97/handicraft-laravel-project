<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Product;
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
    return view('home2');
});



Auth::routes();

Route::get('home','HomeController@index')->name('home');

Route::get('user/myprofile/{id}', 'Admin\UsersController@show')->name('user.profile.show');
Route::get('user/myprofile/{id}/edit', 'Admin\UsersController@editP')->name('user.profile.edit');
Route::post('user/myprofile/{id}/update', 'Admin\UsersController@updateP')->name('user.profile.update');
Route::get('users', 'Admin\UsersController@index')->name('admin.users.index');
Route::get('admin/user/{id}/edit', 'Admin\UsersController@edit')->name('admin.users.edit');
Route::post('admin/user/{id}/update', 'Admin\UsersController@update')->name('admin.users.update');
Route::get('admin/user/{id}/delete', 'Admin\UsersController@destroy')->name('admin.users.destroy');
Route::post('admin/store/user', 'Admin\UsersController@store')->name('admin.users.store');
Route::get('admin/create/user', 'Admin\UsersController@create')->name('admin.users.create');


Route::get('/category/{id}','IndexController@listByCat')->name('categories');
Route::get('/brand/{id}','IndexController@listByBra')->name('brands');


Route::get('admin/category/{id}/show', 'CategoryController@show')->name('category.show');
Route::get('admin/category/{id}/edit', 'CategoryController@edit')->name('category.edit');
Route::post('admin/category/{id}/update', 'CategoryController@update')->name('category.update');
Route::get('categories', 'CategoryController@index')->name('category.index');
Route::get('admin/category/{id}/delete', 'CategoryController@destroy')->name('category.destroy');
Route::post('admin/store/category', 'CategoryController@store')->name('category.store');
Route::get('admin/create/category', 'CategoryController@create')->name('category.create');


Route::get('admin/brand/{id}/show', 'BrandController@show')->name('brand.show');
Route::get('admin/brand/{id}/edit', 'BrandController@edit')->name('brand.edit');
Route::post('admin/brand/{id}/update', 'BrandController@update')->name('brand.update');
Route::get('brands', 'BrandController@index')->name('brand.index');
Route::get('brands/publisher', 'BrandController@indexp')->name('brand.indexp');
Route::get('admin/brand/{id}/delete', 'BrandController@destroy')->name('brand.destroy');
Route::post('admin/store/brand', 'BrandController@store')->name('brand.store');
Route::get('admin/create/brand', 'BrandController@create')->name('brand.create');


Route::get('products', 'ProductController@index')->name('product.index');
Route::get('productsp', 'ProductController@indexp')->name('product.indexp');
Route::get('create/product', 'ProductController@create')->name('create.product');
Route::post('store/product', 'ProductController@store')->name('product.store');
Route::get('edit/product/{id}', 'ProductController@edit');
Route::post('update/product/{id}', 'ProductController@update');
Route::get('delete/product/{id}', 'ProductController@delete');
Route::get('product/{id}/show', 'ProductController@show')->name('product.show');

Route::post('product/add/cart/{id}', 'ProductController@addToCart')->name('product.add.cart');


Route::get('/cart', 'CartController@getCart')->name('cart');
Route::get('/cart/item/{id}/remove', 'CartController@removeItem')->name('cart.remove');
Route::get('/cart/clear', 'CartController@clearCart')->name('cart.clear');


Route::get('/checkout', 'CheckoutController@getCheckout')->name('checkout.index');
Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('checkout.place.order');


Route::get('/orders', 'OrderController@index')->name('admin.orders.index');
Route::get('/order/{id}/show', 'OrderController@show')->name('admin.orders.show');
Route::get('/order/{id}/delete', 'OrderController@destroy')->name('admin.orders.delete');
Route::get('/order/{id}/edit', 'OrderController@edit')->name('admin.orders.edit');
Route::post('/order/{id}/update', 'OrderController@update')->name('admin.orders.update');
Route::get('/myorders', 'OrderController@indexMyOrder')->name('orders.index');
Route::get('/orders/publisher', 'OrderController@indexPublisherOrder')->name('orders.publisher');



Route::any('/search',function(Request $request){
    $search = $request-> input('search');
    $product = Product::where('product_name','LIKE','%'.$search.'%')->orWhere('details','LIKE','%'.$search.'%')->get();
    if (count ( $product ) > 0)
        return view ( 'search', compact('search') )->withDetails ( $product )->withQuery ( $search );
    else
        return view ( 'search', compact('search') )->withMessage ( 'No Details found. Try to search again !' );
});

Route::post('store/ratting', 'RatingController@store')->name('ratting.store');
Route::get('show/ratting', 'RatingController@show')->name('ratting.show');
Route::post('update/{id}/ratting', 'RatingController@update')->name('rating.update');
Route::get('edit/{id}/rating', 'RatingController@edit')->name('rating.edit');
Route::get('ratings','RatingController@index')->name('rating.index');



