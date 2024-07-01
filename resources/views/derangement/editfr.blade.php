










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title id="edit_derangement_title">Modifier Derangement</title>
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

        input[type="text"] {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 100%; /* Make input fields full-width */
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
    @include('sidebarfr')
    <div class="content">
        <h1 id="edit_derangement_heading">Modifier Derangement</h1>
        @if ($errors->any())
            <div id="error_messages" class="error-messages">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form id="editForm" action="{{ route('derangement.updatefr', $derangement->ID_Derangement) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="Status_Derangement" id="status_label">Statue derangement</label>
                <input type="text" name="Status_Derangement" value="{{ $derangement->Status_Derangement }}" maxlength="10" pattern="[A-Za-z]+" required>
            </div>
            <div>
                <button type="button" id="btnupdate" onclick="showModal()">Mettre a jour</button>
            </div>
        </form>
    </div>
    @include('footer') 


    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" id="close_button" onclick="closeModal()">&times;</span>
            <p id="modal_text">Voulez-vous vraiment modifier cette dérangement?</p>
            <div class="modal-footer">
                <button type="button" class="cancel" id="btno" onclick="closeModal()" href="derangement.indexfr">Non</button>
                <button type="button" id="btnyes" onclick="confirmEdit()">Oui</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="translate.js"></script>
    <script>
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

        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });

        // $(document).ready(function() {
        //     const savedLanguage = localStorage.getItem('language') || 'en';
        //     setLanguage(savedLanguage);
        // });
    </script>
</body>
</html>
