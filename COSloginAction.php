<!DOCTYPE html>

<?php

    echo"   Registration ended up with"; //BLACK COLOR IN CASE WE GET WHITE BG
    echo '<span style="color:white;text-align:center;">Request has been sent. Please wait for my reply!</span>'; //WHITE COLOR IN CASE WE GET BLACK BG


//session_start();

    // Establish a database connection (same as before)

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "loginsystem";

    $conn = new mysqli($servername, $username, $password, $dbname);

    $email = $_POST['email'];
    $passwordCOS = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";

    echo '<span style="color:grey;text-align:center;">The email sent is</span>'; //WHITE COLOR IN CASE WE GET BLACK BG

    echo $email; //BLACK COLOR IN CASE WE GET BLACK BG
    echo  $sql; //BLACK COLOR IN CASE WE GET BLACK BG
    //echo  $conn; //BLACK COLOR IN CASE WE GET BLACK BG

    $result = $conn->query($sql);
    //echo $result ;


if ($result->num_rows == 1)
{
    $row = $result->fetch_assoc();
    if (password_verify($passwordCOS, $row['password']))
    {
        echo"Helloworld";
        echo '<span style="color:grey;text-align:center;">SUCCESFULL LOGIN!/span>'; //WHITE COLOR IN CASE WE GET BLACK BG
        //echo "Login successful! Welcome, " . $_SESSION['email'];
        // Redirect or perform actions after successful login
    }
    else
    {
        echo '<span style="color:grey;text-align:center;">Invalid email or password!/span>'; //WHITE COLOR IN CASE WE GET BLACK BG
        echo "Invalid email or password!";
    }
}
else
{
    echo '<span style="color:grey;text-align:center;">Invalid email or password!!/span>'; //WHITE COLOR IN CASE WE GET BLACK BG
    echo "Invalid email or password!!";
}

    $conn->close();


?>

<html lang="en">
        <head>

            <link rel="stylesheet" href="css.css">

      </head>
      <body>
        <div class="background">
          <div class="shape"></div>
          <div class="shape"></div>
        </div>
        <form>
          <h3>Login Here</h3>

          <label for="username">Username</label>
          <input type="text" placeholder="Email or Phone" id="username" />

          <label for="password">Password</label>
          <input type="password" placeholder="Password" id="password" />

          <a href="COSloginAction.php">Log In</a>
          <a href="COSsignup.php">Register!</a>
          <button>Start without signing</button>

          <div class="social">
            <div class="go"><i class="fab fa-google"></i> Google</div>
            <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
          </div>

        </form>
      </body>
    </html>

