<?php
    include("./config.php");
    // var_dump($_GET);
    if(isset($_GET['nik'])){
        $str_query = "SELECT * FROM user_profile WHERE nik= '".$_GET['nik']."'";
        $query = mysqli_query($mysqli, $str_query);
        $data = mysqli_fetch_array($query);
        // echo "retrieve data success";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Your Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="update-form">
        <form action="./prosesEditProfil.php" method="post" enctype="multipart/form-data">
            <table>
                <caption>Update Data</caption>
                <tr>
                    <td>Nama Depan</td>
                    <td><input type="text" name="namaDepan" value="<?php echo $data['namaDepan'] ?>"></td>
                    <td>Nama Tengah</td>
                    <td><input type="text" name="namaTengah" value="<?php echo $data['namaTengah'] ?>"></td>
                    <td>Nama Belakang</td>
                    <td><input type="text" name="namaBelakang" value="<?php echo $data['namaBelakang'] ?>"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td><input type="text" name="tempatLahir" value="<?php echo $data['tempatLahir'] ?>"></td>
                    <td>Tgl Lahir</td>
                    <td><input type="date" name="tglLahir" placeholder="dd/mm/yyyy" value="<?php echo $data['tanggalLahir'] ?>"></td>
                    <td>NIK</td>
                    <td><input type="text" name="nik" value="<?php echo $data['nik'] ?>" readonly></td>
                </tr>
                <tr>
                    <td>Warga Negara</td>
                    <td><input type="text" name="wargaNegara" value="<?php echo $data['wargaNegara'] ?>"></td>
                    <td>Email</td>
                    <td><input type="text" name="email" value="<?php echo $data['email'] ?>"></td>
                    <td>No HP</td>
                    <td><input type="text" name="noHp" value="<?php echo $data['noHp'] ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><textarea name="alamat" cols="20" rows="5"><?php echo $data['alamat'] ?></textarea></td>
                    <td>Kode Pos</td>
                    <td><input type="text" name="kodePos" value="<?php echo $data['kodePos'] ?>"></td>
                    <td>Foto Profil</td>
                    <td><input type="file" name="ubahProfil"></td>
                </tr>
                <tr>
                    <td><a href="./profile.php">Kembali</a></td>
                    <td><button type="submit" name="editProfile">Update Profile</button></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>