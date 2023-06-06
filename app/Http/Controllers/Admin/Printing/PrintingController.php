<?php

namespace App\Http\Controllers\Admin\Printing;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidateRequest;
use App\Models\Images;
use App\Models\Printing;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use function PHPUnit\Framework\isJson;

class PrintingController extends Controller
{
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

        $print = Printing::create($formValidate);
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/printing', 'public');
                $image->printing_id = $print->id;
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
        return view('admin.printings.edit')->with('printing',$printing);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ValidateRequest $request, Printing $printing)
    {

        Printing::where('id',$printing->id)->update($request->validated());
        if (request()->hasFile('image')) {
            foreach ($request->file('image') as $imagefile) {
                $image = new Images;
                $image->url = $imagefile->store('images/printing', 'public');
                $image->printing_id = $printing->id;
                $image->save();
            }
        }
        return back()->with('success', 'Printing Add');
//        dd($request->all());
//        $existing = $printing::findOrFail($request->id);
//        $existing->name = $request->name;
//        $existing->description = $request->description;
//        $existing->save();
//        return $existing;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Printing $printing,Images $images,Request $request)
    {
        dd($printing);
        if ($request->delete_images){
            $printing_id = $request->id;
            $url = $images::findOrFail(intval($printing_id))->all();
            $image_path = public_path("\storage\\") .$url[0]->url;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
            return  response()->json(['success'=>'Նկարը ջնջվեց']);
        }
        $printing->delete();
        return redirect()->back()->with('success','Տվյալ հայտարարությունը ջնջվեց');
    }
}
