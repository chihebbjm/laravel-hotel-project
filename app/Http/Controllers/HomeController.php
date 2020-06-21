<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambres;
use App\Slider;
use App\Publicite;


class HomeController extends Controller
{
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $publicite = Publicite::get();
        $slider=Slider::get();
        $chambres_dispo= Chambres::where('status',"disponible")->get();
        //$chambres = Chambres::latest()->paginate(5);
        //$commodites = Commodites::latest()->paginate(5);
        return view('frontend.home',compact('chambres_dispo','slider','publicite'))->with('i', (request()->input('page', 1) - 1) * 5);
  
  
    }

}
