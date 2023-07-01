<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "blokl";

// membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// test koneksi
if(!$conn) {
    die("koneksi gagal: " . mysqli_connect_error());
}

echo "";

?>
