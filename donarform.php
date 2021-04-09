
 <?php 
 
 	$f_name = $_POST['first-name'];
 	$l_name= $_POST['last-name'];
 	$genderinfo= $_POST['gender'];
 	$emailaddr= $_POST['email'];
 	$phone= $_POST['phone-no'];
 	$areainfo= $_POST['area'];
 	$divisioninfo= $_POST['division'];
 	$bloodtype= $_POST['blood-group'];

 	require_once('db_config.php');

 	$sql="Insert into donorinfo VALUES(NULL,'$f_name','$l_name', '$genderinfo' ,'$emailaddr','$phone','$areainfo','$divisioninfo','$bloodtype',NOW())";

 	$conn = new mysqli($servername, $username, $password, $dbname);

 	$result= $conn->query($sql);

 	if(!$result){
 		echo "enter during insertion!<br>";
 		echo mysqli_error($conn);

 	}
 	else
 	{
 		
   

   echo "great work.now you will help people";


 	}
 	$conn->close();

 
echo"<a href='homepage.php'><br> <br>Back</a>"

  ?>