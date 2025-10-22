<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone_number',
        'nationality',
        'property_type',
        'specifications',
        'preferred_location',
        'budget_range',
        'payment_for_rent',
        'number_of_family_members',
        'passport_pdf',
        'emirates_id_pdf',
        'bank_statement_pdf',
        'trade_license_pdf',
        'vat_registration_certificate_pdf',
        'etihad_credit_bureau_pdf',
    ];
}
