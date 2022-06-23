<?php

if (isset($_POST['registerButton'])) {
    include 'dbConnector.php';
    $email = $_POST['rEmail'];
    $name = $_POST['rName'];
    $phoneNum = $_POST['rPhoneNum'];
    $homeAdd = $_POST['rHomeAdd'];
    $password = sha1($_POST['rPassword']);
    $sql = "INSERT INTO userdata (uID, uEmail, uName, uPhone, uHomeAdd, uPass, uImage) VALUES (null, '$email', '$name', '$phoneNum', '$homeAdd', '$password', NULL)";


    if ($conn->query($sql) == TRUE) {

        echo "<script>alert('You register successfully')</script>";
        echo "<script>window.location.replace('login.php')</script>";
    } else {

        echo "<script>alert('Error occured!!!') <script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration for My Tutor</title>

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/register.css">

</head>

<body>
    <div class="w3-header w3-black w3-display-container w3-padding-24 w3-center">
        <h1 style="font-size:32px; color: white">My Tutor</h1>
    </div>

    <div class="w3-display-container" id="regSection">

        <p>
        <div class="w3-container w3-padding w3-center">
            <img src="profilePic.png" class="w3-image w3-margin" id="defaultPic" style="height: 240px; max-width: 240px; border-radius: 90px; border: 5px solid; border-color: #10e899;">
            <br>
            <input type="file" id="fileToUpload" name="fileToUpload" onchange="previewFile()" style="margin-left: 100px">
        </div>
        </p>



        <div class="w3-container w3-round">

            <div class="w3-container w3-round" style="background-color:white">

                <div class="w3-container " style="width: 400px; margin-top: 20px;">
                    <h3 style="text-align:center"><b>Create an Account</b></h2>
                </div>

                <form action="" method="post" style=" border:2px">

                    <p>
                        <label for="rEmail"><b>Email:</b></label>
                        <input class="w3-input w3-round w3-border" type="email" id="rEmail" name="rEmail" placeholder="login@hotmail.com" required>
                    </p>

                    <p>
                        <label for="rName"> <b>Name:</b></label>
                        <input class="w3-input w3-round w3-border" type="text" id="rName" name="rName" placeholder="Albert Tan" required>
                    </p>

                    <p>
                        <label for="rPhoneNum"> <b>Phone Number:</b></label>
                        <input class="w3-input w3-round w3-border" type="tel" id="rPhoneNum" name="rPhoneNum" placeholder="011-11111111" required>
                    </p>

                    <p>
                        <label for="rHomeAdd"> <b>Home Address:</b></label>
                        <textarea class="w3-input w3-round w3-border" id="rHomeAdd" name="rHomeAdd" placeholder="1,Jalan Abang" required></textarea>
                    </p>

                    <p>
                        <label for="rPassword"> <b>Password:</b></label>
                        <input class="w3-input w3-round w3-border" type="password" id="rPassword" name="rPassword" placeholder="login123" required>
                    </p>

                    <p>
                        <button class="w3-button w3-round" id="registerButton" name="registerButton">
                            Sign Up
                        </button>
                    </p>

                </form>
            </div>


        </div>
    </div>


    <footer class="w3-container w3-center w3-padding-12px w3-black" id="register">
        <p>MyTutor <br>Designed by Woon</p>
    </footer>

    <script src="register.js">
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>



</body>

</html>