<?php

// KONEKSI KE DATABASE
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

function query($ambilData) {
    global $conn;
    $result = mysqli_query($conn, $ambilData);
    $rows = [];
    while($row=mysqli_fetch_assoc($result)) {
        $rows [] = $row;
    }
    return $rows;
}

?>
