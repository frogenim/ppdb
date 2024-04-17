<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Siswa Baru</title>
    <link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
    <div class="kotak-login">
        <table align="center" cellspacing="0" width="50%" style="margin: auto;">
            <form action="cek-log.php" method="post">
                <tr>
                    <td colspan=""2><h1 align="center" style="padding-top: 32px;">Login</h1></td>
                </tr>
                <tr>
                    <td width="30%">Username</td>
                    <td><input type="text" name="user" class="text"></td>
                </tr>
                <tr>
                    <td width="30%">Password</td>
                    <td><input type="password" name="pass" class="text"></td>
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
</body>
</html>