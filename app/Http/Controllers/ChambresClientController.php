<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Chambres;
use App\Chambres_Commodites;
use App\Commodites;



class ChambresClientController extends Controller
{
    
    public function index()
    {
        
       $chambres_dispo= Chambres::where('status',"disponible")->get();
       $chambres = Chambres::get();
       $commodites = Commodites::get();
       return view('frontend.chambers', compact('chambres','commodites','chambres_dispo'))->with('i', (request()->input('page', 1) - 1) * 5);
  
    }



}
