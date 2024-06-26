

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demande 4G</title>
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">
    <style> .dataTables_wrapper .dataTables_filter input {
    
        border-radius: 4px;
        padding: 5px;
        font-size: 14px;
        margin-left: 5px;
        width: 300px;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button {
        background-color:  #ada5b9;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 8px 12px;
        margin-right: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    
    .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
        background-color:  #50465f;
    }
    
    .dataTables_wrapper .dataTables_length select {
        border: 2px solid ;
        border-radius: 4px;
        padding: 5px;
        font-size: 14px;
        margin-left: 5px;
        margin: 10px;
    }
    .dataTables_filter label {
            font-weight: bold;
            color: #333;
        }
    
        .dataTables_filter input {
            border: 2px solid ;
            border-radius: 4px;
            padding: 5px;
            font-size: 14px;
            margin-left: 5px;
        }
    
        /* Customize the entries dropdown */
        .dataTables_length label {
            font-weight: bold;
            color: #333;
        }
    
        .dataTables_length select {
            border: 2px solid;
            border-radius: 4px;
            padding: 5px;
            font-size: 14px;
            margin-left: 5px;
        }
    /* General Styling */
    body {
        background-color: var(--bg-color);
        color: var(--text-color);
        margin: 0; /* Remove default body margin */
        font-family: Arial, sans-serif; /* Improve font readability */
    }
    
    :root {
        --bg-color: #ffffff;
        --text-color: #333333; /* Darker text color for better readability */
        --chart-bg-color: #ffffff;
    }
    
    .dark-mode {
        --bg-color: #121212;
        --text-color: #717171;
        --chart-bg-color: #1e1e1e;
    }
    
    /* Content Area Styling */
    .content {
        margin: 0.5cm;
        margin-left: 270px; /* Match sidebar width if applicable */
        padding: 20px;
        background: #cbc3d8;
        padding-bottom: 5cm;
        
        /* Rounded corners */
        border-radius: 15px;
        
        /* Outer glow */
        box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
    }
    
    /* Header Styling */
    h1 {
        margin-top: 0; /* Remove default top margin */
        font-size: 24px; /* Adjust header size */
        color: #444; /* Slightly darker header text */
    }
    .dataTables_wrapper thead {
    background-color: #d5d3d3;
    font-weight: bold;
    --text-color: #333333;
}
    /* Button Styles */
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
    
    .btn-reset {
        background-color: #cccccc; /* Light gray background for reset button */
        color: #333333; /* Dark gray text color for reset button */
        border: 1px solid #cccccc; /* Add a border to reset button */
        padding: 8px 12px;
        font-size: 16px;
    }
    
    /* Search Bar Styling */
    .search-bar {
        display: flex; /* Arrange search elements horizontally */
        margin-bottom: 15px; /* Add some space after search bar */
    }
    
    .search-bar input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        flex-grow: 1; /* Allow search input to fill available space */
        margin-right: 10px; /* Add margin for spacing */
    }
    
    /* Table Styling */
    #demandeTable {
        width: 100%; /* Ensure table fills content area */
        border-collapse: collapse; /* Remove default table borders */
        margin-bottom: 20px; /* Add margin to bottom of table */
        background-color: #fff; /* White background for table */
        border-radius: 8px; /* Rounded corners for table */
        overflow: hidden; /* Ensure rounded corners are visible */
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for table */
    }
    
    #demandeTable thead th {
        background-color: #e0e0e0; /* Light gray background for table header */
        padding: 10px; /* Add padding to table header cells */
        text-align: left; /* Align table headers to the left */
        font-weight: bold; /* Bold text for headers */
        border-bottom: 2px solid #ddd; /* Border below headers */
    }
    
    #demandeTable tbody td {
        padding: 10px; /* Add padding to table body cells */
        border-bottom: 1px solid #ddd; /* Border below table rows */
    }
    
    #demandeTable tbody tr:hover {
        background-color: #f1f1f1; /* Highlight row on hover */
    }
    
    /* Form Styling */
    form {
        margin-bottom: 20px; /* Add space between form and table */
    }
    
    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    
    form input[type="text"] {
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        width: calc(100% - 16px); /* Adjust width to account for padding */
        box-sizing: border-box; /* Ensure padding is included in width calculation */
        margin-bottom: 10px; /* Add space between input fields */
    }
    
    /* Miscellaneous */
    a {
        color: #007bff; /* Link color */
        text-decoration: none; /* Remove underline from links */
    }
    
    a:hover {
        text-decoration: underline; /* Underline links on hover */
    }
    
    div.error-messages {
        color: red;
        margin-bottom: 20px;
    }
    
    div.error-messages ul {
        padding: 0;
        list-style: none;
    }
    
    div.error-messages li {
        margin-bottom: 5px;
    }
    
    
    @media (max-width: 768px) {
        .content {
            margin: 0.5cm;
            margin-left: 0; /* Remove left margin */
            padding: 15px; /* Reduce padding */
        }
        .btn, .btn-reset {
            font-size: 14px; /* Reduce font size */
            padding: 6px 10px; /* Adjust padding */
        }
        #demandeTable thead th, #demandeTable tbody td {
            padding: 8px; /* Reduce padding in table cells */
        }
        .search-bar {
            flex-direction: column; /* Stack search elements vertically */
        }
        .search-bar input[type="text"] {
            margin-bottom: 10px; /* Add margin between input and button */
            margin-right: 0; /* Remove right margin */
        }
        form {
            padding: 15px; /* Reduce form padding */
        }
        form label, form input[type="text"] {
            font-size: 14px; /* Reduce font size in form */
        }
    }
    
    @media (max-width: 480px) {
        .content {
            padding: 10px; /* Further reduce padding */
        }
        h1 {
            font-size: 20px; /* Reduce header size */
        }
        .btn, .btn-reset {
            font-size: 12px; /* Further reduce font size */
            padding: 5px 8px; /* Adjust padding */
        }
        #demandeTable thead th, #demandeTable tbody td {
            padding: 6px; /* Further reduce padding in table cells */
        }
        .search-bar {
            flex-direction: column; /* Stack search elements vertically */
        }
        .search-bar input[type="text"] {
            margin-bottom: 8px; /* Add margin between input and button */
            margin-right: 0; /* Remove right margin */
        }
        form {
            padding: 10px; /* Further reduce form padding */
        }
        form label, form input[type="text"] {
            font-size: 12px; /* Further reduce font size in form */
        }
    }
    </style>
   
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/Eggplant/jquery-ui.css">
</head>
<body>
    @include('sidebarfr')
    <div class="content">  
        <h1>Demande 4G</h1>
        <div>
            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>
        <form action="{{ route('demande.quatregfr') }}" method="GET"></form>
        <form action="{{ route('demande.filterqfr') }}" method="GET">
            <label for="start_date">Date debut:</label>
            <input type="text" id="start_date" name="start_date" value="{{ request('start_date') }}" autocomplete="off">
            <label for="end_date">Date fin:</label>
            <input type="text" id="end_date" name="end_date" value="{{ request('end_date') }}" autocomplete="off">
            <button type="submit" class="btn btn-primary" id="filter_button">Filtrer</button>
            <a href="{{ route('demande.quatregfr') }}" class="btn btn-primary">Réinitialiser</a>

        </form>
        <div>
            <table id="demandeTableQUATREG" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>ID demande</th>
                        <th>Statue demande</th>
                        <th>Wilaya</th>
                        <th>Adresse</th>
                        <th>Nom client</th>
                        <th>Prenom client</th>
                        <th>Mobile client</th>
                        <th>Fixe client</th>
                        <th>Créé à</th>
                        <th>Modifier</th>
                        <th>Supprimer</th>
                    
                    </tr>
                </thead>
                <tbody>
                    @foreach($demandequatreg as $demande)
                        <tr>
                            <td>{{ $demande->ID_demande }}</td>
                            <td>{{ $demande->Status_demande }}</td>
                            <td>{{ $demande->client->Wilaya_client }}</td>
                            <td>{{ $demande->client->Adresse }}</td>
                            <td>{{ $demande->client->Nom_client }}</td>
                            <td>{{ $demande->client->Prenom_client }}</td>
                            <td>{{ $demande->client->Mobile }}</td>
                            <td>{{ $demande->client->Fixe }}</td>
                            <td>{{ $demande->client->created_at  }}</td>
                            <td><a class="btn" href="{{ route('demande.editfr', $demande->ID_demande) }}">Modifier</a></td>
                            <td>
                                <form action="{{ route('demande.destroyfr', $demande->ID_demande) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="Type_demande" value="quatreg">
                                    <button class="btn" type="submit" onclick="return confirm('Are you sure?')">Supprimer</button>
                                </form>
                            </td>
                           
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('footer') 
    
  
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <script>

$(document).ready(function() {
            $('#demandeTableQUATREG').DataTable({
                "language": {
                    "lengthMenu": "Affichage de _MENU_ entrées",
                    "search": "Search:",
                    "paginate": {
                        "previous": "Précédente",
                        "next": "Suivante"
                    },
                    "info": "Affichage de _START_ à _END_ sur _TOTAL_  "
                },
            });
        });
       

        $(document).ready(function() {
            $('#demandeTableQUATREG').DataTable();
            
            $("#start_date").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#end_date").datepicker({
                dateFormat: "yy-mm-dd"
            });
        });

        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });
    </script>
</body>
</html>
