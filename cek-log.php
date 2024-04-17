<?php
    include "koneksi.php";

    $user = $_POST['user'];
    $pass = $_POST['pass'];

    $cek = mysql_query(*select* from user where user='$user' and 
        pass='$pass' and status= 'ON');
    if(mysql_num_rows($cek)==1) {
        echo say("Berhasil Login","index.php");
    } else echo say("Username atau Password Anda salah","login.php");

?>