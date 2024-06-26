<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer with Icons</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
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

        .footer .site-footer-links {
            margin-bottom: 24px; /* Adjust spacing between copyright and social links */
        }

        .footer .social ul {
            list-style-type: none; /* Remove default list styles */
            padding: 0;
        }

        .footer .social ul li {
            display: inline-block; /* Display social links horizontally */
            margin: 0 12px; /* Adjust spacing between social icons */
        }

        .footer .social ul li a {
            background-color: var(--bg-color); /* Match background color */
            color: var(--text-color); /* Match text color */
            text-decoration: none;
            font-size: 24px; /* Adjust icon size */
        }

        .footer .social ul li a:hover {
            text-decoration: underline; /* Add underline on hover */
            color: #007bff; /* Change color on hover if needed */
        }
    </style>
</head>
<body>
    <footer class="footer">
        <div class="site-footer-links">
            <p class="copyright">
                <span>© 2024 Algeria Telecom</span>
            </p>
        </div>
        <div class="social">
            <ul>
                <li>
                    <a target="_blank" href="http://www.facebook.com/algerietelecom/" alt="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" href="https://x.com/Algerie_Telecom" alt="X">
                        <i class="fab fa-x"></i>
                    </a>
                </li>
                {{-- <li>
                    <a target="_blank" href="https://www.youtube.com/user/Tvalgerietelecom" alt="Youtube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </li> --}}


                {{-- <li>
                    <a target="_blank" href="https://www.instagram.com/your_instagram_username/" alt="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </li> --}}
            </ul>
        </div>
    </footer>
</body>
</html>
