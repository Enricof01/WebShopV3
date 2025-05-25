<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>schön dass du hier bist <?php echo $_SESSION['firstname']?> email : <?php echo $_SESSION['email'] ?></p>
</body>
</html>