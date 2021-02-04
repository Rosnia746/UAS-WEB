<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use App\About2;
use App\Features;
use App\Peopleloveus;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $about = About::all();
        $about2 = About2::all();
        $features = Features::all();
        $peopleloveus = Peopleloveus::all();

        return view('pages.home',compact('about', 'about2', 'features', 'peopleloveus'));
    
    }
}
