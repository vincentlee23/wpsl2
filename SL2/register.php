<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="register-form">
        <form action="./registerProses.php" method="post" enctype="multipart/form-data">
            <table>
                <caption>Register</caption>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tglLahir" placeholder="dd/mm/yyyy"></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik"></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara"></td>
                    <td>Email</td>
                    <td><input type="text" name="email"></td>
                    <td>No HP</td>
                    <td><input type="text" name="noHp"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="20" rows="5"></textarea></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="fotoProfil"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                    <td>Password 1</td>
                    <td><input type="password" name="password1"></td>
                    <td>Password 2</td>
                    <td><input type="password" name="password2"></td>
                </tr>
                <tr>
                    <td><a href="./welcome.php">Kembali</a></td>
                    <td><button type="submit" name="register">Register</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>