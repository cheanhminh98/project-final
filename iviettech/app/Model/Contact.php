<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';
    
    protected $fillable = [
        'fullname', 'email', 'telephone', 'address', 'content', 'contact_date',
    ];
}
