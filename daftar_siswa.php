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
            Daftar Siswa
        </div>
        <div class="table">
            <table align="center" cellspacing="0" width="100%">
                <tr>
                    <th>NIS</th>
                    <th>Nama Siswa</th>
                    <th>Jenis Kelamin</th>
                    <th>Asal Sekolah</th>
                    <th>Jurusan</th>
                    <th colspan="2">Aksi</th>
                </tr>
                    <?php
                        $query = mysql_query($conn, "SELECT * FROM biodatasiswa");
                        while($a = mysql_fetch_array($query))
                    ?>
                <tr>
                    <td style="text-align: center;"><?= $a['NIS']?></td>
                    <td style="text-align: center;"><?= $a['nama_siswa']?></td>
                    <td style="text-align: center;"><?= $a['jenis_kelamin']?></td>
                    <td style="text-align: center;"><?= $a['asal_sekolah']?></td>
                    <td style="text-align: center;"><?= $a['jurusan']?></td>
                    <td style="text-align: center;"><a href="edit_siswa.php?id_biodata=
                    <?= $a['id_biodata']?>">Ubah</a></td>
                    <td style="text-align: center;"><a href="detail_siswa.php?id_biodata=
                    <?= $a['id_biodata']?>">Detail</a></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>