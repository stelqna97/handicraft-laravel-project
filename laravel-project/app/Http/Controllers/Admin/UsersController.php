<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use App\Product;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Gate;
use DB;
use Illuminate\Support\Facades\Validator;
use Auth;

class UsersController extends Controller
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
       // $users=User::sortable()->paginate(10);
        $products=Product::all();
        $roles=Role::all();
        $users=User::query();
    $name = $request->query('name');
    $email = $request->query('email');
    $roless = $request->query('roles');
    $genre = $request->query('genre');
    $city = $request->query('city');
    $address = $request->query('address');
    $data = $request->query('data');
    if (!empty($name) ) {
        $users = $users
            ->where('users.name', 'like', '%'.$name.'%')
           // ->where('users.email', 'like', '%'.$email.'%')
          //  ->where('roles.id', 'like', '%'.$role.'%')
           // ->where('users.genre', 'like', '%'.$genre.'%')
            //->where('users.city', 'like', '%'.$city.'%')
            //->where('users.address', 'like', '%'.$address.'%')
           ;
    }
     if(!empty($email)){
        $users = $users
        ->where('users.email', 'like', '%'.$email.'%')
        ;
    }
     if(!empty($genre)){
        $users =$users
        ->where('users.genre', 'like', '%'.$genre.'%')
       ;
    }

if(!empty($roless)){
    //$user=$users->roles();
   $users =$users->whereHas('roles')
   ->where('id', 'like', '%'.$roless.'%')
  ;
}
    if(!empty($city)){
        $users = $users
        ->where('users.city', 'like', '%'.$city.'%')
        ;
    } 
    if(!empty($address)){
        $users = $users
        ->where('users.address', 'like', '%'.$address.'%')
        ;
    } 
    if(!empty($data)){
        $users = $users
        ->where('users.created_at', 'like', '%'.$data.'%');
    } 
        $users=$users->sortable()->paginate(6);

        //$user = User::find(1); //lets say for test we just took firs user
        //return $user->products()->get();
        return view('admin.users.index')->with('users',$users)->with([
            'users'=>$users,
            'roles'=>$roles,
            'product'=>$products,
            'name'=>$name,
            'email'=>$email,
            'roless'=>$roless,
            'address'=>$address,
            'city'=>$city,
            'genre'=>$genre,
            'data'=>$data
    ]);
    }

    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

     
    public function create(Request $request)
    {
       /* $roles = Role::all();
        $users=User::all();
        return view('admin.users.create', [ 'roles' => $roles ])->with('user',$users);*/
        $users=User::all();
        $roles = Role::all();
        return view('admin.users.create', compact('roles'))->with('user',$users);

    }


     /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
   /* protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }*/

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
  
     /*   $data=array();
        $user= User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
        $user->roles()->sync($request->roles);
       
        $user->save();

    return redirect()->route('admin.users.index');*/

    $this->validate($request, [
       'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],  
    ]);
    $name = $request->input('name');
    $email = $request->input('email');
    $password = $request->input('password');
    $file= 'public/default/Default_Profile.jpg';
    $user= User::create([
        'name' => $name,
        'email' => $email,
        'password' => Hash::make($password),
        'genre' => NULL,
        'address' => NULL,
        'city' => NULL,
        'phone' => NULL,
        'image' => $file
    ]);

    $user->roles()->sync($request->roles);
    $user->save();
    return redirect()->route('admin.users.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        return view('user.profile.show',compact('user', $user));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    /*if(Gate::denies('edit-users')){
    return redirect(route('admin.users.index'));
}*/
$user=User::where('id',$id)->first();

       $roles=Role::all();
       return view('admin.users.edit')->with([
               'user'=>$user,
               'roles'=>$roles
       ]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function editP($id)
    {
   
       $roles=Role::all();
       $user = User::find($id);
       return view('user.profile.edit')->with([
               'user'=>$user,
               'roles'=>$roles
       ]);
    }

  /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function updateP(Request $request, User $user)
    {

        $user = Auth::user();

        $data=array();
    /**
     * Validate request/input 
     **/
    $validator = Validator::make($request->all(),[
        'name' => 'required|max:255|string|'.$user->id,
        'email' => 'required|email|max:255|unique:users,email,'.$user->id,
    ]);

    /**
     * storing the input fields name & email in variable $input
     * type array
     **/
    $oldimage=$request->old_image;

   
    $data['name']=$request->name;
    $data['email']=$request->email;
    $data['phone']=$request->phone;
    $data['address']=$request->address;
    $data['genre']=$request->genre;
    $data['city']=$request->city;
    $data['updated_at'] =new \DateTime();
     $data['image']=$request->img;
    $image=$request->file('img');
    if($image){
     
     $image_name=date('dmy-H-s-i');
     $ext=strtolower($image->getClientOriginalName());
     $image_full_name=$image_name.".".$ext;
     $upload_path='public/profile/';
     $image_url=$upload_path.$image_full_name;
     $success=$image->move($upload_path,$image_full_name);

    /* if( $oldimage!='public/default/Default_Male_Profile.jpg'){
        unlink($oldimage);
        }
         if(  $oldimage=='public/default/Default_Female_Profile.jpg' ){
            unlink($oldimage);

        }
         if(  $oldimage!='public/default/Default_Profile.png'){
            unlink($oldimage);

        }*/
     $data['image']=$image_url;
    }else {
        //$file = 'public/default/Default_Profile.png'; 
        //$data['image']=$file;
        if($oldimage=='' || $oldimage=='public/default/Default_Profile.png' || $oldimage=='public/default/Default_Male_Profile.jpg' || $oldimage=='public/default/Default_Female_Profile.jpg'){
        if($data['genre']=='male'){
            $file = 'public/default/Default_Male_Profile.jpg'; 
            $data['image']=$file;
        }else if($data['genre']=='female'){
            $file = 'public/default/Default_Female_Profile.jpg'; 
            $data['image']=$file;
        }else{
            $file = 'public/default/Default_Profile.png'; 
            $data['image']=$file; 
        }
    }else{
        $data['image']=$oldimage;
    }
    
    }
    //$brand=DB::table('brands')->where('id',$id)->update($data);
    /**
     * Accessing the update method and passing in $input array of data
     **/
    $user->update($data);

    /**
     * after everything is done return them pack to /profile/ uri
     **/
    return redirect()->route('user.profile.show',$user->id);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $oldimage=$request->old_image;

        $data=array();
        $data['name']=$request->name;
        $data['email']=$request->email;
        $data['phone']=$request->phone;
        $data['address']=$request->address;
        $data['genre']=$request->genre;
        $data['city']=$request->city;
        $data['updated_at'] =new \DateTime();
    
        $image=$request->file('img');
        if($request->hasFile('img')){
        /*    if($image!=='public/default/Default_Male_Profile.jpg' && $oldimage!=='public/default/Default_Male_Profile.jpg'){
                unlink($oldimage);
                }else if( $image!=='public/default/Default_Female_Profile.jpg' &&  $oldimage!=='public/default/Default_Female_Profile.jpg' ){
                    unlink($oldimage);
    
                }else if( $image!=-'public/default/Default_Profile.png' &&  $oldimage!=='public/default/Default_Profile.png'){
                    unlink($oldimage);
    
                }*/
         $image_name=date('dmy-H-s-i');
         $ext=strtolower($image->getClientOriginalName());
         $image_full_name=$image_name.".".$ext;
         $upload_path='public/profile/';
         $image_url=$upload_path.$image_full_name;
         $success=$image->move($upload_path,$image_full_name);
    
         $data['image']=$image_url;
        }else if(!$image){
            //$file = 'public/default/Default_Profile.png'; 
            //$data['image']=$file;
            if($oldimage=='' || $oldimage=='public/default/Default_Profile.png' || $oldimage=='public/default/Default_Male_Profile.jpg' || $oldimage=='public/default/Default_Female_Profile.jpg'){
                if($data['genre']=='male'){
                    $file = 'public/default/Default_Male_Profile.jpg'; 
                    $data['image']=$file;
                }else if($data['genre']=='female'){
                    $file = 'public/default/Default_Female_Profile.jpg'; 
                    $data['image']=$file;
                }else{
                    $file = 'public/default/Default_Profile.png'; 
                    $data['image']=$file; 
                }
            }else{
                $data['image']=$oldimage;
            }
        }
        //$brand=DB::table('brands')->where('id',$id)->update($data);
        /**
         * Accessing the update method and passing in $input array of data
         * 
         **/        $user=DB::table('users')->where('id',$id);

        $user->roles()->sync($request->roles);
        $user->update($data);
    
   
   
    $user->save();
    return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     /*   if(Gate::denies('delete-users')){
            return redirect(route('admin.users.index'));
        }*/
        $user=User::where('id',$id)->first();
        $user->roles()->detach();

        $user->delete();
        return redirect()->route('admin.users.index');
    }
}
