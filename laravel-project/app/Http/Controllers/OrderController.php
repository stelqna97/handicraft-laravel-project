<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;
use DB;
use Auth;

class OrderController extends Controller
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
        $orders=Order::query();
        
        $firstname = $request->query('firstname');
        $lastname = $request->query('lastname');
        $data = $request->query('data');
        $order_number = $request->query('order_number');
        $status = $request->query('status');
        $quantitymin = $request->query('quantitymin');
        $quantitymax = $request->query('quantitymax');
        $min=$request->query('min');
        $max=$request->query('max');

        if (!empty($min) && !empty($max) ) {
            $orders = $orders
            ->where('grand_total', '>=', $min) 
            ->where('grand_total', '<=',$max) ;
        }else if (!empty($min) ) {
            $orders = $orders
                ->where('grand_total', '>=', $min) ;
        }else if ( !empty($max) ) {
            $orders = $orders
                ->where('grand_total', '<=', $max) ;
        }

        if (!empty($quantitymin) && !empty($quantitymax)  ) {
            $orders = $orders
            ->where('quantity', '<=', $quantitymax) 
            ->where('quantity', '>=', $quantitymin) ;
        } else if ( !empty($quantitymax)  ) {
            $orders = $orders
                ->where('quantity', '<=', $quantitymax) ;
        }else if (!empty($quantitymin)  ) {
            $orders = $orders
                ->where('quantity', '>=', $quantitymin) ;
        }


        if (!empty($firstname) ) {
            $orders = $orders
                ->where('first_name', 'like', '%'.$firstname.'%') ;
        }

        if (!empty($lastname) ) {
            $orders = $orders
                ->where('last_name', 'like', '%'.$lastname.'%') ;
        }

        if (!empty($data) ) {
            $orders = $orders
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
        if (!empty($order_number) ) {
            $orders = $orders
                ->where('order_number', 'like', '%'.$order_number.'%') ;
        }

        if (!empty($status) ) {
            $orders = $orders
                ->where('status', 'like', '%'.$status.'%') ;
        }
        
           
        $orders=$orders->sortable()->paginate(10);
        return view('orders',compact('orders'))
        ->with([
            'status'=>$status,
            'order_number'=>$order_number,
            'data'=>$data,
            'lastname'=>$lastname,
            'firstname'=>$firstname,
            'min'=>$min,
            'max'=>$max,
            'quantitymin'=>$quantitymin,
            'quantitymax'=>$quantitymax
        ]);
    }

  
    public function indexMyOrder(Request $request)
    {
        $user=Auth::user();
        $orders=Order::query()->where('user_id',$user->id);
   

        $data = $request->query('data');
        $status = $request->query('status');
        $quantitymin = $request->query('quantitymin');
        $quantitymax = $request->query('quantitymax');
        $min=$request->query('min');
        $max=$request->query('max');

        if (!empty($min) && !empty($max) ) {
            $orders = $orders
            ->where('grand_total', '>=', $min) 
            ->where('grand_total', '<=',$max) ;
        }else if (!empty($min) ) {
            $orders = $orders
                ->where('grand_total', '>=', $min) ;
        }else if ( !empty($max) ) {
            $orders = $orders
                ->where('grand_total', '<=', $max) ;
        }

        if (!empty($quantitymin) && !empty($quantitymax)  ) {
            $orders = $orders
            ->where('quantity', '<=', $quantitymax) 
            ->where('quantity', '>=', $quantitymin) ;
        } else if ( !empty($quantitymax)  ) {
            $orders = $orders
                ->where('quantity', '<=', $quantitymax) ;
        }else if (!empty($quantitymin)  ) {
            $orders = $orders
                ->where('quantity', '>=', $quantitymin) ;
        }

        if (!empty($data) ) {
            $orders = $orders
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
        if (!empty($order_number) ) {
            $orders = $orders
                ->where('order_number', 'like', '%'.$order_number.'%') ;
        }
        if($orders->count()>0){
            $orders=$orders->sortable()->paginate(10);
        }
        
        return view('myorders',compact('orders')) ->with([
            'status'=>$status,
            'data'=>$data,
            'min'=>$min,
            'max'=>$max,
            'quantitymin'=>$quantitymin,
            'quantitymax'=>$quantitymax,
        ]);
    }

    public function indexPublisherOrder(Request $request)
    {
        $user=Auth::user();
        $orders=Order::query()->where('publisher_id',auth()->user()->id);
        $firstname = $request->query('firstname');
        $lastname = $request->query('lastname');
        $data = $request->query('data');
        $status = $request->query('status');
        $quantitymin = $request->query('quantitymin');
        $quantitymax = $request->query('quantitymax');
        $min=$request->query('min');
        $max=$request->query('max');

        if (!empty($min) && !empty($max) ) {
            $orders = $orders
            ->where('grand_total', '>=', $min) 
            ->where('grand_total', '<=',$max) ;
        }else if (!empty($min) ) {
            $orders = $orders
                ->where('grand_total', '>=', $min) ;
        }else if ( !empty($max) ) {
            $orders = $orders
                ->where('grand_total', '<=', $max) ;
        }

        if (!empty($quantitymin) && !empty($quantitymax)  ) {
            $orders = $orders
            ->where('quantity', '<=', $quantitymax) 
            ->where('quantity', '>=', $quantitymin) ;
        } else if ( !empty($quantitymax)  ) {
            $orders = $orders
                ->where('quantity', '<=', $quantitymax) ;
        }else if (!empty($quantitymin)  ) {
            $orders = $orders
                ->where('quantity', '>=', $quantitymin) ;
        }

        if (!empty($firstname) ) {
            $orders = $orders
                ->where('first_name', 'like', '%'.$firstname.'%') ;
        }

        if (!empty($lastname) ) {
            $orders = $orders
                ->where('last_name', 'like', '%'.$lastname.'%') ;
        }
        
        if (!empty($data) ) {
            $orders = $orders
                ->where('created_at', 'like', '%'.$data.'%') ;
        }
        
        if (!empty($order_number) ) {
            $orders = $orders
                ->where('order_number', 'like', '%'.$order_number.'%') ;
        }

        
        $orders=$orders->sortable()->paginate(10);
        return view('publisherorders',compact('orders'))->with([
            'status'=>$status,
            'data'=>$data,
            'min'=>$min,
            'max'=>$max,
            'lastname'=>$lastname,
            'firstname'=>$firstname,
            'quantitymin'=>$quantitymin,
            'quantitymax'=>$quantitymax
        ]);;
    }




    public function deliverOrder(Order $order)
    {
        $order->is_delivered = true;
        $status = $order->save();

        return response()->json([
            'status'    => $status,
            'data'      => $order,
            'message'   => $status ? 'Order Delivered!' : 'Error Delivering Order'
        ]);
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
      
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order=DB::table('orders')->where('id',$id)->first();
        $user=DB::table('users')->where('id',$order->user_id)->first();
        $items=DB::table('order_items')->where('order_id',$order->id)->get();
        //$items=DB::table('order_items')->where('id',$order->product_id)->get();
       // $products=DB::table('$product')->where('id',$items->product_id)->get();
        return view('order-show')->with('order',$order)->with('user',$user)->with('items',$items);
    }

    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $order=DB::table('orders')->where('id',$id)->first();
        return view('editorder',compact('order'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $data=array();
        $data['city']=$request->city;
        $data['address']=$request->address;
        $data['status']=$request->status;        
        $data['phone_number']=$request->phone_number;
        $data['updated_at'] =new \DateTime();     
        $product=DB::table('orders')->where('id',$id)->update($data);
        return redirect()->route('admin.orders.index')->with('success','Product Updated Successfull');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=DB::table('orders')->where('id',$id)->first();
        $order=DB::table('orders')->where('id',$id)->delete();
        return redirect()->route('order.index')->with('success','Product Deleted Successfull');
    }
}
