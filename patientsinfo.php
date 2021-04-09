
 <?php 
 
 	$f_name = $_POST['first_name'];
 	$l_name= $_POST['last_name'];
 	$phone= $_POST['phone_no'];
 	$bloodtype= $_POST['blood_group'];
 	$areainfo= $_POST['area'];
 	$divisioninfo= $_POST['division'];
 	$inf_date=$_POST['inf_date'];
 	$rec_date=$_POST['rec_date'];
 	require_once('db_config.php');

 	$sql="Insert into patientinfo VALUES(NULL,'$f_name','$l_name','$phone', '$bloodtype','$areainfo','$divisioninfo','$inf_date','$rec_date',NOW())";

 	$conn = new mysqli($servername, $username, $password, $dbname);

 	$result= $conn->query($sql);

 	if(!$result){
 		echo "enter during insertion!<br>";
 		echo mysqli_error($conn);

 	}
 	else
 	{
 		
   

   echo "thank you";


 	}
 	$conn->close();

 
echo"<a href='homepage.php'><br> <br>home</a>"

  ?>