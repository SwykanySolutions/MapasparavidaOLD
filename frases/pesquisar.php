<?php 

//incluindo conexão

include './includes/conectar.php';

$idN = filter_input(INPUT_GET, 'idN', FILTER_SANITIZE_NUMBER_INT);

if (isset($idN) {
	
	$sql = "SELECT Num.idT, Num.idN, Tipo.nome, Tipo.idPub FROM numerologia as Num INNER JOIN tiponumerologia as Tipo ON Num.idT = Tipo.idT WHERE idN =:idN";
	$sql->bindParam(':idN',$idN);
	$query = mysqli_query($conn,$sql);

	if (($query) and ($query->rowCount() != 0)) {


		
	}else{
		$retorna = ['status' => false, 'msg' => ""]
	}


	$retorna = ['status' => true, 'idN' => $idN];
}else{
	$retorna = ['status' => false, 'msg' => ""]
}

echo json_encode($retorna);

 ?>