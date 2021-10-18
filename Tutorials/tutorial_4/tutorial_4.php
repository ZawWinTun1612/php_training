<?php
$msg = '';

if (
    isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])
) {

    if (
        $_POST['username'] == 'Admin' &&
        $_POST['password'] == '1234'
    ) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = 'Admin';

        header("location:login.php");
    } else {
        $msg = 'Wrong username or password';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tutorial_4</title>
</head>

<body>
    <form action="" method="post">
        <div class="msg">
            <?php
            if ($msg != "") {
                echo $msg;
            }
            ?>
        </div>
        <h2>Login Form</h2>
        <input type="text" name="username" placeholder="Enter user name"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <a href="login.php"><input type="submit" value="login" name="login"></a>
    </form>
</body>

</html>