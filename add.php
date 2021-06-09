<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
  
  	<title>Sky Bakery</title>
  <p class="right">
    <a href="https://discord.gg/bTD6bcj"> <i class="fa fa-discord" aria-hidden="true"></i></a>
    <a href="https://www.instagram.com/michaelglhf/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
    <a href="https://steamcommunity.com/id/steamwarspear/"><i class="fa fa-steam-square" aria-hidden="true"></i></a>
  </p>
 
</head>
 
<body>
	<a href="crud.php">Go to Home</a>
	<br/><br/>
 
	<form action="add.php" method="post" name="form1">
	<div class="coki">
		<table width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
           
				<td></td>
				<td>
				<div class="button">
     			<p class="right">
				<input type="submit" name="Submit"class="btn btn-primary" value="Add"></td>
				</p>
                    
			</tr>
			</table>
	
	<?php
 
	if(isset($_POST['Submit'])) {
		$username = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
             
		
		include_once("config.php");
				
		$result = mysqli_query($mysqli, "INSERT INTO users(username,email,password) VALUES('$username','$email','$password')");
		
		echo "User added successfully. <a href='crud.php'>View Users</a>";
	}
	?>

		</div>
	</form>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>