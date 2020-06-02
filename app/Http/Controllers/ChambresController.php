<?php

namespace App\Http\Controllers;

use App\Chambres;
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
       return view('chambres.index', compact('chambres'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        $request->validate([
            'nom' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'prix_pax'=>'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);
        $form_data = array(
            'nom'       =>   $request->nom,
            'description'        =>   $request->description,
            'prix_pax'        =>   $request->prix_pax,
            'image'            =>   $new_name
        );

        Chambres::create($form_data);
  
         //Chambres::insert($request->all());
     

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
        return view('chambres.edit', compact('chambre'));
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



        $form_data = array(
            'nom'    =>  $request->nom,
            'description'     =>  $request->description,
            'prix_pax'     =>  $request->prix_pax,
            'image'         =>  $image_name
        );


        $chambre->update($form_data);

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
        $chambre->delete();

        return redirect()->route('chambres.index')
                            ->with('success', 'Commodites Deleted Successfully!');
    }




    

}
