<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile Data</title>
</head>
<body>
    <?php
        include("./config.php");
        session_start();
        
        $correct_input = false;
        $correct_input = validate();
        function validate(){
            if($_POST['namaDepan'] == ""){
                echo "Field Nama Depan can't be empty!";
                return false;
            }else if(is_numeric($_POST['namaDepan'])){
                echo "Nama Depan must not be numbers!";
                return false;
            }else if($_POST['namaTengah'] == ""){
                echo "Field Nama Tengah can't be empty!";
                return false;
            }else if(is_numeric($_POST['namaTengah'])){
                echo "Nama Tengah must not be numbers!";
                return false;
            }else if($_POST['namaBelakang'] == ""){
                echo "Field Nama Belakang can't be empty!";
                return false;
            }else if(is_numeric($_POST['namaBelakang'])){
                echo "Nama Belakang must not be numbers!";
                return false;
            }else if($_POST['tempatLahir'] == ""){
                echo "Field Tempat Lahir can't be empty!";
                return false;
            }else if(is_numeric($_POST['tempatLahir'])){
                echo "Tempat Lahir must not be numbers!";
                return false;
            }else if($_POST['tglLahir'] == ""){
                echo "Field Tanggal Lahir can't be empty!";
                return false;
            }else if($_POST['wargaNegara'] == ""){
                echo "Field Warga Negara can't be empty!";
                return false;
            }else if(is_numeric($_POST['wargaNegara'])){
                echo "Warga Negara must not be numbers!";
                return false;
            }else if($_POST['email'] == ""){
                echo "Field Email can't be empty!";
                return false;
            }else if(!str_ends_with($_POST['email'], "@gmail.com")){
                echo "Please enter a valid email!";
                return false;
            }else if($_POST['noHp'] == ""){
                echo "Field No HP can't be empty!";
                return false;
            }else if(!is_numeric($_POST['noHp'])){
                echo "No HP must be numeric!";
                return false;
            }else if($_POST['alamat'] == ""){
                echo "Field Alamat can't be empty!";
                return false;
            }else if($_POST['kodePos'] == ""){
                echo "Field Kode Pos can't be empty!";
                return false;
            }else if(!is_numeric($_POST['kodePos'])){
                echo "Kode Pos must be numeric!";
                return false;
            }
            return true;
        }

        $img_dir = "String";

        if($correct_input){
            // var_dump($_FILES);
            if(!$_FILES['ubahProfil']['tmp_name'] == ""){
                $img_name = $_FILES['ubahProfil']['name'];
                $img_loc = $_FILES['ubahProfil']['tmp_name'];
                move_uploaded_file($img_loc, "Uploaded/".$img_name);
                $img_dir = "Uploaded/".$img_name;
                // echo "hit";
            }else{
                $str_query = "SELECT imageDir FROM user_profile WHERE nik= '".$_SESSION['account']."'";
                $query = mysqli_query($mysqli, $str_query);
                $img_array = mysqli_fetch_array($query);
                $img_dir = $img_array['imageDir'];
                // var_dump($img_dir);
            }

            // var_dump($img_dir);
            $str_query = "UPDATE user_profile SET namaDepan = '".$_POST['namaDepan']."',
            namaTengah = '".$_POST['namaTengah']."', namaBelakang = '".$_POST['namaBelakang']."',
            tempatLahir = '".$_POST['tempatLahir']."', tanggalLahir = '".$_POST['tglLahir']."',
            wargaNegara = '".$_POST['wargaNegara']."', email = '".$_POST['email']."',
            noHp = '".$_POST['noHp']."', alamat = '".$_POST['alamat']."',
            kodePos = '".$_POST['kodePos']."', imageDir = '".$img_dir."'
            WHERE nik = '".$_SESSION['account']."'";

            $query = mysqli_query($mysqli, $str_query);

            // var_dump($query);
            // if(!$query) echo $mysqli->error;
            if ($query) {
                echo "
                <script>
                    alert('Data berhasil diubah');
                    window.location = './profile.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Data gagal diubah');
                    window.location = './profile.php';
                </script>";
            }
        }
    ?>
</body>
</html>