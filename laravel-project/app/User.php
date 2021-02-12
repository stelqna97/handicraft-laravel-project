<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Kyslik\ColumnSortable\Sortable;
use Kyslik\LaravelFilterable\Filterable;

class User extends Authenticatable
{
    use Notifiable;
    use Sortable;
    use Filterable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','genre','address','city','image','phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public $sortable = ['id','name','email','city','genre','created_at','updated_at'];

    protected $filterables = ['name', 'genre', 'email', 'address', 'city'];

    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    public function products()
    {
       return $this->belongsToMany('App\Product', 'user_product')->withTimestamps();
    }

    public function order()
    {
        return $this->belongsToMany(Order::class);
    }

    public function hasAnyRoles($roles){
        if($this->roles()->whereIn('name',$roles)->first()){
            return true;
        }
        return false;
    }

    public function hasRole($role){
        if($this->roles()->where('name',$role)->first()){
            return true;
        }
        return false;
    }
}
