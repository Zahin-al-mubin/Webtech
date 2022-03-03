<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
</head>
<body>

	<h1>Registration Action </h1>

	<hr><hr>

	<hr><hr>

	<?php 	
	$firstnameerr = $lastnameerr =  $doberr = $gendererr = $religionerr = $pressaderr = $parmeaderr = $phoneerr = $emailerr = $weberr = $usenameerr = $passerr = $cpasserr  = "";
	
	$isvalid = true;
	$ischecked = false;

	if ($_SERVER['REQUEST_METHOD'] === "POST"){
		function test($data){
			$data = trim($data);
			$data = stripcslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}
		$firstname = test($_POST['firstname']);
		$lastname = test($_POST['lastname']);
		$gender = test($_POST['gender']);
		$dob = test($_POST['DOB']);
		$religion = test($_POST['religion']);
		$pressad = test($_POST['presaddress']);
		$permaad = test($_POST['permaddress']);
		$phone = test($_POST['phone']);
		$email = test($_POST['email']);
		$web = test($_POST['web']);
		$username = test($_POST['username']);
		$pass = test($_POST['password']);
		$cpass = test($_POST['confirmpass']);



		$ischecked = true;

		if(empty($firstname)){
			$isvalid = false;
			$firstnameerr = "First name can not be empty";
			echo $firstnameerr;
			echo "<br><br>";

		}
		if(empty($lastname)){
			$isvalid = false;
			$lastnameerr = "Last name can not be empty";
			echo $lastnameerr;
			echo "<br><br>";
		}
		if(empty($gender)){
			$isvalid = false;
			$gendererr =  "gender must be selected";
			echo $gendererr;
			echo "<br><br>";		
		}
		
		
		if(empty($dob)){
			$isvalid = false;
			$doberr = "Date of birth must be selected";
			echo $doberr;
			echo "<br><br>";
		}
		if(empty($religion)){
			$isvalid = false;
			$religionerr =  "religion must be selected";
			echo $religionerr;
			echo "<br><br>";
		}

	
		
		if(empty($pressad)){
			$isvalid = false;
			$pressaderr = "Present Address must be written";
			echo $pressaderr;
			echo "<br><br>";
		}
		if(empty($permaad)){
			$isvalid = false;
			$pressaderr = "Permanent Address must be written";
			echo $parmeaderr;
			echo "<br><br>";
		}
		if(empty($phone)){
			$isvalid = false;
			$phoneerr = "Phone number can not be empty";
			echo $phoneerr;
			echo "<br><br>";
		}

		if(empty($email)){
			$isvalid = false;
			$emailerr = "Email Address must be written";
			echo $emailerr;
			echo "<br><br>";
		}
			if(empty($web)){
			$isvalid = false;
			$weberr = "Website Address must be written";
			echo $weberr;
			echo "<br><br>";
		}
			if(empty($username)){
			$isvalid = false;
			$usenameerr = "Username must be written";
			echo $usenameerr;
			echo "<br><br>";
		}
			if(empty($pass)){
			$isvalid = false;
			$passerr = "Password must be written";
			echo $passerr;
			echo "<br><br>";
		}	
		if(empty($cpass)){
			$isvalid = false;
			$cpasserr = "Confirm password must be written";
			echo $cpasserr;
			echo "<br><br>";
		}
		if($pass!=$cpass){
			$isvalid = false;
			echo "Password must be matched";
			echo "<br><br>";

		}
	}



		if ($ischecked and $isvalid) { 

			echo "Personal information :";

			echo "<br><br>";

			echo "First Name: " . $_POST['firstname'];
			
			echo "<br><br>";


			echo "Last Name: " . $_POST['lastname'];
			
			echo "<br><br>";

			echo "Gender :" . $_POST['radio'];

			echo "<br><br>";

			echo "Date of birth :" . $_POST['DOB'] ;

			echo "<br><br>";

			echo "Religion :" . $_POST['religion'];

			echo "<br><br>";

			echo "Contact Information :";

			echo "<br><br>";

			echo "Present Address :" . $_POST['presaddress'];
			
			echo "<br><br>";


			echo "Permanant Address :" . $_POST['permaddress'];
			
			echo "<br><br>";

			echo "phone :" . $_POST['phone'];

			echo "<br><br>";

			echo "email :" . $_POST['email'] ;

			echo "<br><br>";

			echo "Website :" . $_POST['web'];

			echo "<br><br>"; 

			echo "Credentials :";

			echo "<br><br>";

			echo "Username :" . $_POST['username'];
			
		
			echo "<br><br>";

			echo "congratulaton, You are successfully registerd";
		}
	
	
		else if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
			echo "Form is not filled properly";
			echo "<br><br>";
			



		}


define("user.json", "data.json");
$handle =fopen("user.json","w");
$data = array("First name" => $firstname, "Last name"=> $lastname, "Gender"=> $gender , "Date of birth"=> $dob , "Religion"=> $religion , "Present Address"=> $pressad , "Permanent Address"=> $permaad , "Phone"=> $phone , "Email"=> $email , "Website"=> $web, "Username"=> $username);
echo "<br><br>";
$data = json_encode($data);
fwrite($handle, $data);
fclose($handle);


?>
<hr><hr>

<a href="http://localhost/PHP/Registration.html"> GO BACK </a>
	

</body>
</html>