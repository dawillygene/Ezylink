<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'company_type',
        'pan_card_number',
        'fax_number',
        'website',
        'email',
        'number',
        'company_logo',
    ];
}
