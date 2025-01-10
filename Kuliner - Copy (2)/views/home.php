<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesona Kuliner Nusantara</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Caveat:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: rgb(5, 5, 5);
            --secondary-color: rgb(0, 0, 0);
            --accent-color: rgb(0, 180, 255);
            --text-color: rgb(255, 255, 255);
            --background-color: rgba(0, 122, 255, 0.9);
            --navbar-color: rgb(173, 216, 230); /* Warna biru muda */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            background: url('views/daerahmakanan.jpg') no-repeat center center/cover;
            color: var(--text-color);
            line-height: 1.6;
            overflow-x: hidden;
        }

        .navbar {
            background-color: var(--navbar-color);
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .navbar .logo {
            font-size: 1.5rem;
            font-weight: bold;
            color: var(--primary-color);
        }

        .navbar ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }

        .navbar ul li {
            font-size: 1rem;
        }

        .navbar ul li a {
            text-decoration: none;
            color: var(--secondary-color);
            transition: color 0.3s;
        }

        .navbar ul li a:hover {
            color: var(--accent-color);
        }

        .culinary-container {
            max-width: 1400px;
            margin: 2rem auto;
            padding: 2rem;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
            font-family: 'Montserrat', sans-serif;
            color: var(--primary-color);
            font-weight: 700;
            position: relative;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background-color: var(--accent-color);
        }

        .culinary-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .culinary-card {
            background: linear-gradient(to right, rgba(249, 247, 125, 0.8), rgba(53, 24, 24, 0.8));
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .culinary-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
        }

        .culinary-card-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .culinary-card-content {
            padding: 1rem;
            text-align: center;
        }

        .culinary-card-title {
            color: var(--text-color);
            font-size: 1.4rem;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .culinary-card-location {
            color: var(--text-color);
            font-size: 1rem;
            opacity: 0.8;
        }

        @media (max-width: 768px) {
            .culinary-card-image {
                height: 150px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <div class="logo">Pesona Kuliner</div>
        <ul>
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Makanan</a></li>
            <li><a href="#">Minuman</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
    </nav>

    <div class="culinary-container">
        <!-- Makanan Section -->
        <h2 class="section-title">Hidangan Tradisional</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/makanan/1.jpg" alt="rendang" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">rendang</h3>
                    <p class="culinary-card-location">📍 padang</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/2.jpg" alt=nasi gorang" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">nasi goreng</h3>
                    <p class="culinary-card-location">📍 jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="modul/LontongSayur.jpg" alt="lontong" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">lontong</h3>
                    <p class="culinary-card-location">📍 Palembang</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/makanan/4.jpg" alt="Sate" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Sate</h3>
                    <p class="culinary-card-location">📍 Madura</p>
                </div>
            </div>
        </div>

        <!-- Minuman Section -->
        <h2 class="section-title">Minuman Tradisional</h2>
        <div class="culinary-grid">
            <div class="culinary-card">
                <img src="images/minuman/1.jpg" alt="Es Cendol" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Es Cendol</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/icecampur.jpg" alt="es campur" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">es campur</h3>
                    <p class="culinary-card-location">📍 Jawa Tengah</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/3.jpg" alt="Bajigur" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Bajigur</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
            <div class="culinary-card">
                <img src="images/minuman/4.jpg" alt="Es Doger" class="culinary-card-image">
                <div class="culinary-card-content">
                    <h3 class="culinary-card-title">Es Doger</h3>
                    <p class="culinary-card-location">📍 Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
