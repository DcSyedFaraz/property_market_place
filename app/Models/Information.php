<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone_number', 'trade_license',
        'emirates_id', 'passport', 'bank_account_no',
        'iban_letter', 'vat_registration_no', 'contact_person_name',
        'office_address'
    ];
}
