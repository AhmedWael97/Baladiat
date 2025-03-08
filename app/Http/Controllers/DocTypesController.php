<?php

namespace App\Http\Controllers;

use App\Models\DocTypes;
use Illuminate\Http\Request;

class DocTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.doc.index')->with('docs', DocTypes::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.doc.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $doc = new DocTypes();
        $doc->name = $request->name;
        $doc->has_theme = $request->has_theme;
        $doc->save();
        return redirect()->route('doc.index')->with('success', 'تم حفظ نوع الملف بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(DocTypes $docTypes)
    {
        $doc = DocTypes::findOrFail($docTypes->id);
        return view('admin.doc.show')->with('doc', $doc);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $doc = DocTypes::findOrFail($id);
        return view('admin.doc.edit')->with('doc', $doc);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $doc = DocTypes::findOrFail($request->id);
        $doc->name = $request->name;
        $doc->has_theme = $request->has_theme;
        $doc->save();
        return redirect()->route('doc.index')->with('success', 'تم تحديث نوع الملف بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $doc = DocTypes::findOrFail($id);
        $doc->delete();
        return redirect()->route('doc.index')->with('success', 'تم حذف نوع الملف بنجاح');
    }
}
