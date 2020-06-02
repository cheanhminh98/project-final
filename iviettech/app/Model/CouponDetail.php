<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CouponDetail extends Model
{
    protected $table = 'coupon_details';

    protected $fillable = [
        'product_id', 'coupon_id', 'price', 'quatity', 'total_price',
    ];

    public function coupons()
    {
        return $this->belongsTo('App\Model\Coupon', 'coupon_id', 'id');
    }

    public function products()
    {
        return $this->belongsTo('App\Model\Product', 'product_id', 'id');
    }
}
