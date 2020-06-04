<?php

namespace App\Http\Controllers;

use App\Chambres;
use App\Chambres_Commodites;
use App\Commodites;

use Illuminate\Http\Request;

class ChambresController extends Controller
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
       $commodites = Commodites::latest()->paginate(5);
       return view('chambres.index', compact('chambres','commodites'))->with('i', (request()->input('page', 1) - 1) * 5);
   }



   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chambres.create');
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
            'nom' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prix_pax'=>'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        //NEW
        $chambre=new Chambres;
        $chambre->nom=$request->nom;
        $chambre->description=$request->description;
        $chambre->prix_pax=$request->prix_pax;
        $chambre->image=$new_name;
        $chambre->save();
        
        //$chambre->commodites is the name of the function calling function here :
        //@foreach ($chambre->commodites as $one_commodites)
        $chambre->commodites()->sync($request->commodites_icon,false);


        return redirect()->route('chambres.index')
                            ->with('success', 'chambres Created Successfully!');
    }



    
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Chambres $chambre)
    {
        return view('chambres.show', compact('chambre'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Chambres $chambre)
    {
        $commodites = Commodites::latest()->paginate(5);
        return view('chambres.edit', compact('chambre','commodites'));
    }




    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chambres $chambre)
    {


        $image_name = $request->hidden_image;
        $image = $request->file('image');




        if($image != '')
        {
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prix_pax'=>'required'
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        }


        else
        {
            $request->validate([
                'nom' => 'required',
                'description' => 'required',
                'prix_pax'=>'required'
            ]);
        }

        //UPDATE :
        $chambre->nom=$request->nom;
        $chambre->description=$request->description;
        $chambre->prix_pax=$request->prix_pax;
        $chambre->image=$image_name;
        $chambre->update();
        $chambre->commodites()->sync($request->commodites_icon,true);
        
        return redirect()->route('chambres.index')
                            ->with('success', 'Commodites Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( Chambres $chambre)
    {
        //delet from the chambre table 
        $chambre->delete();
        //delete from the chambre_commodites table :
        $chambre->commodites()->detach();
        return redirect()->route('chambres.index')
                            ->with('success', 'Commodites Deleted Successfully!');
    }




    

}
