 
 <?php
  $host = 'localhost';
	$user = 'root';
	$pass = 'Iam50yearsold';
    $db = 'emailbase';
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$email = $_POST['email'];
	
	$con = mysqli_connect($host,$user, $pass, $db);
	if($con)
	   $sql = "INSERT INTO etable(firstName, lastName, email) VALUES 
	    ('$firstName', '$lastName','$email')";
			
	 if($sql)
	$query = mysqli_query($con, $sql);
	if($query)
		echo 'Data was inserted successfully';
		header('location: exit.php?');
		mysqli_close($con);			
	  ?>	