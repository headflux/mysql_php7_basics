
<?php
$servername = "server";
$username = "user";
$password = "pass";

//----------------------------------------------------------------------------
// Create connection

$conn = mysqli_connect($servername, $username, $password);

//----------------------------------------------------------------------------
// Check connection

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

//--------------------------------------------------------------------------
// mysql close connection
mysqli_close($conn); 
?> 
