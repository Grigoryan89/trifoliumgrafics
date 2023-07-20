<?php

namespace App\Http\Controllers\Admin\Milling;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Images;
use App\Models\Milling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

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
    public function store(ValidateRequest $request)
    {
        $formValidate = $request->validated();
        $mill = Milling::create($formValidate);
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/milling', 'public');
                $image->milling_id = $mill->id;
                $image->save();
            }
        }
        return back()->with('success', ' Ավելացել է Ֆռեզեռովկա');
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
        return view('admin.millings.edit')->with('item',$milling);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateRequest $request, Milling $milling)
    {

        $milling::where('id', $milling->id)->update($request->validated());
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/milling', 'public');
                $image->milling_id = $milling->id;
                $image->save();
            }
        }
        return back()->with('success', 'Ավելացել է Ֆռեզեռովկա');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Milling $milling, Images $images, Request $request)
    {
        if ($request->delete_images) {
            $milling_id = $request->id;
            $url = $images::findOrFail(intval($milling_id));
            $image_path = public_path('\storage\\') . $url->url;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $url->delete();

            return response()->json(['success' => 'Նկարը ջնջվեց']);
        }

        if ($request->delete_row) {
            $items = $images::where('milling_id', $request->id)->select('url')->get();
            foreach ($items as $item) {
                $image_path = public_path("\storage\\") . $item->url;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }
        $milling->findOrFail($request->id)->delete();
        return redirect()->back()->with('success', 'Տվյալ հայտարարությունը ջնջվեց');
    }

}
