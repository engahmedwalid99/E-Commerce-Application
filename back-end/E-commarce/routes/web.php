<?php

use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Auth\loginController;
use App\Http\Controllers\Auth\logoutController;
use App\Http\Controllers\Auth\GoogleController;
use App\Http\Controllers\Auth\GithubController;
use App\Http\Controllers\Admin\ordersController;
use App\Http\Controllers\Admin\orderdController;
use App\Http\Controllers\Auth\registerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\User\blockedUserController;
use App\Http\Controllers\News\newsSubscribeController;
use App\Http\Controllers\Notifications\deleteNotofication;
use App\Http\Controllers\profile\updatePasswordController;
use App\Http\Controllers\Notifications\updateNotofication;
use App\Http\Controllers\profile\updateProfileDataController;
use App\Http\Controllers\Notifications\sendNoteToUserController;
use App\Http\Controllers\Notifications\showNotificationController;

// Home
Route::get('/', function () {
    $products = Product::paginate(4);
     return view('welcome', ['products'=> $products]);
})->name('home')->middleware('status');

// Register
Route::get('/register', [registerController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [registerController::class,'create_account'])->name('create_account')->middleware('guest');

// Login
Route::get('/login', [loginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [loginController::class, 'login'])->name('login.post')->middleware('guest');

// Github Authentication
Route::get('/auth/github/redirect', [GithubController::class, 'redirect'])->name('github.redirect');
Route::get('/auth/github/callback', [GithubController::class, 'callback'])->name('github.callback');

// Google Authentication
Route::get('/auth/google/redirect', [GoogleController::class, 'redirect'])->name('google.redirect');
Route::get('/auth/google/callback', [GoogleController::class, 'callback'])->name('google.callback');


// User
Route::middleware(['auth', 'status'])->group(function () {

    Route::get('product-details/{id}', [ProductController::class, 'product_details'])->name('product_details');
    Route::get('all-products', [ProductController::class, 'all_products'])->name('all_products');

    Route::get('/cart', [CartController::class, 'index'])->name('cart');
    Route::post('/cart/add/{product}', [CartController::class, 'add'])->name('cart.add');
    Route::put('/cart/update/{id}', [CartController::class, 'update'])->name('cart.update');
    Route::delete('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
    Route::delete('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
    Route::get('/my-orders', [OrderController::class, 'index'])->name('orders.index');
    Route::get('/my-orders/{id}', [OrderController::class, 'show'])->name('orders.show');

    Route::get('/checkout', [OrderController::class, 'checkout'])->name('checkout');
    Route::post('/checkout', [OrderController::class, 'store'])->name('checkout.store');
    
    Route::post('subscript', [newsSubscribeController::class ,'subscribe'])->name('subscribe');

    Route::get('all-notification', [showNotificationController::class, '__invoke'])->name('all_notification');
    
    Route::prefix('user')->group(function () {

        Route::get('/profile', function () {
            return view('User.profile');
        })->name('user.profile');

        Route::post('/update-personal-data', [updateProfileDataController::class, 'update'])->name('update-profile-data');

        Route::post('/logout', [logoutController::class,'logout'])->name('logout');

        Route::post('/update-password', [updatePasswordController::class, 'update'])->name('update-password');
    });

    Route::prefix('admin')->middleware('role:admin')->group(function () {
        Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
        Route::get('/content', [dashboardController::class, 'content'])->name('content');

        Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add_product');
        Route::post('/store-product', [ProductController::class, 'store'])->name('store_product');
        Route::get('/show-products', [ProductController::class, 'show_products'])->name('show_products');
        Route::get('update-product/{id}', [ProductController::class, 'show_update_product'])->name('show_update_product');
        Route::post('update-product/{id}', [ProductController::class, 'update_product'])->name('update_product');
        Route::post('delet-product/{id}', [ProductController::class, 'delet_product'])->name('delet_product');

        Route::get('/orders', [ordersController::class, 'index'])->name('admin.orders.index');
        Route::get('/orders/{id}', [ordersController::class, 'show'])->name('admin.orders.show');
        Route::put('/orders/{id}/status', [ordersController::class, 'updateStatus'])->name('admin.orders.updateStatus');

        Route::get('users', [dashboardController::class, 'users'])->name('view.users');
        Route::delete('delete_user/{id}', [dashboardController::class, 'delete_user'])->name('delete_user');
        Route::post('active-user/{id}', [dashboardController::class,'active_user'])->name('active-user');
        Route::post('block-user/{id}', [dashboardController::class,'block_user'])->name('block-user');
        Route::patch('/update-user-role/{id}',[dashboardController::class, 'updateRole'])->name('update-user-role');

        Route::get('add-notification', [dashboardController::class, 'view_notification'])->name('view_add_notification');
        Route::get('notifications-control', [dashboardController::class, 'admin_notification'])->name('adminNotification');
        Route::post('notifications', [sendNoteToUserController::class, '__invoke'])->name('send_notifications');

        Route::delete('delete-notification/{id}', [deleteNotofication::class, '__invoke'])->name('delete_notification');
        Route::get('update-notification/{id}', [updateNotofication::class, 'show'])->name('show_update_notification');
        Route::post('save-notification/{id}', [updateNotofication::class, 'save'])->name('save_update_notification');
    });
});

Route::view('/return-policy', 'Pages.return-policy')->name('return.policy')->middleware('status');

Route::view('/shipping', 'Pages.shipping')->name('shipping')->middleware('status');

Route::view('/faq', 'Pages.faq')->name('faq')->middleware('status');

Route::view('/terms', 'Pages.terms')->name('terms')->middleware('status');

Route::view('/privacy-policy', 'Pages.privacy')->name('privacy')->middleware('status');

Route::fallback(function () {
    return view('404');
});

// Blocked User
Route::get('blocked-user', [blockedUserController::class, '__invoke'])->name('blocked-user')->middleware('user-blocked');

// Normal Contact
Route::get('/contact-us', function () {
    return view('Contact.contact');
})->name('contact')->middleware('status');

// Contact For Blocked
Route::get('/user-blocked-contact', function () {
    return view('Contact.contactBlocked');
})->name('contact-for-blocked')->middleware('user-blocked');
