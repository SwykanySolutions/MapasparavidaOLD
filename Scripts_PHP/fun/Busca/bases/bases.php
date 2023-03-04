<?php 
	function bases($pub, $mapa)
	{
		include '../includes/conectar.php';
		$sql = "SELECT frase FROM basesdosmapas WHERE idPub = '$pub' AND idTM = '$mapa' ORDER BY idTN";
		$query = mysqli_query($conn, $sql);
		while($data = $query->fetch_array()){
			$frase[] = $data['frase'];
		}
		$sql1 = "SELECT txtEmail, txtMapa FROM tipomapas WHERE idTM = '$mapa'";
		$query1 = mysqli_query($conn, $sql1);
		while($data = $query1->fetch_array()){
			$txtEmail = $data['txtEmail'];
			$txtMapa = $data['txtMapa'];
		}
		return array($frase, $txtEmail, $txtMapa);
	}

 ?>