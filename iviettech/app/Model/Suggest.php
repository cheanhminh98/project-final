<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Suggest extends Model
{
    protected $table = 'suggests';
    
    protected $fillable = [
        'user_id', 'username', 'email_user', 'telephone_user', 'name_product', 'quantity', 'content',
    ];

    public function users()
    {
        return $this->belongsTo('App\Model\User', 'user_id','id');
    }
}
