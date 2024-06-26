// document.getElementById('darkModeToggle').addEventListener('click', function () {
//     document.body.classList.toggle('dark-mode');
//     const isDarkMode = document.body.classList.contains('dark-mode');
//     localStorage.setItem('darkMode', isDarkMode);
//     this.textContent = isDarkMode ? 'Toggle Light Mode' : 'Toggle Dark Mode';
// });

// window.addEventListener('load', function () {
//     const darkMode = localStorage.getItem('darkMode') === 'true';
//     if (darkMode) {
//         document.body.classList.add('dark-mode');
//         document.getElementById('darkModeToggle').textContent = 'Toggle Light Mode';
//     }
// });


document.addEventListener('DOMContentLoaded', function () {
    const darkModeToggle = document.getElementById('darkModeToggle');

    function applyDarkMode(isDarkMode) {
        if (isDarkMode) {
            document.body.classList.add('dark-mode');
            if (darkModeToggle) darkModeToggle.textContent = 'Toggle Light Mode';
        } else {
            document.body.classList.remove('dark-mode');
            if (darkModeToggle) darkModeToggle.textContent = 'Toggle Dark Mode';
        }
    }

    if (darkModeToggle) {
        darkModeToggle.addEventListener('click', function () {
            const isDarkMode = !document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDarkMode);
            applyDarkMode(isDarkMode);
        });
    }

    const darkMode = localStorage.getItem('darkMode') === 'true';
    applyDarkMode(darkMode);
});