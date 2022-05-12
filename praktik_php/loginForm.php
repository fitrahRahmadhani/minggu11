<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php
        if(isset($_GET["error"])){
            $error = $_GET["error"];
        }else{
            $error = "";
        }

        $message = "";
        if($error == "gagal"){
            $message = "Gagal login, silahkan coba kembali";
        }
    ?>
    <p style="color: red"><?php echo $message;?></p>
    <form action="prosesLogin.php" method="post">
        <table>
            <tr>
                <td>Username: </td>
                <td><input type="text" name="username" size="20"></td>
            </tr>
            <tr>
                <td>Password: </td>
                <td><input type="password" name="password" size="20"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="login" value="Login"></td>
            </tr>
        </table>
    </form>
</body>
</html>