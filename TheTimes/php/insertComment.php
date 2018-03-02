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
$article = mysqli_real_escape_string($conn,$_GET["article"]);
$name = mysqli_real_escape_string($conn,$_GET["fullName"]);
$city = mysqli_real_escape_string($conn,$_GET["city"]);
$commentText = mysqli_real_escape_string($conn,$_GET["commentBox"]);
$time = time();
$sql="INSERT INTO Comment VALUES('$article','$name','$city','$commentText','$time')";
if (!mysqli_query($conn,$sql))
{
   echo "Error";
}
else{
   header('Location: ../'.$article.'.php');
}


?>

