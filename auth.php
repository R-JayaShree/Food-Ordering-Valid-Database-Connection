<?php
    session_start();
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    include("dbcon.php");
    $sql="SELECT * FROM userlogin WHERE username='$user' AND password='$pass'";
    if($res=mysqli_query($con,$sql))
    {
        if(mysqli_num_rows($res)==1)
        {
            $_SESSION['login']=1;
            $_SESSION['user']=$user;
            $row=mysqli_fetch_array($res);
            $_SESSION['name']=$row['name'];
            $_SESSION['role']=$row['role'];
            header("location:index.php");
        }
        else
        {
           header("location:logininvalid.php");
        }
    }
    else
    {
        echo mysqli_error($con);
    }
?>