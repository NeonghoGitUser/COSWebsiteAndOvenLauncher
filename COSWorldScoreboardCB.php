
<?php

    //phpinfo();

    header('Access-Control-Allow-Origin: *');

    header('Access-Control-Allow-Methods: GET, POST');

    header('Access-Control-Allow-Headers: Content-Type');

    //header('Content-Type: application/json');

    if( isset($_POST) )
    {
        echo "Post is tier 1  ",$_POST[2]; // date_created
	
	$CastData = 1.5; 
	$CastDataTwo = 1.5; 


        echo "<br> hello world    THe object is var dump ";
        $Data=file_get_contents("php://input");
        echo "Post is tier 2  ",$Data[2]; // date_created

        echo "hello the string length setn is ", strlen($Data);
        $CastData = (string) $Data; 
        $CastDataTwo = (int) $Data;        
        
        echo "</br> </br>", " hello the string cast to number is ", intval( $Data ); 


        //echo "Post is tier 2.5  ",$Data['username']; // date_created

       // echo current(current($Data[0]))->username;

        var_dump( json_decode( $Data ) );

        echo  " the single file in array is  ", var_dump( json_decode( $Data ) )[2];

        echo  " the single file in array is AS OBJECT ITSELF ", $Data[2];

        echo  " the single file in array is AS OBJECT ITSELF USERNAME asdasdasd", $Data->{0};

        $array = array_values((array) $Data);

        echo "Array 1 ", $array[0]; // id
        echo  "Array 2 ", $array[1]; // name
        echo  "Array 3 ", $array[2]; // date_created

        echo "Post is  tier 3",$_POST[0]; // date_created


        //$Data->{0} = 1;

        //echo $Data->{0};


        #Esto es una cadena

        #Convertimos la CADENA $Datos a JSON y guardamos el resultado en una variable
        $json=json_decode($Data);

         #Prueba... NÓTESE que NO usamos $Datos, sino $json
        var_dump($json->user[0]->username);

        var_dump($json->user[0]->username);

        #Hay que usar $json para obtener el valor de cualquier propiedad
        //echo "hell owrold tier 2 ",$json->user[0]->username[0];
        echo" The char of data is  TIER 1:",(string) $Data[3];

        echo" The char of data is TIER 2:",(string) $Data[3];

        echo" The char of data is  TIER 3:",(string) $json->user->username;


        //echo $Data['username2'];
        //if( )

        //echo "the data is as 0 ",$Data[3];
        //echo "the data is as direct post ",$_POST[3];
        //echo "the data is as direct post ",json_decode( $_POST );
        //var_dump( json_decode( $_POST ) );


        //json_decode($Data[0], true);
        //echo $Data;


        $file = fopen("newfile.txt", "w") or die("Unable to open file!");
        $txt = $Data;
        fwrite($file, $txt);
        $txt = "Jane Doe\n";
        fwrite($file, $txt);
        fclose($file);






    }

    /*
    if( isset($_POST) )
    {
        $Data=file_get_contents("php://input");
        json_decode($Data, true);
        echo $user["username"];
    }
    */


    /*
    echo($_POST[0]);

    echo json_encode($_POST[0]);

    if( $_POST["requestname"] == "Hello")
    {
        http_response_code(205);
    }
    */


    /*
    if($_SERVER['REQUEST_METHOD'] == 'POST' )
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "loginsystem";

        echo "<br>";
        echo"POST Received succesfully";

        //$conn = new mysqli($servername, $username, $password, $dbname);
        $conn = new mysqli($servername, $username, $password, $dbname);


        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        echo "<br>";
        echo" The connection was succesful with database ";


        // Retrieve form data
        $NewUsername = $_POST['username'];
        $NewEmail = $_POST['email'];
        $Password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hash password

        echo "<br>";
        echo" Username is  ".$_POST['username'];




        // Insert user data into the database
        $sql = "INSERT INTO users (fname, email, password) VALUES ('$NewUsername', '$NewEmail', '$Password')";

        if ($conn->query($sql) === TRUE) {
            echo "Registration successful!";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        echo"<br>";
        echo"<button href = 'COSLogin.php'> Go to login page to login basically </button>";
        echo"<br>";
        echo " <a class='btn' href='index.php'> Answers by Sentry </a> ";

        $conn->close();
        /*
        // Check connection
        if ($conn->connect_error)
        {
            echo"Ccould connect to dATABAE";
            die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            echo"Connection was not even good";
        }

        $username = $_POST['username'];



    }
    else
    {

        echo"Error Could not connect". $_SERVER['REQUEST_METHOD'];
        echo"Error Could not connect". isset($_POST['submit']);

    }
   */


?>




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
            <input type='submit' name = <?php  $MyVariable = 19; echo $MyVariable;  ?>   id="submit"  value=<?php  $MyVariable = 19; echo $MyVariable;  ?>  />
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
