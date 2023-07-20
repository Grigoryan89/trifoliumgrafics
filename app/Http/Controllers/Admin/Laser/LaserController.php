<?php

namespace App\Http\Controllers\Admin\Laser;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Images;
use App\Models\Laser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LaserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.lasers.index')->with('lasers', Laser::orderBy('id', 'DESC')->paginate(5));

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
    public function  store(ValidateRequest $request)
    {
        $formValidate = $request->validated();
        $res = Laser::create($formValidate);
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/laser', 'public');
                $image->laser_id = $res->id;
                $image->save();
            }
        }
        return back()->with('success', ' Ավելացել է');
    }

    /**
     * Display the specified resource.
     */
    public function show(Laser $laser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Laser $laser)
    {
        return view('admin.lasers.edit')->with('item',$laser);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateRequest $request, Laser $laser)
    {
        $laser::where('id', $laser->id)->update($request->validated());
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/laser', 'public');
                $image->laser_id = $laser->id;
                $image->save();
            }
        }
        return back()->with('success', 'Popoxvel e');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Laser $laser, Images $images, Request $request)
    {
        if ($request->delete_images) {
            $laser_id = $request->id;
            $url = $images::findOrFail(intval($laser_id));
            $image_path = public_path('\storage\\') . $url->url;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            $url->delete();

            return response()->json(['success' => 'Նկարը ջնջվեց']);
        }

        if ($request->delete_row) {
            $items = $images::where('laser_id', $request->id)->select('url')->get();
            foreach ($items as $item) {
                $image_path = public_path("\storage\\") . $item->url;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }
        $laser->findOrFail($request->id)->delete();
        return redirect()->back()->with('success', 'Տվյալ հայտարարությունը ջնջվեց');
    }
}
