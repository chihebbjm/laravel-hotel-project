<?php

namespace App\Http\Controllers;

use App\Commodites;
use App\Chambres;
use Illuminate\Http\Request;

class CommoditesController extends Controller
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
        $commodites = Commodites::latest()->paginate(5);
        return view('commodites.index', compact('commodites'))->with('i', (request()->input('page', 1) - 1) * 5);
    
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('commodites.create');
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
            'description' => 'required',
            'icon' =>'required'
        ]);

        Commodites::create($request->all());

        return redirect()->route('commodites.index')
                            ->with('success', 'Commodites Created Successfully!');
    }

    
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Commodites $commodite)
    {
        return view('commodites.show', compact('commodite'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Commodites $commodite)
    {
        return view('commodites.edit', compact('commodite'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commodites $commodite)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
          
        ]);

        $commodite->update($request->all());

        return redirect()->route('commodites.index')
                            ->with('success', 'Commodites Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Commodites $commodite)
    {
        $commodite->chambres()->detach();
        $commodite->delete();

        return redirect()->route('commodites.index')
                            ->with('success', 'Commodites Deleted Successfully!');
    }



}
