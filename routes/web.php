<?php

use App\Http\Controllers\BlogCategoryController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DisabledDateController;
use App\Http\Controllers\DisabledDayController;
use App\Http\Controllers\DisabledSlotController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\TransportationVehicleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// Public route for index page

require __DIR__ . '/auth.php';

Route::get('/', [FrontendController::class, 'index'])->name('root');
Route::get('/gir-jungle', [FrontendController::class, 'girJungle'])->name('girJungle');
Route::get('/gir-devaliya', [FrontendController::class, 'girDevaliya'])->name('girDevaliya');
Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contactUs');
Route::get('/privacy-policy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/faq', [FrontendController::class, 'faq'])->name('faq');
Route::get('/how_to_reach', [FrontendController::class, 'howtoreach'])->name('howtoreach');
Route::get('/dosanddonts', [FrontendController::class, 'dosdonts'])->name('dosdonts');
Route::get('/cancellation-policy', [FrontendController::class, 'cancellationpolicy'])->name('cancellationpolicy');
Route::post('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/booking-details/{id}', [FrontendController::class, 'bookingDetails'])->name('booking.details');
Route::get('/booking/{id}/payment', [FrontendController::class, 'bookingPayment'])->name('booking.payment');
Route::post('/booking/{id}/callback', [FrontendController::class, 'bookingCallback'])->name('booking.callback');
Route::post('/save-details/{id}', [FrontendController::class, 'saveDetails'])->name('details');
Route::post('/inquiry', [FrontendController::class, 'inquiry'])->name('inquiry');
Route::get('/blogs', [FrontendController::class, 'blogs'])->name('blogs');
Route::get('/blogs/{id}', [FrontendController::class, 'blogDetails'])->name('blogDetails');


Route::group(['prefix' => '/backend', 'middleware' => 'auth', 'as' => 'backend.'], function () {

    Route::post('/download-attachment', [FrontendController::class, 'download'])->name('download');

    Route::group(['prefix' => '/disabled-slots', 'as' => 'disabled.slot.'], function () {
        Route::get('/', [DisabledSlotController::class, 'index'])->name('index');
        Route::get('/create', [DisabledSlotController::class, 'create'])->name('create');
        Route::post('/', [DisabledSlotController::class, 'store'])->name('store');
        Route::delete('/{id}', [DisabledSlotController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/transportation-vehicle', 'as' => 'transportation.vehicle.'], function () {
        Route::get('/', [TransportationVehicleController::class, 'index'])->name('index');
        Route::get('/create', [TransportationVehicleController::class, 'create'])->name('create');
        Route::post('/', [TransportationVehicleController::class, 'store'])->name('store');
        Route::delete('/{id}', [TransportationVehicleController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/packages', 'as' => 'package.'], function () {
        Route::get('/', [PackageController::class, 'index'])->name('index');
        Route::get('/create', [PackageController::class, 'create'])->name('create');
        Route::post('/', [PackageController::class, 'store'])->name('store');
        Route::get('/{id}', [PackageController::class, 'edit'])->name('edit');
        Route::post('/{id}', [PackageController::class, 'update'])->name('update');
        Route::delete('/{id}', [PackageController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/bookings', 'as' => 'booking.'], function () {
        Route::get('/', [BookingController::class, 'index'])->name('index');
        Route::get('/create', [BookingController::class, 'create'])->name('create');
        Route::post('/', [BookingController::class, 'store'])->name('store');
        Route::post('/show/{id}', [BookingController::class, 'show'])->name('show');
        Route::get('/{id}', [BookingController::class, 'edit'])->name('edit');
        Route::post('/{id}', [BookingController::class, 'update'])->name('update');
        Route::delete('/{id}', [BookingController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/blog-category', 'as' => 'blog.category.'], function () {
        Route::get('/', [BlogCategoryController::class, 'index'])->name('index');
        Route::get('/create', [BlogCategoryController::class, 'create'])->name('create');
        Route::post('/', [BlogCategoryController::class, 'store'])->name('store');
        Route::get('/{id}', [BlogCategoryController::class, 'edit'])->name('edit');
        Route::post('/{id}', [BlogCategoryController::class, 'update'])->name('update');
        Route::delete('/{id}', [BlogCategoryController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/blog', 'as' => 'blog.'], function () {
        Route::get('/', [BlogController::class, 'index'])->name('index');
        Route::get('/create', [BlogController::class, 'create'])->name('create');
        Route::post('/', [BlogController::class, 'store'])->name('store');
        Route::get('/{id}', [BlogController::class, 'edit'])->name('edit');
        Route::post('/{id}', [BlogController::class, 'update'])->name('update');
        Route::delete('/{id}', [BlogController::class, 'destroy'])->name('destroy');
    });
});

Route::fallback(function () {
    return view('auth.error-404');
})->name('error.404');

Route::get('/test', function () {});
