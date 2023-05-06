<?php
session_start();
$names = array("Sam Espino", "Shae Smith", "Third Lee");
$emails = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$passwords = array("secret1", "secret2", "secret3");


if (isset($_POST['login'])) {
    $emailInput = $_POST["email"];
    $passwordInput = $_POST["password"];

    foreach ($emails as $key => $email) {
        if ($email == $emailInput && $passwords[$key] == $passwordInput) {
            echo "logged in";
            $_SESSION["name"] = $names[$key];
            header("Location: profile.php");
            die();
        }
    }
    header("Location: register.html");
}

?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MyyyAppp</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<form action="" method="POST">
    <div class="container">

        <img class="img" src="robot.png" alt="">
        <input class="input" type="text" placeholder="Email Address" id="email" name="email">
        <input class="input" type="password" placeholder="Password" id="password" name="password">
        <div class="container2">
            <button class="button" name="login">Sign In</button>
            <button class="button" onclick="clearInputs()">Clear</button>
        </div>
    </div>
</form>
</body>

<script>


    function clearInputs() {
        document.getElementById("email").value = "";
        document.getElementById("id").value = "";
    }

</script>

</html>
