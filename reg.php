<?php
    include("dbcon.php");
    $name=$_POST['name'];
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $role=$_POST['role'];
    $add=$_POST['add'];
	$ema=$_POST['ema'];
    $mob=$_POST['mob'];
    $sql="Insert into userlogin values('$name','$user','$pass','$role','$add','$ema','$mob')";
    if(mysqli_query($con,$sql))
    {
        echo "Inserted";
        header("location:login.php");
    }
    else
    {
        echo "Username exists.Try a different username";
    }
?>