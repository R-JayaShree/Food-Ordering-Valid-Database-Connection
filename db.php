<?php
    include("dbcon.php");
    $sql="CREATE DATABASE foodorder";
    if(mysqli_query($con,$sql))
	{
        echo "DB Created";
	}
	else
	{
		echo mysqli_error($con);
	}
	mysqli_close($con);
?>