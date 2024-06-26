<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/IMAGES/favicon.png">
    <title>Envoyer un Message</title>
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #ffffff; /* Match background color */
            color: #333333; /* Match text color */
            margin: 0;
            padding: 20px;
        }
        .content {
            margin-left: 270px; /* Match sidebar width if applicable */
            padding: 20px;
            background: #cbc3d8; /* Match content background color */
            border-radius: 15px; /* Match rounded corners */
            box-shadow: 0 0 15px rgba(203, 195, 216, 0.7); /* Match outer glow */
        }
        h1 {
            font-size: 24px; /* Match header size */
            color: #444; /* Slightly darker header text */
            margin-top: 0; /* Remove default top margin */
        }
        form {
            background: #cbc3d8; /* Match content background color */
            padding: 20px;
            border-radius: 5px; /* Match form border radius */
            /* box-shadow: 0 2px 5px rgba(0,0,0,0.1); Match form box shadow */
            margin-bottom: 20px; /* Add space between form and table */
        }
        input[type="text"],
        textarea {
            width: calc(100% - 20px); /* Adjust width to account for padding */
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc; /* Match input border */
            border-radius: 4px; /* Match input border radius */
            box-sizing: border-box;
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
        a {
            color: #007bff; /* Link color */
            text-decoration: none; /* Remove underline */
        }
        a:hover {
            text-decoration: underline; /* Underline links on hover */
        }
        .autocomplete-suggestions {
            /* max-width: calc(100% - 1px); Adjust maximum width */
            border: 1px solid #ccc; /* Match autocomplete border */
            background: #fff; /* Match autocomplete background */
            overflow: auto;
            position: absolute; /* Position relative to input field */
            z-index: 1000; /* Ensure it's above other elements */
        }
        .autocomplete-suggestion {
            padding: 10px;
            cursor: pointer;
        }
        .autocomplete-selected {
            background: #f0f0f0; /* Match selected autocomplete item background */
        }

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
    </style>
</head>
<body>
    @include('sidebarfr')
    <div class="content">
        <h1>Envoyer un Message</h1>

        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif

        <form action="{{ route('msg.sendfr') }}" method="POST">
            @csrf
            <label for="receiver_email">E-mail du destinataire :</label>
            <input type="text" name="receiver_email" id="receiver_email" required>
            <input type="hidden" name="receiver_id" id="receiver_id" required>
            <label for="subject">Sujet:</label>
            <input type="text" name="subject" id="subject" required>
            <label for="message">Message:</label>
            <textarea name="message" id="message" cols="30" rows="5" required></textarea>
            <button class="btn" type="submit">Envoyer</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
       $(document).ready(function() {
    $('#receiver_email').on('input', function() {
        var search = $(this).val();
        if (search.length > 0) { // Check if there's input
            $.ajax({
                url: '{{ route("emails") }}',
                data: {search: search},
                success: function(data) {
                    console.log(data); // Debugging line
                    var suggestions = '';
                    $.each(data, function(id, email) {
                        suggestions += '<div class="autocomplete-suggestion" data-id="' + id + '">' + email + '</div>';
                    });
                    $('.autocomplete-suggestions').remove();
                    $('<div class="autocomplete-suggestions"></div>').insertAfter('#receiver_email').html(suggestions);
                },
                error: function(xhr, status, error) {
                    console.log('Error: ' + error);
                }
            });
        } else {
            $('.autocomplete-suggestions').remove();
        }
    });

    $(document).on('click', '.autocomplete-suggestion', function() {
        $('#receiver_email').val($(this).text());
        $('#receiver_id').val($(this).data('id'));
        $('.autocomplete-suggestions').remove();
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
