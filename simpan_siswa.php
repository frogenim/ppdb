<?php
    include "koneksi.php";

    $NIS = $_POST['NIS'];
    $nama_siswa = $_POST['nama_siswa'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $telepon_siswa = $_POST['telepon_siswa'];
    $jurusan = $_POST['jurusan'];
    $nama_ayah = $_POST['nama_ayah'];
    $telepon_ayah = $_POST['telepon_ayah'];
    $pekerjaan = $_POST['pekerjaan'];
    $alamat = $_POST['alamat'];
    $biaya_daftar = $_POST['biaya_daftar'];
    $status = $_POST['status'];
    $asal_sekolah = $_POST['asal_sekolah'];
    
    $result = mysqli_query($conn, "INSERT INTO biodatasiswa VALUES (NULL,
        '$NIS', '$nama_siswa','$tempat_lahir','$tanggal_lahir','$jenis_kelamin',
        '$agama','$telepon_siswa','$jurusan','$nama_ayah','$telepon_ayah','$pekerjaan','$alamat')");
    if($result){
        $q = mysqli_query($conn, "INSERT INTO daftarulang VALUES (NULL, 
        '$nama_siswa', '$biaya_daftar', NOW(), '$status')");
        if($q){
            echo say("Berhasil di Masukkan","index.php");
        } else {
            echo say("Gagal menambah data daftar ulang: " . mysqli_error($conn), "index.php");
        }
    }
?>