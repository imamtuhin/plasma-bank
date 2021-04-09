<?php 

	
	$id= $_POST['id'];
	$fname= $_POST['first_name'];
	$lname= $_POST['last_name'];
	$phone= $_POST['phone_no'];
	$bg= $_POST['blood_group'];
	$area= $_POST['area'];
	$city= $_POST['division'];
	$infect_date= $_POST['infact_date'];
	$rec_date= $_POST['recovery_date'];


	// echo $id;
	require_once('db_config.php');

	$sql ="update patientinfo SET first_name='$fname', last_name='$lname', phone_no='$phone', blood_group='$bg', area='$area', division='$city', infact_date='$infect_date', recovery_date='$rec_date' WHERE id='$id'";

	$conn = new mysqli($servername, $username, $password, $dbname);

	$result = $conn->query($sql);

	if (!$result)
	{
		echo "Error during update!<br>";
		echo mysqli_error($conn);
	}
	else
	{
		echo "Successfully updated contact info of $fname. <br>";
	}

	$conn->close();

	echo "<a href='patientlist.php'>Home</a>" ;
	// php header("Location: ../index.php'"); 

?>