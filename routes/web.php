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
// FE
Route::get('/', 'HomeController@index');
Route::get('/trang-chu', 'HomeController@index');
Route::post('/tim-kiem', 'HomeController@search');
//SP yeu thich
Route::get('/wishlist', 'HomeController@wishlist');

//Danh muc san pham trang chu
Route::get('/danh-muc-san-pham/{category_id}', 'CategoryProduct@show_category_home');
Route::get('/chi-tiet-san-pham/{category_id}', 'ProductController@details_product');


//BE
Route::get('/admin', 'AdminController@dashboard');
Route::get('/dashboard', 'AdminController@show_dashboard');
Route::post('/admin-dashboard', 'AdminController@admin_dashboard');
Route::get('/logout', 'AdminController@logout');

//Category Product
Route::get('/add-category-product', 'CategoryProduct@add_category_product');

Route::get('/edit-category-product/{category_product_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category-product/{category_product_id}', 'CategoryProduct@delete_category_product');

Route::get('/all-category-product', 'CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'CategoryProduct@unactive_category_product');
Route::get('/active-category-product/{category_product_id}', 'CategoryProduct@active_category_product');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_product_id}', 'CategoryProduct@update_category_product');

//Brand Product
Route::get('/add-brand-product', 'BrandProduct@add_brand_product');

Route::get('/edit-brand-product/{brand_product_id}', 'BrandProduct@edit_brand_product');
Route::get('/delete-brand-product/{brand_product_id}', 'BrandProduct@delete_brand_product');

Route::get('/all-brand-product', 'BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}', 'BrandProduct@unactive_brand_product');
Route::get('/active-brand-product/{brand_product_id}', 'BrandProduct@active_brand_product');

Route::post('/save-brand-product', 'BrandProduct@save_brand_product');
Route::post('/update-brand-product/{brand_product_id}', 'BrandProduct@update_brand_product');

//CategoryPost
Route::get('/add-category-post', 'CategoryPost@add_category_post');
Route::post('/save-category-post', 'CategoryPost@save_category_post');
Route::get('/all-category-post', 'CategoryPost@all_category_post');
Route::get('/blog', 'CategoryPost@show_blog');
Route::get('/danh-muc-bai-viet/{cate_post_slug}', 'CategoryPost@blog_details');
Route::get('/edit-category-post/{category_post_id}', 'CategoryPost@edit_category_post');
Route::post('/update-category-post/{cate_id}', 'CategoryPost@update_category_post');
Route::get('/delete-category-post/{cate_id}', 'CategoryPost@delete_category_post');

//Post
Route::get('/add-post', 'PostController@add_post');
Route::post('/save-post', 'PostController@save_post');


//Product
Route::get('/add-product', 'ProductController@add_product');

Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');

Route::get('/all-product', 'ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');
//Cart
Route::post('/save-cart', 'CartController@save_cart');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/del-product/{session_id}', 'CartController@delete_product');
Route::get('/show-cart', 'CartController@show_cart');
Route::post('/add-cart-ajax', 'CartController@add_cart_ajax');
//Checkout
Route::get('/login-checkout', 'CheckoutController@login_checkout');
Route::get('/logout-checkout', 'CheckoutController@logout_checkout');
Route::post('/login-customer', 'CheckoutController@login_customer');
Route::post('/add-customer', 'CheckoutController@add_customer');
Route::get('/checkout', 'CheckoutController@checkout');
Route::post('/save-checkout-customer', 'CheckoutController@save_checkout_customer');
Route::get('/quen-mat-khau', 'CheckoutController@forgot_password');
Route::post('/recover-pass', 'CheckoutController@recover_pass');
//Route::post('/confirm-order', 'CheckoutController@confirm_order');
//Order
Route::get('/manage-order', 'CheckoutController@manage_order');
Route::get('/view-order/{orderId}', 'CheckoutController@view_order');
Route::get('/delete-order/{orderId}', 'CheckoutController@delete_order');
//Coupon
Route::post('/check-coupon', 'CartController@check_coupon');

Route::get('/unset-coupon', 'CouponController@unset_coupon');
Route::get('/insert-coupon', 'CouponController@insert_coupon');
Route::post('/insert-coupon-code', 'CouponController@insert_coupon_code');
Route::get('/list-coupon', 'CouponController@list_coupon');
Route::get('/delete-coupon/{coupon_id}', 'CouponController@delete_coupon');

//Shop
Route::get('/shop', 'ProductController@shop');
//Contact
Route::get('/contact', 'ContactController@contact');
Route::get('/information', 'ContactController@information');
Route::post('/save-info', 'ContactController@save_info');
Route::post('/update-info/{info_id}', 'ContactController@update_info');


