<?php session_start(); ?>
<html>
    <head>
        <title>Log-In</title>
        <style>
            .log{
                width:300px;
                height:135px;
                background-color:pink;
                position:absolute;
                top:38%;
                left:38%;
            }
           .aa
			{
				margin:0;
				padding:0;
                background:url(jaya2.jpg);
				background-size:cover;
				width:1150px;
				height:600px;background:url(jaya2.jpg);
				background-size:cover;
				width:1150px;
				height:600px;
				background-position:center;
				font-family:sans-sherif;
			}
			.bb
			{
				color:white;
				position:absolute;
                top:10%;
                left:39%;
				
			}
        </style>
    </head>
    <body class="aa">
	<h1 class="bb"><center>FOOD ORDERING</CENTER></h1>
    <div class="log">
	
        <?php
        if(isset($_SESSION['login']) && $_SESSION['login']==1)
            {
                echo "Already Logged in as ".$_SESSION['name'];
            ?>
          
                <br><a href="logout.php">Logout</a>
            <?php
            }
            else
            {
            ?>
        </div>
        <div class="log">
        <table>    
        <form name="log" action="auth.php" method="POST">
			<tr><b>INVALID USERNAME/PASSWORD</b></tr>
            <tr><td>Username:</td><td><input type="text" name="user"></td></tr>
            <tr><td>Password:</td><td><input type="password" name="pass"></td></tr>
            <tr><td><input type="Submit" value="Login"></td></tr>
        </form>
        <tr><td><a href="register.php">Register</a></td></tr>
            </div>
            <?php
            }
            ?>
    </body>
</html>