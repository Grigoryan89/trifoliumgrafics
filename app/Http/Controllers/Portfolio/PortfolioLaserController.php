<?php

namespace App\Http\Controllers\Portfolio;

use App\Http\Controllers\Controller;
use App\Models\Laser;

class PortfolioLaserController extends Controller
{

    public function index(Laser $laser)
    {
        $model = $laser::latest()->get();
        return view('lasers.index',compact('model'));
    }

    public function show(Laser $laser)
    {
        $id = intval(\request()->id);
        $model = $laser->find($id);
        return view('lasers.show',compact('model'));
    }
}
