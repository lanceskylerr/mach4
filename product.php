<!DOCTYPE html>
<html lang="en">

<head>
<?php
session_start();
$nam = array("Sam Espino", "Shae Smith", "Third Lee");
$ema = array("sam@gmail.com", "shae@gmail.com", "third@gmail.com");
$pas = array("secret1", "secret2", "secret3");
$found = false;
$ctr = 3;
?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>

<body>

<?php echo "<h1 class='title'>Welcome!," . $nam[0] . "!</h1>" ?>
    <br>
    <br>
    <h1> Product Page</h1>

    <a>
        <a name="prodbtn" href="Profile.php">Profile</a>
        <a name="logbtn" href="index.php">Log Out</a>
    </a>
</body>

</html>