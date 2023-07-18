<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Http\Request;

class PortfolioPrintController extends Controller
{

    public function index(Printing $printing)
    {
        $model1 = $printing::latest()->get();
        return view('printings.index',compact('model1'));
    }

    public function show(Printing $printing)
    {
        $id = intval(\request()->id);
        $model1 = $printing->find($id);
        return view('printings.show',compact('model1'));
    }
}
