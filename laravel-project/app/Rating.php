<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Rating extends Model
{
    use Sortable;

    protected $fillable = [
        'product_id', 'user_id','star' , 'comment'
    ];

    public $sortable = ['user_id','star','product_id','created_at'];

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
