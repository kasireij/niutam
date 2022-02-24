<?php

namespace App\Http\Controllers;

use Image;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::latest()->get();

        return view('admin.sliders.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $slider_image = $request->file('image');

        $name_gen = hexdec(uniqid()).'.'.$slider_image->getClientOriginalExtension();
        Image::make($slider_image)->resize(1920,1088)->save('backend/assets/img/slider/'.$name_gen);

        $last_img = 'backend/assets/img/slider/'.$name_gen;
        
        Slider::insert([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,
            'buttontext' => $request->buttontext,
            'buttonlink' => $request->buttonlink,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.slider')->with('success', 'Slider inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sliders = Slider::find($id);
        return view('admin.sliders.edit', compact('sliders'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $old_image = $request->old_image;

        $image = $request->file('image');

        if($image){
            $name_gen = hexdec(uniqid());
            $img_ext = strtolower($image->getClientOriginalExtension());
            $img_name = $name_gen.'.'.$img_ext;
            $up_location = 'backend/assets/img/slider/';
            $last_img = $up_location.$img_name;
            $image->move($up_location,$img_name);

        unlink($old_image);
        Slider::find($id)->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $last_img,            
            'buttontext' => $request->buttontext,
            'buttonlink' => $request->buttonlink,
            'created_at' => Carbon::now()
        ]);

        return Redirect()->route('admin.slider')->with('success', 'Slider updated successfully');

        }else{
            Slider::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,             
                'buttontext' => $request->buttontext,
                'buttonlink' => $request->buttonlink,
                'created_at' => Carbon::now()
            ]);
    
            return Redirect()->route('admin.slider')->with('success', 'Slider updated successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $slide = Slider::find($id);
        $old_image = $slide->image;
        unlink($old_image);

        Slider::find($id)->delete();
        return Redirect()->route('admin.slider')->with('success', 'Slider deleted successfully');
    }
}
