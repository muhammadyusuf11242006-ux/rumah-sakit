<?php

session_start();

include "koneksi.php";

$nik = $_POST['nik'];
$no_hp = $_POST['no_hp'];

$query = mysqli_query(
    $koneksi,
    "SELECT * FROM pasien
     WHERE nik='$nik'
     AND no_hp='$no_hp'"
);

$data = mysqli_fetch_assoc($query);

if ($data) {

    $_SESSION['pasien'] = $data['id'];

    header("Location: dashboard_pasien.php");

    exit;

} else {

    echo "
    <script>
        alert('NIK atau nomor HP salah!');
        window.location.href = 'login_pasien.php';
    </script>
    ";

}

?>