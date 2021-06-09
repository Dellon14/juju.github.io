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
?>
<html>

<head>
    <link rel="icon" type="image/png" href="logo.png">
    <title> SkyBakery </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
</head>

<script type="text/javascript">
    function myFunction() {
        var x = document.getElementById("mySelect").value;
        document.getElementById("harga").innerHTML = " Harga : " + x;
    }

    function kali() {
        var num1 = document.myform.angka1.value;
        var num2 = document.getElementById("mySelect").value;
        var perkalian = parseInt(num2) * parseInt(num1);
        document.getElementById('add').value = perkalian;
    }

    function color(x) {
        x.style.background = "lightpink";
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
                <a class="nav-link active" href="order.php">How to Order</a>
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
        <div class="po">
            <div class="container">
                <div class="buyer">
                    <h2 class="center">Order Form </h2>
                    <div class="mb-3">
                        </br>
                        <label for="name " class="form-label " onmouseover="style.color='blue'" onmouseout="style.color='black'">Full Name</label>
                        <input type="name " class="form-control " id="input1 " placeholder=" " onfocus="color(this)">
                    </div>
                    <div class="mb-3 ">
                        <label for="email" class="form-label" onmouseover="style.color='blue'" onmouseout="style.color='black'">Email address</label>
                        <input type="email" class="form-control" id="input2" placeholder=" " onfocus="color(this)">
                    </div>
                    <div class="mb-3">
                        <label for="textarea1 " class="form-label " onmouseover="style.color='blue'" onmouseout="style.color='black'">Address</label>
                        <textarea class="form-control " id="textarea1 " rows="3 " onfocus="color(this)" onmouseover="style.color='blue'" onmouseout="style.color='black'"></textarea>
                    </div>
                    </br>
                </div>
                <div class="order">

                    <h3 class="center">Product</h3>
                    </br>

                    <select id="mySelect" onchange="myFunction()">
                     <option selected>Product</option>
                     <option value=20000>Toast Bread</option>
                     <option value="25000">Callah Bread</option>
                      <option value="10000">Croissant</option>
                      <option value="12000">Pretzel Buns</option>
                      <option value="26000">Banana Bread</option>
                     <option value="8000">Donut</option>
                    <option value="10000">Cupcake</option>
                      <option value="12000">Sosis Bread</option>
                     </select>
                    </br>
                    <p id="harga"></p>

                    <form Name="myform">
                        <p>Jumlah yang Ingin Dibeli : </p>
                        <input type="text" name="angka1" onfocus="color(this)">
                        </br>
                        <Input type="button" Value="Total" onClick="kali() " onfocus="color(this) ">
                        </br>
                        <input type="text " id="add" name="hasil " value=" ">
                    </form>
                    </br>
                    </br>

                    <p>Pilih Metode Pembayaran : </p>
                    <div class="cek">
                        <div class="form-check form-check-inline">
                            <input class="formc" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                            <label class="form-check-label" for="inlineRadio1">Dana</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="formc" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                            <label class="form-check-label" for="inlineRadio2">Ovo</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="formc" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                            <label class="form-check-label" for="inlineRadio3">Gopay  </label>
                        </div>
                        </br>
                        </br>
                    </div>
                    <p class="right">
                        <a href="#" class="btn btn-primary">Submit</a>
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






    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css " rel="stylesheet " integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl " crossorigin="anonymous ">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js " integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0 " crossorigin="anonymous "></script>

</body>

</html>