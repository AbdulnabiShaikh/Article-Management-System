<?php
include('connection.php');
$sqlget = "SELECT * FROM textuploads";
$sqldata = mysqli_query($con, $sqlget) or die('error getting');

echo "<table>";
echo "<tr><th><ID></th><th>Title</th><th>Article</th></tr>";
while ($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tr><td>";
    echo $row['id'];
    echo "<td>";
    echo $row['title'];
    echo "</td><td>";
    echo $row['article'];
    echo "</td></tr>";
}
echo "</table>";

?>

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
        body{
            width: 50%;
            height: 5pc;
            margin-left: 1pc;
            padding: 1pc 3pc;


        }
        .btn{
            /* display: block; */
            color: white;
            background-color: green;
            margin-left: 78pc;
            /* padding-left: 15px; */
            height: 30px;
            border-radius : 10px;
            cursor: pointer;
        }
        .btn2{
            /* display: block; */
            color: white;
            background-color: red;
            /* margin-left: 80pc; */
            height: 30px;
            border-radius : 10px;
            cursor: pointer;
        }

    </style>
    <!-- <button class="btn" value="submit">Approve</button>
    <button class="btn2">Cancel</button> -->
</body>
</html>