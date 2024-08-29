<!DOCTYPE html>

Header set Access-Control-Allow-Origin "*"

<html lang="en">
  <head>
    <!-- Design by ayazulridoy@gmail.com -->
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
    <!--Stylesheet-->
	<link rel="stylesheet" href="css.css">
  </head>
  <body>
    <div class="background">
      <div class="shape"></div>
      <!--<div class="shape"></div>/-->
    </div> 
    <form action="COSloginAction.php" method="POST">
      <h3>Login Here</h3>

      <label for="email"></label>
        Email: <input type="email" name="email" required><br><br>

      <label for="password"></label>
        Password: <input type="password" name="password" required><br><br>

      <!-- <a href="COSloginAction.php">Log In</a>
      <a href="COSsignup.php">Register!</a>	  	  
      <button>Start without signing</button>-->

        <input type='submit' name = 'submit'id="submit"  value="login" />
        <!--<input type='submit' name = 'signup' id="signup" value="Register" />-->
        <!--<input type='submit' name = 'continue without signing 'id="submit"  value="Continue W/0 Login" />-->
        <a href="COSsignup.php">Register! Make it a button into middle as signup </a>
        <a href="COSRegisterAction.php">Continue W/O logging! </a>

      <!--<div class="social">
        <div class="go"><a class="fab fa-google"></a> Google</div>
        <div class="fb"><a class="fab fa-facebook" href= "www.facebook.com"></a> Facebook</div>
      </div> /-->
	  
    </form>
  </body>
</html>

