<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;
use DB;
use Auth;
use App\Product;
use App\BrandAttribute;

class BrandController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brand=Brand::query();
        
        $name = $request->query('name');
        $data = $request->query('data');

        if (!empty($name) ) {
            $brand = $brand
                ->where('name', 'like', '%'.$name.'%');
        }
        if (!empty($name) ) {
            $brand = $brand
                ->where('created_at', 'like', '%'.$data.'%');
        }
            $brand=$brand->sortable()->paginate(10);
    
     
        return view('brand.index')->with('brand',$brand)->with('name',$name)->with('data',$data);
    }

    public function indexp(Request $request)
    {
        $user=Auth::user()->id;
        $brand=Brand::query();
        
        $name = $request->query('name');
        $data = $request->query('data');

        if (!empty($name) ) {
            $brand = $brand
                ->where('name', 'like', '%'.$name.'%');
        }
        if (!empty($name) ) {
            $brand = $brand
                ->where('created_at', 'like', '%'.$data.'%');
        }
            $brand=$brand->where('user_id',$user)->sortable()->paginate(10);
    
     
        return view('brand.indexp')->with('brand',$brand)->with('name',$name)->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=array();
        $data['name']=$request->name;
        $data['user_id'] = Auth::user()->id;
        $data['detail_about']=$request->detail_about;
        $data['detail_contact']=$request->detail_contact;
        $data['detail_delivery']=$request->detail_delivery;
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();

        $image=$request->file('logo');

        if($image){
         $image_name=date('dmy_H_s_i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/logo/brand/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);

         $data['logo']=$image_url;

        }else{
            $file = 'public/default/Default.png'; 
            $data['logo']=$file;
        }
        $brand=DB::table('brands')->insert($data);

       // $brand = Brand::create($data);
      

      

        return redirect()->route('brand.index')->with('success','brand Created Successfull');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand,$id)
    {
        $file = 'public/default/Default.png'; 
        $product=Product::where('brand_id',$id)->get()->chunk(4);
        $brand=Brand::where('id',$id)->first();
        return view('brand.show',compact('brand'))->with('product',$product)->with('file',$file);
    }


  
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand,$id)
    {
        $brand=DB::table('brands')->where('id',$id)->first();
        return view('brand.edit',compact('brand'))->with('brand',$brand);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $oldimage=$request->old_logo;

        $data=array();
        $data['name']=$request->name;
        $data['detail_about']=$request->detail_about;
        $data['detail_contact']=$request->detail_contact;
        $data['detail_delivery']=$request->detail_delivery;
        $data['updated_at'] =new \DateTime();

        $image=$request->file('logo');
        $old=$request->file('old_logo');
        if($image){
            
         $image_name=date('dmy-H-s-i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/logo/brand/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
         if($oldimage!='public/default/Default.png'){
            unlink($oldimage);
        }
         $data['logo']=$image_url;
        }else{
            if($oldimage=='' || $oldimage=='public/default/Default.png' ){
            $file = 'public/default/Default.png'; 
            $data['logo']=$file;
            }
        }
        $brand=DB::table('brands')->where('id',$id)->update($data);
        return redirect()->route('brand.index')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Brand::findOrFail($id)->first();
        $img=$data->name;
     
        if (file_exists($img) ) {

            @unlink($img);
           
         Brand::where('id', $id)->delete();

           }else{

           Brand::where('id', $id)->delete();
            }       
        return redirect()->route('brand.index')->with('success','brand Deleted Successfull');
    }
}
