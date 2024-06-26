<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">
    <title>Messages</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables -->
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#messageTable').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true,
                "info": true
            });

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
