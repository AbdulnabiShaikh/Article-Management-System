<?php
include("connection.php");
$sqlget = "select * from textuploads order by id asc";
$sqldata = mysqli_query($con, $sqlget) or die('error getting');
echo "<table>";
// sql_data = mysqli_query("select * from textuploads order by id asc");
//echo "<tr><th>Title</tr></th>"
while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    echo "<tc><td>";
    echo $row['title'];
    echo "<tr><td>";
    echo  $row['article'];
}
echo "</table>";
?>
<style>
    body{
    width: 50%;
    height: 5pc;
    padding: 2pc 2pc;

    /* -webkit-mask-origin: padding-box; */
    }
</style>