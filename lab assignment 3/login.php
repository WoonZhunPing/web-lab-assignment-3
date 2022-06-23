<?php
 
if (isset($_POST["signinButton"])) {
    include 'dbConnector.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sqlLogin = "SELECT * FROM tbl_tutors WHERE tutor_email = '$email' and tutor_password = '$password'";

    $stmt = $conn->prepare($sqlLogin);
    $stmt->execute();
    $number_of_rows = $stmt->fetchColumn();


    if ($number_of_rows  > 0) {
	    
        session_start();
        $_SESSION["sessionid"] = session_id();
        $_SESSION["tutor_email"] = $email ;
        $_SESSION["tutor_password"] = $password ;

        echo "<script>alert('Login Success');</script>";
        echo "<script> window.location.replace('index.php')</script>";
    } else {
        echo "<script>alert('Login Failed');</script>";
        echo "<script> window.location.replace('login.php')</script>";
    }
    	 
    	
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in for My Tutor</title>

    

    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="login.js" defer></script>

</head>

<body onload="loadCookies()">

    <div class="w3-header w3-black w3-display-container w3-padding-24 w3-center">
        <h1 style="font-size:32px; color: white">My Tutor</h1>
    </div>

    <div class="w3-display-container" id="loginSection">

        <div style=" display:flex; justify-content:center">

            <div class="w3-container w3-round">

                <div class="w3-container w3-blue" style="width: 400px; margin-top: 75px;">
                    <h3>Login</h2>
                </div>

                <form name="loginForm" action="login.php" method="post" style=" border:2px">

                    <p>
                        <label for="email"><b>Email:</b></label>
                        <input class="w3-input w3-round w3-border" type="email" name="email" id="email" placeholder="login@hotmail.com" required>
                    </p>

                    <p>
                        <label for="password"> <b>Password:</b></label>
                        <input class="w3-input w3-round w3-border" type="password" name="password" id="password" placeholder="login123" required>
                    </p>

                    <p>
                        <input id="idremember" name="rememberme" class="w3-check" type="checkbox" onclick="rememberMe()"> 
                        <label for="rememberme" id="lRemember" style="font-family: Lucida Console; font-size:20px; margin-left:5px">Remember me</label>
                    </p>

                    <p style="color:white">
                        <button class="w3-button w3-round " id="signinButton" name="signinButton">
                            Sign in
                        </button>
                    </p>

                    <p id="forgetPass">
                        <a href="#">Forget your password?</a>
                    </p>

                    <p id="tRegister">
                        No account?
                        <a href="register.php">Create one!</a>
                    </p>

                </form>

            </div>
        </div>
    </div>


    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>

    </footer>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>


