<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <link rel="shortcut icon" href="{{ asset('public/assets/installation') }}/assets/img/favicon.svg">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('public/assets/installation') }}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/installation') }}/assets/css/style.css">
    <style>
        /* Header Styles */
        .header {
            background-color: #2c3e50;
            /* Dark blue background */
            padding: 15px 0;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .header .logo img {
            height: 40px;
            /* Adjust logo size */
        }

        .header .navbar {
            display: flex;
            justify-content: flex-end;
            align-items: center;
        }

        .header .nav-list {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        .header .nav-item .nav-link {
            color: #ecf0f1;
            /* Light text color */
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .header .nav-item .nav-link:hover {
            color: #3498db;
            /* Blue hover color */
        }

        /* Footer Styles */
        .footer {
            background-color: #34495e;
            /* Darker blue background */
            color: #ecf0f1;
            /* Light text color */
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }

        .footer .footer-logo img {
            height: 30px;
            /* Adjust footer logo size */
        }

        .footer .copyright-text {
            margin: 0;
            font-size: 14px;
        }

        /* General Styles */
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            /* Light gray background */
        }

        .custom-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Privacy Policy Content Styles */
        .privacy-policy {
            background-color: #ffffff;
            /* White background */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .privacy-policy h1 {
            font-size: 28px;
            color: #2c3e50;
            /* Dark blue text */
            margin-bottom: 20px;
        }

        .privacy-policy h2 {
            font-size: 22px;
            color: #34495e;
            /* Darker blue text */
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .privacy-policy p {
            font-size: 16px;
            line-height: 1.6;
            color: #555;
            /* Dark gray text */
        }

        .privacy-policy ul {
            margin: 15px 0;
            padding-left: 20px;
        }

        .privacy-policy ul li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header class="header">
        <div class="custom-container">
            <div class="logo">
                <img src="https://ruchicart.com/storage/app/public/restaurant/2025-01-22-6790f3472fc37.png"
                    alt="Ruchi Cart Logo">
            </div>
            <nav class="navbar">
                <ul class="nav-list">
                    <li class="nav-item"><a href="#" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                    <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>


    <!-- Main Content -->
    <section style="background-image: url('{{ asset('public/assets/installation') }}/assets/img/page-bg.png')"
        class="w-100 min-vh-100 bg-img position-relative py-5">

        <div class="custom-container">
            @yield('content')
        </div>
    </section>

    <footer class="footer">
        <div class="custom-container">
            <div class="d-flex flex-column flex-sm-row justify-content-between gap-2 align-items-center">
                <div class="footer-logo">
                    <img src="https://ruchicart.com/storage/app/public/restaurant/2025-01-22-6790f3472fc37.png"
                        alt="Ruchi Cart Logo">
                </div>
                <p class="copyright-text mb-0">© {{ date('Y') }} | All Rights Reserved</p>
            </div>
        </div>
    </footer>

    <script src="{{ asset('public/assets/installation') }}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('public/assets/installation') }}/assets/js/script.js"></script>
    {!! Toastr::message() !!}

    <script>
        const passwordField = document.getElementById('password');
        const confirmationField = document.getElementById('confirm_password');

        confirmationField.addEventListener('input', () => {
            if (confirmationField.value === '') {
                confirmationField.setCustomValidity('');
                return;
            }

            if (passwordField.value === confirmationField.value) {
                confirmationField.setCustomValidity('');
            } else {
                confirmationField.setCustomValidity('The passwords do not match');
            }
        });
    </script>
</body>

</html>
