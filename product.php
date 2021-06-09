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
                <a class="nav-link active" href="product.php">Product</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="order.php">How to Order</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="contact.php">Contact Us</a>
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

    </br>
    </br>
    <div class="product">
        <div class="container">
            <div class="row">
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="1.jpeg" class="card-img-top" alt="..." title="toast bread">
                        <div class="card-body">
                            <h5 class="card-title">Toast Bread</h5>
                            <p class="card-text">Roti tawar yang bertekstur empuk dan lembut.</p>
                            <a href="#" class="btn btn-primary disabled">Rp. 20.000</a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="2.jpeg" class="card-img-top" alt="..." title="Callah bread">
                        <div class="card-body">
                            <h5 class="card-title">Callah Bread</h5>
                            <p class="card-text">Roti yang dianyam dan ditaburi wijen di atasnya.</p>
                            <a href="#" class="btn btn-primary disabled"> Rp. 25.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="3.jpeg" class="card-img-top" alt="..." title="Croissant">
                        <div class="card-body">
                            <h5 class="card-title">Croissant</h5>
                            <p class="card-text">Roti yang memiliki tekstur berlapis-lapis berbentuk bulan sabit. </p>
                            <a href="#" class="btn btn-primary disabled">Rp. 10.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="4.jpeg" class="card-img-top" alt="..." title="Pretzel Buns">
                        <div class="card-body">
                            <h5 class="card-title">Pretzel Buns</h5>
                            <p class="card-text">Roti lembut di dalamnya kulit tipis berwarna cokelat yang ditaburi garam. </p>
                            <a href="#" class="btn btn-primary disabled">Rp. 12.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="5.jpeg" class="card-img-top" alt="..." title="Banana Bread">
                        <div class="card-body">
                            <h5 class="card-title">Banana Bread</h5>
                            <p class="card-text">Roti rasa pisang dengan potongan pisang dan keju kering sebagai topping.</p>
                            <a href="#" class="btn btn-primary disabled">Rp. 26.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="6.jpg" class="card-img-top" alt="..." title="Donut">
                        <div class="card-body">
                            <h5 class="card-title">Donut</h5>
                            <p class="card-text">Donat dengan lapisan glaze rasa cokelat/vanila dan taburan kacang</p>
                            <a href="#" class="btn btn-primary disabled">Rp. 8.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem;">
                        <img src="7.jpg" class="card-img-top" alt="..." title="Cupcake">
                        <div class="card-body">
                            <h5 class="card-title">Cupcake</h5>
                            <p class="card-text">Cupcake brownies dengan berbagai topping cokelat </p>
                            <a href="#" class="btn btn-primary disabled">Rp. 10.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-auto">
                    <div class="card" style="width: 18rem">
                        <img src="8.jpg" class="card-img-top" alt="..." title="Sosis Bread">
                        <div class="card-body">
                            <h5 class="card-title">Sausage Bread</h5>
                            <p class="card-text">Roti dengan pelengkap dari sosis, saus dan berbagai toping sayuran.</p>
                            <a href="#" class="btn btn-primary disabled">Rp. 12.000 </a>
                            <a href="order.php" class="btn btn-success"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </br>
    <footer>
        <div class="footer">
            <p>| Sky Bakery | 085210911253 | SkyBakery@gmail.com |</p>
        </div>
    </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>

</body>

</html>