<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone_number', 'marital_status', 'services', 'cv', 
    'do_you_have_dependent', 'number_of_dependence', 'date', 'time', 'payment_status'];
}
