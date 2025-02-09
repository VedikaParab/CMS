// <?php

// $connect = mysqli_connect('localhost', 'cms', 'secret@cms', 'cms');

// if (mysqli_connect_errno()) {
//     exit('Failed to connect to Mysql : ' . mysqli_connect_error());

// }
<?php

// Retrieve environment variables.  Use consistent names (either Railway's
// defaults or your own, but be consistent).  I'm using Railway's defaults here.

$host = getenv('MYSQLHOST');
$port = getenv('MYSQLPORT');  // Important: Include the port!
$username = getenv('MYSQLUSER');
$password = getenv('MYSQLPASSWORD');
$dbname = getenv('MYSQLDATABASE');


// Create the database connection.  The port is the 5th argument.
$connect = mysqli_connect($host, $username, $password, $dbname, $port);

// Check for connection errors.  Good practice to stop execution if the
// connection fails.
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
