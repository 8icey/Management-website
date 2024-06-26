










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="/IMAGES/favicon.png">
    <title>Edit Dot</title>
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

select {
    padding: 8px;
    border: 1px solid #ccc;
    border-radius: 4px;
    width: 100%;
    box-sizing: border-box; /* Include padding and border in element's total width */
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
#btno {
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

#btno:hover {
    background-color: #5a1a6d; /* Change color on hover */
    text-decoration: none;
}


#btnyes {
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

#btnyes:hover {
    background-color: #5a1a6d; /* Change color on hover */
    text-decoration: none;
}
#btnupdate{
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

#btnupdate:hover {
    background-color: #5a1a6d; /* Change color on hover */
    text-decoration: none;
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

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1;
    padding-top: 100px;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.4);
}

.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 30%;
    border-radius: 15px; /* Rounded corners for modal */
    box-shadow: 0 0 15px rgba(203, 195, 216, 0.7); /* Outer glow for modal */
}

.close, .cancel {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    /* margin-left: 10px; */
}

.close:hover, .close:focus, .cancel:hover, .cancel:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
}

.modal-footer {
    display: flex;
    justify-content: flex-end;
    gap: 10px;
}

    </style>
</head>
<body>
    @include('sidebar')
    <div class="content">   
        <h1>Edit Dot</h1>
        @if ($errors->any())
            <div class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="editForm" action="{{ route('dot.update', $dot->ID_user) }}" method="POST">
            @csrf
            @method('PUT')
            {{-- <div>
                <label for="Email">Email</label>
                <input type="email" name="Email" value="{{ $dot->Email }}" required>
            </div> --}}
            <div>
                <label for="Password">Password</label>
                <input type="password" name="Password">
                <small>Leave blank to keep current password.</small>
            </div>
            <div>
                <label for="Nom_user">Nom</label>
                <input type="text" name="Nom_user" value="{{ $dot->Nom_user }}" required>
            </div>
            <div>
                <label for="Prenom_user">Prenom</label>
                <input type="text" name="Prenom_user" value="{{ $dot->Prenom_user }}" required>
            </div>
            <div>
                <label for="Wilaya_user">Wilaya</label>
                {{-- <input type="text" name="Wilaya_user" value="{{ old('Wilaya_user') }}" required> --}}
                <select name="Wilaya_user" id="Wilaya_user" name="Wilaya_user" value="{{$dot->Wilaya_user }}">
                    
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
                <button  type="button" onclick="showModal()" id="btnupdate" >Update</button>
            </div>
        </form>
    </div>
    @include('footer') 
   

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="close_button" onclick="closeModal()">&times;</span>
            <p id="modal_text">Do you really want to edit this dot?</p>
            <div class="modal-footer">
                <button type="button" class="cancel" id="btno" onclick="closeModal()">No</button>
                <button type="button" id="btnyes" onclick="confirmEdit()">Yes</button>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });

        function showModal() {
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }

        function confirmEdit() {
            document.getElementById("editForm").submit();
        }

        // Close modal if user clicks outside of it
        window.onclick = function(event) {
            if (event.target == document.getElementById("myModal")) {
                closeModal();
            }
        }
    </script>
</body>
</html>

