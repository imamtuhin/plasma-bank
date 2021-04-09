
 <?php 
 
 	$f_name = $_POST['first-name'];
 	$l_name= $_POST['last-name'];
 	$phone= $_POST['phone-no'];
 	$user_name= $_POST['user-name'];
 	$password_info= $_POST['password-in'];
 	require_once('db_config.php');
 	
 	$sql="Insert into registerinfo VALUES(NULL,'$f_name','$l_name', '$phone' ,'$user_name','$password_info',NOW())";

 	$conn = new mysqli($servername, $username, $password, $dbname);

 	$result= $conn->query($sql);

 	if(!$result){
 		echo "enter during insertion!<br>";
 		echo mysqli_error($conn);

 	}
 	else
 	{
 		
   header("Location: homepage.php");


 	}
 	$conn->close();

 


  ?>