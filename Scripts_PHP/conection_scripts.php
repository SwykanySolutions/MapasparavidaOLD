<?php 

	$servername = "localhost";

	$database = "testarvalidate";

	$username = "conectacms";

	$password = "34f0qy20oq4u";



// Create connection

$connE = mysqli_connect($servername, $username, $password, $database);

// Check connection

if (!$connE) {

    die("Connection failed: " . mysqli_connect_error());

}

 ?>