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
        return redirect()->back()->with('error', 'لا تملك الصلاحية');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(Municipalities $municipalities)
    {
        return redirect()->back()->with('error', 'لا تملك الصلاحية');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Municipalities $municipalities)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Municipalities $municipalities)
    {
        return redirect()->back()->with('error', 'لا تملك الصلاحية');
    }
}
