
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/> -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="img/favicon.png" rel="shortcut icon">

    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>" />
    <title>Kapuas - Find Your Style</title>
  </head>
  <body>
<section class="section-m1">
<div id="page-signin">
      <form action="ceklogin.php" method="post">
        <img src="img/logos.png" alt="..." width="50%">
     	<h4>LOGIN</h4>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button class="normal" type="submit">Login</button>
        <a href="index.html" >< Back To Page</a>
        <a href="signup.php" >Create Account?</a>
        </form>
    </div>
</section>
    
  </body>
</html>

