<?php

session_start();

unset($_SESSION['pasien']);

header("Location: login_pasien.php");

exit;

?>