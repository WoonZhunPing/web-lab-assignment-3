<?php
include_once 'dbConnector.php';

$sqlIndex = "SELECT * FROM tbl_subjects";


$stmt = $conn->prepare($sqlIndex);
$stmt->execute();
$number_of_result = $stmt->rowCount();
$stmt = $conn->prepare($sqlIndex);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$rows = $stmt->fetchAll();


function truncate($string, $length, $dots = "...")
{
    return (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/subjectDetail.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


</head>

<body>
    <div class="w3-header w3-black w3-display-container" style="height: 110px;">

        <div id="mySidebar" class="w3-sidebar w3-bar-block" style="display: none;">
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

                <button class="w3-button w3-xlarge" style="margin-top:28px;" onclick="w3_open()">&#9776;</button>
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

    <div class="w3-display-container courseBImg">
        <p style="font-size: 50px; margin:0px;padding:20px; text-align:center">Courses</p>
    </div>

    <?php
  
    if(isset($_GET["subId"])){
        $id = $_GET["subId"];
    }
  

   foreach($rows as $subject){
    $subId = $subject['subject_id'];
    if($subId == $id){
    $subName = $subject['subject_name'];
    $subDesc = $subject['subject_description'];
    $subPrice = number_format((float)$subject['subject_price'], 2, '.', '');
    $tutorId = $subject['tutor_id'];
    $subSession = $subject['subject_sessions'];
    $subRating = $subject['subject_rating'];


    echo "<div id='subject'> 

    <div style='padding-top: 50px; height:400px' id='subId'><img src='assets/courses/$subId.png' style='height:300px; width:300px'></div>

    <div style='height:100px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Subject Name:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <h4> $subName </h4> 
        </div>
    </div>

    <div style='height:100px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Subject Description:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <h4>$subDesc</h4> 
        </div>
    </div>

    <div style='height:100px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Subject Price:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <h4>$subPrice</h4> 
        </div>
    </div>

    <div style='height:250px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Tutor:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <img src='assets/tutors/$tutorId.jpg'>
        </div>
    </div>

    <div style='height:100px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Subject Sessions:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <h4>$subSession</h4> 
        </div>
    </div>


    <div style='height:100px;display:table; width:100%; padding-top:10px'>
        <div style='display:table-cell; width:50%;'>
            <h3><b>Subject Rating:</b></h3> 
        </div>
        <div style='display:table-cell;width:50%'>
            <h4>$subRating</h4> 
        </div>
    </div>

    </div>";
    }
}
    ?>


    <footer class="w3-container w3-center w3-black">
        <p>MyTutor <br>Designed by Woon</p>

    </footer>

    <script src="course.js"></script>


</body>


</html>