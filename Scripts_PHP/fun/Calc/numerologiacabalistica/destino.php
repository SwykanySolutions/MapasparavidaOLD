<?php 
function dest_dianasc($data)
{
	$dataB = $data;
	$dataS = explode('-',$dataB);
	$dataS = implode('',$dataS);
	$dataA = str_split($dataS);
	$destino = $dataA[0]+$dataA[1]+$dataA[2]+$dataA[3]+$dataA[4]+$dataA[5]+$dataA[6]+$dataA[7];
	$diaNasc = $dataA[6].$dataA[7];
	$anoNasc = $dataA[0].$dataA[1].$dataA[2].$dataA[3];
	$mesNasc = $dataA[4].$dataA[5];
	$result = array('destino' => $destino, 'diaNasc' => $diaNasc, 'mesNasc'=>$mesNasc, 'anoNasc'=>$anoNasc);
	return $result;
}
?>