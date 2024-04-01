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
    <link rel="stylesheet" href="styles.css">
    <title>Hostel Management System</title>
</head>

<body>
    <div>
        <h1 style="color:green">HMS 1.0</h1>
        <h1>Login</h2>
            <form action="Authenticate.php" method="POST" class="log-in"> <!--Here, we have to submit data to php -->
                <input type="text" name="user_id" id="user_id" placeholder="User Id"><br><br>
                <input type="password" name="password" id="password" placeholder="Password"><br><br>
                <button style="color:blue">Login</button>
                <label name="error_message" id="error_message"></label>
            </form>
    </div>
</body>

</html>