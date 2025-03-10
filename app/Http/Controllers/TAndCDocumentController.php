<?php

namespace App\Http\Controllers;

use App\Jobs\GeneratePDF;
use App\Models\DocTypes;
use App\Models\DocumentSection;
use App\Models\Municipalities;
use App\Models\TAndCDocument;
use App\Traits\UploadFiles;
use ArPHP\I18N\Arabic;
use Barryvdh\Snappy\Facades\SnappyPdf;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;
use niklasravnsborg\LaravelPdf\Facades\Pdf as FacadesPdf;

class TAndCDocumentController extends Controller
{

    use UploadFiles;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.documents.index')->with('tcds', TAndCDocument::where('id', '>', 2)->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $request->validate([
            'baladia_id' => 'required',
            'type_id' => 'required',
        ]);
        $baladia = Municipalities::whereId($request->baladia_id)->first();
        $baladia_name = $baladia->name;
        $baladia_logo = $baladia->logo;
        $type = DocTypes::whereId($request->type_id)->first();
        $type_name = $type->name;
        $qr_img = '';
        $card_img = '';
        $plan_img = '';

        if ($request->land['qr_code']) {
            $qr_img = $this->upload('public/uploads', $request->file('land.qr_code'));
        }

        if ($request->land['plan_img']) {
            $plan_img = $this->upload('public/uploads', $request->file('land.plan_img'));
        }

        if ($request->land['card_img']) {
            $card_img = $this->upload('public/uploads', $request->file('land.card_img'));
        }




        $newTCDOriginal = TAndCDocument::whereId(2)->first();
        $newTCD = $newTCDOriginal->replicate();
        $newTCD->mun_name = $baladia_name;
        $newTCD->mun_logo = $baladia_logo;
        $newTCD->type_name = $type_name;
        $newTCD->land_spec = json_encode($request->land);
        $newTCD->year = $request->year;
        $newTCD->sketching_img = $plan_img;
        $newTCD->descripe_img = $card_img;
        $newTCD->save();


        foreach ($newTCDOriginal->sections as $section) {

            // intro
            if ($section->id == 4) {
                $description = str_replace("{baladia_name}", $baladia_name, $section->description);
                $description = str_replace("{district_name}", $request->land['district'] ?? '-', $description);
                $description = str_replace("{planned}", $request->land['planned'] ?? '-', $description);
                $description = str_replace("{land_no}", $request->land['no'] ?? '-', $description);
                $description = str_replace("{city}", $request->land['city'] ?? '-', $description);


                $new_section = $section->replicate();
                $new_section->description = $description;
                $new_section->document_id = $newTCD->id;
            } else if ($section->id == 5) //location description
            {
                $table_body = str_replace('{city}', $request->land['city'] ?? '-', $section->table_body);
                $table_body = str_replace('{street}', $request->land['street'] ?? '-', $table_body);
                $table_body = str_replace('{planned}', $request->land['planned'] ?? '-', $table_body);
                $table_body = str_replace('{baladia}', $baladia_name ?? '-', $table_body);
                $table_body = str_replace('{district}', $request->land['district'] ?? '-', $table_body);
                $table_body = str_replace('{land_no}', $request->land['no'] ?? '-', $table_body);
                $table_body = str_replace('{qr_code}', url($qr_img) ?? '-', $table_body);
                $table_body = str_replace('{north}', $request->land['north'] ?? '-', $table_body);
                $table_body = str_replace('{northLen}', $request->land['north_len'] ?? '-', $table_body);
                $table_body = str_replace('{south}', $request->land['south'] ?? '-', $table_body);
                $table_body = str_replace('{southLen}', $request->land['south_len'] ?? '-', $table_body);
                $table_body = str_replace('{east}', $request->land['east'] ?? '-', $table_body);
                $table_body = str_replace('{eastLen}', $request->land['east_len'] ?? '-', $table_body);
                $table_body = str_replace('{west}', $request->land['west'] ?? '-', $table_body);
                $table_body = str_replace('{westLen}', $request->land['west_len'] ?? '-', $table_body);
                $table_body = str_replace('{area}', $request->land['area'] ?? '-', $table_body);
                $table_body = str_replace('{areaInWords}', $request->land['areaInWords'] ?? '-', $table_body);
                $table_body = str_replace('{lat}', $request->land['lat'] ?? '-', $table_body);
                $table_body = str_replace('{long}', $request->land['long'] ?? '-', $table_body);
                $table_body = str_replace('{doc_type}', $type->name ?? '-', $table_body);

                $newSec = $section->replicate();
                $newSec->table_body = $table_body;
                $newSec->document_id = $newTCD->id;
                $newSec->save();
            } else if ($section->id == 10) {
                $newSubSec = str_replace('{pub_precent}', $request->pub_precent ?? '-', $section->sub_sections);
                $newSec = $section->replicate();
                $newSec->sub_sections = $newSubSec;
                $newSec->document_id = $newTCD->id;
                $newSec->save();
            } else {
                $newSec = $section->replicate();
                $newSec->document_id = $newTCD->id;
                $newSec->save();
            }
        }

        return redirect()->route('tcd.index');
    }


    public function print($id)
    {

        $doc = TAndCDocument::findOrFail($id);
        $docType = DocTypes::where('name', $doc->type_name)->first();
        if (!empty($docType)) {
            if ($docType->has_theme == 0) {
                return redirect()->back()->with('error', 'عفوا لا يوجد تصميم لهذا النوع');
            } else {

                
                  GeneratePDF::dispatch($doc, rand(1,99999999).'_'.$doc->mun_name .'_'.$doc->type_name.'_'.'.pdf', Auth::user()->id);
                    return redirect()->back()->with('success', 'يتم الان انشاء الملف الخاص بكـ و سيتم ارسال الاشعار حين يكون مكتمل للتحميل');
            }
        } else {
            return redirect()->back()->with('error', 'عفوا لا يوجد تصميم لهذا النوع');
        }
    }

    public function downloadPDF($fileName)
    {
        $filePath = storage_path("app/public/{$fileName}");

        // Ensure the file exists before serving it
        if (file_exists($filePath)) {
            return response()->download($filePath);
        } else {
            return response()->json(['error' => 'File not found.'], 404);
        }
    }



    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        return view('admin.pdf.template1')->with('doc', TAndCDocument::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.documents.update')->with('section' , DocumentSection::findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        DocumentSection::where('document_id', $id)->delete();
        TAndCDocument::where('id', $id)->delete();

        return redirect()->route('tcd.index')->with('success', 'تم حذف الكراسة بنجاح');
    }
}
