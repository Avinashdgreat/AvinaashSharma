<?php
include 'dbConnection.php';
 $query=$_REQUEST["query"];
 $result=mysqli_query($con,$query);
 $arr=mysqli_fetch_all($result,MYSQLI_ASSOC);
 echo json_encode($arr);
?>