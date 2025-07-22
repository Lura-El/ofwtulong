<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestAssistance extends Model
{
    use HasFactory;

    protected $table = 'request_assistance';

    protected $fillable = [
        'first_name',
        'middle_name',
        'last_name',
        'passport_num',
        'iqama_number',
        'gender',
        'email_fb',
        'occupation',
        'personal_phone_num',
        'other_phone_num',
        'ksa_location',
        'latitude',
        'longitude',
        'address',
        'employer_name',
        'employer_number',
        'saudi_agency',
        'phil_agency',
        'uploaded_files',
        'complaint',
    ];
}