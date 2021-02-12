<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use Spatie\Searchable\Search;
use DB;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $products=Product::all();
        $categories=Category::all();
        $request->session()->flash('success','tessting success');
        $brands=DB::table('brands')->get();
        return view('home2')->with([
            'categories'=>$categories,
            'products'=>$products,
            'brands'=>$brands
    ]);
    }
    
    public function home(Request $request)
    {
        $products=Product::all();
        $categories=Category::all();
        $request->session()->flash('success','tessting success');
        $brands=DB::table('brands')->get()->paginate(3);
        return view('home')->with([
            'categories'=>$categories,
            'products'=>$products,
            'brands'=>$brands
    ]);
    }
    
}
