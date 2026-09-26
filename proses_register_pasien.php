<?php

include "koneksi.php";

$nama = $_POST['nama'];
$nik = $_POST['nik'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$alamat = $_POST['alamat'];
$no_hp = $_POST['no_hp'];
$layanan = $_POST['layanan'];

if (!preg_match('/^[0-9]{16}$/', $nik)) {

    echo "
    <script>
        alert('NIK harus terdiri dari 16 angka!');
        window.location.href = 'register_pasien.php';
    </script>
    ";

    exit;
}

$cek = mysqli_query(
    $koneksi,
    "SELECT * FROM pasien WHERE nik='$nik'"
);

if (mysqli_num_rows($cek) > 0) {

    echo "
    <script>
        alert('NIK sudah terdaftar!');
        window.location.href = 'login_pasien.php';
    </script>
    ";

    exit;
}

$query = mysqli_query(
    $koneksi,
    "INSERT INTO pasien
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
    )"
);

if ($query) {

    echo "
    <script>
        alert('Pendaftaran pasien berhasil! Silakan login menggunakan NIK dan No HP.');
        window.location.href = 'login_pasien.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Pendaftaran pasien gagal!');
        window.location.href = 'register_pasien.php';
    </script>
    ";

}

?>