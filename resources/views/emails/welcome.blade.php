<!DOCTYPE html>
<html>
<head>
    <title>Welcome to Our Application</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: #333;
            font-size: 24px;
            margin-top: 0;
        }
        
        p {
            color: #555;
            margin-bottom: 20px;
        }
        
        .button {
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
        }
        
        .button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Our Application</h1>
        <p>Dear {{ $user->name }},</p>
        <p>Welcome to our application! Your account has been created successfully.</p>
        <p>Your password: {{ $password }}</p>
        <p>Please keep this password secure and change it after logging in.</p>
        <p>Thank you for joining us!</p>
        
        <p>
            If you have any questions or need further assistance, feel free to contact our support team.
        </p>
        
        <p>
            Best regards,<br>
            The Our Application Team
        </p>
        
        <p>
            <a href="{{ url('/') }}" class="button">Go to Our Application</a>
        </p>
    </div>
</body>
</html>
