<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Complaint Submission</title>
</head>

<body>
    <h2>New Complaint Submitted</h2>
    <p><strong>Full Name:</strong> {{ $data['full_name'] }}</p>
    <p><strong>Phone Number:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Building / Villa:</strong> {{ $data['building_villa'] }}</p>
    <p><strong>Flat No.:</strong> {{ $data['flat_no'] }}</p>
    <p><strong>Complaint About:</strong> {{ $data['complaint'] }}</p>
    {{-- <p><strong>Email Flat Tenant:</strong> {{ $data['email_flat_tenant'] }}</p> --}}
    <p><strong>Complaint Details:</strong></p>
    <p>{{ $data['complaint_details'] }}</p>
    <p><strong>Suggestion:</strong></p>
    <p>{{ $data['suggestion'] }}</p>
</body>

</html>
