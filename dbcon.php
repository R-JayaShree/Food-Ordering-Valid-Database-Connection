<?php
    $con=mysqli_connect('localhost','root','','foodorder');
    if(!$con)
    {
        echo mysqli_error($con);
    }
	else
	{
		echo "connected";
	}

?>