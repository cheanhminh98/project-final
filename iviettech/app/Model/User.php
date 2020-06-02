<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'username', 'password', 'fullname', 'email_user', 'level', 'telephone_user', 'sex', 'image',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function orders()
    {
        return $this->hasMany('App\Model\Order', 'user_id','id');
    }

    public function suggests()
    {
        return $this->hasMany('App\Model\Suggest', 'user_id','id');
    }
}
