<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable = [
        'name', 'lastname', 'email', 'subject','message',
    ];
    protected $table = 'contacts';
}
