<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactClientController extends Controller
{
    
    
      
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact.create');
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
            'email' => 'required',
            'message'=> 'required'
        ]);

        Contact::create($request->all());
        
        //display msg in the same page contact 
        return redirect()->route('contact.index')->with('success', 'Votre Contact est envoyer !');

                           
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
    }

}
