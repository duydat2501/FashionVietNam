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
//front end
Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/trang-chu', 'App\Http\Controllers\HomeController@index');
Route::get('/tim-kiem', 'App\Http\Controllers\HomeController@search');
Route::get('/tim-kiem-nang-cao', 'App\Http\Controllers\HomeController@avanced_search');
Route::get('/tim-kiem-nang-cao-danh-muc', 'App\Http\Controllers\HomeController@avanced_search_category');



Route::get('/news', 'App\Http\Controllers\HomeController@news');

Route::get('/detail-news1', 'App\Http\Controllers\HomeController@detail_news1');
Route::get('/detail-news2', 'App\Http\Controllers\HomeController@detail_news2');
Route::get('/detail-news3', 'App\Http\Controllers\HomeController@detail_news3');


Route::get('/shop', 'App\Http\Controllers\HomeController@shop');
Route::get('/detail', 'App\Http\Controllers\HomeController@detail');
Route::get('/cart', 'App\Http\Controllers\HomeController@cart');
Route::get('/checkout-customer', 'App\Http\Controllers\HomeController@checkout_customer');
Route::get('/contact', 'App\Http\Controllers\HomeController@contact');
// login customer
Route::get('/login-customer', 'App\Http\Controllers\HomeController@login_customer');
Route::get('/signup-customer', 'App\Http\Controllers\HomeController@signup_customer');


// Admin

//danh muc san pham - trang chu
Route::get('/danh-muc-san-pham/{category_id}', 'App\Http\Controllers\CategoryProduct@show_category_home');
Route::get('/thuong-hieu-san-pham/{brand_id}', 'App\Http\Controllers\BrandProduct@show_brand_home');
Route::get('/chi-tiet-san-pham/{product_id}', 'App\Http\Controllers\ProductController@details_product');


//backend
Route::get('/admin', 'App\Http\Controllers\AdminController@index');
Route::get('/dashboard', 'App\Http\Controllers\AdminController@show_dashboard');
Route::post('/admin-dashboard', 'App\Http\Controllers\AdminController@dashboard');
Route::get('/logout', 'App\Http\Controllers\AdminController@logout');



//category
Route::get('/add-category-product', 'App\Http\Controllers\CategoryProduct@add_category_product')->middleware('auth.roles');
Route::get('/all-category-product', 'App\Http\Controllers\CategoryProduct@all_category_product');

Route::get('/unactive-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@unactive_category_product')->middleware('auth.roles');
Route::get('/active-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@active_category_product')->middleware('auth.roles');

Route::get('/edit-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@edit_category_product')->middleware('auth.roles');
Route::get('/delete-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@delete_category_product')->middleware('auth.roles');

Route::post('/save-category-product', 'App\Http\Controllers\CategoryProduct@save_category_product');
Route::get('/update-category-product/{category_product_id}', 'App\Http\Controllers\CategoryProduct@update_category_product');

Route::get('/tim-kiem-category', 'App\Http\Controllers\CategoryProduct@tim_kiem_category');

//brand
Route::get('/add-brand-product', 'App\Http\Controllers\BrandProduct@add_brand_product')->middleware('auth.roles');
Route::get('/all-brand-product', 'App\Http\Controllers\BrandProduct@all_brand_product');

Route::get('/unactive-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@unactive_brand_product')->middleware('auth.roles');
Route::get('/active-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@active_brand_product')->middleware('auth.roles');

Route::get('/edit-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@edit_brand_product')->middleware('auth.roles');
Route::get('/delete-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@delete_brand_product')->middleware('auth.roles');

Route::post('/save-brand-product', 'App\Http\Controllers\BrandProduct@save_brand_product');
Route::get('/update-brand-product/{brand_product_id}', 'App\Http\Controllers\BrandProduct@update_brand_product');

Route::post('/tim-kiem-brand', 'App\Http\Controllers\BrandProduct@tim_kiem_brand');

//product
Route::get('/add-product', 'App\Http\Controllers\ProductController@add_product')->middleware('auth.roles');
Route::get('/all-product', 'App\Http\Controllers\ProductController@all_product');

Route::get('/unactive-product/{product_id}', 'App\Http\Controllers\ProductController@unactive_product')->middleware('auth.roles');
Route::get('/active-product/{product_id}', 'App\Http\Controllers\ProductController@active_product')->middleware('auth.roles');

Route::get('/edit-product/{product_id}', 'App\Http\Controllers\ProductController@edit_product')->middleware('auth.roles');
Route::get('/delete-product/{product_id}', 'App\Http\Controllers\ProductController@delete_product')->middleware('auth.roles');

Route::post('/save-product', 'App\Http\Controllers\ProductController@save_product');
Route::post('/update-product/{product_id}', 'App\Http\Controllers\ProductController@update_product');

Route::get('/tim-kiem-product', 'App\Http\Controllers\ProductController@tim_kiem_product');
Route::post('/tim-kiem-nang-cao-product', 'App\Http\Controllers\ProductController@tim_kiem_nang_cao_product');



//Cart
Route::post('/save-cart', 'App\Http\Controllers\CartController@save_cart');
Route::get('/show-cart', 'App\Http\Controllers\CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'App\Http\Controllers\CartController@delete_to_cart');
Route::post('/update-cart-quantity', 'App\Http\Controllers\CartController@update_cart_quantity');

// checkout
Route::get('/login-checkout', 'App\Http\Controllers\CheckoutController@login_checkout');
Route::get('/logout-checkout', 'App\Http\Controllers\CheckoutController@logout_checkout');

Route::get('/signup-checkout', 'App\Http\Controllers\CheckoutController@signup_checkout');

Route::post('/add-customer', 'App\Http\Controllers\CheckoutController@add_customer');


//checkout
Route::get('/checkout', 'App\Http\Controllers\CheckoutController@checkout');
Route::post('/save-checkout-customer', 'App\Http\Controllers\CheckoutController@save_checkout_customer');
Route::post('/login-customer-login', 'App\Http\Controllers\CheckoutController@login_customer_login');
Route::get('/payment', 'App\Http\Controllers\CheckoutController@payment');
Route::post('/order-place', 'App\Http\Controllers\CheckoutController@order_place');

// view orders customer
Route::get('/vieworder-customer/{customer_name}', 'App\Http\Controllers\CustomerController@vieworder_customer');
Route::get('/viewdetails-order-customer/{order_code}', 'App\Http\Controllers\CustomerController@viewdetails_order_customer');

// order     

Route::get('/manage-order', 'App\Http\Controllers\OrderController@manage_order');

Route::get('/print-order/{order_id}', 'App\Http\Controllers\OrderController@print_order');


// Route::get('/manage-order', 'App\Http\Controllers\CheckoutController@manage_order');
Route::get('/view-order/{order_code}', 'App\Http\Controllers\OrderController@view_order')->middleware('auth.roles');
Route::post('/update-order-qty', 'App\Http\Controllers\OrderController@update_order_qty'); //hinh nhu cai nay sai


Route::post('/update-order-quantity', 'App\Http\Controllers\OrderController@update_order_qty');

Route::post('/update-qty', 'App\Http\Controllers\OrderController@update_qty');


// update quantity product in report

//authentication roles
Route::get('/register-auth', 'App\Http\Controllers\AuthController@register_auth');
Route::post('/register', 'App\Http\Controllers\AuthController@register');
Route::get('/login-auth', 'App\Http\Controllers\AuthController@login_auth');

Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout-auth', 'App\Http\Controllers\AuthController@logout_auth');

// user
Route::get('/users', 'App\Http\Controllers\UserController@index')->middleware('auth.roles');
Route::post('/assign-roles', 'App\Http\Controllers\UserController@assign_roles')->middleware('auth.roles');
Route::get('add-users', 'App\Http\Controllers\UserController@add_users')->middleware('auth.roles');
Route::post('store-users', 'App\Http\Controllers\UserController@store_users')->middleware('auth.roles');

Route::get('/delete-user-roles/{admin_id}', 'App\Http\Controllers\UserController@delete_user_roles')->middleware('auth.roles');
Route::get('/tim-kiem-admin', 'App\Http\Controllers\UserController@search')->middleware('auth.roles');


// backend-thong ke
Route::post('/filter-by-date', 'App\Http\Controllers\AdminController@filter_by_date');
Route::post('/dashboard-filter', 'App\Http\Controllers\AdminController@dashboard_filter');

Route::post('/get-30-days', 'App\Http\Controllers\AdminController@get30days');

// bao cao khi het san pham
Route::get('/report', 'App\Http\Controllers\ReportController@report');
Route::post('/tim-kiem-report', 'App\Http\Controllers\ReportController@tim_kiem_report')->middleware('auth.roles');
Route::post('/tim-kiem-nang-cao-report', 'App\Http\Controllers\ReportController@tim_kiem_nang_cao_report')->middleware('auth.roles');
// nhập thêm sản phẩm vào trong kho trong chức năng báo cáo sản phẩm sắp hết
Route::post('/import-product-qty', 'App\Http\Controllers\ReportController@import_product_qty')->middleware('auth.roles');

// customer
Route::get('/all-customers', 'App\Http\Controllers\CustomerController@all_customers');
Route::get('/tim-kiem-customer', 'App\Http\Controllers\CustomerController@tim_kiem_customer');

// search manage order
Route::get('/tim-kiem-manageorder', 'App\Http\Controllers\OrderController@tim_kiem_manageorder');