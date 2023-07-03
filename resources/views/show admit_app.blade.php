<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Application Details</h2>

<p><strong>Name:</strong> {{ $application->name }}</p>
<p><strong>Type:</strong> {{ $application->type }}</p>
<p><strong>Department:</strong> {{ $application->dept }}</p>
<p><strong>Qualification:</strong> {{ $application->qualification }}</p>
<p><strong>Email:</strong> {{ $application->email }}</p>

    
</body>
</html>