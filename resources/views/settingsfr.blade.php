<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Paramètres</title>
    <link rel="icon" type="image/png" href="IMAGES/favicon.png">
    <style>
        :root {
            --bg-color: #ffffff;
            --text-color: #000000;
            --chart-bg-color: #ffffff;
        }

        .dark-mode {
            --bg-color: #121212;
            --text-color: #717171;
            --chart-bg-color: #1e1e1e;
        }

        body {
            margin-top: 1cm;
            background-color: var(--bg-color);
            color: var(--text-color);
            margin: 0;
            padding: 0;
        }

        .content {
            margin: 0 auto;
            margin-top: 1cm;
            padding: 20px;
            background: rgb(203, 195, 216);
            max-width: 600px;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(203, 195, 216, 0.7);
        }

        .settings-title {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }

        .setting-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .setting-item label {
            margin-right: 20px;
            font-weight: bold;
            flex: 0 0 auto; /* Prevent label from growing */
        }

        #darkModeToggle {
            padding: 10px;
            background-color: var(--bg-color);
            color: var(--text-color);
            border: 1px solid var(--text-color);
            border-radius: 5px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }

        .material-icons {
            margin-right: 5px;
        }

        .settings-container {
            margin: 0 auto;
            margin-top: 1cm;
        }

        /* Style for language toggle */
        #languageToggle {
            padding: 8px;
            border: 1px solid var(--text-color);
            border-radius: 5px;
            background-color: var(--bg-color);
            color: var(--text-color);
            font-size: 16px;
        }

        #languageToggle option {
            background-color: var(--bg-color);
            color: var(--text-color);
        }









   

footer {
    flex-shrink: 0;
    text-align: center;
    padding: 64px;
    background-color: var(--bg-color);
    color: var(--text-color);
    font-size: 1.25em;
    position: relative;
    width: 100%;
}

.w3-container.w3-light-grey {
    background-color: var(--bg-color);
    color: var(--text-color);
}

    </style>
</head>
<body>
    @include('sidebarfr')
    <div class="content">
        <div class="settings-container">
            <h1 class="settings-title" id="sett">Paramètres</h1>
            <div class="setting-item">
                <label id="dm">Mode Sombre:</label>
                <button id="darkModeToggle">
                    <span class="material-icons" id="darkModeIcon">brightness_4</span> 
                    <span id="darkModeText">Mode Sombre</span>
                </button>
            </div>
            <div class="setting-item">
                <label id="lng">Langue:</label>
                <select id="languageToggle">
                   
                    <option value="fr" data-route="{{ route('settingsfr') }}">Français</option>
                    <option value="en" data-route="{{ route('settings') }}">English</option>
                </select>
                {{-- <button id="applyLanguage" type="button">Apply</button> --}}
                   
                </select>
            </div>
        </div>
    </div>
    @include('footer') 
    

    <script>
        const darkModeToggle = document.getElementById('darkModeToggle');
        const darkModeIcon = document.getElementById('darkModeIcon');
        const darkModeText = document.getElementById('darkModeText');
        // const languageToggle = document.getElementById('languageToggle');

        function toggleIcon(isDarkMode) {
            if (isDarkMode) {
                darkModeIcon.textContent = 'brightness_2'; 
                darkModeText.textContent = 'Sombre';
            } else {
                darkModeIcon.textContent = 'brightness_5'; 
                darkModeText.textContent = 'lumière';
            }
        }

        darkModeToggle.addEventListener('click', function () {
            document.body.classList.toggle('dark-mode');
            const isDarkMode = document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode);
            toggleIcon(isDarkMode);
        });

        // languageToggle.addEventListener('change', function () {
        //     const selectedLanguage = languageToggle.value;
        //     localStorage.setItem('language', selectedLanguage);
        //     setLanguage(selectedLanguage);
        // });

        window.addEventListener('load', function () {
            const darkMode = localStorage.getItem('darkMode') === 'true';
            const selectedLanguage = localStorage.getItem('language') || 'en';

            if (darkMode) {
                document.body.classList.add('dark-mode');
            }
            toggleIcon(darkMode);
            // languageToggle.value = selectedLanguage;
            // setLanguage(selectedLanguage);
        });
    </script>
    {{-- <script src="translate.js"></script> --}}
    {{-- <script src="{{ ('translate.js') }}"></script> --}}

    <script>
        // document.getElementById('applyLanguage').addEventListener('click', function() {
        //     var languageToggle = document.getElementById('languageToggle');
        //     var selectedOption = languageToggle.options[languageToggle.selectedIndex];
        //     var route = selectedOption.getAttribute('data-route');
        //     window.location.href = route;
        // });



        document.getElementById('languageToggle').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var route = selectedOption.getAttribute('data-route');
        window.location.href = route;
    });
    </script>
</body>
</html>
