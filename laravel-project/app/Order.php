<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Order extends Model
{
    use Sortable;

    protected $fillable = [
       
            'order_number', 'user_id', 'status', 'grand_total', 'quantity','publisher_id',
            'first_name', 'last_name', 'address', 'city', 'country', 'post_code', 'phone_number', 'notes'
        ];    

        public $sortable = ['id','user_id','status','grand_total', 'quantity','created_at'];


        public function user()
        {
            return $this->belongsTo(User::class, 'user_id');
        }

    public function items()
    {
        return $this->hasMany(Order_item::class);
    }

}
