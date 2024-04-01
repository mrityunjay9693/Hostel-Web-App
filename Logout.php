<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Logout</title>
</head>

<body>
    <p>You are now logged out.</p>
    <p><a href="index.php">Login</a></p>
</body>

</html>