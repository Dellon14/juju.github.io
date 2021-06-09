<?php


  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
  include_once("config.php");
 
  $result = mysqli_query($mysqli, "SELECT * FROM users");
  
?>
 
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">

    <title>Sky bakery</title>
</head>

<p class="right">
    <a href="https://discord.gg/bTD6bcj"> <i class="fa fa-discord" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/michaelglhf/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://steamcommunity.com/id/steamwarspear/"><i class="fa fa-steam-square" aria-hidden="true"></i></a>
</p>

<body>
<h1>Users Sky Bakery</h1>
<a href="add.php">Add User</a><br/><br/>
<a href="index.php">Back</a><br/><br/>
<div class="crud">
    <table width='75%' border=1>
  
    <tr>
        <th>ID</th> <th>Username</th> <th>Email</th> <th>Password</th> <th>Update & Delete</th>
    </tr>

</div>
    <?php
    $nomor=1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$nomor."</td>";
        echo "<td>".$user_data['username']."</td>";
        echo "<td>".$user_data['email']."</td>";
        echo "<td>".$user_data['password']."</td>"; 
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    $nomor++;}
    ?>
    </table>
</body>
</html>