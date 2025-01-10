<?php require "includes/pageHeader.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuliner Tradisional</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        /* Base Styles */
        body {
            margin: 0;
            font-family: 'Poppins', Arial, sans-serif;
            background: url('views/daerahmakanan.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            animation: gradientBG 20s ease infinite;
        }

        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }

        /* Header Styles */
        header {
            text-align: center;
            padding: 40px 20px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
            border-radius: 30px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.15);
            margin: 30px auto;
            max-width: 85%;
            position: relative;
            overflow: hidden;
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        header::before {
            content: '';
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            background: linear-gradient(45deg,rgb(38, 183, 88),rgb(38, 183, 88),rgb(38, 183, 88), #96E6B3);
            border-radius: 30px;
            z-index: -1;
            filter: blur(20px);
            animation: borderGlow 4s ease-in-out infinite;
        }

        h1 {
            margin: 0;
            font-size: 48px;
            font-weight: 800;
            background: linear-gradient(to right, #FF4B2B,rgb(66, 8, 200));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            animation: fadeInTitle 2s, glowText 3s ease-in-out infinite;
            text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.2);
            letter-spacing: 2px;
        }

        @keyframes glowText {
            0%, 100% { filter: brightness(100%); }
            50% { filter: brightness(120%); }
        }

        /* Container Styles */
        .container {
            background: rgba(76, 163, 235, 0.95);
            border-radius: 25px;
            padding: 35px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
            margin: 30px auto;
            max-width: 1200px;
            position: relative;
            border: 1px solid rgba(255, 255, 255, 0.4);
        }

        .food-card {
            background: white;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 30px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            transition: all 0.4s ease;
            border: 1px solid rgba(0, 0, 0, 0.05);
            position: relative;
            overflow: hidden;
        }

        .food-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
        }

        .food-card img {
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .food-card:hover img {
            transform: scale(1.05);
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.2) !important;
            backdrop-filter: blur(15px);
            border-radius: 20px;
            margin: 20px auto;
            max-width: 85%;
            padding: 15px 30px;
            border: 1px solid rgba(54, 23, 23, 0.3);
        }

        .navbar-nav .nav-link {
            color: #333 !important;
            font-weight: 600;
            padding: 12px 25px;
            transition: all 0.3s ease;
            border-radius: 15px;
            margin: 0 5px;
        }

        .navbar-nav .nav-link:hover {
            background: rgba(250, 4, 4, 0.33);
            color: #FF4B2B !important;
            transform: translateY(-2px);
        }

        /* Footer Styles */
        footer {
            background: rgba(192, 244, 3, 0.9);
            backdrop-filter: blur(15px);
            padding: 40px 0;
            margin-top: 60px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        footer h5 {
            color: #FF4B2B;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            line-height: 40px;
            text-align: center;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            background:rgb(8, 227, 74);
            transform: translateY(-5px);
        }

        @media (max-width: 768px) {
            header {
                margin: 15px;
                padding: 25px;
            }

            h1 {
                font-size: 36px;
            }

            .container {
                margin: 15px;
                padding: 25px;
            }

            .navbar {
                margin: 15px;
                padding: 10px 20px;
            }
        }
    </style>
</head>

<body>
    <header>
        <div class="header-decoration">
            <div class="decoration-circle circle-1"></div>
            <div class="decoration-circle circle-2"></div>
            <div class="decoration-circle circle-3"></div>
        </div>
        <h1>Kuliner Nusantara</h1>
        <p class="mt-3" style="font-size: 1.3em; color: #333; font-weight: 500;">
            Eksplorasi Cita Rasa Warisan Indonesia
        </p>
    </header>

    <?php require "includes/navbar.php" ?>

    <div class="container mt-4 mb-5">
        <?php require "includes/konten.php" ?>
    </div>

    <footer>
        <?php require "includes/pageFooter.php" ?>
    </footer>
</body>

</html>
