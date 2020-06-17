<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationClientController extends Controller
{
    


        
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('frontend.reservation');
    }





     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'telephone'=> 'required'
        ]);

        Reservation::create($request->all());
        //display msg in the same page contact 
        return redirect()->route('reservation.index')->with('success', 'Votre Reservation est envoyer !');

                           
    }

 


}
