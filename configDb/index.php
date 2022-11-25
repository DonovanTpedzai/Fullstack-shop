<?php

// storing our mysqli class parameters in variables

$servername = "localhost";
$username = "root";
$password ="root";
$dbname ="newDB";


// Using the abovevariables as parameter values
 $conn = new mysqli ($servername,$username,$password,$dbname);
//  create connection

// check connection
if ($conn ->connect_error){
    die("connection failed: ".$conn->_error);
}

echo "Connected successfully";

?>