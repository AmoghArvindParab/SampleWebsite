<?php
  $servername = "localhost"; 
  $username = "root"; 
  $password = ""; 
  $dbname = "TheTimesDB"; 
  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }
  $article = $_GET['article'];
  $name = $_GET['name'];
  $city = $_GET['city'];
  $time = $_GET['time'];
  $sql = 'delete from Comment where name="'.$name.'" and city="'.$city.'" and time="'.$time.'" and article="'.$article.'"';
  echo $sql;
  if (!mysqli_query($conn,$sql))
  {
     echo "Error";
  }
  else{
     header('Location: ../'.$article.'.php');
  }
?>
  