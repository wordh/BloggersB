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
    
    
    <?php include 'footer.php' ?>