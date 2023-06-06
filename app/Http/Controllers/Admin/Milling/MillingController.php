<?php

namespace App\Http\Controllers\Admin\Milling;

use App\Http\Controllers\Controller;
use App\Models\Milling;
use Illuminate\Http\Request;

class MillingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.millings.index')->with('millings', Milling::orderBy('id', 'DESC')->paginate(5));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Milling $milling)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Milling $milling)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Milling $milling)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milling $milling)
    {
        $milling->delete();
        return redirect()->back()->with('success','Tvyal@ nyut@ jnjvel e ');
    }
}
