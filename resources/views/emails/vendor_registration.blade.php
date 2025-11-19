@php
use Illuminate\Support\Str;
@endphp

@component('mail::message')

# New vendor registration submission

Below are the details submitted via the vendor registration form.

@component('mail::table')
| Field | Value |
| ----- | ----- |
| Name | {{ $data['name'] }} |
| Email | {{ $data['email'] }} |
| Phone Number | {{ $data['phone_number'] }} |
| Contact Person | {{ $data['contact_person_name'] }} |
| Office Address | {{ $data['office_address'] }} |
| Bank Account No. | {{ $data['bank_account_no'] }} |
| IBAN Letter | {{ $data['iban_letter'] }} |
| VAT Registration No. | {{ $data['vat_registration_no'] }} |
@endcomponent

## Documents

@foreach (['trade_license', 'emirates_id', 'passport'] as $doc)
@if(!empty($data[$doc . '_url']))
- {{ Str::title(str_replace('_', ' ', $doc)) }}: [View]({{ $data[$doc . '_url'] }})
@endif
@endforeach

Thanks,<br>
{{ config('app.name') }}

@endcomponent
