<?php
function connect ( $host, $user, $pass )
{
  $host = "localhost";
  $user = "username";
  $pass = "password";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password);

  // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  echo "Connected to ".$host." successfully";
}
?>
