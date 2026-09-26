<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$layanan = $_POST['layanan'];

$query = "INSERT INTO pasien
(
    nama,
    nik,
    jenis_kelamin,
    tanggal_lahir,
    alamat,
    no_hp,
    layanan
)
VALUES
(
    '$nama',
    '$nik',
    '$jenis_kelamin',
    '$tanggal_lahir',
    '$alamat',
    '$no_hp',
    '$layanan'
)";

$hasil = mysqli_query($koneksi, $query);

if ($hasil) {

    echo "
    <script>
        alert('Pendaftaran pasien berhasil!');
        window.location.href = 'index.html';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Pendaftaran gagal!');
        window.location.href = 'index.html';
    </script>
    ";

}

?>