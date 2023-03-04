<?php 
include '../includes/conectar.php';
$ordem = $_POST['ordem'];
$sql = "SELECT num.idN as idN , tn.nomeTN as nomeTN, num.numerologia as numerologia, tm.nomeTM as nomeTM, pub.nomePub as nomePub FROM numerologia as num INNER JOIN tiponumerologia as tn on num.idTN = tn.idTN  INNER JOIN publico as pub on num.idPub = pub.idPub INNER JOIN tipomapas as tm on num.idTM = tm.idTM ORDER BY $ordem";
    $query = mysqli_query($conn,$sql);
    while ($dados = $query->fetch_array()) {
       $idN[] = $dados["idN"];
       $nomeTN[] = $dados["nomeTN"];
       $numerologia[] = $dados["numerologia"];
       $nomeTM[] = $dados["nomeTM"];
       $nomePub[] = $dados["nomePub"];
    }
    $cntd = count($idN);
    $json = array("quantidade"=>$cntd,"idN"=>$idN, "nomeTN"=>$nomeTN, "numerologia"=>$numerologia, "nomeTM"=>$nomeTM, "nomePub"=>$nomePub);
    echo json_encode($json);
 ?>