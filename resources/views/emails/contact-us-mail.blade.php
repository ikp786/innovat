<!DOCTYPE html>
<html>
<head>
    <title>Contact Inquiry</title>
</head>
<body>
    <h1>New Contact Inquiry Received</h1>
    <p><strong>Name:</strong> {{ $contactUs->name }}</p>
    <p><strong>Email:</strong> {{ $contactUs->email }}</p>
    <p><strong>Contact Number:</strong> {{ $contactUs->contact_number }}</p>
    <p><strong>Location:</strong> {{ $contactUs->location }}</p>
    <p><strong>Service Name:</strong> {{ $contactUs->service->title ?? '' }}</p>
    <p><strong>Message:</strong> {{ $contactUs->message }}</p>
</body>
</html>
