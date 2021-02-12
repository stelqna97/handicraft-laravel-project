<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use DB;
use Auth;

class CategoryController extends Controller
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
        $category=Category::query();
        
        $name = $request->query('name');
        $details = $request->query('details');
        $data = $request->query('data');

        if (!empty($name) ) {
            $category = $category
                ->where('name', 'like', '%'.$name.'%') ;
        }

        if (!empty($details) ) {
            $category = $category
                ->where('details', 'like', '%'.$details.'%') ;
        }

        if (!empty($details) ) {
            $category = $category
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
            $category=$category->sortable()->paginate(8);
        return view('category.index')->with('category',$category)->with('name',$name)->with('details',$details)->with('data',$data);
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        
        $data=array();
        $data['name']=$request->name;
        $data['details']=$request->details;
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();

        $image=$request->file('logo');

        if($image){
         $image_name=date('dmy_H_s_i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/logo/category/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);

         $data['logo']=$image_url;

        }else{
            $file = 'public/default/Default.png'; 
            $data['logo']=$file;
        }
        $category=DB::table('categories')->insert($data);

        return redirect()->route('category.index')->with('success','category Created Successfull');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category=DB::table('categories')->where('id',$id)->first();
       $cat=Category::all();
        return view('category.show',compact('category','cat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category=DB::table('categories')->where('id',$id)->first();
        return view('category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $oldimage=$request->old_logo;

        $data=array();
        $data['name']=$request->name;
        $data['details']=$request->details;
        $data['updated_at'] =new \DateTime();

        $image=$request->file('logo');

        if($image){
          
         $image_name=date('dmy-H-s-i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/logo/category/';
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
        $category=DB::table('categories')->where('id',$id)->update($data);
        return redirect()->route('category.index')->with('success','category Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category,$id)
    {
        $data=Category::findOrFail($id)->first();
        $img=$data->name;
     
        if (file_exists($img) ) {

            @unlink($img);
           
         Category::where('id', $id)->delete();

           }else{

           Category::where('id', $id)->delete();
            }       
        return redirect()->route('category.index')->with('success','category Deleted Successfull');
    }
}
