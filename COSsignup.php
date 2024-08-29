<!DOCTYPE html>
<html>
<head>
    <title>User Registration</title>
    <link rel="stylesheet" href="css.css">

</head>
<body>
    <h2>Register</h2>
    <form action="COSSignupAction.php" method="POST">
        Username: <input type="text" name="username" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Password: <input type="password" name="password" required><br><br>
        <input type='submit' name = 'submit 'id="submit"/>
    </form>
</body>
</html>
