<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Brand extends Model
{
    use Sortable;

    protected $fillable = [
        'name', 'details','logo'
    ];

    public $sortable = ['id','name','created_at','updated_at'];


    public function users()
    {
        return $this->hasMany('App\User');
    }
  
    public function attributes()
    {
        return $this->hasMany(BrandAttribute::class,'brand_id');
    }
}
