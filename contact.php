<?php
    $dbServername = "localhost";
    $dbUsername = "root";
    $dbPassword = "163019";
    $dbName = "article_management_system";

    $user_Name = $_POST['user_Name'];
    $user_Contact = $_POST['user_Contact'];
    $user_Email = $_POST['user_Email'];
    $user_Comments = $_POST['user_Comments'];
    
    $conn = new mysqli($dbServername,$dbUsername,$dbPassword,$dbName);

    if($conn -> connect_error){
        die('Connection Failed : '.$conn -> connect_error);
    }else{
        $stmt = $conn -> prepare("insert into contact_form(user_Name,user_Contact,user_Email,user_Comments) values(?,?,?,?)");
        $stmt -> bind_param("siss",$user_Name,$user_Contact,$user_Email,$user_Comments);
        $stmt -> execute();
        echo "Registration Successful...";
        $stmt -> close();
        $conn -> close();
    }
?>