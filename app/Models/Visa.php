<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visa extends Model
{
    use HasFactory;


    protected $fillable = [
    'visa_no',
    'first_name',
    'last_name',
    'passport_number',
    'religion',
    'passport_expiry_date',
    'date_of_issue',
    'valid_until',
    'date_of_birth',
    'nationality',
    'sex',
    'photo'
];

}
