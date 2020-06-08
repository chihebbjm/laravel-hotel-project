<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galerie;
class GalerieClientController extends Controller
{

     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeries = Galerie::latest()->paginate(5);
        return view('frontend.galeries', compact('galeries'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



}
