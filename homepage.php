<!doctype html>

<html lang="en">

<head>

  <meta charset="utf-8">
  <title>plasmabank Homepage</title>
  <link rel="stylesheet" href="css/semantic.min.css">
 <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.main.css">


</head>

<body>

<header>

<nav> 
<div class="logo">
     <h1 class="animated infinite heartBeat ">ONEBLOOD<i class="red heartbeat icon"></i></span></h1>
 </div>

 <div class="menu">
 <a href="#">Home</a>
 <a href="donorlist.php">donor</a>
 <a href="patientlist.php">patient</a> 
 <a href="logout.php"><span style='color:#F70D1A;'>Logout</span></a> 

 </div>   

 </nav>

 <main>

    <section>





<div class="ui two column grid">


<div class="column">
  
 
  <h1><span style='color:   #FFFFFF;'>Click here to search donor!
 </span> <button class="ui huge button" onclick=toggle_searchbar()> Search </button></h1>
    <div id="searchbar" style="display: none; text-align: right;">
    <form class="ui form" method="get" action="searchresult.php">
      <div class="field">
        <label>Area</label>
        <input type="text" name="keyword" placeholder="area name">
      </div>
      <div class="field">
        <label>Blood Group</label>
        <input type="text" name="keyword_b" placeholder="blood group">
      </div>
      <button class="ui right button" type="submit">Submit</button>
    </form>
  </div>



<div class="ui card">
  <div class="content">
    <div class="header">Today</div>
    <div class="meta"> <b><?php echo date("m/d/Y"); ?></b> </div>
    <div class="description">
      <h1>New Patient</h1>
      <h1>
 <?php 



 require_once('db_config.php');

  $conn = new mysqli($servername, $username, $password, $dbname);

$query="SELECT count(*) as total from patientinfo where pdate=date(now())";

$result = $conn->query($query);
$count = $result->fetch_assoc()["total"];
echo $count;
$conn->close();
  ?>

      <i class="yellow meh outline icon"></i></h1>
    </div>
  </div>
</div>

<div class="ui text container">


 <h1><span class="psw"> <span style='color:  #FFFFFF;'>Click here to give</span><span style='color: #3BB9FF;'><a href="patients.html">patient information!</a></span>
 </span> </h1>
 <br>
<br>

 <h2><span style='color:#E41B17;'>Donations are needed more than ever - especially for treating patients vulnerable to COVID-19. Become a donor today!

</span></h2> 

</div>
 </div>

<div class="column">
<br>
<br>
<br>

<div class="ui  card">
  <div class="content" >
    <div class="header">Today</div>
    <div class="meta"> <b><?php echo date("m/d/Y"); ?></b> </div>
    <div class="description">
      <h1>New Donor  </h1>
      <h1>
 <?php 



 require_once('db_config.php');

  $conn = new mysqli($servername, $username, $password, $dbname);

$query="SELECT count(*) as total from donorinfo where ddate=date(now())";

$result = $conn->query($query);
$count = $result->fetch_assoc()["total"];
echo $count;
$conn->close();
  ?>

     <i class="yellow smile outline icon"></i> </h1>
    </div>
  </div>
</div>

<div class="ui text container">

<h1><span class="psw"> <span style='color:  #FFFFFF;'>Click here to </span><span style='color: #3BB9FF;'><a href="donarinfo.html">Become a donor!</a></span>
 </span> </h1>
 

<h1 ><span class="ui midium text">Help COVID-19 Patients</span></h1>
<h4>Fully Recovered From COVID-19 diagnosis? If so, the plasma in your blood may contain COVID-19 antibodies that can attack the virus. This convalescent plasma is being evaluated as a possible treatment for currently ill COVID-19 patients, so your donation could help save the lives of patients battling this disease! It’s a special gift only those who have recovered from the virus can give, so sign up to help today.
<br>
 If you are ready to help patients and meet the eligibility criteria above, please clik and fill out the form. Once your initial eligibility is confirmed, we will contact you via phone within 1-3 business days to schedule your donation.
<br>
<br>
We may provide your information to a non-Red Cross donor center for qualification and scheduling if your address is closer to that center.</h4>
 
 </div>
  </div>
 </div>

    
   

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