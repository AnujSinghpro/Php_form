<?php
include 'database.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $password=$_POST['password'];
    $gender=$_POST['gender'];
    $education=$_POST['education'];
    $age=$_POST['age'];
   

    $sql="insert into student(name,password,gender,education,age) values('$name','$password','$gender','$education','$age')";

    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('new record inserted')</script>";
        echo "<script>window.open('insert.php','_self')</script>";
    }
    else
    {
        echo "error".mysqli_error($con);
    }
    mysqli_close($con);
}


?>