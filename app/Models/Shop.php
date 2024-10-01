<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    protected $table = 'shop_personal_details';

    protected $fillable = [
        'first_name',
        'last_name',
        'contact_number',
        'phone_number',
        'email',
        'birth_of_date',
        'city',
        'country',
        'zip_code',
        'description',
    ];
}
