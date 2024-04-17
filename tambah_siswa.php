<?php
    include "navbar.php";
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
    <div class="content">
        <div class="judul">
            Tambah Siswa
        </div>
        <div class="formulir">
            <table align="center" cellspacing="0" width="40%" style="margin: auto;">
            <form action="simpan_siswa.php" method="post">
                <tr>
                    <td>NIS</td>
                    <td><input type="navbar" name="NIS" class="text"></td>
                </tr>
                <tr>
                    <td>Nama Siswa</td>
                    <td><input type="text" name="nama_siswa" class="text"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempat_lahir" class="text"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td><input type="date" name="tanggal_lahir" class="text"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <select class="text" name="jenis_kelamin">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>
                        <select class="text" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Buddha">Buddha</option>
                            <option value="Konghucu">Konghucu</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Telepon Siswa</td>
                    <td><input type="number" name="telepon_siswa" class="text"></td>
                </tr>
                <tr>
                    <td>Asal Sekolah</td>
                    <td><input type="text" name="asal_sekolah" class="text"></td>
                </tr>
                <tr>
                    <td>Pilihan Jurusan</td>
                    <td>
                        <select class="text" name="jurusan">
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                            <option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
                            <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                            <option value="Animasi">Animasi</option>
                            <option value="Mekatronika">Mekatronika</option>
                            <option value="Teknik Grafika">Teknik Grafika</option>
                            <option value="Perhotelan">Perhotelan</option>
                            <option value="Logistik">Logistik</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><hr style="border: 1px solid red;
                        margin-top: 32px; margin-bottom: 32px" /></td>
                </tr>
                <tr>
                    <td style="padding-bottom: 16px;"><b>Biodata Wali Siswa</b></td>
                </tr>
                <tr>
                    <td>Nama Ayah</td>
                    <td><input type="text" name="nama_ayah" class="text"></td>
                </tr>
                <tr>
                    <td>Telepon Ayah</td>
                    <td><input type="number" name="telepon_ayah" class="text"></td>
                </tr>
                <tr>
                    <td>Pekerjaan</td>
                    <td><input type="text" name="pekerjaan" class="text"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" class="text-area"></textarea></td>
                </tr>
                <tr>
                    <td colspan="2"><hr style="border: 1px solid red;
                        margin-top: 32px; margin-bottom: 32px" /></td>
                </tr>
                <tr>
                    <td>Daftar Uang Gedung</td>
                    <td><input type="number" name="biaya_daftar" class="text"></td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>
                        <select class="text" name="status">
                            <option value="Tuntas">Tuntas</option>
                            <option value="Belum Tuntas">Belum Tuntas</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="padding-bottom: 32px;">
                        <input type="submit" class="btn" value="Masuk">
                        <input type="reset" class="btn kanan" value="Reset">
                    </td>
                </tr>
            </form>     
            </table>
        </div>
    </div>
</body>
</html>