<?php

namespace App\Http\Controllers\Admin\Printing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Images;
use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Traits\DeleteRowImagesTrait as DeleteImages;

class PrintingController extends Controller
{
    use DeleteImages;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.printings.index')->with('printings', Printing::orderBy('id', 'DESC')->paginate(5));

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

        $result = Printing::create($formValidate);
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/printing', 'public');
                $image->printing_id = $result->id;
                $image->save();
            }
        }
        return back()->with('success', 'Printing Add');
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
        return view('admin.printings.edit')->with('item',$printing);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateRequest $request, Printing $printing)
    {

        $printing::where('id',$printing->id)->update($request->validated());
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/printing', 'public');
                $image->printing_id = $printing->id;
                $image->save();
            }
        }
        return back()->with('success', 'Printing Add');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printing $printing,Images $images,Request $request)
    {
        if ($request->delete_images){
            $printing_id = $request->id;
            $url = $images::findOrFail(intval($printing_id));
            $image_path = public_path('\storage\\') .$url->url;
            if (File::exists($image_path)) {
               File::delete($image_path);
            }
            $url->delete();

            return  response()->json(['success'=>'Նկարը ջնջվեց']);
        }


        if ($request->delete_row){
            $items = $images::where('printing_id',$request->id)->select('url')->get();
            foreach ($items as $item){
                $image_path = public_path("\storage\\") .$item->url;
                if (File::exists($image_path)) {
                    File::delete($image_path);
                }
            }
        }
        $printing->findOrFail($request->id)->delete();
        return redirect()->back()->with('success','Տվյալ հայտարարությունը ջնջվեց');
    }
}
