<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MunicipalitiesController;
use App\Http\Controllers\DocTypesController;
use App\Http\Controllers\TAndCDocumentController;
use App\Models\DocumentSection;
use App\Models\TAndCDocument;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;



Route::get('draw_table', function() {
    $array_chunks = [];
        $total_sections = DocumentSection::where('document_id', 2)->get();
        $sections_count = count($total_sections);
        $sections = [];

        foreach ($total_sections as $key => $section) {

            $sec_arr = ['title' => str_replace(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.'], '', $section->title), 'table_no' => $section->table_no, 'page_no' => $section->page_no];
            array_push($sections, $sec_arr);
            if (!empty($section->sub_sections)) {
                $sub_secs = json_decode($section->sub_sections);
                $sections_count += count($sub_secs);
                foreach ($sub_secs as $key => $subSec) {
                    array_push($sections, ['title' => str_replace(['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '.'], '', $subSec->title), 'table_no' => $section->table_no . '.' . ++$key, 'page_no' => $section->page_no + $key]);
                }
            }
        }

        $json = json_encode($sections, true);

        $doc = TAndCDocument::where('id', 17)->first();
        $doc->table_content = $json;
        $doc->save();

    
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
            Route::get('edit/{id}', 'edit')->name('edit');
            Route::get('update', 'update')->name('update');
            Route::get('/delete/{id}', 'destroy')->name('delete');
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
