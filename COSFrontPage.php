<!DOCTYPE html>

<html lang="en">
<head>
    <!-- Design by ayazulridoy@gmail.com -->
    <title>FrontPage</title>
    <!--Stylesheet-->
    <link rel="stylesheet" href="css.css">
    </head>
    <body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
        <form action="COSloginAction.php" method="POST">
            <h3>Login Here</h3>

            <br>            <br>            <br>            <br>
            <input type='submit' name = 'submit'id="submit"  value="Login/Register" />
            <br>            <br>            <br>            <br>
            <input type='submit' name = 'signup' id="signup"  value="Scoreboard" />
            <br>            <br>            <br>            <br>
            <input type='submit' name = 'continue without signing 'id="submit"  value="Check stats"  />
            <br>            <br>            <br>            <br>
            <div class="social">
                <div class="go"><i class="fab fa-google"></i> Google</div>
                <div class="fb"><i class="fab fa-facebook"></i> Facebook</div>
                <div class="fb"><i class="Discord"></i> Facebook</div>
            </div>


        </form>
    </body>

</html>

<?php

    echo '<span style="color:grey;text-align:center;">COS front page</span>';

?>