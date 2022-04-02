<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        include("./config.php");
        session_start();
        $str_query = "SELECT * FROM user_profile WHERE nik= '".$_SESSION['account']."'";
        $query = mysqli_query($mysqli, $str_query);
        $data = mysqli_fetch_array($query);
    ?>
    <div class="home-header">
        <p>Aplikasi Pengelolaan Keuangan</p>
        <a href="./home.php">Home</a>
        <p style = "border-bottom: 2px solid black">Profile</p>
        <a href="./welcome.php">Logout</a><br>
    </div>
    
    <div class="profile-content">
        <div class="profile-content-title">
            <b>Profil Pribadi</b>
        </div>
        <table>
            <tr>
                <td>Nama Depan</td>
                <td><?php echo "<b>".$data['namaDepan']."</b>"?></td>
                <td>Nama Tengah</td>
                <td><?php echo "<b>".$data['namaTengah']."</b>"?></td>
                <td>Nama Belakang</td>
                <td><?php echo "<b>".$data['namaBelakang']."</b>"?></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td><?php echo "<b>".$data['tempatLahir']."</b>"?></td>
                <td>Tgl Lahir</td>
                <td><?php echo "<b>".$data['tanggalLahir']."</b>"?></td>
                <td>NIK</td>
                <td><?php echo "<b>".$data['nik']."</b>"?></td>
            </tr>
            <tr>
                <td>Warga Negara</td>
                <td><?php echo "<b>".$data['wargaNegara']."</b>"?></td>
                <td>Email</td>
                <td><?php echo "<b>".$data['email']."</b>"?></td>
                <td>No HP</td>
                <td><?php echo "<b>".$data['noHp']."</b>"?></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><?php echo "<b>".$data['alamat']."</b>"?></td>
                <td>Kode Pos</td>
                <td><?php echo "<b>".$data['kodePos']."</b>"?></td>
                <td>Foto Profil</td>
                <td><img src="<?php echo $data['imageDir'] ?>" alt="Profile Pic"></td>
            </tr>
        </table>
    </div>

    <div class="edit-profile">
            <a href="./EditProfil.php?nik=<?php echo $data['nik'] ?>">Edit Profile</a>
    </div>
</body>
</html>