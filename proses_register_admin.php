<?php

include "koneksi.php";

$username = $_POST['username'];
$password = $_POST['password'];
$konfirmasi = $_POST['konfirmasi_password'];

if ($password != $konfirmasi) {

    echo "
    <script>
        alert('Konfirmasi password tidak sama!');
        window.location.href = 'register_admin.php';
    </script>
    ";

    exit;
}

$cek = mysqli_query(
    $koneksi,
    "SELECT * FROM admin WHERE username='$username'"
);

if (mysqli_num_rows($cek) > 0) {

    echo "
    <script>
        alert('Username sudah digunakan!');
        window.location.href = 'register_admin.php';
    </script>
    ";

    exit;
}

$query = mysqli_query(
    $koneksi,
    "INSERT INTO admin (username, password)
     VALUES ('$username', '$password')"
);

if ($query) {

    echo "
    <script>
        alert('Akun admin berhasil dibuat!');
        window.location.href = 'login.php';
    </script>
    ";

} else {

    echo "
    <script>
        alert('Pendaftaran akun gagal!');
        window.location.href = 'register_admin.php';
    </script>
    ";

}

?>