

<?php
session_start();
require_once "functions.php";
require_once "db_connection.php";
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <link rel="stylesheet" href="css/animated.css">
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/menucss1.css">
   
     
    
    <!--Browser Topbar-->
  
    <title>BloggersB</title>

     <link rel="stylesheet" type="text/css" href="engine1/style.css"/>
    <script type="text/javascript" src="engine1/jquery.js"></script>
   
 

</head>

<body class="fadeIn animated" background="img/back.png">


<div id="header">

	  <div id="logo" class="fadeIn animated"><a href="index.php"><img src="img/movingheader.jpg" class="img-rounded" width="304"
                                                                     height="236"></a></div>


    <!-- Right side of Header-->
    <div id="social">
        <ul>
            <li><a href="https://www.facebook.com" target="_blank"><img class="slideInUp animated"
                                                                                    src="img/fb.png"></a></li>
            <li><a href="https://www.twitter.com"><img class="slideInDown animated" src="img/g.png"></a></li>
            <li><a href="https://www.youtube.com" id="yt"><img class="slideInRight animated" src="img/yout.png"></a></li>
            <li><a href="https://www.instagram.com" id="fb"><img class="slideInLeft animated" src="img/insta.png"></a></li>
        </ul>
    </div>
     
     
    

</div>

<?php

//checking if user is logged in
if (isLoggedIn()) {
    echo "<div id='user' style=\"margin: auto; height: 10%; width: 50%; border: 3px; padding: 10px; background: #666d7a;\">";

    echo "<form action='signout.php' method='post'>";
    $user = $_SESSION['user'] ;

    
    


    echo "<h3 style=\"margin: auto; border: 3px; padding: 2px;\">" . $user . "</h3><h4style=\"margin: auto; border: 3px; padding: 10px;\">" . $_SESSION['phone'] . "</h4><br>";

    echo "<input type= \"submit\" value=\"Log out\"  name='logout_submit'></form>";

    echo "</div>";
}

?>



   
