<?php 
include '../includes/conectar.php';
$idTM = $_POST['idTM'];
	$sql = "SELECT txtMapa FROM tipomapas WHERE idTM = '$idTM'";
	$query = mysqli_query($conn, $sql);
	if ($frase = $query->fetch_array()) {
		echo $frase['txtMapa'];
	}
 ?>