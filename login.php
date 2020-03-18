<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">

  <title>LOGIN EFORM</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="css/login.css">
  <link href="css/style-responsive.css" rel="stylesheet">
  
 
</head>

<body class="bg-white">

<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
	
      echo "
              <script>
                  alert('data yang anda masukan salah!');
      
              </script>
          ";
		}
	}
	?>
   <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
  <div id="login-page">
    <div class="container shadow p-3">
      <form class="form-login " action="cek_login.php" method="post">
        <h2 class="form-login-heading">LOGIN</h2>
        <div class="login-wrap">
          <label for="User ID" class="lab">Username</label>
          <input id="User ID" type="text" class=" form-control buleud " name="username" placeholder="User ID" autofocus required>
          <br>
          <label for="pass" class="lab">Password</label>
          <input id="pass" type="password" class="form-control buleud " name="password" placeholder="Password" required>
          
          <button class="btn btn-theme btn-block buleud mt tombol_login" name="login" type="submit"><i class="fa fa-lock"></i> LOGIN</button>
          
        </div>
        
      </form>
    </div>
  </div>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
