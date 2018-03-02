<?php
// Create connection
$servername = "localhost"; 
$username = "root"; 
$password = ""; 
$dbname = "TheTimesDB"; 
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$name = mysqli_real_escape_string($conn,$_POST["fullName"]);
$city = mysqli_real_escape_string($conn,$_POST["city"]);
$commentText = mysqli_real_escape_string($conn,$_POST["commentBox"]);
$time = time();
$sql="INSERT INTO Comment VALUES('$name','$city','$commentText','$time')";
if (!mysqli_query($conn,$sql))
{
   echo "Error";
}
else{
   header("Location: world1.php");
}


?>

