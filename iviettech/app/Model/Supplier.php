<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'suppliers';
    
    protected $fillable = [
        'name_supplier', 'telephone_supplier', 'address', 'email', 
    ];

    public function products()
    {
        return $this->hasMany('App\Model\Product', 'supplier_id', 'id');
    }

    public function coupons()
    {
        return $this->hasMany('App\Model\Coupon', 'supplier_id' , 'id');
    }
}
