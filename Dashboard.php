<?php
    require 'Utility.php';
    session_start();
    if(!isset($_SESSION['user_id'])){
        utility::js_alert("Invalid session");
        utility::js_redirect("index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>Welcome to Hostel Dashboard</div>
</body>
</html>