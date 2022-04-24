<?php
include("connection.php");
include("functions.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
	{   
        $title = $_POST['title'];
        $article = $_POST['article'];
        $category = $_POST['category'];

		// $txtname = $_POST['txtname'];                                                                                                       

		if(!empty($title) && !empty($article))
		{

			//save to database
			// $user_id = random_num(20);
            // $query = "select * from signup where name = '$txtname' limit 1";
			$query = "insert into textuploads (id,title,article,category) values ('0','$title','$article','$category')";

			mysqli_query($con, $query);

			header("Location: user.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}

?>
<!-- <form action="upload.php" method="post" enctype="multipart/form-data">

        
<div class="add">

    <input type="file" name="fileToUpload" id="fileToUpload"> -->
    <!-- <button onclick="window.location.href='/signup.php'">+ ADD</button> -->
    <!-- <button name="submit" type="submit"  value="submit">Submit TO Editor</button>
</div>

</form> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article Management System</title>
</head>
<body>
    <style>
        .header{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 3pc;
        }
        .title{
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2pc;
        }
        .text{
             width: 70%;
             height: 2pc;
             font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
             margin-left: 10pc;
             font-weight: bold;
             font-size: 25px;
             border-radius: 5px;
        }
        .text2{
            width: 70%;
            height: 9pc;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            margin-left: 10pc;
            font-weight: normal;
            font-size: 20px;            
            border-radius: 5px;
        }
        .btn{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 5pc 40pc;
            height: 3pc;
            width: 6pc;
            border-radius: 5px;
            cursor: pointer;
            font-size: 20px;
        }
        
    </style>
    <form method="POST">
    <h2 class="header">Write Your Article Here</h2>
    <h3 class="title">Article Category</h3>
    <input type="text" class="text" name="category" id="category">
    <h3 class="title">Title</h3>
    <input class="text" type="text" name="title" id="title">
    <h3 class="title">Article</h3>
    <!-- <input class="text2" type="text" name="article" id="article"> -->
    <textarea class="text2" name="article" id="article" cols="30" rows="10" placeholder="Type Your Article Here"></textarea>
    <button class="btn" type="submit" name="submit" value="submit">Submit</button>
    </form>
</body>
</html>