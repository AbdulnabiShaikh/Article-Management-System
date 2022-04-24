<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$txtemail = $_POST['txtemail'];
		$txtpassword = $_POST['txtpassword'];

		if(!empty($txtemail) && !empty($txtpassword) && !is_numeric($txtemail))
		{

			//read from database
			$query = "select * from signup where email = '$txtemail' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $txtpassword)
					{

						$_SESSION['id'] = $user_data['id'];
						$_SESSION['name'] = $user_data['name'];
						header("Location: user.php");
						die;
					}
				}
			}
			
			echo "wrong username or txtpassword!";
		}else
		{
			echo "wrong username or txtpassword!";
		}
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Sign In</title>
    <style>
        body{
            background-color: white;
        }
    </style>
</head>
<body>
    <form method="POST">
    <div class="container">
        <div class="card">
            <div class="inner-box">
                <div class="card-front">
                    <h1 class="header">User Sign In</h1>
                        <input type="email" class="input-box" placeholder="Your Email" name="txtemail" id="txtemail" required>
                        <input type="txtpassword" class="input-box" placeholder="Enter Your Password" name="txtpassword" id="txtpassword">
                        <button class="btn_go" type="submit" value="submit" name="submit">Sign In</button>
                        <button class="btn_google">continue with google</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>