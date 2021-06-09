<?php

require_once('connection.php');
$username =  $email =$password = $pwd = '';

$username = $_POST['username'];
$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5($pwd);

$sql = "INSERT INTO users (username,email,password)
        VALUES ('$username','$email','$password')";

$result = mysqli_query($conn, $sql);
if ($result)
{
    header("Location: login.php");
}
else
{
    echo "Error : ".$sql;
}

?>