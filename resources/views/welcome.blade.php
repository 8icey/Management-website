<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .btn {
            text-decoration: none;
        }

        button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #2d0e34;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color:  #511c5d;
        }

        .material-icons {
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <h2>Go to your website</h2>
    <a href="{{ route('login') }}" class="btn btn-primary">
        <button>
            <span class="material-icons" id="darkModeIcon">WEBSITE</span>
           
        </button>
    </a>
</body>
</html>
