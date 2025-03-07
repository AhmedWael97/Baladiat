<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\TAndCDocumentController;
use App\Models\TAndCDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/printly/2', function () {
    return view('print')->with('doc', TAndCDocument::findOrFail(7));
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('/login-post', [LoginController::class, 'login'])->name('login.post');


Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('tcd.create');
    }
    return view('auth.login');
});


Route::middleware('auth')->group(function () {

    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });

    Route::controller(TAndCDocumentController::class)->group(function () {
        Route::prefix('tcd')->as('tcd.')->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('print-document/{id}', 'print')->name('print-doc');
            Route::get('view/{id}', 'show')->name('view');
        });
    });

    Route::controller(MunicipalitiesController::class)->group(function () {
        Route::prefix('municipalities')->as('mun.')->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('delete');
        });
    });
});
