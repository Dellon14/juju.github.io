<!DOCTYPE html>
<html>
<head>
<title>Input Data Pelanggan Baru</title>
</head>

<body>
<form action="save_add.php" method="post">

	<label for="ID">ID :</label><br>
	<input type="text" id="ID" name="ID" value=""placeholder="Masukkan Nomor Pelanggan"required><p>
  
	<label for="username">username :</label><br>
	<input type="text" id="username" name="username" value=""placeholder="Masukkan Username Anda"required><p>
	
  	<label for="email">email :</label><br>
        <input type="text" id="email" name="email" value=""placeholder="Masukkan Email Anda"required><p>
	 
        <label for="password">password :</label><br>
        <input type="text" id="password" name="password" value=""placeholder="Masukkan Password Anda"required><p>
            
 
            
    <input type="submit" value="Submit">
</form> 
</body>
</html>
