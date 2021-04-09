
 <?php 


 	$ID=$_GET['id'];


 require_once('db_config.php');

$sql="delete from patientinfo where id='$ID'";

 	$conn = new mysqli($servername, $username, $password, $dbname);

 	$result= $conn->query($sql);

 	if(!$result)
 	{

 		header("Location:patientlist.php"); 
 	}
 	else
 	{
 		
 		header("Location:patientlist.php");
 		
 		
        }
 
$conn->close();
  ?>