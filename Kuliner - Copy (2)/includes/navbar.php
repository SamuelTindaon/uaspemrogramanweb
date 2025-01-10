<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Kuliner</title>
    <!-- Tambahkan jQuery sebelum Bootstrap -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        /* Styling tambahan untuk Navbar */
        .navbar {
            background: linear-gradient(120deg, #FF7E5F, #FEB47B, #4ECDC4);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .navbar-brand {
            font-size: 28px;
            font-weight: bold;
            color: white;
            text-shadow: 3px 3px 8px rgba(0, 0, 0, 0.4);
        }

        .navbar-brand:hover {
            color: #FFD700;
        }

        .nav-link {
            color: white !important;
            font-size: 18px;
            font-weight: 500;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease-in-out;
        }

        .nav-link:hover {
            color: #FFD700 !important;
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-3px);
            box-shadow: 0 4px 8px rgba(255, 255, 255, 0.2);
        }

        .dropdown-menu {
            background: rgba(0, 0, 0, 0.8);
            border: none;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .dropdown-item {
            color: white !important;
            font-size: 16px;
            font-weight: 500;
            transition: all 0.3s ease-in-out;
        }

        .dropdown-item:hover {
            background: #FFD700;
            color: black !important;
            transform: translateX(5px);
        }

        .btn-outline-light {
            border-color: white;
            color: white;
            padding: 0.5rem 1.5rem;
            font-weight: bold;
            font-size: 16px;
            transition: all 0.3s ease-in-out;
        }

        .btn-outline-light:hover {
            background: #FFD700;
            color: black;
            transform: scale(1.1);
        }

        .navbar-toggler {
            border-color: white;
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml;charset=UTF8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='white' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
        }

        /* Tambahan efek mewah untuk dropdown */
        .dropdown:hover .dropdown-menu {
            display: block;
            opacity: 0;
            animation: fadeIn 0.3s forwards;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <a class="navbar-brand" href="?page=home">Kuliner</a>
            <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=makanan">Makanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=minuman">Minuman</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a 
                            class="nav-link dropdown-toggle" 
                            href="#" 
                            id="navbarDropdown"
                            role="button" 
                            data-bs-toggle="dropdown" 
                            aria-expanded="false">
                            About
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=about">About Us</a></li>
                            <li><a class="dropdown-item" href="?page=contact">Contact</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="btn btn-outline-light" href="?page=login">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Tambahkan script Bootstrap di akhir body -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
