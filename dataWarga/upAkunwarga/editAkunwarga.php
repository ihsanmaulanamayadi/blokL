<?php
require "/xampp/htdocs/blokL/functions.php";

$drop = query("SELECT * FROM `akunwarga` ORDER BY `username`");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/dataWarga/upAkunwarga/upAkunwarga.css"> 
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
                                    <a style="cursor: pointer;" class="nav-link" aria-current="page"
                                        href="/dataWarga/upDatawarga/upDatawarga.html">Update Data
                                        Warga</a>
                                </li>
                                <li class="nav-item">
                                    <a style="cursor:pointer" class="nav-link active" aria-current="page"
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

    <div class="container d-flex justify-content-center align-items-center">
        <form method="POST" class="d-flex flex-column inputKeluhan">
            <h1 class="text-decoration-underline d-flex justify-content-center align-items-center mt-5">Silahkan Update
                Akun
                Warga</h1>
            <label class="mt-3" for="userName">Username</label>
            <select id="userName" name="userName" class="px-2 py-1 mt-2 rounded-2" type="text" value="">
            <?php foreach($drop as $row) : ?>
                <option value="<?php echo $row['username']; ?>"><?php echo $row['username']; ?></option>
            <?php endforeach ?>
            </select>
            
            
            <div class="d-flex mt-1 gap-1">
                <button onclick="return confirm('Yakin update akun ini ?')" class="mt-1 btn btn-warning mb-3 w-50" type="submit" name="upAkunwarga">edit</button>
                <button onclick="return confirm('Yakin menghapus akun ini ?')" class="mt-1 btn btn-danger mb-3 w-50" type="submit" name="delDatawarga" href="#">Hapus</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

</body>

</html>
