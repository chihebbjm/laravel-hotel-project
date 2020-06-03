<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chambres;


class ChambresCommoditesController extends Controller
{
    


    
     /**
     * Create a new controller instance.
     *
     * @return void
     */

   public function __construct()
   {
       $this->middleware('auth');
   }




   
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $chambres = Chambres::latest()->paginate(5);
        // GET the commodites that mutch the id with each chmabres (WHERE Queriy)
       
 
        return view('chambres_commodites.index', compact('chambres'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    



}
