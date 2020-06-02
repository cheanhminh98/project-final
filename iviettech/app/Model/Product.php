<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    
    protected $fillable = [
        'name_product', 'quantity', 'price', 'promotion_price', 'supplier_id', 'category_id', 'RAM', 'image', 'VGA', 'operating_system', 'cpu', 'guarantee', 'note', 'description', 
    ];

    public function order_details()
    {
        return $this->hasMany('App\Model\Product', 'product_id','id');
    }

    public function categories()
    {
        return $this->belongsTo('App\Model\Category', 'category_id','id');
    }

    public function coupon_details()
    {
        return $this->hasMany('App\Model\CouponDetail', 'product_id','id');
    }

    public function suppliers()
    {
        return $this->belongsTo('App\Model\Supplier', 'supplier_id', 'id');
    }
}
