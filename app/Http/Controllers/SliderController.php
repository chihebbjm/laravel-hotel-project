<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
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
        $sliders = Slider::paginate(5);
        return view('slider.index', compact('sliders'))->with('i', (request()->input('page', 1) - 1) * 5);
    }



    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('slider.create');
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
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
          
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $new_name);

        //NEW
        $Slider=new Slider;
        $Slider->titre=$request->titre;
        $Slider->description=$request->description;
        $Slider->image=$new_name;
        $Slider->save();
        
    
        return redirect()->route('slider.index')
                            ->with('success', 'slider image Created Successfully!');

    }



     /**
     * Display the specified resource.
     *
     * @param  \App\Slider  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        $slider = Slider::latest()->paginate(5);
        return view('slider.show', compact('slider'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Slider  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        //that must mutch with the name in the header in <form></form> in EDIT files
        //AND in the UPDATE function PARMAS :
        return view('slider.edit', compact('slider'));
    }




    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
    {


        $image_name = $request->hidden_image;
        $image = $request->file('image');




        if($image != '')
        {
        $request->validate([
            'titre' => 'required',
            'description' => 'required',
            'image' =>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        $image_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images'), $image_name);
        }


        else
        {
            $request->validate([
                'titre' => 'required',
                'description' => 'required'
                
            ]);
            $image_name =$slider->image;

        }

        //UPDATE :
        $slider->titre=$request->titre;
        $slider->description=$request->description;
        $slider->image=$image_name;
        $slider->update();
      
        return redirect()->route('slider.index')
                            ->with('success', 'slider Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy( Slider $slider)
    {
        //delet from the chambre table 
        $slider->delete();
      
        return redirect()->route('slider.index')
                            ->with('success', 'slider  Deleted Successfully!');
    }






}
