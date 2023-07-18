<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Http\Request;

class PortfolioMillingController extends Controller
{

    public function index(Milling $item)
    {
        $model = $item::latest()->get();
        return view('millings.index',compact('model'));
    }

    public function show(Milling $item)
    {
        $id = intval(\request()->id);
        $model = $item->find($id);
        return view('millings.show',compact('model'));
    }
}
