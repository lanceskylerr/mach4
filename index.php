<?php
session_start();
$name = array("Sam Espino", "Shae Smith", "Third Lee");
$email = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");


if (isset($_POST['email'])) {
    $emailInput = $_POST["email"];
    $passwordInput = $_POST["password"];

    foreach ($email as $key => $email) {
        if ($email == $emailInput && $pas[$key] == $passwordInput) {
            echo "signed in"; 
            $_SESSION["name"] = $name[$key];
            header("Location: profile.php");
            die();
        }
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Index</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login-form-wrap">


        <form id="login-form" action="index.php" method="post">
            <img src="robot.png" alt="avatar" class="avatar">
            <p>
                <input type="email" id="email" name="email" placeholder="Email Address" required><i
                    class="validation"><span></span><span></span></i>
            </p>
            <p>
                <input type="password" id="password" name="password" placeholder="Password" required><i
                    class="validation"><span></span><span></span></i>
            </p>
            <p>
                <button name="signin" class="buttons">Sign In</button>
                <button type="reset" class="buttons">Clear</button>

            </p>
        </form>
    </div>


</body>

</html>