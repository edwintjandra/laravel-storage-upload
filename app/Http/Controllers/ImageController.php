<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostImage;

class ImageController extends Controller
{
    public function createImage(){
        return view('image.create');
    }

    public function storeImage(Request $request){
        $validated = $request->validate([
            'image' => 'required',
        ]);
        $data= new Postimage();


        if($request->file('image')){
            $file= $request->file('image');
            $filename= $file->getClientOriginalName();
            $file-> move(public_path('images'), $filename);
            $data->image_url=$filename;
            $data->save();
        }

        return redirect()->route('image.index');
    }

    public function viewImage(){
        $images=PostImage::All();
        return view('image.index',compact('images'));
    }
}
