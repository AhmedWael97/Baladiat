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


function wrapEnglishWords($text)
{
    return preg_replace_callback('/\b[a-zA-Z0-9]+(?:\.[a-zA-Z0-9]+)*\b/', function ($matches) {
        return "<span dir='ltr' style='direction: ltr'>{$matches[0]}</span>";
    }, $text);
}

function addNewLineBeforeNumberedSpans($text)
{
    return preg_replace('/(?<!\n)(<span dir=[\'"]ltr[\'"] style=[\'"]direction: ltr[\'"]>\d+\.\d+\.\d+<\/span>)/', "<br>$1", $text);
}

// Route::get('/adding-br', function () {
   

//     $secs = DocumentSection::where('document_id', 16)->where('sub_sections', '!=', null)->get();
//    foreach($secs as $sec) {
//     $json = json_decode($sec->sub_sections);
//     foreach($json as $line) {
//         $line->content = addNewLineBeforeNumberedSpans($line->content);
//     }
//     $sec->sub_sections = json_encode($json);
//     $sec->save();
//    }

   
   
// });


// Route::get('/remove-tags', function () {



//     $secs = DocumentSection::where('document_id', '2')->get();


//     foreach ($secs as $sec) {
//         if (!empty($sec->sub_sections)) {
//             $js = json_decode($sec->sub_sections);
//             foreach ($js as $line) {
//                 $line->title = wrapEnglishWords(str_replace(['&nbsp;','1','2','3','4','5','6','7','8','9','0','.'], ' ', strip_tags($line->title)));
//                 $line->content = wrapEnglishWords(str_replace(['&nbsp;'], ' ', strip_tags($line->content)));
//             }
//             $sec->sub_sections = json_encode($js);
//             $sec->save();
//         }

//     }
// });

// Route::get('/only-fix', function() {
//     $secs = DocumentSection::where('document_id', '16')->get();


//     foreach ($secs as $sec) {
//         $sec->notes = wrapEnglishWords($sec->notes);
//         $sec->save();
//     }
// });

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
