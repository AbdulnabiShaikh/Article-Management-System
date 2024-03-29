
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politics</title>
    <style>
.navbar{
    height: 34px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: sticky;
    top: 0;
    cursor: pointer;
}
.nav-list{
    background-color: black;
    height: 60px;
    width : 100%;
    display: flex;
    align-items: top;
}
.nav-list a:hover{
    text-align: none;
    background-color: rgb(148, 172, 236);
    
}
.nav-list li{
    list-style: none;
    padding: 18px 30px;
}
.nav-list li a{
    text-decoration: none;
    color: white;
    font-size: 25px;
    font-family: emoji;
}
.dropdown-content{
    font-size: 25px;
}
.rightNav{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 50px;
    width: 70;
    text-align: center;
    padding: 5px 20px;
}
.logo{
    height: 250;
    width:25%;
    display: flex;
    justify-content: left;
    align-items: left;
}
.logo png{
    height: 0%;
    width: 10%;
    border: 1px solid pink;
    border-radius: 5px;
}
.dropdown {
    float: left;
    overflow: hidden;
  }

.dropdown .dropbtn {
    font-size: 20px;
    border: none;
    outline: none;
    color: white;
    padding: 14px 16px;
    background-color: inherit;
    font-family: inherit; 
    margin-top: 5px;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
  
.dropdown-content a:hover {
    background-color: rgb(148, 172, 236);
}
  
.dropdown:hover .dropdown-content {
      background-color: snow;
    display: block;
}

/* .class1{
float: left;
height:9cm;
width: 500px;
overflow:hidden;
margin: 15px;
border-radius: 1cm;
border: 10px solid black;

} */
.class2{
    padding-top: 5cm;
    
}
h1{
color: rgb(236, 207, 207);
font-family: Georgia, 'Times New Roman', Times, serif;
font-size: 5cm;
font-weight: bold;
text-align: center;
position: relative;
/* bottom: 1cm; */
/* right: 1cm; */
text-shadow: 0.2cm 0.2cm rgb(20, 19, 20);
top: 2cm;
bottom: 2cm;
margin-left: 5px;
margin-right: 5px;


}
p{
font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
color:black;
font-size: 0.6cm;
padding: none;
bottom: 5cm;

}
#fileToUpload{
   width: 50%;
   margin-left: 75pc;
   margin-top: 2pc;
}
button{
height: 2cm;
width: 4cm;
float: right;
display: flex;
box-sizing: border-box;
    margin: 40px;
    position: relative;
    text-align: center;
    background-color: black;
    color: white;
    padding: 15px;
    font-family: Georgia, 'Times New Roman', Times, serif;
    font-size: 0.8cm;
    border-radius: 1cm;
    border: 15px 15px beige;
    cursor: pointer;
}
button:hover{

    
    background-color: rgb(216, 215, 215);
}
.class4{
    background-color: white;
}
/* .class3{
    background-image: url(Images/image3.jpg);
} */
.edit{
    background-image: url(Images/image3.jpg);
    height: 7cm;
    margin-top: 5px;
    
}
.mar{
    font-size: 1cm;
    font-family: Georgia, 'Times New Roman', Times, serif;
    background-color:rgb(236, 207, 207);
}

    </style>
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
                    <a href="SocialMedia.php">Socail Networking</a>
                    <a href="Politics.php" target="_blank">Politics</a>
                    <a href="education.php" target="_blank">Education</a>
                    <a href="entertainment.php" target="_blank">Entertainment</a>
                </div>
              </div>
            <li><a href="articles"> Articles</a></li>
            <li><a href="contact-us"> Contact Us</a></li>
            <div class="dropdown">
                <button class="dropbtn">Sign Up
                  <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-content">
                  <a href="Signup.php" target="_blank">Sign Up as User</a>
                  <a href="adminsignup.php" target="_blank">Sign Up as Admin</a>
                  
                </div>
              </div>
            <!-- <li><a href="#signup" onclick="window.location.href='/signup.html'" target="_blank"> Sign up</a></li> -->
            <li><a href="signin" onclick="window.location.href='sign_in.php'" target="_blank"> Sign in</a></li>
            <li><a href="FAQs"> FAQs</a></li>
        </ul>
    </nav>
    <form method="post" enctype="multipart/form-data">

        
        <div class="add">
       
            <!-- <input type="file" name="fileToUpload" id="fileToUpload"> -->
            <button><a href="signup" onclick="window.location.href='signup.php'" target="_blank">+ ADD</a></button>
        </div>
  
    </form>
    <!-- <div class="class4">
        <div class="class3">
            <button>+ Add</button>
        </div>
        <div class="class2"> -->
        
        <!-- <img src="Images/image3.jpg" alt="" class="class1"> -->
        <marquee class="mar">Welcome to the Politics section!Enjoy Reading , Writing and Learning</marquee>
    
         <h1 class="edit">Politics</h1>
         <!-- <marquee>Welcome to the politics section!Enjoy Reading , Writing and Learning</marquee> -->
         <p >Politics  is the set of activities that are associated with making decisions in groups, or other forms of power relations among individuals, such as the distribution of resources or status.<br>It is also known as the activities associated with the governance of a country or area, especially the debate between parties having power.</p>
        </div>
    </div>
  </body>

<?php
include('connection.php');
$sqlget = "SELECT * FROM textuploads where category = 'politics'";
$sqldata = mysqli_query($con, $sqlget) or die('error getting');

echo "<table>";
echo "<th>Title</th><th>Article</th></tr>";
while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['title'];
    echo "</td><td>";
    echo $row['article'];
    echo "</td></tr>";
}
echo "</table>";
?>