	<?php include 'header.php' ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<script src = "ckeditor/ckeditor.js"></script>
	</head>

	<body>

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
		<form action = "" method="post">
			<textarea class = "ckeditor" name = "editor"></textarea>

			<input type="submit" value ="Submit">

		</form>
	</body>

	<?php  

		if(isset($_POST['editor']))
		{
			
			$phone = getPhoneNumber();
			$user = getUserName();
			$text = $_POST['editor'];

			$insert = "INSERT INTO posts VALUES ('{$phone}','{$user}','{$text}')";
    		$result = mysqli_query($connection, $insert) or die(mysqli_error());
		}


	?>
</html>