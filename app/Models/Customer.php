<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class customer extends Model
{
    use HasFactory;

    protected $fillable = [

        'mail_address',
        'phone_number',
        'linkedin',
        'twitter',
        'instagram',
        'photo',
        'first_name',
        'last_name',
    ];
}
