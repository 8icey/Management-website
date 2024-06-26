<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Erreur - Accès non autorisé</title>
    <link rel="icon" type="image/png" href="IMAGES/logoalg.png">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 100px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #e74c3c;
            margin-bottom: 20px;
        }
        p {
            color: #333;
            font-size: 18px;
        }
        .btn {
        display: inline-block;
        padding: 8px 12px;
        background-color: #007bff; /* Your button color */
        color: #fff; /* Text color */
        text-decoration: none;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    .btn:hover {
        background-color: #0056b3; /* Change color on hover */
    }
    </style>
</head>
<body>
    <div class="container">
        <h2 id="www">L'accès non autorisé</h2>
        <p id="qqq">Seul l'utilisateur avec le rôle " Admin " peut accéder à cette page.</p>
        <a href="homepagefr" class="btn btn-primary" id="eee">Revenir à la page d'accueil</a>
    </div>
</body>
<script src="{{ asset('translate.js') }}"></script>
</html>
