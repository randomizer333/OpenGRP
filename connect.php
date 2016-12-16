<?php
//Input:
function connect ( $host, $user, $pass ) 
{
  for (){   // function parameter number check and error return
  }
  
  $host = "localhost";  //replace with hostname or servername usualy localhost or name of sqlserver
  $user = "username"; //login credentials for sql database connection
  $pass = "password";

//Process:
// Create connection
  $conn = mysqli_connect($host, $user, $pass);

//Output:
  // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
  echo "Connected to ".$host." successfully";
}
?>
