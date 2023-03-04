<?php 
function desafios($dia, $mes, $ano)
	{
		$diaarr = array(); $diaarr = str_split($dia); $diared = array_sum($diaarr);
		$mesarr = array(); $mesarr = str_split($mes); $mesred = array_sum($mesarr);
		$anoarr = array(); $anoarr = str_split($ano); $anored = array_sum($anoarr);
		if ($diared>$mesred) {
			$desafio1 = $diared-$mesred;
		}else{
			$desafio1 = $mesred-$diared;
		}
		if ($diared>$anored) {
			$desafio2 = $diared-$anored;
		}else{
			$desafio2 = $anored-$diared;
		}
		if ($desafio1>$desafio2) {
			$desafio3 = $desafio1-$desafio2;
		}else{
			$desafio3 = $desafio2-$desafio1;
		}
		$desafios = array(1=>$desafio1,2=>$desafio2,3=>$desafio3);

		return $desafios;
	}
 ?>