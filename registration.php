<!DOCTYPE html>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
<script> 
     function validate()
	 {
		 var uname=document.forms["form"]["uname"].value;
		 var name=document.forms["form"]["name"].value;
		 var email=document.forms["form"]["email"].value;
		 var pass=document.forms["form"]["password"].value;
		 var mobile=document.forms["form"]["mobile"].value;
		 if(uname=="")
		 {
			 alert("Please enter your name");
			 document.forms["form"]["uname"].focus();
			 return false;
		 }
		 if(name=="")
		 {
			 alert("Please enter your name");
			 document.forms["form"]["name"].focus();
			 return false;
		 }
		 else if(!isNaN(name))
		 {
			 alert("Name can't be in digits");
			 document.forms["form"]["name"].focus();
			 return false;
		 }
		 if(email=="")
		 {
			 alert("Please enter your email");
			 document.forms["form"]["email"].focus();
			 return false;
		 }
		 if(pass=="")
		 {
			 alert("Please enter a password");
			 document.forms["form"]["password"].focus();
			 return false;
		 }
		 if(mobile=="")
		 {
			 alert("Please enter your number");
			 document.forms["form"]["mobile"].focus();
			 return false;
		 }
		 if(isNaN(mobile))
		 {
			 alert("Number should be in digits");
		     document.forms["form"]["mobile"].focus();
			 return false;
		 }
		 
	 }
</script>
<style></style>
</head>
<body>
    <div class="reg">
	<h2><center> Registration </center></h2><br><hr><br>
      <form action="login.php" method="post" name="form" onsubmit="return validate();">
        <input type="text" name="uname" placeholder="User Name" class="fld">
        <input type="text" name="fname" placeholder="Name" class="fld">
		<input type="text" name="email" placeholder="Email" class="fld">
        <input type="password" name="password" placeholder="Password" class="fld">
        <input type="text" name="mobile" placeholder="Mobile Number" class="fld">
		<input type="submit" class="btn" value="Register" name="submit">
		<br>
		<a href="login_x.php">Login </a>
      </form>
	</div>
</body>
</html>