<?php 

	$servername = "localhost";//10.0.6.84

	$database = "elderth_app.mapaparaavida.com.br";

	$username = "conectacms"; //conectacms

	$password = "34f0qy20oq4u"; //34f0qy20oq4u

	$port = 3306;



// Create connection

$conn = mysqli_connect($servername, $username, $password, $database, $port);

// Check connection

if (!$conn) {

    die("Connection failed: " . mysqli_connect_error());

}



?>