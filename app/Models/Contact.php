<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    // Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'last_name',
        'first_name',
        'gender',
        'email',
        'postcode',
        'address',
        'building_name',
        'opinion',
    ];
}
