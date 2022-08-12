<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone_number', 'marital_status', 'services', 'documents', 
    'do_you_have_dependent', 'number_of_dependence', 'any_city_of_choice', 'city_of_your_choice', 
    'any_course_of_reference', 'course_of_reference', 'date', 'time', 'payment_status'];
}
