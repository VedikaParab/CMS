<?php

// Retrieve environment variables.  Use consistent names (either Railway's
// defaults or your own, but be consistent).  I'm using Railway's defaults here.

$host = 'mysql.railway.internal';
$port = '3306';  // Important: Include the port!
$username = 'root';
$password = 'qjbbiWqnhQKSJRLkNfqGHklDUIoOgvAO';
$dbname = 'railway';


// Create the database connection.  The port is the 5th argument.
$connect = mysqli_connect($host, $username, $password, $dbname, $port);

// Check for connection errors.  Good practice to stop execution if the
// connection fails.
if (mysqli_connect_errno()) {
    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

?>
