<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Kyslik\ColumnSortable\Sortable;

class Product extends Model  implements Searchable
{
    use Sortable;

    protected $fillable = [
        'product_name','product_price', 'product_code', 'details','image','user_id','brand_id','category_id'
    ];

    public $sortable = ['product_name','product_price','user_id','product_code','created_at','updated_at','brand_id','category_id'];

    public function getSearchResult(): SearchResult
    {
        $url = route('search', $this->id);

        return new SearchResult(
            $this,
            $this->name,
            $url
         );
    }

    public function users(){
        return $this->belongsToMany(User::class, 'user_id');
        }

        public function orders(){
            return $this->hasMany(Order::class);
        }
       

        public function images()
        {
        return $this->hasMany(ProductImages::class);
        }

        public function category(){
            return $this->belongsTo(Category::class,'category_id');
        }

        public function carts()
    {
       return $this->belongsToMany(Cart::class);
    }

        public function brand(){
            return $this->belongsTo(Brand::class,'brand_id');
        }

        public function order_items()
    {
        return $this->belongsTo(Order_item::class);
    }
}
