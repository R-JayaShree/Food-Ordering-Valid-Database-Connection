<html>
<head>
<style>
			.aa
			{
				margin:0;
				padding:0;
				background:url(jaya3.jpg);
				background-size:cover;
				width:1150px;
				height:600px;background:url(jaya3.jpg);
				background-size:cover;
				width:1150px;
				height:600px;
				background-position:center;
				font-family:sans-sherif;
			}
			.header{
				color:black;
				position:absolute;
                top:5%;
                left:55%;
			}
			.bb{
				position:absolute;
                top:20%;
                left:55%;
			}
			

</style>
<script type="text/javascript">
     function display()
	{
		var frm=document.form2;
		var nam=frm.name.value;
		if(nam.length<5 || nam.length>30)
		{
			alert("Invalid name!..try again");
			frm.name.focus();
			return false;
		}
		
		var unam=frm.user.value;
		if(unam.length<3 || unam.length>15)
		{
			alert("Invalid user name!..username should be greater than 3 less than 20");
			frm.user.focus();
			return false;
		}
		
		var pas=frm.pass.value;
		if(pas.length>8 || pas.length<3)
		{
			alert("Invalid password!..password should not exceed the length 8");
			frm.pass.focus();
			return false;
		}
		
		var cos=frm.role.selectedIndex;
        if(cos==0)
        {
            alert("Select role!");
            frm.role.focus();
            return false;
        }
		var mov1=frm.role.options[cos].value;
		
		var addre=frm.add.value;
		if(addre.length<5)
		{
			alert("Invalid address!");
			frm.add.focus();
			return false;
		}
		
		var mail=frm.ema.value;
		var pattern1=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		if (!(pattern1.test(mail)))
		{
			alert("You have entered an invalid email address!");
			frm.ema.focus();
			return false;
		}
		
		var mobile=frm.mob.value;
		var pattern5=/^\d{10}$/;
		if(!(pattern5.test(mobile)))
		{
			alert("Enter correct mobilenumber!");
			frm.mob.focus();
			return false;
		}
		
		
	}
</script>
</head>
<body class="aa"><center>
  <h1 class="header">Registration Form</h1><table class="bb">
  <form name="form2" onsubmit="return display()" action="reg.php" method="POST">
   <tr><td>Name:</td><td><input type="text" name="name"></td></tr>
   <tr><td>Username:</td><td><input type="text" name="user"></td></tr>
   <tr><td>Password:</td><td><input type="text" name="pass"></td></tr>
   <tr><td>Role:</td><td><select name="role">
     <option value=1>Admin</option>
     <option value=2>Customer</option>
     <option value=3>Delivery Boy</option></select></td></tr>
   <tr><td>Address:</td><td><textarea name="add"></textarea></td></tr>
   <tr><td>Email:</td><td><input type="text" name="ema"></td></tr>
   <tr><td>Mobile:</td><td><input type="text" name="mob"></td></tr>
   <tr><td></td><td><input type="submit" value="Register"></td></tr>
   </table>

   </form>
  
<p id="aa"></p>
<br/>
</center>
</body>
</html>   