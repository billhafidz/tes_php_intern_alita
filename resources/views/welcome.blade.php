<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Welcome</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .welcome-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 400px;
            max-height: 70vh;
            background-color: #e0f7e0; 
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 100%;
            max-width: 450px;
            margin: auto;
        }

        h1 {
            margin-bottom: 20px;
            color: #3c763d;
        }

        .btn {
            margin: 10px;
            font-size: 1rem;
            padding: 10px 20px;
            border-radius: 25px;
            color: black;
            text-decoration: none;
            background-color: #e9ecef;
            transition: background-color 0.3s, color 0.3s;
        }

        .btn:hover {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body class="antialiased">
    <div class="welcome-container">
        <h1>Welcome!</h1>
        <p>Select one to continue:</p>
        <br>
        <div>
            <a href="{{ route('location.index') }}" class="btn">Location</a>
            <a href="{{ route('employee.index') }}" class="btn">Employee</a>
        </div>
    </div>

    <!-- Bootstrap JS (optional) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>