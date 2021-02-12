<?php

namespace App\Http\Controllers;

use App\ProductImages;
use Illuminate\Http\Request;

class ProductImagesController extends Controller
{


    public function uploadImageForm()
     {
         return view('upload_image_form');
     }
    public function uploadSubmit(Request $request) {     
        // Have To  Code.... 
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uploadproductimages');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'name.*' =>   'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        
        $post = Post::create($request->all());
                foreach ($request->photos as $photo) {
                    $filename = $photo->store('photos');
                    PostImage::create([
                        'post_id' => $post->id,
                        'filename' => $filename
                    ]);
                }
                return 'Images Uploaded successful!';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ProductImages  $productImages
     * @return \Illuminate\Http\Response
     */
    public function show(ProductImages $productImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductImages  $productImages
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductImages $productImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProductImages  $productImages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductImages $productImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductImages  $productImages
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductImages $productImages)
    {
        //
    }
}
