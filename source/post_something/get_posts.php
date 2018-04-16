<?php
$servername = "localhost:3306";
$username = "root";
$password = "wa3002g4";
$dbname = "myapp";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn == false) {
   die("Connection failed: " . mysqli_error($conn));
}

$sql = "SELECT post FROM my_posts";
if ($result = mysqli_query($conn, $sql)) {
    $row = mysqli_num_rows($result);
    if ($row > 0) {
      echo "<td>" . $row['post'] . "</td>";
        while($row = mysqli_fetch_array($result)) {
            echo "post: " . $row["post"]. "<br>" . "<br>";
        }
        mysqli_free_result($result);
    } else {
        echo "0 results";
      }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysql_error($conn);
}
mysqli_close($conn);

?>
