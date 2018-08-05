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
    
    <div id="content">
        <div class="card">
            <img src="img/whyblogging.png" alt="Avatar" style="width:90%">
            <div class="container">
                <h3><b>Why Blogging?</b></h3>
                <p>So why should you blog?Three motivations are the most obvious.A passion project. A blog is your digital portal to share your current passion online. It’s text and multimedia without ink stains or Facebook distractions.An entrepreneur’s platform. Maybe you’d like to write professionally, working with brands and advertisers to receive compensation for your creativity. An expert’s expression. A blog is a place where you distill the experiences, thoughts and ideas that you have learned during your education, career and life journey.The truth lies hidden somewhere in between..</p>
            </div>
        </div>
        <div class="card">
            <img src="img/last.jpg" alt="Avatar" style="width:90%">
            <div class="container">
                <h3><b>Create Blogs</b></h3>
                <p>The consistent and persistent effort of online creation and publishing is a powerful journey in self-discovery  and growth. It will be a career enhancer and a life changer. That willingness to be vulnerable, to make mistakes but keep creating will change you.It is only through the door of risk that growth can enter.You just have to start.Create your own blog with us.The website has many tutorials to creat a blog.So stay with us and dive into the world of discovery</p>
            </div>
        </div>
        <div class="card">
            <img src="img/diary.jpg" alt="Avatar" style="width:90%">
            <div class="container">
                <h3><b>Write Your Thoughts</b></h3>
                <p>1. Blogs refine your thoughts.Sitting down and distilling your ideas and insights into structured sentences and paragraphs is an art. Wrangling and wrestling those words into shape will produce clarity from the cloud. Make it a practice every day, and magic happens.2.Blogs amplify your humanity.A blog amplified by social networks with simple-to-use interfaces is the intersection of humanity and technology. It is an extension and amplification of our uniqueness, creativity and content to 7 billion people.The low-friction sharing will amplify who you are to a world that is waiting to hear your voice. </p>
            </div>
        </div>
    </div>
    
    <?php include 'footer.php' ?>