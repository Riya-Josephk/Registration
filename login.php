

<?php
   // header("Location: registration.php"); 
   
      $servername = "localhost";
      $username = "root";
      $password = "";
      $dbname = "registration";
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) 
	   {
          die("Connection failed: " . $conn->connect_error);
        } 
	else
		{
		 //echo "Succesfull";
		}
	    $x=0;
	    $uname=$_POST['uname'];
	    $name=$_POST['fname'];
	    $email = $_POST["email"];  
	    $pass=$_POST['password'];
		$pass=md5($pass);
	    $mobile=$_POST['mobile'];
		
	   
	    if($uname=="")
       {
	     echo "User Name is not valid<br>";
	     $x++;
       }
       if($name=="")
       {
	     echo "Name is not valid<br>";
	     $x++;
       }
          //Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL))
		     {
               // echo("$email is a valid email address");
             }
        else 
		     {
               echo("<br> $email is not a valid email address");
			    $x++;
			 }
	
    if($pass=="")
    {
	  echo "Password is not valid<br>";
	  $x++;
    }
	
    if($mobile=="")
    {
	  echo "Mobile Number is not valid<br>";
	  $x++;
    }
	if(!is_numeric($mobile))
			{
				echo "Mobile should be numeric";
				$x++;
			}
    if($x<1)
	{	     
      $sel="select * from user_details where email='$email'";
		//echo $sel;
	  $result = $conn->query($sel);
        if ($result->num_rows < 0) 
		 {
		   $sele="select * from user_details where user_name='$uname'";
		   $result = $conn->query($sele);
            if ($result->num_rows < 0) 
		    {
             $sql = "INSERT INTO user_details (user_name, name, email, password, mobile)
               VALUES ('$uname', '$name', '$email','$pass','$mobile')";
	            if ($conn->query($sql) === TRUE) 
	            {
                 echo "New record created successfully";
				 header("Location: registration.php"); 
				} 
				else 
	            {
                  echo "Error: " . $sql . "<br>" . $conn->error;
				}
		    }
		else{
			echo "Username exist";
					
	        }
		 }
		 else{
			echo "Email exist";
					
	        }
	}
	else 
	{
      echo "Check details entered";
    }

	
	
?>
<a href="login_x.php">Login </a>
