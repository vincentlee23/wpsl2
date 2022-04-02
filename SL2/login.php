<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <?php
        session_start();
        if(!isset($_SESSION['registered'])){
            header("location: ./welcome.php");
        }
        
        // print_r($data);
        // var_dump($data['namaDepan']);
    ?>
    <div class="login-page">
        <form action="./loginProses.php" method = "post">
            <p>Login</p>
            <div class="form-table">
                <table>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" name="username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="password"></td>
                    </tr>
                    <tr>
                        <td><button type="submit" name="login">Login</button></td>
                        <td><a href="./welcome.php">Kembali</a></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</body>
</html>