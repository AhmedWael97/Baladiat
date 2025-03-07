<?php

namespace App\Http\Controllers;

use App\Models\Municipalities;
use Illuminate\Http\Request;

class MunicipalitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.muni.index')->with('muns', Municipalities::get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.muni.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
            $request->validate([
                'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
                'name' => 'required|string|max:255', 
            ]);
            
            if ($request->logo) {
                $file = $request->file('logo');
                $filename = time() . '_' . $file->getClientOriginalName(); 
                $path = public_path('uploads');
                $file->move($path, $filename);
            }
            $municipality = new Municipalities();
            $municipality->name = $request->name;
            $municipality->logo = 'uploads/' . $filename;
        
            $municipality->save();
            return redirect()->route('mun.index')->with('success', 'تم حفظ البلدية بنجاح');
    }

    /**
     * Display the specified resource.
     */
    public function show(Municipalities $municipalities)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $man = Municipalities::find($id);
        if ($man) {
            return view('admin.muni.edit')->with('mun', $man);
        }
        return redirect()->back()->with('error', 'لا تملك الصلاحية');}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', 
            'name' => 'required|string|max:255', 
        ]);

        $municipality = Municipalities::find($request->id);
        if ($municipality) {
            if ($request->logo) {
                $file = $request->file('logo');
                $filename = time() . '_' . $file->getClientOriginalName(); 
                $path = public_path('uploads');
                $file->move($path, $filename);
            }
            $municipality->name = $request->name;
            $municipality->logo = 'uploads/' . $filename;
            $municipality->save();
            return redirect()->route('mun.index')->with('success', 'تم تعديل البلدية بنجاح');
        }
        return redirect()->back()->with('error', 'لا تملك الصلاحية');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $man = Municipalities::find($id);
        if ($man) {
            $man->delete();
            return redirect()->route('mun.index')->with('success', 'تم حذف البلدية بنجاح');
        }
        return redirect()->back()->with('error', 'لا تملك الصلاحية');
    }
}
