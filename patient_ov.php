  <!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>donorlist</title>
  <link rel="stylesheet" href="css/semantic.min.css">
    <link rel="stylesheet" href="css/style.css">

  <?php require_once('db_config.php'); ?>
</head>

<body>
  
 <header>

<nav> 
<div class="logo">
     <h1 class="animated infinite heartBeat ">ONEBLOOD<i class="red heartbeat icon"></i></span></h1>
 </div>

 <div class="menu">
 <a href="homepage.php">Home</a>
 <a href="#">about</a>
 <a href="#">contact</a>


 </div>   

 </nav>

 <main>
    <section>


 
  <h1>patient over view</h1>

<?php 



 require_once('db_config.php');

  $conn = new mysqli($servername, $username, $password, $dbname);

$query="SELECT pdate,COUNT(*) as number
FROM patientinfo      
GROUP BY pdate";



if ($result = $conn->query($query)) {
      printf('<div class="ui text container">');
      printf('<table class="ui unstackable table">');
      printf("<thead> <tr> <th> DATES</th> <th>PATIENTS</th>  </tr> </thead>");



 while ($row = $result->fetch_assoc())
 {  
     printf ('<tr> <td>%s</td>  <td>%s</td>   
            </tr>', $row["pdate"], $row["number"]);

         
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


         </section>
     </main>
  
</header>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
  <script type="text/javascript">
    function toggle_searchbar()
    {
      $('#searchbar').toggle();
    }
  </script>

</body>

</html>

