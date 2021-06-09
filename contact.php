<?php 
  session_start(); 
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<html>

<head>
    <link rel="icon" type="image/png" href="logo.png">
    <title> SkyBakery </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">


</head>
<script>
    function myFunction(x) {
        x.style.background = "lightblue";
    }

    function confirmInput() {
        input1 = document.forms[0].input1.value;
        alert("Halo " + input1 + " Terimakasih Atas Sarannya !");
    }
</script>

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
                <a class="nav-link" aria-current="page" href="index.php">Home</a>
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
                <a class="nav-link active" href="contact.php">Contact Us</a>
            </li>
        </ul>
        </br>   
</br>
        <ul class="nav justify-content-right">
        <li class="nav-item">
                <a class="nav-link " aria-current="page" href="login.php">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="register.php">Register</a>
            </li>
         </ul>
</header>

<div class="warning">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : 
        ?>
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
    	<a href="index.php?logout='1'" style="color: red; "onclick="return confirm('Apakah anda yakin ingin keluar ?')">Logout</a>
    </div>
    <?php endif ?>
</div>


<body>

    <div class="contact">
        <div class="content">
            <div class="container">
                <div class="info">
                    <div class="icon">
                        <h2 onmouseover="style.color='red'" onmouseout="style.color='black'"><i class="fa fa-address-book" aria-hidden="true"></i> Contact Us </h2>
                        <p onmouseover="style.color='blue'" onmouseout="style.color='black'">Hubungi Kami</p>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3 onmouseover="style.color='red'" onmouseout="style.color='black'"><i class="fa fa-map-marker" aria-hidden="true"></i> Address </h3>
                                <p onmouseover="style.color='blue'" onmouseout="style.color='black'">Jakarta Utara Pademangan
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3 onmouseover="style.color='red'" onmouseout="style.color='black'"><i class="fa fa-envelope-o" aria-hidden="true"></i> Email </h3>
                                <p onmouseover="style.color='blue'" onmouseout="style.color='black'">SkyBakery@gmail.com
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="icon">
                            <div class="text">
                                <h3 onmouseover="style.color='red'" onmouseout="style.color='black'"><i class="fa fa-phone" aria-hidden="true"></i> Phone </h3>
                                <p onmouseover="style.color='blue'" onmouseout="style.color='black'">085210911253
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="message">
                    <form onsubmit="confirmInput()" action="index.html">
                        <div class="mb-3">
                            <label for="name" class="form-label " onmouseover="style.color='blue'" onmouseout="style.color='black'">Full Name</label>
                            <input type="name" class="form-control" id="input1" placeholder=" " onfocus="myFunction(this)">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label" onmouseover="style.color='blue'" onmouseout="style.color='black'">Email address</label>
                            <input type="email" class="form-control" id="input2" placeholder=" " onfocus="myFunction(this)">
                        </div>
                        <div class="mb-3">
                            <label for="textarea1" class="form-label" onmouseover="style.color='blue'" onmouseout="style.color='black'">Message</label>
                            <textarea class="form-control" id="textarea1" rows="3" onfocus="myFunction(this)"></textarea >
                    </div>
                    <p class="right">
                        <input type="submit" value="Send"  class="btn btn-primary">
                    </p>
                      
                 </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
        <footer>
            <div class="footer">
                <p>| Sky Bakery | 085210911253 | SkyBakery@gmail.com |</p>
            </div>
        </footer>



    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>