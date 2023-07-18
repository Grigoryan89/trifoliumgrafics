<?php

namespace App\Http\Controllers;

use App\Models\Milling;
use App\Models\Printing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;


class HomeController extends Controller
{
    public function change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);
        return redirect()->back();
    }

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function service()
    {
        return view('service');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function showPortfolio(Printing $printing,Milling $milling)
    {
        $model1 = $printing::latest()->get();
        $model2 = $milling::latest()->get();
        return view('show-portfolio',compact('model1','model2'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function partners()
    {
        return view('partners');
    }

}
