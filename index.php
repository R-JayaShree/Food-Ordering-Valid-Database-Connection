<?php session_start(); ?>
<html>
<head>
	<title>FOOD ORDERING</title>
	<style>
		.header
		{
			position:absolute;
			top:0;
			left:0;
			background-color:black;
			width:100%;
			height:11%;
			color:white;
			font-size:45px;
			text-align:center;
		}
		.div2
		{
			position:absolute;
			top:11%;
			left:0;
			background-color:pink;
			width:100%;
			height:11%;
		}
		.div2 ul li a
		{
			text-decoration:none;
			float:left;
			padding:7px;
			font-size:22px;
			color:black;
		}
		.div2 ul li a:hover
		{
			color:red;
		}
		.div2 ul li
		{
			list-style-type:none;
		}
	</style>
</head>
<body>
	<?php
		if(isset($_SESSION['login']) && ($_SESSION['login']==1))
		{?>
	<div class="header">FOOD ORDERING
	</div>
	<div class="div2">
			<ul>
			<?php
				if($_SESSION['role']==1)
				{?>
				<li><a href="pendor.php">Pending Orders</a></li>
				<li><a href="delor.php">Completed Orders</a></li>
				<br/><br/><br/>
				<h3 align="left" style="color:black;"><?php echo "Welcome  ".$_SESSION['name']; ?></h3>
				<?php }
				else if($_SESSION['role']==2)
				{?>
			
					<li><a href="bkck.php">Register Complaint </a></li>
				
				<li><a href="trmy.php">Current Status</a></li>
				<br/><br/><br/>
				<h3 align="left" style="color:black;"><?php echo "Welcome  ".$_SESSION['name']; ?></h3>
				<?php }
				else if($_SESSION['role']==3)
				{?>
				<li><a href="upor.php">Current Status</a></li>
				<br/><br/><br/>
				<h3 align="left" style="color:black;"><?php echo "Welcome  ".$_SESSION['name']; ?></h3>
				<?php
				}?>
			</ul>
			<h4 style="position:absolute;top:0px;right:70px;"><a href="logout.php">Logout</a></h4>
	</div>
	
		<?php }
		else
		{
			echo "Please Login to continue";
		?>
			<a href="login.php">Login</a>
		<?php
		}
		?>
</body>
</html>