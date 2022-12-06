<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $email=$_POST['e'];
    $mobile=$_POST['p'];
    $room=$_POST['r'];
    $problem=$_POST['q'];

    $sql="insert into complaint(email,mobile,room,problem)
    values('$email', '$mobile', '$room', '$problem')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('your complaint is registered. we will reach back to you soon....')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        echo "error:".mysqli_error($con);
    }
    mysqli_close($con);
}