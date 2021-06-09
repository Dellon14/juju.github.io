<?php include('connection.php') ?>
<!DOCTYPE html>
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

<header>
    <div class="logo">
        <a class="navbar-brand" href="index.php">
            <img src="logo.png" alt="Sky Bakery" class="d-inline-block align-right" width="40" height="30"> Sky Bakery
        </a>
        <ul class="nav justify-content-right">
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="product.php">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="order.php">How to Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
        </ul>
</br>   
</br>
      <ul class="nav justify-content-right">
        		<li class="nav-item">
                <a class="nav-link " aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="register.php">Register</a>
            </li>
     </ul>
 </header>
<body>
	<div class="container">
  		<form method="post" action="register.php">
  			<div class="login">
  				<h3 class="center" onmouseover="style.color='pink'" onmouseout="style.color='white'">Register</h3>
  				<?php include('errors.php'); ?>
  					<div class="control">
  	  				<input type="text" name="username"placeholder="Username" value="<?php echo $username; ?>">
  					</div>
  					<div class="control">
  	  				<input type="email" name="email"placeholder="Email" value="<?php echo $email; ?>">
  					</div>
  					<div class="control">
  	 				 <input type="password"placeholder="Password" name="password">
  					</div>
  						<div class="button">
     						 <p class="right">
  	 						 <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
     						 </p>
  						</div>
  						<p>
  						Already a member? <a href="login.php">Sign in</a>
  						</p>
  			</div>
  		</form>
	</div>
</body>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</html>