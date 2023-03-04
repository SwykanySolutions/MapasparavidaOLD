<?php 
include '../includes/conectar.php';
$idTM = $_POST['idTM'];
$idTN = $_POST['idTN'];
$idP = $_POST['idpub'];
	$sql = "SELECT frase FROM basesdosmapas WHERE idTM = '$idTM' AND idTN = '$idTN' AND idPub = '$idP'";
	$query = mysqli_query($conn, $sql);
	if ($frase = $query->fetch_array()) {
		echo $frase['frase'];
	}
 ?>