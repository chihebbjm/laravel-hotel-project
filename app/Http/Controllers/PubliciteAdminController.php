<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Publicite;
use Illuminate\Http\Request;

class PubliciteAdminController extends Controller
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
        //delete publicite banner every month:
        $everymonth=Publicite::where( 'created_at', '>', Carbon::now()->addDays(30))
        ->delete();

        $count=Publicite::get()->count();
        $publicite = Publicite::orderBy('created_at','desc')->paginate(1);
        return view('publicite.index', compact('publicite','count'))->with('i', (request()->input('page', 1) - 1) * 5);
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
            'proprietaire' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/pub/'), $new_name);

        //NEW
        $publicite=new Publicite();
        $publicite->titre=$request->titre;
        $publicite->proprietaire=$request->proprietaire;
        $publicite->image=$new_name;
        $publicite->save();
        
    
        return redirect()->route('publicite.index')
                            ->with('success', 'Publicite Banner Created Successfully!');

    }



    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Publicite $publicite)
    {
        //that must mutch with the name in the header in <form></form> in EDIT files
        //AND in the UPDATE function PARMAS :
        return view('publicite.edit', compact('publicite'));
    }




    
        
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publicite $publicite)
    {


        $image_name = $request->hidden_image;
        $image = $request->file('image');




        if($image != '')
        {
        $request->validate([
            'titre' => 'required',
            'proprietaire' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/pub/'), $image_name);
        }


        else
        {
            $request->validate([
                'titre' => 'required',
                'proprietaire' => 'required'
                
            ]);
            $image_name =$publicite->image;

        }

        //UPDATE :
        $publicite->titre=$request->titre;
        $publicite->proprietaire=$request->proprietaire;
        $publicite->image=$image_name;
        $publicite->update();
      
        return redirect()->route('publicite.index')
                            ->with('success', 'Publicite Banner Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Galerie  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( Publicite $publicite)
    {
        //delet from the chambre table 
        $publicite->delete();
      
        return redirect()->route('publicite.index')
                            ->with('success', 'Publicite Banner Deleted Successfully!');
    }





    



}
