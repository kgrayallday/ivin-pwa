<?php
require 'const.php'; // contains all constants in one file
// set up php to submit login request to server 
if (isset($_POST['submit'])){
    $username = $_POST['username'];
    // test example need to actually check u/p against users db
    echo "You Entered Username $username...";
    $password = $_POST['password'];
    // check if username password match, if so them reroute to logged-in activity
    $connection = new mysqli($const_ServerName, $const_UserName, $const_Password, $const_DbName);
    $sql_query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $connection->query($sql_query);
    if(mysql_num_rows($result) > 0 )
    { 
        $_SESSION["logged_in"] = true; 
        $_SESSION["username"] = $username; 
    }
    else
    {
        echo 'The username or password are incorrect!';
        // and show the login screen
    }
}

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>IVIN Login</title>
    <meta name="description" content="IVIN APP Login Page">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <div class="container">

        <div class="inner-container">
            <div class="error-div">
                <p>Wrong<br> Username/Password</p>
            </div>

            <div class="login-div">
                <form class="theform" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>">
                    <input type="text" class="loginputs" id="username" name="username" placeholder="username"><br>
                    <input type="password" class="loginputs" name="password" id="password" placeholder="password"><br>
                    <input type="submit" value="Login" class="submitbutton loginputs">
                </form>
            </div>

            <div class="forgot-div">
                <p>👉 Forget? Reset! 👈</p>
            </div>
        </div>

    </div>


    <script src="" async defer></script>
</body>

</html>