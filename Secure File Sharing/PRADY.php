<html>
<head>
<title>reg FORM</title>
  <link rel="stylesheet" type="text/css" href="registrationform.css">
<body>
   <div class="loginbox">
     <h1>REGISTRATION</h1>
	 <form action="registrationform.php" method="post" name="registration">
	    <p>NAME</p>
		<input type="text" name="name" id="name" required>
		 <p>Username</p>
		<input type="text" name="uname" id="uname" required>
		<p>Password</p>
		<input type="password" name="pass" id="pass" required>
		<p>Re-Password</p>
		<input type="password" name="rpass" id="rpass" required>
		<p>Email</p>
		<input type="mail" name="email" id="email" required>
		<p>MOBILE NO.</p>
		<input type="tel" name="mob" id="mob" required>
		
		<input type="submit"  name="sub" id="sub" value="Register" >
		
		
		
	 </form>
</body>
</head>
</html>