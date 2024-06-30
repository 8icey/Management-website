

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index Derangement</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/Eggplant/jquery-ui.css">
    
    <style>
        
       .dataTables_wrapper .dataTables_filter input {
    
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
.dataTables_wrapper .dataTables_length {
           display: flex;
           align-items: center;
           margin-bottom: 10px;
       }

       .dataTables_wrapper .dataTables_length label {
           margin-right: 5px; /* Adjust as needed */
       }

       .dataTables_wrapper .dataTables_length select {
           width: auto; /* Adjust width as needed */
       }
       
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
                   background-color: rgb(0,0,0);
                   background-color: rgba(0,0,0,0.4);
               }
               .modal-content {
                   background-color: #fefefe;
                   margin: auto;
                   padding: 20px;
                   border: 1px solid #888;
                   width: 80%;
               }
               .close {
                   color: #aaa;
                   float: right;
                   font-size: 28px;
                   font-weight: bold;
               }
               .close:hover,
               .close:focus {
                   color: black;
                   text-decoration: none;
                   cursor: pointer;
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

        #derangementsTable {
            width: 100%; /* Ensure table fills content area */
            border-collapse: collapse; /* Remove default table borders */
            padding: 10px; /* Add padding to table */
            margin-bottom: 20px; 
        }  
        #derangementsTable thead th {
            background-color: #e0e0e0; /* Light gray background for table header */
            padding: 5px 10px; /* Add padding to table header cells */
            text-align: left; /* Align table headers to the left */
        }


        input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

/* Button Styles */


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
</head>
<body>
    @include('sidebar') 
    <div class="content"> 
        <h1 id="title">Derangements</h1>
        <div>
            @if (session()->has('success'))
                <span id="success">{{ session('success') }}</span>
            @endif
        </div>

        <form action="{{ route('derangement.index') }}" method="GET"></form>

        <form action="{{ route('derangement.filter') }}" method="GET">
            <label for="start_date" id="start_date_label">Start Date:</label>
            <input type="text" id="start_date" name="start_date" value="{{ request('start_date') }}" autocomplete="off">
            <label for="end_date" id="end_date_label">End Date:</label>
            <input type="text" id="end_date" name="end_date" value="{{ request('end_date') }}" autocomplete="off">
            <button type="submit" class="btn" id="filter_button">Filter</button>
            <a href="{{ route('derangement.index') }}" class="btn" id="reset_button">Reset</a>
        </form>

        <div>
            <table id="derangementsTable" class="display">
                <thead>
                    <tr>
                        <th id="th_id">ID derang</th>
                        <th id="th_status">Status derang</th>
                        <th id="th_type">Type derang</th>
                        <th id="th_wilaya">Wilaya</th>
                        <th id="th_address">Adresse</th>
                        <th id="th_firstname">Nom client</th>
                        <th id="th_lastname">Prenom client</th>
                        <th id="th_mobile">Mobile client</th>
                        <th id="th_phone">Fixe client</th>
                        <th id="th_created_at">Created at</th>
                        <th id="th_edit">Edit</th>
                        <th id="th_delete">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($derangement as $derangements)
                        <tr>
                            <td>{{ $derangements->ID_Derangement }}</td>
                            <td>{{ $derangements->Status_Derangement }}</td>
                            <td>{{ $derangements->Type_derangement }}</td>
                            <td>{{ $derangements->client->Wilaya_client }}</td>
                            <td>{{ $derangements->client->Adresse }}</td>
                            <td>{{ $derangements->client->Nom_client }}</td>
                            <td>{{ $derangements->client->Prenom_client }}</td>
                            <td>{{ $derangements->client->Mobile }}</td>
                            <td>{{ $derangements->client->Fixe }}</td>
                            <td>{{ $derangements->created_at }}</td>
                            <td><a class="btn" href="{{ route('derangement.edit', $derangements->ID_Derangement) }}" >Edit</a></td>
                            <td>
                                <form action="{{ route('derangement.destroy', $derangements->ID_Derangement) }}" method="POST" style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn" type="submit" >Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('footer') 
    

    <!-- The Modal -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" onclick="closeModal()">&times;</span>
            <form id="editForm" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="Status_Derangement" id="status_label">Status derangement</label>
                    <input type="text" name="Status_Derangement" id="Status_Derangement" required>
                </div>
                <div>
                    <button type="submit" id="yes_button">Yes</button>
                </div>
            </form>
        </div>
    </div>

   
    
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        

$(document).ready(function() {
            $('#derangementsTable').DataTable({
                "language": {
                    "lengthMenu": "Show _MENU_ entries",
                    "search": "Search:",
                    "paginate": {
                        "previous": "Previous",
                        "next": "Next"
                    },
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries"
                },
                "initComplete": function(settings, json) {
                    // Add custom classes to the search input and the length select
                    $('div.dataTables_filter input').addClass('my-custom-search');
                    $('div.dataTables_length select').addClass('my-custom-select');
                }
            });
        });



        $(document).ready(function() {
            $('#derangementsTable').DataTable();
            
            $("#start_date").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#end_date").datepicker({
                dateFormat: "yy-mm-dd"
            });

           
        });
        
        function openModal(id, status) {
            document.getElementById("Status_Derangement").value = status;
            document.getElementById("editForm").action = `/derangement/${id}`;
            document.getElementById("myModal").style.display = "block";
        }

        function closeModal() {
            document.getElementById("myModal").style.display = "none";
        }


        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
        });
    </script>
    
</body>
</html>
