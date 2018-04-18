<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Slide;

class SlideController extends Controller
{
    public function getSlideImages()
    {
        $response = Slide::all();
        // var_dump($response);
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

    public function activeImage(Request $request)
    {
         $image  =  Slide::find($request->input("id"));
         $image->status = 1;
         $image->save();
    }

     public function deActiveImage(Request $request)
    {
         $image  =  Slide::find($request->input("id"));
         $image->status = 0;
         $image->save();
    }

      public function deleteImage(Request $request)
    {
         $image  =  Slide::find($request->input("id"));
         $image->delete();
    }
}

?>
