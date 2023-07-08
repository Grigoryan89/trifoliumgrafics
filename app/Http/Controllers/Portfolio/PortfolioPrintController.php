<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Http\Request;

class PortfolioPrintController extends Controller
{
    public function index(Printing $printing,Milling $milling)
    {
        $model1 = $printing::latest()->get();
        $model2 = $milling::latest()->get();
        return view('printings.index',compact('model1','model2'));
    }

    public function printings(Printing $printing)
    {
        $model1 = $printing::latest()->get();
        return view('printings.printing',compact('model1'));
    }

    public function printingShow(Printing $printing)
    {
        $id = intval(\request()->id);
        $model1 = $printing->find($id);
        return view('printings.printing-show',compact('model1'));
    }
}
