<?php

require_once('connection.php');
$email = $password = $pwd = '';

$email = $_POST['email'];
$pwd = $_POST['password'];
$password = MD5 ($pwd);
$sql = "SELECT * FROM users WHERE email ='$email' AND password='$password'";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) > 0 )
{
    while($row = mysqli_fetch_assoc($result))
    {
        $username = $row["username"];
        $email = $row["email"];
        session_start();
        $_SESSION['username'] = $username;
        $_SESSION['email'] = $email;
    }
    header("Location: index.php");
}
else
{ 
    echo "Invalid email or password";
}


?>