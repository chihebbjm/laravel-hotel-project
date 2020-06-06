<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;

class GalerieController extends Controller
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
        $galeries = Galerie::latest()->paginate(5);
        return view('galerie.index', compact('galeries'))->with('i', (request()->input('page', 1) - 1) * 5);
    }


    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galerie.create');
    }




    
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);
        $request->validate([
            'titre' => 'required',
            'tag' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        //NEW
        $galerie=new Galerie;
        $galerie->titre=$request->titre;
        $galerie->tag=$request->tag;
        $galerie->image=$new_name;
        $galerie->save();
        
    
        return redirect()->route('galerie.index')
                            ->with('success', 'Galerie image Created Successfully!');

    }



    
     /**
     * Display the specified resource.
     *
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Galerie $galerie)
    {
        $galerie = Galerie::latest()->paginate(5);
        return view('galerie.show', compact('galerie'));
    }





    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Galerie $galerie)
    {
        //that must mutch with the name in the header in <form></form> in EDIT files
        //AND in the UPDATE function PARMAS :
        return view('galerie.edit', compact('galerie'));
    }





        
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galerie $galerie)
    {


        $image_name = $request->hidden_image;
        $image = $request->file('image');




        if($image != '')
        {
        $request->validate([
            'titre' => 'required',
            'tag' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        }


        else
        {
            $request->validate([
                'titre' => 'required',
                'tag' => 'required'
                
            ]);
        }

        //UPDATE :
        $galerie->titre=$request->titre;
        $galerie->tag=$request->tag;
        $galerie->image=$image_name;
        $galerie->update();
      
        return redirect()->route('galerie.index')
                            ->with('success', 'slider Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( Galerie $galerie)
    {
        //delet from the chambre table 
        $galerie->delete();
      
        return redirect()->route('galerie.index')
                            ->with('success', 'Image Galerie Deleted Successfully!');
    }










}
