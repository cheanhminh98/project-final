<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $table = 'coupons';
    
    protected $fillable = [
        'suppiler_id', 'purchase_date', 
    ];

    public function suppliers()
    {
        return $this->belongsTo('App\Model\Supplier', 'supplier_id', 'id');
    }

    public function coupon_details()
    {
        return $this->hasMany('App\Model\CouponDetail', 'coupon_id', 'id');
    }
}
