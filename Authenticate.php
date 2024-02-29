<?php
require 'Credential.php';

$user_id = $_POST['user_id'];
$password = $_POST['password'];

$con = new mysqli($hostname, $user, $passwords, $database);
$sql = "SELECT user_id FROM user WHERE user_id = '$user_id' AND password = '$password'";
//$stmt = $con->prepare("SELECT user_id FROM user WHERE user_id=? AND password =?");
//$stmt->bind_param("ss", $user_id, $password);
//$stmt->execute();

//echo $stmt; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
    echo "Login Successfully";
} else {
    echo "Login Failed";
}
