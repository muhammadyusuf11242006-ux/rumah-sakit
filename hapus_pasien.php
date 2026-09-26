<?php

session_start();

if (!isset($_SESSION['admin'])) {

    header("Location: login.php");

    exit;

}

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query(
    $koneksi,
    "DELETE FROM pasien WHERE id='$id'"
);

if ($query) {

    echo "
    <script>

        alert('Data pasien berhasil dihapus!');

        window.location.href = 'dashboard.php';

    </script>
    ";

} else {

    echo "
    <script>

        alert('Data pasien gagal dihapus!');

        window.location.href = 'dashboard.php';

    </script>
    ";

}

?>