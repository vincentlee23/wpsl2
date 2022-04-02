<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processing Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
        include("./config.php");
        session_start();
        // var_dump($_POST);
        // echo "<br>";
        // var_dump($_SESSION);
        $username = $_POST['username'];
        $password = $_POST['password'];

        $str_query = "SELECT * FROM user_profile";
        $query = mysqli_query($mysqli, $str_query);
        // $data = mysqli_fetch_array($query);
        

        check_login($username, $password, $query);

        function check_login($username, $password, $query){
            $match = false;
            while($data = mysqli_fetch_array($query)){
                if($username == $data['username'] && $password == $data['password1']){
                    $_SESSION['account'] = $data['nik'];
                    echo "<script>
                    alert('Login Berhasil');
                    window.location = './home.php';
                     </script>";
                }
            }
            if(!$match){?> 
                <div class="unsuccessful-login">
                    Login Failed. <br>
                    <a href="./login.php">Login again</a>
                </div>
     <?php  }
        } ?>
     
</body>
</html>