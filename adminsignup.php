<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$txtname = $_POST['txtname'];
		$txtnumber= $_POST['txtnumber'];
		$txtemail = $_POST['txtemail'];
		$txtpassword = $_POST['txtpassword'];
		$txtconfirmpassword = $_POST['txtconfirmpassword'];

		if(!empty($txtname) && !empty($txtpassword) && !is_numeric($txtname))
		{

			//save to database
			// $user_id = random_num(20);
			$query = "insert into adminsignup (id,name,number,email,password,confirm_password) values ('0','$txtname','$txtnumber','$txtemail','$txtpassword','$txtconfirmpassword')";

			mysqli_query($con, $query);

			header("Location: adminsign_in.php"); 
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>

    <style>
        h1{
font-family: Georgia, 'Times New Roman', Times, serif;
font-weight: bolder;

text-align: left;
font-size: 2cm;
color: black;


}
body{

background-size: cover;
background-repeat: no-repeat;
}
*{
    box-sizing: border-box;
   background-color: white;
}
.header{
    display: flex;
    justify-content: center;
    background-color: rgb(123, 142, 204);
   
}
.main{
    font-size: 0.5cm;
    font-family: Georgia, 'Times New Roman', Times, serif;
    padding: 15px;
    color: black;
    text-align: center;

}
button{
    font-size: 0.8cm;
    font-family: Georgia, 'Times New Roman', Times, serif;
    border-radius: 15px;
    /* border: 15px 15px black; */
    border: 3px solid black;
    cursor: pointer;
    height: 1.6cm;
    width: 3.8cm;
    text-align: center;
    right: 10cm;
    background-color: white;
    margin-right: 9pc;
}

button:hover{
    
    background-color:grey;
}
input[type="text"],input[type="number"],input[type="email"],input[type="password"]{
    border: 3px solid black;
    padding: 15px;
    border-radius: 7px;
    width: 27cm;
    background-color: white;
    font-size: 25px;
   
    
}
.style1{

    text-decoration: underline;
    cursor: pointer;
    font-family: Georgia, 'Times New Roman', Times, serif;
    margin-right: 9pc;
    font-size: 2pc;
    color: black;
}
.p2{
    display: flex;
    margin-left: 20pc;
    height: 4pc;
    margin-bottom: 3pc;
}

    .logo{
    height: 3cm;
    width:25%;
    display: flex;
    justify-content: left;
    align-items: left;
    margin-left: 18px;
    margin-right: -80px;
}
.logo png{
    height: 0%;
    width: 5%;
    border: 1px solid pink;
    border-radius: 5px;
}
.class8{
    font-size: 4cm;
}
</style>

</head>
<body>
    <form method="POST">
        <div class="logo"><img src="https://images.squarespace-cdn.com/content/v1/5b1735dd8ab722a791596d79/1528252522168-ZNE2OKNZ9MUSN03UF1E0/MS_Logo.png?format=1500w" alt="logo"></div>
        <!-- <marquee class="class8" loop="infinite" scrollmount="10000000000"><h1 class="heading"> ArManager</h1></marquee> -->
<h1 class="header">Kindly Sign Up as Admin:</h1>
<div class="main">
<p class="p2"><input type="text" placeholder="Enter Your Name" name="txtname" id="txtname"  required> </p>
<p class="p2"><input type="number" placeholder="Enter Your Contact Number" name="txtnumber" id="txtnumber"  required></p>
<p class="p2"><input type="email" placeholder="Enter Your Email Id" name="txtemail" id="txtemail"  required></p>
<p class="p2"><input type="password" placeholder="Enter A Password" name="txtpassword" id="txtpassword"  required></p>
<p class="p2"><input type="password" placeholder="Confirm Password" name="txtconfirmpassword" id="txtconfirmpassword"  required></p>
<button name="Submit" type="submit" value="submit">Sign Up</button>
<p>Already a user?<em class="style1" href="sign_in" onclick="window.location.href='sign_in.php'" target="_blank">Sign in</em></p>
</div>
    </form>
</body>
</html>