<?php
// set up php to submit login request to server 
if (isset($_POST['submit'])){
    $name = $_POST['username'];
    // test example need to actually check u/p against users db
    echo "You Entered Username $name..."
    $password = $_POST['password'];
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
                <form class="theform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
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