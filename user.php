<?php
//echo "welcome user";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Article Management System</title>
</head>
<body>
    <nav class="navbar" id="Home">
        <ul class="nav-list">
            <div class="logo"><img src="https://images.squarespace-cdn.com/content/v1/5b1735dd8ab722a791596d79/1528252522168-ZNE2OKNZ9MUSN03UF1E0/MS_Logo.png?format=1500w" alt="logo"></div>
            <li><a href="#home"> Home</a></li>
            <div class="dropdown">
                <button class="dropbtn">Categories
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="SocialMediaUser.php" target="_blank">Social Media</a>
                  <a href="PoliticsUser.php" target="_blank">Politics</a>
                  <a href="educationUser.php" target="_blank">Education</a>
                  <a href="entertainmentUser.php" target="_blank">Entertainment</a>
                </div>
              </div>
            <li><a href="#articles"> Articles</a></li>
            <li><a href="#contact-us"> Contact Us</a></li>
            <li><a href="signup" onclick="window.location.href='signup.php'" target="_blank"> Sign up</a></li>
            <li><a href="signin" onclick="window.location.href='alreadyauser.php'" target="_blank"> Sign in</a></li>
            <li><a href="#FAQs"> FAQs</a></li>
            <li><a href="logout.php"> Logout</a></li>
        </ul>
    </nav>
    <section id="home">
    <div class="background firstselection">
        <!-- <h2 class="heading">Are you looking for a place to showcase your article writing skills??</h2>
        <h2 class="heading">Then You Are At The Right Place!!</h2>
        <h2 class="heading">Let's Begin...</h2> -->
        <!-- <h1 class="heading" >ArManager</h1> -->
        <!-- <h3 class="heading1"><b>A place to read , write and learn.</b></h3> -->
        <marquee loop="infinite" scrollmount="10000000000"><h1 class="heading"> ArManager</h1></marquee>
        
    
        
    
    </div>
    <div>
    </section>
    <div class="line">
        <hr>
    </div>
    <div class="back">
    <h3 class="home_content">Article Management</h3>
    <center>
    <section class="article_info">
        <div class="article_info">
        <p class="article_info" type="text">Article Manager gives you everything you need to manage your very own article driven website.
            You set up the software once, configure your templates, and then use the web-based content management system
            to update your site from anywhere in the world. Whether you need to add new content, remove pages, upload
            images, or change formatting, Article Manager lets you do it quickly and without unnecessary mistakes.
            Article Manager gives you more features than any other solution. With Article Manager you can create an
            unlimited number of articles, subcategories, users, image uploads, article fields, and more.</div></p>
        <div class="thumbnail">
            <!-- <img src="Images/imageams2.jpg" alt="man image" class="family">  -->
        </div>
    </div> 
    </center>
    </section>
        </div>
    </div>

<div class="line">
    <hr>
</div>
<section id="contact-us">
    <div class="contact">
    
        <form action="">
            <div class="heading-contact">
                <h1>Contact Form:</h1>
                <h6>All fields are mandatory!</h6>
            </div>
    
           <div class="body">

            <div>
                <p><input class="textbox" type="text" name="name" id="name" placeholder="Enter your name" required></p>
             </div>

             <br>
             <div >
                <p><input class="numbox" type="number" name="uin" id="uin" placeholder="Enter your contact no." required></p>

             </div>
             <br>
    
             <div >
                <p><input class="mailbox" type="email" name="email" id="email" placeholder="xyz@gmail.com" required></p>
 
             </div>    
             <br>

             <div >
                <p><input class="commentbox" type="text" name="subject" id="subject" placeholder="Comments"></p>

             </div>
             <br>
            <input class="send" type="button" value="Send">
           </div>
    
        </form>
    </div>
</section>


</body>
</html>