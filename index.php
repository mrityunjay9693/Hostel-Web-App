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
    <title>Hostel Web Application</title>
</head>

<body>
    <div>
        <form action="Authenticate.php" method="POST"> <!--Here, we have to submit data to php -->
            <input type="text" name="user_id" id="user_id" placeholder="User Id">
            <input type="password" name="password" id="password" placeholder="Password">
            <button>Login</button>
            <label name="error_message" id="error_message"></label>
        </form>
    </div>
</body>

</html>