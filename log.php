<?php

if ($_SESSION[$ema] == 'sam@gmail.com') {
    header("Location: product.php?user=" . $row[$nam]);
    exit();
} else if ($_SESSION[$pas] == 'secret1') {
    header("Location: product.php?user=" . $row[$nam]);
    exit();
} else if ($_session[$ema] == 'shae@gmail.com') {
    header("Location: product.php?user=" . $row[$nam]);
    exit();
} else if ($_session[$pas] == 'secret2') {
    header("Location: product.php?user=" . $row[$nam]);
    exit();
}else if($_session[$ema] == 'third@gmail.com'){
    header("Location: product.php?user=".$row[$nam]);
    exit();
} else if($_session[$pas] == 'secret3'){
    header("Location: product.php?user=".$row[$nam]);
    exit();
}

header("Location: index.php"); // Redirect to home page

?>