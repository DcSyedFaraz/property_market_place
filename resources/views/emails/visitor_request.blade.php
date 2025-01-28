<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Visitor Submission</title>
</head>

<body>
    <h2>New Property Request</h2>
    <p><strong>Name:</strong> {{ $data['name'] }}</p>
    <p><strong>Phone:</strong> {{ $data['phone_number'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Property Type:</strong> {{ $data['property_type'] }}</p>
    <p><strong>Specifications:</strong> {{ $data['specifications'] }}</p>
    <p><strong>Preferred Location:</strong> {{ $data['preferred_location'] ?? 'Not specified' }}</p>
    <p><strong>Budget Range:</strong> {{ $data['budget_range'] ?? 'Not specified' }}</p>
</body>

</html>
