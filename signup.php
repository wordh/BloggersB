<?php include 'header.php' ?>

<!--Navigationbar-->
<div id='cssmenu'>
        <ul>
            <li class="active"><a href='index.php'><span>Home</span></a></li>
            <li><a href='login.php'><span>Log In</span></a></li>
            <li><a href='all_post.php'><span>All Post</span></a></li>
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


<!--Content-->
<br>
<div class="card-body">
<div id="signUpForm">
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" align = "center" >
        <br><h4>First Name:</h4>
        <input type="text" name="first_name" title="Fname" placeholder="First name">
         <br>
        <br><h4>Last Name:</h4>
        <input type="text" name="last_name" title="Lname" placeholder="Last name">
        <br>
        <br><h4>Password:</h4>
        <input type="password" name="pass" title="pass" placeholder="Password">
        <br>
        <br><h4>User Name:</h4>
        <input type="text" name="username" title="username" placeholder="User Name">
        <br>
        <br><h4>Age: </h4>
        <input type="text" name="age" title="age" placeholder="Age">
        <br>
         <br><h4>Email:</h4>
        <input type="text" name="email" title="email" placeholder="Email">
        <br>
        <br><h4>Address:</h4>
        <textarea name="address" title="address" placeholder="Address"></textarea>
        <br>
        <br><h4>Phone Number:</h4>
         <input type="text" name="phone" title="Phone" placeholder="Phone Number"><br><br>
        <br>
       

        <br><input type="submit" name="submit" value="Submit">
    </form>
</div>
</div>

<?php
if (isset($_POST['submit'])) {
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $pass = $_POST['pass'];
    $user = $_POST['username'];
    $age = $_POST['age'];
	$email = $_POST['email'];
    $address = $_POST['address'];
    $pnumber = $_POST['phone'];

    $insert = "INSERT INTO users VALUES ('{$fname}','{$lname}','{$pass}','{$user}','{$age}','{$email}','{$address}','{$pnumber}')";
    $result = mysqli_query($connection, $insert) or die(mysqli_error());

    if ($result != null) {
        echo "<h1>User Added</h1>";
    }
    

};

?>

<?php include 'footer.php' ?>