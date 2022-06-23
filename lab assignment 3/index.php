

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>

    <link rel="stylesheet" href="css/index.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

 


</head>

<body>
    <div class="w3-header w3-black w3-display-container" style="height: 110px;">
    <div id="mySidebar" class="w3-sidebar w3-bar-block" style="display: none; color:black">
            <button onclick="w3_close()" class="w3-bar-item w3-button w3-large">&times;</button>
            <a href="index.php" class="w3-bar-item w3-button">Dashboard</a>
            <a href="course.php" class="w3-bar-item w3-button">Courses</a>
            <a href="tutor.php" class="w3-bar-item w3-button">Tutors</a>
            <a href="#" class="w3-bar-item w3-button">Subscriptions</a>
            <a href="#" class="w3-bar-item w3-button">Profile</a>
            <a href="login.php" class="w3-bar-item w3-button">Logout</a>
        </div>
        <div id="innerHeader">

            <div id="logoTutor">
            <button class="w3-button w3-xlarge" style= "margin-top:28px;" onclick="w3_open()">&#9776;</button>   
                <h1><b>My Tutor</b></h1>
            </div>

            <div id="navigationMenu" class="w3-hide-small w3-hide-medium">
                <ul>
                    <a href="course.php">
                        <li>Courses</li>
                    </a>
                    <a href="tutor.php">
                        <li>Tutors</li>
                    </a>
                    <a>
                        <li>Subcription</li>
                    </a>
                    <a>
                        <li style="padding-right: 60px;">Profile</li>
                    </a>
                </ul>
            </div>

        </div>

    </div>

    <div id="background">

    </div>


    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>

    </footer>

    <script src = "index.js"></script>
</body>

</html>