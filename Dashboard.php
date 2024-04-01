<?php
require 'Utility.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    utility::js_alert("Invalid session");
    utility::js_redirect("index.php");
}
$user_id = $_SESSION['user_id'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h1>Dashboard</h1>
    <div>Welcome to Hostel Dashboard</div>
    <h3>Hello Everyones! <br><?= $user_id ?></h3> <!-- <?= $user_id ?> : Short hand notation. It makes code simple and clean -->
    <p><a href="Logout.php">Logout</a></p>
</body>

</html>