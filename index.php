<?php
require "Utility.php";
session_start();
if (isset($_SESSION['user_id'])) {
    utility::js_redirect("Dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hostel Management System</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
</head>

<body>
    <div class="container">
        <form action="Authenticate.php" method="POST" class="log-in"> <!--Here, we have to submit data to php -->
            <img src="images/Logo.jpg" alt="Logo" class="logo-type-1"><br>
            <input type="text" name="user_id" id="user_id" placeholder="User Id" class="form-control-block">
            <input type="password" name="password" id="password" placeholder="Password" class="form-control-block">
            <button class="form-control-block submit">Login</button>
            <label name="error_message" id="error_message"></label>
        </form>
    </div>
</body>

</html>