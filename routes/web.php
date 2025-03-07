<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\DocTypesController;
use App\Http\Controllers\TAndCDocumentController;
use App\Models\TAndCDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('update', 'update')->name('update');
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


    Route::get('/download-file/{file_name}', function ($file_name) {
        foreach (Auth::user()->notifications()->get() as $notification) {
            $notification->read_at = now();
            $notification->save();
        }

        return response()->download(Storage::disk('public')->path($file_name));
    });

    Route::get('new_notification', function () {
        if (Auth::user()->notifications()->where('read_at', null)->count() >= 1) {
            return [
                "found" => 1,
                "data" => view('admin.notifications')->render(),
            ];
        } else {
            return [
                "found" => 0,
                "data" => []
            ];
        }
    });
    Route::controller(DocTypesController::class)->group(function () {
        Route::prefix('docType')->as('doc.')->group(function () {
            Route::get('index', 'index')->name('index');
            Route::get('create', 'create')->name('create');
            Route::post('store', 'store')->name('store');
            Route::get('/edit/{id}', 'edit')->name('edit');
            Route::post('/update', 'update')->name('update');
            Route::get('/destroy/{id}', 'destroy')->name('delete');
        });
    });
});
