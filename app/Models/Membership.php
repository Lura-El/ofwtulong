<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'passport_num',
        'email_address',
        'mobile_num',
        'birthdate',
        'civil_status',
        'job_position',
        'job_site',
        'employer_name',
        'employer_address',
        'employer_email',
        'employer_num',
        'recruitment_agency_phil',
        'contact_num_agency',
        'email_add_agency',
        'foreign_agency',
        'contact_num_foreign_agency',
        'email_add_foreign_agency',
        'next_of_kin',
        'relationship_with_ofw',
        'contact_number_relative',
        'relative_address_phil',
        'relative_email_add',
    ];
}