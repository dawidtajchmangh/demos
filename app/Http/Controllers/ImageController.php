<?php

namespace App\Http\Controllers;

use App\Models\Image;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function index()
    {
        return view('image');
    }

    public function store(Request $request)
    {
        $image = new image();
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'description' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();

        $request->image->move(public_path('gallery'), $imageName);
    $image->image = $imageName;
    $image->description = $request->description;
    $image->care_and_cost_estimate = $request->careAndCostEstimate;
    $image->save();
        /*
            Write Code Here for
            Store $imageName name in DATABASE from HERE
        */

        return redirect()->back()->with('success','You have successfully upload image.');
    }

    public function show(){

        $images = image::all();

        return view('gallery',compact('images'));

    }
    public function calendar(){
        return view('calendar');
    }
}
