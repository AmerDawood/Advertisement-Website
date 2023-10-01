<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required'
        ]);

        $img_name = rand() . time() . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path('uploads/sliders'), $img_name);


        Slider::create([
            'image' => $img_name,
        ]);



        return redirect()->back()->with('msg','Slider Created Successfully');


    }

    public function destroy($id)
{
    // Find the Slider record by its ID
    $slider = Slider::find($id);

    if (!$slider) {
        return redirect()->back()->with('error', 'Slider not found.');
    }

    // Delete the Slider record
    $slider->delete();

    // Optionally, you can also delete the associated image file from storage
    // Assuming you have stored the image in the 'uploads/sliders' directory
    $imagePath = public_path('uploads/sliders/' . $slider->image);

    if (file_exists($imagePath)) {
        unlink($imagePath);
    }

    return redirect()->back()->with('msg', 'Slider deleted successfully.');
}

}
