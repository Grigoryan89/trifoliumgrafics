<?php

namespace App\Http\Controllers;

use App\Models\Printing;
use Illuminate\Http\Request;

class PrintingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.printings.printing')->with('printings',Printing::orderBy('created_at','DESC')->paginate(5));

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
       $newPrinting = new Printing();
       $newPrinting->name = $request->name;
       $newPrinting->description = $request->description;
       $newPrinting->save();
       return $newPrinting;
    }

    /**
     * Display the specified resource.
     */
    public function show(Printing $printing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Printing $printing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Printing $printing)
    {
        $existing = $printing::findOrFail($request->id);
        $existing->name = $request->name;
        $existing->description = $request->description;
        $existing->save();
        return $existing;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printing $printing)
    {
        $existing = $printing::findOrFail(\request('id'));
        $existing->delete();
        return 'delete is success ful';
    }
}
