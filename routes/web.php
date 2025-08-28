<?php

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
Route::get('/Terms-of-Use', [FrontendController::class, 'terms'])->name('terms');
Route::get('/Blogs', [FrontendController::class, 'blog'])->name('blog');
Route::get('/blog-details', [FrontendController::class, 'bdetails'])->name('bdetails');
Route::get('/cancellation-policy', [FrontendController::class, 'cancellationpolicy'])->name('cancellationpolicy');
Route::post('/booking', [FrontendController::class, 'booking'])->name('booking');
Route::get('/booking-details/{id}', [FrontendController::class, 'bookingDetails'])->name('booking.details');
Route::get('/booking/{id}/payment', [FrontendController::class, 'bookingPayment'])->name('booking.payment');
Route::post('/booking/{id}/callback', [FrontendController::class, 'bookingCallback'])->name('booking.callback');
Route::post('/save-details/{id}', [FrontendController::class, 'saveDetails'])->name('details');
Route::post('/inquiry', [FrontendController::class, 'inquiry'])->name('inquiry');



Route::group(['prefix' => '/backend', 'middleware' => 'auth', 'as' => 'backend.'], function () {

    Route::post('/download-attachment', [FrontendController::class, 'download'])->name('download');

    Route::group(['prefix' => '/days', 'as' => 'day.'], function () {
        Route::get('/', [DisabledDayController::class, 'index'])->name('index');
        Route::get('/create', [DisabledDayController::class, 'create'])->name('create');
        Route::post('/', [DisabledDayController::class, 'store'])->name('store');
        Route::delete('/{id}', [DisabledDayController::class, 'destroy'])->name('destroy');
    });

    Route::group(['prefix' => '/dates', 'as' => 'date.'], function () {
        Route::get('/', [DisabledDateController::class, 'index'])->name('index');
        Route::get('/create', [DisabledDateController::class, 'create'])->name('create');
        Route::post('/', [DisabledDateController::class, 'store'])->name('store');
        Route::delete('/{id}', [DisabledDateController::class, 'destroy'])->name('destroy');
    });

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
});

Route::fallback(function () {
    return view('auth.error-404');
})->name('error.404');

Route::get('/test', function () {});
