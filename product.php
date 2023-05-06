<?php
session_start();

if (!isset($_SESSION['name'])) {
    header("Location: index.php");
    exit();
}

$name = $_SESSION["name"];
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h3 style="text-align: right">Welcome!, <?php echo $name ?></h3>
<h1>Product Page</h1>

<a href="profile.php">Profile</a>
<a href="log.php">Log Out</a>

</body>
</html>
