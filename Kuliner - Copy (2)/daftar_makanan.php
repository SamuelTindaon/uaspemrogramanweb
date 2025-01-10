<?php
include 'koneksi.php'; // Koneksi ke database
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Kuliner Tradisional</title>
</head>
<body>
    <h1>Daftar Kuliner Tradisional</h1>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Makanan</th>
                <th>Asal Daerah</th>
                <th>Foto</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Query untuk mengambil data dari tabel makanan
            $query = "SELECT * FROM makanan";
            $result = mysqli_query($conn, $query);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $no++ . "</td>";
                echo "<td>" . $row['nama_makanan'] . "</td>";
                echo "<td>" . $row['asal_daerah'] . "</td>";
                echo "<td><img src='images/" . $row['foto'] . "' alt='Foto " . $row['nama_makanan'] . "' width='100'></td>";
                echo "<td>" . $row['keterangan'] . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>
