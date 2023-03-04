<?php 
function arcanos($dataNasc, $nome)
{
	$dataNasc = explode("-", $dataNasc);
	$dataatual = date('Y-m-d');
	$dataatual = explode("-", $dataatual);
	if ($dataatual[1] > $dataNasc[1]) {
			$idade = $dataatual[0]-$dataNasc[0];
	}elseif ($dataatual[1] == $dataNasc[1] && $dataatual[2] >= $dataNasc[2]) {
			$idade = $dataatual[0]-$dataNasc[0];
	}else{
			$idade = $dataatual[0]-$dataNasc[0]-1;
	}
	$seq = calculonome($nome);
	$seqarr = str_split($seq);
	$cntd = count($seqarr);
	for ($i=0; $i < $cntd; $i++) { 
		if (isset($seqarr[$i]) && isset($seqarr[$i+1])) {
			$arcanos[] = $seqarr[$i]+$seqarr[$i+1];
			$idades[] = 7*$i;
		}	
	}
	$qtdidd = count($idades);
	for ($i=0; $i < $qtdidd; $i++) {
		if ($i == 0 && $idades[$i] < $idade) {
		 		$arcanoatual = $arcanos[$i];
		 		$periodo = "0 á ".$idades[$i];
		 }elseif ($i == $qtdidd-1) {
		 	if ($idades[$i] < $idade) {
		 		$arcanoatual = $arcanos[$i];
		 		$periodo = $idades[$i]." á ∞";
		 	}
		 }elseif ($idades[$i] > $idade && $idades[$i-1] < $idade) {
		 		$arcanoatual = $arcanos[$i];
		 		$periodo = $idades[$i-1]." á ".$idades[$i];
		 }
	}
	$retorno = array($arcanos, $periodo, $arcanoatual);
	return $retorno;
}
?>