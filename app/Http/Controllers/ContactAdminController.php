<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactAdminController extends Controller
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
        $contact = Contact::paginate(5);
        return view('contact.index', compact('contact'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }



}
