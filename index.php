<?php 
include("connection.php");
 error_reporting (0);
?>

 <title>Earn When You are sleeping</title>
 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
 <body>

    <div class="index">
    <h1>Earn When You are sleeping</h1>
    <h3>BREAKTHROUGH SOFTWARE USES PROPRIETARY <br><span>"SLEEP-SALES TECHNOLOGY"</span> <br>TO GENERATE SALES WHILE <br>YOU’RE TUCKED COMFORTABLY IN BED.</h3>

    <h4>No Experience – No Technical Skills – No Hosting – & No Product Creation Required</h4>
    <form action="" method="GET"> 
     <input type="text" name="email" value="" placeholder="Fill Your Valid Email Address" /><br>
    <input type="submit" name="submit" value="Submit"/>
    <?php 

    if ($_GET['submit'])
    {
    $pn = $_GET['email'];

    if ($pn!="")
    {
      $query = "INSERT INTO email (email) VALUES ('$pn')";  

      $data = mysqli_query($conn, $query);

    if ($data)
    {  
    ?>
    <meta http-equiv="refresh" content="0; url=https://6aa64fbiomdn3m6dqpn1tgezap.hop.clickbank.net" >
    <?php 
    }
    else
    {
      
    echo "<p>This Email is already exists</p>";
    }
    }
    else
    {
      echo "<p>All fields are required</p>";
    }
    }
    ?>
    </form>
    <a href="disclaimer.html">Disclaimer</a>  <a href="privatepolicy.html">Private Policy</a> <a href="aboutus.html">About us</a> <a href="term&condition.html">Term and Conditions</a>
    </div>
 </body> 
</html>
