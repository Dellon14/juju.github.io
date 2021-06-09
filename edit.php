<?php
include_once("config.php");
 
if(isset($_POST['update']))
{	
	$id=$_POST['id'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$password=$_POST['password'];
     
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE users SET username='$username',email='$email',password='$password' WHERE id=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: crud.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];
 
// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
 
$user_data = mysqli_fetch_array($result)
?>
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
<head>	
	<title>Edit User Data</title>
</head>
 
<body>
	<a href="crud.php">Home</a>
	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
	<div class="mid">
		<table border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username" value=<?php echo $user_data['username'];?>></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email" value=<?php echo $user_data['email'];?>></td>
			</tr>
			<tr> 
				<td>Password</td>
				<td><input type="text" name="password" value=<?php echo $user_data['password'];?>></td>
			</tr>
			<td>
				
				
				<div class="button">
     			<p class="right">
				 <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" class="btn btn-primary" value="Update"></td>
				</p>
				</div>
	</div>
			</tr>
		</table>
	</form>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>