<html>

<head>
	<title>Registration Successful!</title>
	<style type="text/css">
body
  {
  background-image: url(Registration_successful.jpg);
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  }

  .one
         {
           position: absolute;
           top:420px;
           left:585px;
         }

         .eight
        {
            position: absolute;
            top:0px;
            left:0px;
        }

</style>
</head>
<center>
<body>
		<?php
		$conn = mysqli_connect("localhost", "root", "", "registration");
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		$name = $_REQUEST['name'];
		$age = $_REQUEST['age'];
		$address = $_REQUEST['address'];
		$phone = $_REQUEST['phone'];
		$email = $_REQUEST['email'];
		$userID = $_REQUEST['userID'];
		$password = $_REQUEST['password'];
		$confirmPassword = $_REQUEST['confirmPassword'];
		
		$sql = "INSERT INTO registration VALUES ('$name','$age','$address','$phone','$email','$userID','$password','$confirmPassword')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>User Information stored successfully. The details entered are:</h3>";

			echo nl2br("\n$name\n $age\n $address\n $phone\n $email\n $userID\n $password\n $confirmPassword");
		} 
		
		else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
		</center>
		<input type="button" onclick="location.href='Homepage.html';" class="eight" value="Home" style="border-radius:15px ;height:40px; width:75px; font-size: 20px;" />
		<input type="button" onclick="location.href='Login.html';" class="one" value="Login" style="border-radius:15px; height:50px; width:249px; font-size:30px;"/>
</body>
</html>