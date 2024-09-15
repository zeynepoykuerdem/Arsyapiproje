<!DOCTYPE html>
<html lang="">
<head>
    <title>Contact Form Submission</title>
</head>
<body>
<p>Name: {{ $contactDetails['customer_name'] }}</p>
<p>Email: {{ $contactDetails['customer_email'] }}</p>
<p>Subject:{{ $contactDetails['subject'] }}</p>
<p>Message: {{ $contactDetails['customer_message'] }}</p>
</body>
</html>
