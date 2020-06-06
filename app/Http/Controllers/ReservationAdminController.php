<?php

namespace App\Http\Controllers;

use App\Reservation;
use Illuminate\Http\Request;

class ReservationAdminController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservation = Reservation::latest()->paginate(5);
        return view('reservation.index', compact('reservation'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }




}
