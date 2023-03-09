<!DOCTYPE html>
<html lang="en">
<head>
  <center><img src="./images/hrnc.png"></center>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TEMPLE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
    <link rel="manifest" href="manifest.json" />
    <style>
      body{
      background-image:url('back1.jpg');
      background-repeat: no-repeat;
      background-attachment: fixed;
      background-size:cover;
      }
    </style>
  </head>
<body>
    <br><br><br><br><center>
      <form name = "display" action="index.php" method="POST">
      <b><label>Temple ID:</label>&nbsp;&nbsp;&nbsp;<label><input type="text"  name="templeid"></label></b>
      <b><label><input type="submit" name="submit"></label></b>
</form></center>
   </body>
</html>
<?php
   
    $dbconn = pg_connect("host=localhost port=5432 dbname=temples user=postgres password=postgres");
    $result = pg_query($dbconn, "SELECT * FROM templesdata where templeid='$_POST[templeid]'"); 
    $row = pg_fetch_assoc($result);
    if (isset($_POST['submit']))
    {
    echo 
    "<center><form action='index.php' method='POST' ><br><br><br>
    <label>Temple_Name:</label><label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text'name='tem' value='$row[temple_name]'size='40'/></label><br><br><br>
    <label for='cars'>LandMark:</label>
        <select name='temples' id='select'>
          <option value='temple'>Temple</option>
          <option value='Cart'>Cart</option>
          <option value='Marriage Hall'>Marriage Hall</option>
          <option value='Madapalli'>Madapalli</option>
        </select> 
    </form></center>";
    }
    elseif(isset($_POST['Submit1'])){
        echo"<form action='index.php' method='POST'>
        
        <br><br>
      </form>";
      }
    

?>





