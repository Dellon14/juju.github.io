<?php 
  session_start(); 
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Skybakery</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
</head>
<body>

    <p class="right">
        <a href="https://discord.gg/bTD6bcj"> <i class="fa fa-discord" aria-hidden="true"></i></a>
        <a href="https://www.instagram.com/michaelglhf/"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        <a href="https://steamcommunity.com/id/steamwarspear/"><i class="fa fa-steam-square" aria-hidden="true"></i></a>
    </p>


    <header>
        <div class="logo">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" alt="Sky Bakery" class="d-inline-block align-right" width="40" height="30"> Sky Bakery
            </a>
            <ul class="nav justify-content-left">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
        </div>
</br>   

        <ul class="nav justify-content-right">
        <li class="nav-item">
                <a class="nav-link " aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="crud.php">Admin</a>
            </li>
         </ul>
    </header>
	
	<div class="warning">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>
      </br>
      </br>
    <!-- logged in user information -->
    <div class="welcome">
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <div class="logout">
    	<a href="index.php?logout='1'" style="color: red; "onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a>
        </div>
    </div>
    <?php endif ?>
</div>
    <div class="container">
        <a href="about.php">
            <img class="tengah" src="wallhome.jpeg" title="See More" height="500px">
            <input class="btn btn-secondary" value="See More">
        </a>
    </div>
    <footer>
    </br>
        <div class="footer">
            <p>| Sky Bakery | 085210911253 | SkyBakery@gmail.com |</p>
        </div>
    </footer>



	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


</body>
</html>