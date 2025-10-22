<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Visitor Submission</title>
</head>

<body>
    <h2>Visitor</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Nationality:</strong> {{ $data['nationality'] ?? 'N/A' }}</p>
    <p><strong>Property Type:</strong> {{ $data['property_type'] }}</p>
    <p><strong>Specifications:</strong> {{ $data['specifications'] }}</p>
    <p><strong>Preferred Location:</strong> {{ $data['preferred_location'] ?? 'Not specified' }}</p>
    <p><strong>Budget Range:</strong> {{ $data['budget_range'] ?? 'Not specified' }}</p>
    <p><strong>Payment For Rent:</strong> {{ $data['payment_for_rent'] ?? 'N/A' }}</p>
    <p><strong>Number of Family Members:</strong> {{ $data['number_of_family_members'] ?? 'N/A' }}</p>

    <h3>Submitted Documents</h3>
    <ul>
        <li>Passport: @if(!empty($data['passport_pdf'])) <a href="{{ asset('storage/' . $data['passport_pdf']) }}">View</a> @else N/A @endif</li>
        <li>Emirates ID: @if(!empty($data['emirates_id_pdf'])) <a href="{{ asset('storage/' . $data['emirates_id_pdf']) }}">View</a> @else N/A @endif</li>
        <li>Bank Statement: @if(!empty($data['bank_statement_pdf'])) <a href="{{ asset('storage/' . $data['bank_statement_pdf']) }}">View</a> @else N/A @endif</li>
        <li>Trade License: @if(!empty($data['trade_license_pdf'])) <a href="{{ asset('storage/' . $data['trade_license_pdf']) }}">View</a> @else N/A @endif</li>
        <li>VAT Registration Certificate: @if(!empty($data['vat_registration_certificate_pdf'])) <a href="{{ asset('storage/' . $data['vat_registration_certificate_pdf']) }}">View</a> @else N/A @endif</li>
        <li>Etihad Credit Bureau: @if(!empty($data['etihad_credit_bureau_pdf'])) <a href="{{ asset('storage/' . $data['etihad_credit_bureau_pdf']) }}">View</a> @else N/A @endif</li>
    </ul>
</body>

</html>
