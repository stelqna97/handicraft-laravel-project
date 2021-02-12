<?php

namespace App\Http\Controllers;

use App\Rating;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\ProductImages;

class RatingController extends Controller
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
        $rating=Rating::query();
        
        $star = $request->query('star');
        $comment = $request->query('comment');

        if (!empty($star) ) {
            $rating = $rating
                ->where('star', 'like', '%'.$star.'%') ;
        }

        if (!empty($comment) ) {
            $rating = $rating
                ->where('comment', 'like', '%'.$comment.'%') ;
        }
        
            $rating=$rating->sortable()->paginate(10);
     
        return view('rating.index')->with('rating',$rating)->with('star',$star)->with('comment',$comment);
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
        $data=array();
        $data['star']=$request->star;
        $data['user_id'] = $request->user_id;
        $data['comment']=$request->comment;
        $data['product_id']=$request->product_id;
        $data['created_at'] =new \DateTime();
        $data['updated_at'] =new \DateTime();

        $Rating=DB::table('ratings')->insert($data);

       // $brand = Brand::create($data);
      

      

        return redirect()->back()->with('success','brand Created Successfull');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rating  $Rating
     * @return \Illuminate\Http\Response
     */
    public function show(Rating $Rating)
    {
       
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rating  $Rating
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //$categories = rating::all();
        //$brands = Brand::all();
        $avg=0;
        $total=0;
        $product = Product::find($id);
        $rating=Rating::where('product_id',$id)->get();
        $image=ProductImages::where('product_id',$id)->get();
        $count=Rating::where('user_id',auth()->user()->id)->get()->count();
        $editrtg=DB::table('ratings')->where([
            'user_id'=>auth()->user()->id,
            'product_id' => $id
        ])->first();
        $rating_user=Rating::where('user_id',auth()->user()->id)->get()->count();
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
        if($count>=0){
            foreach($rating as $rat){
        $total+=$rat->star;
        $avg=$total/$count;
            }
        }else{
            $avg=0;
        }

        $totalCount=$five+$four+$two+$three+$one;
        $percFive=($five/$totalCount)*100;
        $percFour=($four/$totalCount)*100;
        $percThree=($three/$totalCount)*100;
        $percTwo=($two/$totalCount)*100;
        $percOne=($one/$totalCount)*100;
        return view('product.showeditrating',compact('editrtg','image','avg','count','total','rating_user'))
        ->with('product',$product)->with('percFive',$percFive)->with('percThree',$percThree)
        ->with('percFour',$percFour)->with('percTwo',$percTwo)->with('percOne',$percOne)
        ->with('five',$five)->with('four',$four)->with('three',$three)
        ->with('two',$two)->with('one',$one)->with('rating',$rating);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rating  $Rating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data=array();
        $data['star']=$request->star;
        $data['comment']=$request->comment;
        $data['updated_at'] =new \DateTime();

        $rating=DB::table('ratings')->where([
            'product_id'=>$id,
            'user_id'=>auth()->user()->id
        ])->update($data);
        return redirect()->route('product.show',$id);    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rating  $Rating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rating $Rating)
    {
        //
    }
}
