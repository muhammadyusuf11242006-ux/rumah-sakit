<?php

session_start();

if (!isset($_SESSION['pasien'])) {

    header("Location: login_pasien.php");

    exit;

}

include "koneksi.php";

$id = $_SESSION['pasien'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM pasien WHERE id='$id'"
);

$pasien = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>Dashboard Pasien - RS Sehat Sentosa</title>

    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>

        <div class="logo">
            🏥 RS SEHAT SENTOSA
        </div>

        <nav>

            <a href="logout_pasien.php">
                Logout
            </a>

        </nav>

    </header>

    <section class="section">

        <div class="section-title">

            <p>PASIEN</p>

            <h2>
                Data Saya
            </h2>

        </div>

        <div class="table-container">

            <table>

                <tr>
                    <th>Nama</th>
                    <td><?php echo htmlspecialchars($pasien['nama']); ?></td>
                </tr>

                <tr>
                    <th>NIK</th>
                    <td><?php echo htmlspecialchars($pasien['nik']); ?></td>
                </tr>

                <tr>
                    <th>Jenis Kelamin</th>
                    <td><?php echo htmlspecialchars($pasien['jenis_kelamin']); ?></td>
                </tr>

                <tr>
                    <th>Tanggal Lahir</th>
                    <td><?php echo htmlspecialchars($pasien['tanggal_lahir']); ?></td>
                </tr>

                <tr>
                    <th>Alamat</th>
                    <td><?php echo htmlspecialchars($pasien['alamat']); ?></td>
                </tr>

                <tr>
                    <th>No HP</th>
                    <td><?php echo htmlspecialchars($pasien['no_hp']); ?></td>
                </tr>

                <tr>
                    <th>Layanan</th>
                    <td><?php echo htmlspecialchars($pasien['layanan']); ?></td>
                </tr>

                <tr>
                    <th>Tanggal Daftar</th>
                    <td><?php echo htmlspecialchars($pasien['tanggal_daftar']); ?></td>
                </tr>

            </table>

        </div>

    </section>

</body>

</html>