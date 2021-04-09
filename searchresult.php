<!doctype html>

<html lang="en">

<?php $keyword = $_GET['keyword']; ?>
<?php $keyword_b = $_GET['keyword_b']; ?>

<head>
  <meta charset="utf-8">
  <title>ONEBLOOD</title>
  <link rel="stylesheet" href="css/semantic.min.css">
  <?php require_once('db_config.php'); ?>
</head>

<body>
	
	<div style="text-align: center; background-color: #B0E0E6; padding: 5%;">
	<h1>Search Result</h1>
	<p>Keyword: 
		<?php echo $keyword ?>
	</p>
	<br>
	<a href='homepage.php'>Back to Homepage</a>
	
	</div>
	<br>
	<?php
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_errno) {
    			printf("Connect failed: %s\n", $conn->connect_error);
    		exit();
		}

		$query = "SELECT * FROM donorinfo WHERE area LIKE '%$keyword%' AND blood_group='$keyword_b'";
		
		if ($result = $conn->query($query)) {
			printf('<div class="ui text container">');
			printf('<table class="ui unstackable table">');



printf("<thead> <tr> <th>Index</th> <th> Fisrt Name</th> <th>Last Name</th> <th>GENDER</th> <th>EMAIL</th> <th>PHONE</th> <th>AREA</th> <th>DIVISION</th> <th>BLOOD GROUP</th> <th> </th>  </tr> </thead>");

			$index = 1;
        /* fetch associative array */
        while ($row = $result->fetch_assoc()) {
            printf ('<tr> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td> <td>%s</td>   <td><a href="delete.php?id=%s">Delete</a></td>
            </tr>',$index, $row["first-name"],$row["last-name"], $row["gender"], $row["email"],$row["phone-no"],$row["area"], $row["division"], $row["blood_group"],$row["id"]);

            $index++;

         
        }
		    printf("</table>");
		    printf("%d record(s) found!<br>", $result->num_rows);
			printf('</div>');

		    $result->free(); //free result set
		}
		else
		{
			printf("No record found!");
		}
		
		$conn->close();
	?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
  

</body>

</html>

