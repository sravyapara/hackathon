<?php
$servername = "localhost:3306";
$username = "root";
$password = "wa3002g4";
$dbname = "myapp";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn == false) {
   die("Connection failed: " . mysqli_error($conn));
}

$post = mysqli_real_escape_string($conn, $_REQUEST['post']);

$sql = "INSERT INTO my_posts (post) VALUES ('$post')";

if (mysqli_query($conn, $sql) === TRUE) {
   echo "New record created successfully";
} else {
   echo "Error: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
