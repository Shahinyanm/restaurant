<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class AdminController extends Controller
{
    public function getSlideImages()
    {
        $response = request()->all();
        return response()->json($response);
    }

    public function uploadSlideImages(Request $request)
    {
        if($request->has('photo')){
             $this->validate($request, [
                 'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
             ]);
             $imageName = time().'.'.$request->photo->getClientOriginalExtension();
             $request->photo->move(public_path('uploads'), $imageName);

             $slide = new Slide([
                 'photo' =>  $imageName,
                 'status'=> 0
             ]);

            $slide->save();
        }
    }
}
