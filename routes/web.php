<?php

use App\Models\Lead;
use Illuminate\Http\Request;
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

//Route::middleware([
//    'auth:sanctum',
//    config('jetstream.auth_session'),
//    'verified'
//])->group(function () {
    Route::get('/', function (Request $request) {
        return view('dashboard')
            ->with('leads', (new Lead)->latest()->userFilters()->paginate(10));
    })->name('leads');

    Route::get('/my-leads', function () {
        return view('leads.bought');
    })->name('leads.bought');

    Route::get('/my-leads/view', function () {
        return view('leads.view');
    })->name('leads.view');

    Route::get('/subscription', function () {
        return view('subscription');
    })->name('subscription');

    Route::get('/pro-subscription', function () {
        return view('subscription.pro');
    })->name('subscription.pro');

    Route::get('/community', function () {
        return view('community');
    })->name('community');

    Route::get('/faq', function () {
        return view('faq');
    })->name('faq');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');
//});
