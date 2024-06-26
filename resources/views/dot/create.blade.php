
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Dot</title>
    <link rel="icon" type="image/png" href="/IMAGES/favicon.png">
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #333333;
            --chart-bg-color: #ffffff;
        }

        .dark-mode {
            --bg-color: #121212;
            --text-color: #717171;
            --chart-bg-color: #1e1e1e;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0; /* Remove default body margin */
        }

        .content {
            margin: 0.5cm;
            margin-left: 270px; /* Match sidebar width if applicable */
            padding: 20px;
            background: rgb(203, 195, 216);
            padding-bottom: 5cm;
            
            /* Rounded corners */
            border-radius: 15px;
            
            /* Outer glow */
            box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
        }
        select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box; /* Include padding and border in element's total width */
}
        h1 {
            margin-top: 0; /* Remove default top margin */
            font-size: 24px; /* Adjust header size */
        }

        form div {
            margin-bottom: 15px; /* Add space between form fields */
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%; /* Make input fields full-width */
        }

        .btn {
    display: inline-block;
    padding: 8px 12px;
    background-color: #2c0438; /* Button color */
    color: #fff; /* Text color */
    text-decoration: none;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease;
    margin-right: 10px; /* Add some margin for spacing */
    text-decoration: none;
}

.btn:hover {
    background-color: #5a1a6d; /* Change color on hover */
    text-decoration: none;
}
        small {
            display: block;
            margin-top: 5px;
            color: #555;
        }

        .error-messages {
            color: red;
            margin-bottom: 20px;
        }

        .error-messages ul {
            padding: 0;
            list-style: none;
        }

        .error-messages li {
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    @include('sidebar')
    <div class="content">   
        <h1>Create New Dot</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('dot.store') }}" method="POST">
            @csrf
            <div>
                <label for="Email">Email</label>
                <input type="email" name="Email" value="{{ old('Email') }}" required>
            </div>
            <div>
                <label for="Password">Password</label>
                <input type="password" name="Password" required>
            </div>
            <div>
                <label for="Nom_user">First Name</label>
                <input type="text" name="Nom_user" value="{{ old('Nom_user') }}" required>
            </div>
            <div>
                <label for="Prenom_user">Last Name</label>
                <input type="text" name="Prenom_user" value="{{ old('Prenom_user') }}" required>
            </div>
            <div>
                <label for="Wilaya_user">Wilaya</label>
                {{-- <input type="text" name="Wilaya_user" value="{{ old('Wilaya_user') }}" required> --}}
                <select name="Wilaya_user" id="Wilaya_user" name="Wilaya_user" value="{{ old('Wilaya_user') }}">
                    
                    <option value="Adrar">Adrar</option>
                    <option value="Chlef">Chlef</option>
                    <option value="Laghouat">Laghouat</option>
                    <option value="Oum El Bouaghi">Oum El Bouaghi</option>
                    <option value="Batna">Batna</option>
                    <option value="Béjaïa">Béjaïa</option>
                    <option value="Biskra">Biskra</option>
                    <option value="Béchar">Béchar</option>
                    <option value="Blida">Blida</option>
                    <option value="Bouira">Bouira</option>
                    <option value="Tamanrasset">Tamanrasset</option>
                    <option value="Tébessa">Tébessa</option>
                    <option value="Tlemcen">Tlemcen</option>
                    <option value="Tiaret">Tiaret</option>
                    <option value="Tizi Ouzou">Tizi Ouzou</option>
                    <option value="Alger">Alger</option>
                    <option value="Djelfa">Djelfa</option>
                    <option value="Jijel">Jijel</option>
                    <option value="Sétif">Sétif</option>
                    <option value="Saïda">Saïda</option>
                    <option value="Skikda">Skikda</option>
                    <option value="Sidi Bel Abbès">Sidi Bel Abbès</option>
                    <option value="Annaba">Annaba</option>
                    <option value="Guelma">Guelma</option>
                    <option value="Constantine">Constantine</option>
                    <option value="Médéa">Médéa</option>
                    <option value="Mostaganem">Mostaganem</option>
                    <option value="M'Sila">M'Sila</option>
                    <option value="Mascara">Mascara</option>
                    <option value="Ouargla">Ouargla</option>
                    <option value="Oran">Oran</option>
                    <option value="El Bayadh">El Bayadh</option>
                    <option value="Illizi">Illizi</option>
                    <option value="Bordj Bou Arreridj">Bordj Bou Arreridj</option>
                    <option value="Boumerdès">Boumerdès</option>
                    <option value="El Tarf">El Tarf</option>
                    <option value="Tindouf">Tindouf</option>
                    <option value="Tissemsilt">Tissemsilt</option>
                    <option value="El Oued">El Oued</option>
                    <option value="Khenchela">Khenchela</option>
                    <option value="Souk Ahras">Souk Ahras</option>
                    <option value="Tipaza">Tipaza</option>
                    <option value="Mila">Mila</option>
                    <option value="Aïn Defla">Aïn Defla</option>
                    <option value="Naâma">Naâma</option>
                    <option value="Aïn Témouchent">Aïn Témouchent</option>
                    <option value="Ghardaïa">Ghardaïa</option>
                    <option value="Relizane">Relizane</option>
                </select>
            </div>
            <div>
                <input class="btn" type="submit" value="Create User">
            </div>
        </form>
    </div>
    @include('footer') 
    
    <script>
        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });
    </script>
</body>
</html>

