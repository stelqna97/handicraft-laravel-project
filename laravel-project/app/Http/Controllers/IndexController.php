<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Auth;
use App\Category;
use App\Brand;

class IndexController extends Controller
{

    
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function listByCat(Request $request,$id){
        $brands=Brand::all();
        $product=Product::query()->where('category_id',$id);

        $name = $request->query('name');
        $details = $request->query('details');
        $bra = $request->query('brands');
        $data = $request->query('data');
        $min=$request->query('min');
        $max=$request->query('max');


        if (!empty($name) ) {
            $product = $product
               ->where('name', 'like', '%'.$name.'%');
        }
        if (!empty($data) ) {
            $product = $product
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
         if(!empty($details)){
            $product = $product
            ->where('details', 'like', '%'.$details.'%');
         }
        if (!empty($min) && !empty($max) ) {
            $product = $product
                ->where('price', '>=', '%'.$min.'%') 
                ->where('price', '<=', '%'.$max.'%') ;
        }
        if ( !empty($max) ) {
            $product = $product
                ->where('price', '<=', '%'.$max.'%') ;
        }

        if (!empty($min)  ) {
            $product = $product
                ->where('price', '>=', '%'.$min.'%') ;
               
        }
    if(!empty($bra)){
       $product =$product->whereHas('brand')
       ->where('id', 'like', '%'.$bra.'%');
    }


        $product=$product->sortable()->paginate(10);
        $category=Category::select('name')->where('id',$id)->first();
       // $product = Product::where('category_id', '=',$category )->get();
        return view('product.products',compact('product','category'))->with([
            'brands'=>$brands,
            'bra'=>$bra,
            'min'=>$min,
            'max'=>$max,
            'name'=>$name,
            'details'=>$details,
            'data'=>$data
        ]);
    }

    public function listByBra(Request $request,$id){
        $categories=Category::all();
        $product=Product::query()->where('brand_id',$id);

        $name = $request->query('name');
        $details = $request->query('details');
        $cat = $request->query('categories');
        $data = $request->query('data');
        $min=$request->query('min');
        $max=$request->query('max');


        if (!empty($name) ) {
            $product = $product
               ->where('name', 'like', '%'.$name.'%');
        }
        if (!empty($data) ) {
            $product = $product
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
         if(!empty($details)){
            $product = $product
            ->where('details', 'like', '%'.$details.'%');
         }
        if (!empty($min) && !empty($max) ) {
            $product = $product
                ->where('price', '>=', '%'.$min.'%') 
                ->where('price', '<=', '%'.$max.'%') ;
        }
        if ( !empty($max) ) {
            $product = $product
                ->where('price', '<=', '%'.$max.'%') ;
        }

        if (!empty($min)  ) {
            $product = $product
                ->where('price', '>=', '%'.$min.'%') ;
               
        }
    if(!empty($cat)){
       $product =$product->whereHas('category')
       ->where('id', 'like', '%'.$cat.'%');
    }


        $product=$product->sortable()->paginate(10);
        $brand=Brand::select('name')->where('id',$id)->first();
        return view('product.productsbrand',compact('product','brand'))->with([
            'categories'=>$categories,
            'cat'=>$cat,
            'min'=>$min,
            'max'=>$max,
            'name'=>$name,
            'details'=>$details,
            'data'=>$data
        ]);
    }

   /* public function search(Request $request)
    {
    	if($request->has('search')){
    		$product = Product::search($request->get('search'))->get();	
    	}else{
    		$product = Product::get();
    	}
        return view('search', compact('product'));
    } */   
}
