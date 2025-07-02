<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    protected $fillable = [
        'name',
        'email',
        'country',
        'check_in_date',
        'check_out_date',
        'message',
    ];
}
