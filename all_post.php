
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include 'header.php' ?>


<meta name="viewport" content="width=device-width, initial-scale=1">
<head>
     <script src = "ckeditor/ckeditor.js"></script>
     <link rel="stylesheet" href="css/allpost.css">

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

    <div id="post_div">
            
        <?php 



            $con = mysqli_connect("sakibahmed.info","sakibahm","myfirstwebsite","sakibahm_bloggersB");

            $query = mysqli_query($con, "SELECT * FROM posts");



            while($row = mysqli_fetch_array($query))
            { 
                echo "Posted By: ";
                echo "<td>".$row['user_name']."</td>";
                echo "<td>".$row['content']."</td>";

                echo "<br>";
                echo "<br>";
                echo "<br>";
            }


         ?>        


    </div>
    </body>
    
   

  <?php include 'footer.php' ?>