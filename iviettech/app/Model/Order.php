<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    
    protected $fillable = [
        'user_id', 'username', 'email_user', 'telephone_user', 'order_date', 'deliver_date', 'deliver_status', 'payment_date', 'deliver_address', 'total_price',
    ];

    public function users()
    {
        return $this->belongsTo('App\Model\User', 'user_id','id');
    }

    public function order_details()
    {
        return $this->hasMany('App\Model\OrderDetail', 'order_id','id');
    }
}
