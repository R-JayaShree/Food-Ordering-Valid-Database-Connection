<?php
    include("dbcon.php");
    $sql="CREATE table userlogin(name varchar(20),username varchar(20) primary key,password varchar(20),role varchar(1),address varchar(50),email varchar(20),mobile numeric(10))";
    if(mysqli_query($con,$sql))
	{
        echo "Table created";
	}
    else
	{
        echo mysqli_error($con);
	}
	mysqli_close($con);
?>