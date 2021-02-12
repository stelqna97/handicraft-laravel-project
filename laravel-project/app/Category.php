<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Category extends Model
{
    use Sortable;

    protected $fillable = [
        'name', 'details','logo'
    ];

    public $sortable = ['id','name','created_at','updated_at'];


    public function products() 
    {return $this->hasMany(Product::class,'category_id');
    }
}
