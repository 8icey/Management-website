<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">
    <title>Messages</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/Eggplant/jquery-ui.css">

    <style>
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
            padding-bottom: 2cm;
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

        #messageTable {
            margin-top: 0.5cm;
            width: 100%; /* Ensure table fills content area */
            border-collapse: collapse; /* Remove default table borders */
            margin-bottom: 20px; /* Add margin to bottom of table */
            background-color: #fff; /* White background for table */
            border-radius: 8px; /* Rounded corners for table */
            overflow: hidden; /* Ensure rounded corners are visible */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for table */
        }

        #messageTable thead th {
            background-color: #e0e0e0; /* Light gray background for table header */
            padding: 10px; /* Add padding to table header cells */
            text-align: left; /* Align table headers to the left */
            font-weight: bold; /* Bold text for headers */
            border-bottom: 2px solid #ddd; /* Border below headers */
        }

        #messageTable tbody td {
            padding: 10px; /* Add padding to table body cells */
            border-bottom: 1px solid #ddd; /* Border below table rows */
        }

        #messageTable tbody tr:hover {
            background-color: #f1f1f1; /* Highlight row on hover */
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
    </style>
</head>
<body>
    @include('sidebar')

    <div class="content">
        <h1>Messages</h1>
        <div>
            @if (session()->has('success'))
                {{ session('success') }}
            @endif
        </div>
        <form action="{{ route('msg.filter') }}" method="GET">
            <label for="start_date" id="start_date_label">Start Date:</label>
            <input type="text" id="start_date" name="start_date" value="{{ request('start_date') }}" autocomplete="off">
            <label for="end_date" id="end_date_label">End Date:</label>
            <input type="text" id="end_date" name="end_date" value="{{ request('end_date') }}" autocomplete="off">
            <button type="submit" class="btn" id="filter_button">Filter</button>
            <a href="{{ route('msg.index') }}" class="btn" id="reset_button">Reset</a>
        </form>
        <table id="messageTable">
            <thead>
                <tr>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($messages as $message)
                <tr>
                    <td>{{ $message->sender->Nom_user }} {{ $message->sender->Prenom_user }}</td>
                    <td>{{ $message->receiver->Nom_user }} {{ $message->receiver->Prenom_user }}</td>
                    <td>{{ $message->subject }}</td>
                    <td class="message">{{ $message->message }}</td>
                    <td>{{ $message->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @include('footer')

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script>
        $(document).ready(function() {
            $('#messageTable').DataTable({
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
            $('#messageTable').DataTable();
            
            $("#start_date").datepicker({
                dateFormat: "yy-mm-dd"
            });
            $("#end_date").datepicker({
                dateFormat: "yy-mm-dd"
            });

           
        });
        $(document).ready(function() {
            

            // Dark Mode toggle
            window.addEventListener('load', function () {
                const darkMode = localStorage.getItem('darkMode') === 'true';
                if (darkMode) {
                    document.body.classList.add('dark-mode');
                }
            });
        });
    </script>
</body>
</html>
