<?php
$servername="localhost";
$username="root";
$password="";
$database="online_notice";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("enter your deleting record:" .mysqli_error($con));
}

?>
