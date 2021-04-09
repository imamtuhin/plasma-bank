<!doctype html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <title>New Contact</title>
  <link rel="stylesheet" href="css/semantic.min.css">
</head>

<?php $id = $_GET['id']; ?>

<?php require_once('db_config.php'); ?>

<?php
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_errno) {
          printf("Connect failed: %s\n", $conn->connect_error);
        exit();
    }

    $query = "SELECT * FROM patientinfo WHERE id='$id'";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
?>


<body>

<div style="background-color: #B0E0E6; padding: 2%;">
	<h1>Edit Existing Contact Info</h1>
	<h4>The data will be updated into the main database</h4>
</div>
<br>
	<div class="ui text container">
	<form class="ui form" method="post" action="update_form.php">
  <div class="field" style="display: none ;">
    <label>ID</label>
    <input type="text" name="id" placeholder="ID" value="<?php echo $row['id'] ?>">
  </div>

  <div class="field">
    <label>First Name</label>
    <input type="text" name="first_name" placeholder="First Name" value="<?php echo $row['first_name'] ?>">
  </div>


  <div class="field">
    <label>Last Name</label>
    <input type="text" name="last_name" placeholder="last Name" value="<?php echo $row['last_name'] ?>">
  </div>

  <div class="field">
    <label>Phone Number</label>
    <input type="text" name="phone_no" placeholder="Contact phone" value="<?php echo $row['phone_no'] ?>"
    >
  </div>

  <div class="field">
    <label>Blood Group</label>
    <input type="text" name="blood_group" placeholder="blood group" value="<?php echo $row['blood_group'] ?>">
  </div>


  <div class="field">
    <label>Area</label>
    <input type="text" name="area" placeholder="area Name" value="<?php echo $row['area'] ?>">
  </div>


  <div class="field">
    <label>City</label>
    <input type="text" name="division" placeholder="city Name" value="<?php echo $row['division'] ?>">
  </div>


  <div class="field">
    <label>Infected date</label>
    <input type="date" name="infact_date" placeholder="infected date" value="<?php echo $row['infact_date'] ?>">
  </div>


  <div class="field">
    <label>Recovery date</label>
    <input type="date" name="recovery_date" placeholder="recovery date" value="<?php echo $row['recovery_date'] ?>">
  </div>

  <button class="ui button" type="submit">Submit</button>
</form>
</div>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/semantic.min.js"></script>
</body>

</html>
