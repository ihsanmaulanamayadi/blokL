<?php 
include "/xampp/htdocs/blokL/koneksi.php";

$id = $_GET['id_blok'];

$query = mysqli_query($conn,"DELETE FROM `akunwarga` WHERE `username`='$id' ");
if($query){
    echo "<script> alert('Data Berhasil dihapus dari DB !');</script>";
	echo "<script> location='hapus.php'; </script>";
}else{
    echo "username dengan Id ".$id."Gagal dihapus !";
}