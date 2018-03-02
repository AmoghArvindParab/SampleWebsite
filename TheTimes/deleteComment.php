<?php
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "TheTimesDB"; 
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $name = $_GET['name'];
  $city = $_GET['city'];
  $time = $_GET['time'];
  $sql = 'delete from Comment where name="'.$name.'" and city="'.$city.'" and time="'.$time.'"';
  echo $sql;
  if (!mysqli_query($conn,$sql))
  {
     echo "Error";
  }
  else{
     header("Location: world1.php");
  }
?>
  