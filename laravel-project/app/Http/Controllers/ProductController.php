<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;
use Auth;
use App\Category;
use App\Brand;
use App\Cart;
use App\ProductImages;
use Input;
use File;
use Storage;
use App\Rating;
class ProductController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request){

        $user=Auth::user()->id;
        $categories=Category::all();
        $brands=Brand::all();
        $product=Product::query();

        $name = $request->query('name');
        $details = $request->query('details');
        $id = $request->query('id');
        $cat = $request->query('categories');
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
         if(!empty($id)){
            $product =$product
            ->where('id', 'like', '%'.$id.'%')  ;
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

    if(!empty($cat)){
        $product =$product->whereHas('category')
        ->where('id', 'like', '%'.$cat.'%');
     }

        $product=$product->sortable()->paginate(10);
        return view('product.index',compact('product'))->with([
            'user'=>$user,
            'brands'=>$brands,
            'categories'=>$categories,
            'cat'=>$cat,
            'bra'=>$bra,
            'min'=>$min,
            'max'=>$max,
            'name'=>$name,
            'details'=>$details,
            'id'=>$id,
            'data'=>$data
        ]);
    }

    public function indexp(Request $request){

        $user=Auth::user()->id;
        $categories=Category::all();
        $brands=Brand::all();
        $product=Product::query();

        $name = $request->query('name');
        $details = $request->query('details');
        $id = $request->query('id');
        $cat = $request->query('categories');
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
         if(!empty($id)){
            $product =$product
            ->where('id', 'like', '%'.$id.'%')  ;
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

    if(!empty($cat)){
        $product =$product->whereHas('category')
        ->where('id', 'like', '%'.$cat.'%');
     }

        $product=$product->where('user_id',$user)->sortable()->paginate(6);
        return view('product.indexp',compact('product'))->with([
            'user'=>$user,
            'brands'=>$brands,
            'categories'=>$categories,
            'cat'=>$cat,
            'bra'=>$bra,
            'min'=>$min,
            'max'=>$max,
            'name'=>$name,
            'details'=>$details,
            'id'=>$id,
            'data'=>$data
        ]);
    }

    public function create(){
       
        $categories = Category::all();
        $userId=Auth::id();
        $product=Product::all();
      //  $brands = Brand::all();
       // $brands = DB::table('brands')->join('brands','brands.user_id','=','userId')->where('userId',$userId);
       $brands = Brand::where('user_id', '=', auth()->id())->get();
        return view('product.create', compact('categories','brands'))->with('product',$product);
    }

    public function store(Request $request){
        
        $data=array();
        $data['user_id'] = Auth::user()->id;
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_price']=$request->product_price;
        $data['details']=$request->details;
        $data['category_id']=$request->categories;
        $data['brand_id']=$request->brands;
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();
        

      // $image=$request->file('file');

        /* if($image){
            
         $image_name=date('dmy_H_s_i');
         $ext=strtolower($image->getClientOriginalName());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/media/basic/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);

         $data['image']=$image_url;
        
         $product=Product::create($data);
         if($product){
         $proImage = new ProductImages([
             'name'    =>  $image_url
         ]);
         $product->images()->save($proImage); 
        }
        }else{
            $file = 'public/default/Default_Product.jpg'; 
            $data['image']=$file;
           
        }*/
        $product=Product::create($data);

       
        
       // $images=array();
       if($product){
    $images=$request->file('file');
    foreach($images as $key => $image){
     if($images){
        
            $image_name2=date('dmy_H_i_s');
            $name=$image->getClientOriginalName();
            $image_full_name2=$image_name2.".".$name;
            $upload_path2='public/media/second/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$image->move($upload_path2,$image_full_name2);

          
               $proImage = new ProductImages([
                'name'    =>  $image_url2
            ]);

            $product->images()->save($proImage); 
        }
    }
}
        //$product->categories()->sync($request->category_id);

        return redirect()->route('product.index')->with('success','Product Created Successfull');
    }

    public function edit($id){
        $categories = Category::all();
        $brands = Brand::all();
        $product=Product::where('id',$id)->first();
        $images=DB::table('product_images')->where('product_id',$id)->get();
        return view('product.edit',compact('product','categories'))->with('brands',$brands)->with('images',$images);
    }

    public function update(Request $request,$id){

        $oldimage=$request->old_image;
        $product=Product::find($id)->first();
        $data=array();
       // $data['user_id']=$request->Auth::user()->id;
        $data['product_name']=$request->product_name;
        $data['product_code']=$request->product_code;
        $data['product_price']=$request->product_price;
        $data['details']=$request->details;
        $data['category_id']=$request->categories;
        $data['updated_at'] =new \DateTime();

        $image=$request->file('image');

      /*  if($image){
           
         $image_name=date('dmy-H-s-i');
         $ext=strtolower($image->getClientOriginalExtension());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/media/basic/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
         if( $oldimage!='public/default/Default_Product.jpg'){
            File::delete($oldimage);
            }
         $data['image']=$image_url;
        }else{
            if($oldimage=='' || $oldimage=='public/default/Default_Product.jpg' ){
            $file = 'public/default/Default_Product.jpg'; 
            $data['image']=$file;
            }
        }*/
       // $oldimages=array();
     // if($request->hasFile('file')){
       /* $oldimages=$request->file('old_images');
        $oldimages = is_array($oldimages) ? $oldimages : array($oldimages);
        $images=$request->file('file');
        $images = is_array($images) ? $images : array($images);
       
        if($images){
            $imgss=ProductImages::where('product_id',$id)->first();
            foreach($oldimages as $image){
                if($image==$imgss->name){
                $imgs=$image;
                $imgss->delete();
                if(File::exists($image)){
                File::delete($image);

                }
            }
            }

           foreach($images as $image){
               $image_name2=date('dmy_H_i_s');
               $name=$image->getClientOriginalName();
               $image_full_name2=$image_name2.".".$name;
               $upload_path2='public/media/second/';
               $image_url2=$upload_path2.$image_full_name2;
               $success2=$image->move($upload_path2,$image_full_name2);
   
             
                  $proImage = new ProductImages([
                   'name'    =>  $image_url2
               ]);
   
               $product->images()->save($proImage); 
               //$img=DB::table('product_images')->where('product_id',$id)->update($proImage);
           }
       }*/

       if ($request->hasFile('file')) {
        $files = $request->file('file');
        $imgss=ProductImages::where('product_id',$id)->get();
        foreach($imgss as $imgs){
            $imgs->delete();
        }
        $oldimages=$request->file('old_images');
        $oldimages = is_array($oldimages) ? $oldimages : array($oldimages);
        foreach($oldimages as $oldimage){
            if(File::exists($oldimage)){
                File::delete($oldimage);

                }
        }
        foreach($files as $file){
            
          if (isset($file)){
            $image_name2=date('dmy_H_i_s');
            $name=$file->getClientOriginalName();
            $image_full_name2=$image_name2.".".$name;
            $upload_path2='public/media/second/';
            $image_url2=$upload_path2.$image_full_name2;
            $success2=$file->move($upload_path2,$image_full_name2);
            $proImage = new ProductImages([
                'name'    =>  $image_url2
            ]);
           
            $product->images()->save($proImage); 
          }
        }
      }
        $product=DB::table('products')->where('id',$id)->update($data);

        //$product->categories()->sync($request->categories);
        return redirect()->route('product.index')->with('success','Product Updated Successfull');
    }

    public function delete($id){
        $data=Product::findOrFail($id)->first();
        $img=$data->image;
        $images=ProductImages::where('product_id',$id)->get();
        foreach($images as $image){
            $imgs=$image->name;
            if(File::exists($imgs)){
            File::delete($imgs);
            }
        }
        if (file_exists($img) ) {

            @unlink($img);
           
         Product::where('id', $id)->delete();

           }else{

           Product::where('id', $id)->delete();
            }       
      //  $product=DB::table('products')->where('id',$id)->delete();
        return redirect()->back()->with('success','Product Deleted Successfull');
    }

    public function show($id,Request $request)
    {
        $categories = Category::all();
        $brands = Brand::all();
        $product = Product::find($id);
        $edit=$request->input('edit');
      
        $avg=0;
        $total=0;
        $percFive=0;
        $percFour=0;
        $percThree=0;
        $percTwo=0;
        $percOne=0;
        $image=ProductImages::where('product_id',$id)->get();
       // $rating=Rating::where('product_id',$id)->get();
        $rating=Rating::where('product_id',$id)->get();
        $tw = $request->query('tw');
        if(isset($request->btn2)){
            $rating = $rating
            ->where('star', 'like', '%'.$tw.'%') ;
        }
        $on = $request->query('on');
        if(isset($btn1)){
            $rating = $rating
            ->where('star', 'like', '%'.$on.'%') ;
        }
       // $editrtg=Rating::where('product_id',$id)->first();
        $count=Rating::where('product_id',$id)->get()->count();
        $rating_user=Rating::where([
            'user_id'=>auth()->user()->id,
            'product_id' => $id
        ])->get()->count();
        $five=Rating::where([
            'product_id' => $id,
            'star' => '5'
            ])->get()->count();
            $four=Rating::where([
                'product_id' => $id,
                'star' => '4'
                ])->get()->count();
                $three=Rating::where([
                    'product_id' => $id,
                    'star' => '3'
                    ])->get()->count();
                    $two=Rating::where([
                        'product_id' => $id,
                        'star' => '2'
                        ])->get()->count();
                        $one=Rating::where([
                            'product_id' => $id,
                            'star' => '1'
                            ])->get()->count();
        $rating_show=Rating::where([
            'user_id'=>auth()->user()->id,
            'product_id' => $id
        ])->first();
        if($count>0){
            foreach($rating as $rat){
        $total+=$rat->star;
        $avg=$total/$count;
            }
        }else{
            $avg=0;
        }
if($count>0){
        $totalCount=$five+$four+$two+$three+$one;
        $percFive=($five/$totalCount)*100;
        $percFour=($four/$totalCount)*100;
        $percThree=($three/$totalCount)*100;
        $percTwo=($two/$totalCount)*100;
        $percOne=($one/$totalCount)*100;}
        return view('product.show',compact('product','image','avg','rating'))->with('categories',$categories)
        ->with('brands',$brands)->with('rating_user',$rating_user)->with('rating_show',$rating_show)
        ->with('rating',$rating)->with('five',$five)->with('four',$four)->with('three',$three)
        ->with('two',$two)->with('one',$one)->with('percFive',$percFive)->with('percThree',$percThree)
        ->with('percFour',$percFour)->with('percTwo',$percTwo)->with('percOne',$percOne)->with('edit',$edit);
    }

    public function addToCart(Request $request)
{
   /* $data=array();
   // $data['user_email']=$request->Auth::user()->email;
    $data['product_id']=$request->product_id;
    $data['product_name']=$request->product_name;
    $data['product_code']=$request->product_code;
    $data['product_price']=$request->product_price;
    $data['create_at'] =new \DateTime();*/
    /*$product_id=$request->input('product_id');
    $product_name=$request->input('price');
    $price=$request->input('price');
    $quantity=$request->input('qty');
    $product = Product::get('id');
    $options = $request->except('_token', 'productId', 'price', 'qty');

    Cart::add(uniqid(), $price,$quantity);*/
   // $cart=DB::table('carts')->insert($data);
   $user=Auth::user();
   $product_id = $request->input('product_id');
   //$product=Product::where('id',$product_id)->get();
   $product_name = $request->input('product_name');
   $product_code = $request->input('product_code');
   $product_name = $request->input('product_name');
   $quantity = $request->input('quantity');
   $publisher_id=$request->input('publisher_id');
   $price = $request->input('price');
   $product=Product::where('id',$product_id)->first();
   //$products=Product::where('brand_id',$product->brand_id)->get();

   //$brand=Brand::select('name')->where('id',$id)->first();
    $cart=DB::table('carts')->where('user_email',Auth::user()->email)->count();

   //if($cart==0){
    $cart= Cart::create([
        'product_id' => $product_id,
       'product_name' => $product_name,
       'product_code' => $product_code,
       'price' => $price,
       'quantity' => $quantity,
       'publisher_id'=>$publisher_id,
       'user_email'=> $user->email
   ]);  
    
  /* }else if($cart==1 ){
if(!$product->brand){
   $cart= Cart::create([
        'product_id' => $product_id,
       'product_name' => $product_name,
       'product_code' => $product_code,
       'price' => $price,
       'quantity' => $quantity,
       'user_email'=> $user->email
   ]);
   }*/
   



    return redirect()->back();
}
}
