<?php
    $conn = mysqli_connect('localhost', 'root', '');
    $db = mysqli_select_db($conn, 'siswa_baru');

    session_start();

    function say($pesan, $lokasi) {
        $l = "<script>
                window.alert('$pesan');
                window.location= '$lokasi';
                </script>";
                return $l;
    }
?>