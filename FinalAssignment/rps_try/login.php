<?php
//redirect route
    $host = $_SERVER['HTTP_HOST'];
    $redirect = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
    $url = "http://$host$redirect"; 

    // if cancelled
if (isset($_POST["cancel"])) {
    header("Location: $url/index.php");
    die();
}

    // password & login needed
    $message = false;
if (isset($_POST["who"]) && isset($_POST["pass"])) {
    $salt = 'XyZzy12*_';

    $stored_hash = '1a52e17fa899cf40fb04cfc42e6352f1';

    $md5 = hash("md5", $salt . $_POST["pass"]);

    if ($md5 == $stored_hash) {
        header("Location: $url/game.php?name=" . urlencode($_POST['who']));
        die();
    }
    if (strlen($_POST["who"]) < 1 || strlen($_POST['pass']) < 1) {
        $message = "User name and password are required";
    } else {
        $message = "Incorrect password";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Linda Angulo Lopez - 0ea50e88</title>
</head>
<body style="font-family: Helvetica">
    <h1>
        Please Log In
    </h1>
    <?php
    if ($message !== false) {
        echo('<p style="color: red;">'.htmlentities($message) . "</p>\n");
    }
    ?>
    <form method="post">
        <label>User name</label>
        <input type="text" name="who" autocomplete="off">
        <br>
        <label>Password</label>
        <input type="password" name="pass">
        <br>
        <input type="submit" name="login" value="Log In">
        <input type="submit" name="cancel" value="Cancel">
    </form>
    <p>
        If you don't know which password to use, check the code comments
        <!-- Hint: Login in as 'User Name', the password is 'php123' -->
    </p>
</body>
</html>
