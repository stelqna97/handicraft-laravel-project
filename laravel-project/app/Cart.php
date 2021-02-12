<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'product_id', 'product_name','product_code','price','quantity','publisher_id','user_email'
    ];
    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function users(){
        return $this->belongsToMany(User::class);
    }

}
