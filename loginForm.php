<!DOCTYPE html>
<html>
	<head>
		<title>Login Page </title>
		<!-- Stylesheets -->
		<link rel="stylesheet" href="style.css">
	</head>
	<body>    
			
		<div id="wrap">
			<div id="header">
				<h1>Medical Buddy</h1>
				<p>Welcome to Medical Buddy! Providing you online healthcare assistance. View your incoming patients, their medical records and possible diagnoses.</p>
			</div>
			<div id="navigation">
	
			</div>

		 <div align="center">
         <div style="width:300px; border: solid 1px #333333; " align="left">
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style="margin:30px">
               
               
		<h3>Please sign in to view the site. For security purposes, site is restricted to the administrator only.</h3>
			
				<form action="login.php">
	
				<br><b>Username: </b> <br>
				<br><input type="text" name="username"></p><br>
				<b>Password:<br> </b>
				<br><input type="password" name="pass"></p><br>
				
				<br>
			
				<input type="submit" value="Submit" />
				 </form> 
               
               <div style="font-size:11px; color:#cc0000; margin-top:10px"> </div>
					
            </div>
				
         </div>
			
      </div>
		
				
	</body>

</html>
<?php include('footer.php'); ?>
	