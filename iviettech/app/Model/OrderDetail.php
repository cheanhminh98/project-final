<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'order_details';

    protected $fillable = [
        'order_id', 'product_id', 'price', 'quantity',
    ];

    public function orders()
    {
        return $this->belongsTo('App\Model\Order', 'order_id','id');
    }

    public function products()
    {
        return $this->belongsTo('App\Model\Product', 'product_id','id');
    }
}
