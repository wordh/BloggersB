 <?php include 'header.php' ?>
 
 <?php


$phone = null;

$error = null;

if (isset($_POST['submit'])) {
    $phone = ($_POST['uname']);
    $pass = ($_POST['psw']);

    if ($phone == null) {
        $phone .= "Enter Your Phone Number: <br>";
    }
    if ($pass == null) {
        $error .= "Enter Your Password<br>";
    }

    if ($error == null) {
        $user_found = checkUser($phone, $pass);

        if ($user_found == false) {
            $error .= "Incorrect Phone Number or Password<br>";
            logOutUser();
        } else {
            $error .= "User Found! Phone Number: " . $user_found['phone'] . "<br>";

            setAsLoggedIn($user_found['name'], $phone);

           
        }
    }
}

if ($error != null) {
    echo "<h1 style='color: #ffffff;'>" . $error . "</h1>";
}

?>
 
 <div id='cssmenu'>
        <ul>
            <li class="active"><a href='index.php'><span>Home</span></a></li>
            <li><a href='login.php'><span>Log In</span></a></li>
            <li><a href='all_post.php'><span>ALL Post</span></a></li>
            <li><a href='signup.php'><span>Sign Up</span></a></li>
            <li class='last'><a href='contact.php'><span>Contact us</span></a></li>
            
             <?php

            if (isLoggedIn()) {
               
                    $upload = "<li><a href='write_post.php'><span>Write Post</span></a></li>";
                    echo $upload;
                
            }

            ?>
           
        </ul>
    </div>
 
 <div id="form" align = "center">
        <form action="login.php" method="POST"  >
            
           <br> <div class="card-body">
             <label><b>Phone:</b></label><br>
         <input type="text" placeholder="Enter Phone Number" name="uname" required><br>
        	<br>          
                <br>
               <label><b>Password:</b></label><br>
               <input type="password" placeholder="Enter Password" name="psw" required>

              <br> <br> <button type="submit" name="submit" >Login</button>
              
               <br> <input type="checkbox" checked="checked" ><b>  Remember me </b>
            </div>

        </form>     
        
    </div>

<?php include 'footer.php' ?>
