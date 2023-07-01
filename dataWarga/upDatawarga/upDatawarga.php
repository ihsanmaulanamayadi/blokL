<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/dataWarga/upDatawarga/upDatawarga.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #003366;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Hallo, Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a id="home" class="nav-link" aria-current="page" href="/index.html">Data Berita</a>
                    </li>
                    <li class="nav-item">
                        <div class="btn-group dropdown active">
                            <a class="border-0 btn nav-link active dropdown-toggle text-decoration-none"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Data Warga
                            </a>
                            <ul class="dropdown-menu" style="background: #003366; border: none;">
                                <li class="nav-item">
                                    <a style="cursor: pointer;" class="nav-link active" aria-current="page"
                                        href="/dataWarga/upDatawarga/upDatawarga.html">Update Data
                                        Warga</a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor:pointer" class="nav-link" aria-current="page"
                                        href="/dataWarga/upAkunwarga/upAkunwarga.html">Update Akun
                                        Warga</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dataWarga/datawargaUser/dataBlokuser/datablokUSer.html">Lihat
                            Warga</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dataKeluhan/dataKeluhan.html">Data Keluhan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dataKeluhan/keluhanUser/keluhanUser.html">keluhanKu</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/formLogin/loginAdmin.html">Log Out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container d-flex justify-content-center align-items-center mt-3">
        <form method="POST" class="d-flex flex-column inputKeluhan" id="formUpdatawarga">
            <h1 class="text-decoration-underline d-flex justify-content-center align-items-center mt-3">Silahkan Update
                Data
                Warga</h1>
            <label class="mt-3 fw-bolder" for="dataWarga">Username (alamat rumah)</label>
            <select name="upuserName" class="px-2 py-1 mt-2 rounded-2" type="text">
                <option value="" disabled="" selected="" hidden="">Pilih Sesuai Alamat Rumah</option>
                <option value="L6NO1">L6NO1</option>
                <option value="L6NO2">L6NO2</option>
                <option value="L6NO3">L6NO3</option>
            </select>
            <label class="mt-3 fw-bolder" for="dataWarga">Berapa Jumlah Penghuni</label>
            <select name="jmlh" onchange="jumlahHunian()" id="jumlahHuni" class="px-2 py-1 mt-2 rounded-2" type="number">
                <option value="" disabled="" selected="" hidden="">Pilih Jumlah</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
            </select>

            <div id="roll1">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="dataWarga">Roll Ke-1 (contoh: Ayah)</label>
                    <select name="roll1" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <option value="Ayahh">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak ke1">Anak ke1</option>
                        <option value="Anak ke2">Anak ke2</option>
                        <option value="Anak ke3">Anak ke3</option>
                        <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama1">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama1" name="nama1" placeholder="Masukan Nama">
                    <label class="mt-3" for="ttl1">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-2" type="date" id="ttl1" name="ttl1" placeholder="Masukan Nama">
                </div>
            </div>

            <div id="roll2">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="dataWarga">Roll Ke-2</label>
                    <select name="roll2" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <option value="Ayahh">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak ke1">Anak ke1</option>
                        <option value="Anak ke2">Anak ke2</option>
                        <option value="Anak ke3">Anak ke3</option>
                        <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama2">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama2" name="nama2" placeholder="Masukan Nama">

                    <label class="mt-3" for="ttl2">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-2" type="date" id="ttl2" name="ttl2" placeholder="Masukan Nama">
                </div>
            </div>

            <div id="roll3">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="dataWarga">Roll Ke-3</label>
                    <select name="roll3" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <option value="Ayahh">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak ke1">Anak ke1</option>
                        <option value="Anak ke2">Anak ke2</option>
                        <option value="Anak ke3">Anak ke3</option>
                        <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama3">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama3" name="nama3" placeholder="Masukan Nama">
                    <label class="mt-3" for="ttl3">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-3" type="date" id="ttl3" name="ttl3" placeholder="Masukan Nama">
                </div>
            </div>


            <div id="roll4">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="dataWarga">Roll Ke-4</label>
                    <select name="roll4" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <option value="Ayahh">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak ke1">Anak ke1</option>
                        <option value="Anak ke2">Anak ke2</option>
                        <option value="Anak ke3">Anak ke3</option>
                        <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama4">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama4" name="nama4" placeholder="Masukan Nama">
                    <label class="mt-3" for="ttl4">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-2" type="date" id="ttl4" name="ttl4" placeholder="Masukan Nama">
                </div>
            </div>

            <div id="roll5">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="dataWarga">Roll Ke-5</label>
                    <select name="roll5" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <<option value="Ayahh">Ayah</option>
                            <option value="Ibu">Ibu</option>
                            <option value="Suami">Suami</option>
                            <option value="Istri">Istri</option>
                            <option value="Anak ke1">Anak ke1</option>
                            <option value="Anak ke2">Anak ke2</option>
                            <option value="Anak ke3">Anak ke3</option>
                            <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama5">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama5" name="nama5" placeholder="Masukan Nama">
                    <label class="mt-3" for="ttl5">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-2" type="date" id="ttl5" name="ttl5" placeholder="Masukan Nama">
                </div>
            </div>

            <div id="roll6">
                <div class="d-flex flex-column">
                    <label class="mt-3" for="userName">Roll Ke-6</label>
                    <select name="roll6" class="px-2 py-1 mt-2 rounded-2" type="text">
                        <option value="" disabled="" selected="" hidden="">Pilih Roll</option>
                        <option value="Ayahh">Ayah</option>
                        <option value="Ibu">Ibu</option>
                        <option value="Suami">Suami</option>
                        <option value="Istri">Istri</option>
                        <option value="Anak ke1">Anak ke1</option>
                        <option value="Anak ke2">Anak ke2</option>
                        <option value="Anak ke3">Anak ke3</option>
                        <option value="Anak ke4">Anak ke4</option>
                    </select>
                    <label class="mt-3" for="nama6">Nama</label>
                    <input class="mt-1 py-1 rounded-2" type="text" id="nama6" name="nama6" placeholder="Masukan Nama">
                    <label class="mt-3" for="ttl6">Tanggal Lahir</label>
                    <input class="mt-1 py-1 rounded-2" type="date" id="ttl6" name="ttl6" placeholder="Masukan Nama">
                </div>
            </div>
            <div class="d-flex mt-1 gap-1">
                <input class="mt-1 btn btn-success mb-3 w-50" type="submit" name="submit" value="update">
                <input class="mt-1 btn btn-danger mb-3 w-50" type="submit" name="delDatawarga" value="Delete">
            </div>
        </form>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
        <script src="upDatawarga.js" type="application/javascript">
        </script>

</body>

</html>
<?php 
include "/xampp/htdocs/blokL/koneksi.php";
if(isset($_POST['submit'])){

    $username = $_POST['upuserName'];
    $jmlh = $_POST['jmlh'];
    $roll1 = $_POST['roll1'];
    $roll2 = $_POST['roll2'];
    $roll3 = $_POST['roll3'];
    $roll4 = $_POST['roll4'];
    $roll5 = $_POST['roll5'];
    $roll6 = $_POST['roll6'];
    $nm1 = $_POST['nama1'];
    $nm2 = $_POST['nama2'];
    $nm3 = $_POST['nama3'];
    $nm4 = $_POST['nama4'];
    $nm5 = $_POST['nama5'];
    $nm6 = $_POST['nama6'];
    $ttl1 = $_POST['ttl1'];
    $ttl2 = $_POST['ttl2'];
    $ttl3 = $_POST['ttl3'];
    $ttl4 = $_POST['ttl4'];
    $ttl5 = $_POST['ttl5'];
    $ttl6 = $_POST['ttl6'];
    

    // simpan data ke databse
    $query = mysqli_query($conn,"UPDATE `datawarga` SET `jmlh_penghuni`='$jmlh',`roll_1`='$roll1',`nm_1`='$nm1',`ttl_1`='$ttl1',`roll_2`='$roll2',`nm_2`='$nm2',`ttl_2`='$ttl2',`roll_3`='$roll3',`nm_3`='$nm3',`ttl_3`='$ttl3',`roll_4`='$roll4',`nm_4`='$nm4',`ttl_4`='$ttl4',`roll_5`='$roll5',`nm_5`='$nm5',`ttl_5`='$ttl5',`roll_6`='$roll6',`nm_6`='$nm6',`ttl_6`='$ttl6' WHERE `username`='$username' ");
    if($query){
        echo "<script> alert('Data Berhasil diubah !');</script>";
	    echo "<script> location='upDatawarga.php'; </script>";

    }else{
        echo "Data gagal di masukan ke databse";
    }
}
?>