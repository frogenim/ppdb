<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <nav>
    <div class="kotak-bar">
        <div class="left">
            <img src="smk.jpg" style="width:32px; height: 32px; float: 
                left; margin-left:32px; margin-right:16px;">
            <h2 class="kiri" style="margin-top: 4px;">SMK Negeri 4 Malang</h2>
        </div>
        <div class="right">
            <ul>
                <a href="tambah_siswa.php"><li>Tambah Siswa</li></a>
                <a href="daftar_siswa.php"><li>Daftar Siswa</li></a>
                <a href="tambah_jurusan.php"><li>Tambah Jurusan</li></a>
                <a href="daftar_transaksi.php"><li>Daftar Transaksi</li></a>
                <a href="logout.php"><li>Logout</li></a>
            </ul>
        </div>
    </div>
    </nav>
</body>
</html>