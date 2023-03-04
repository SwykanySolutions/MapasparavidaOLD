<?php 
function ano_pessoal($dia, $mes)
	{
		$diaH = date('d');
		$mesH = date('m');
			if ($mesH >= $mes) {
				if ($diaH > $dia) {
					$ano_vigente = date('Y');
				} else {
					$ano_vigente = date('Y') - 1;
				}	
			}else{
					$ano_vigente = date('Y') - 1;
			}
			$crtdia = strlen($dia);
			if ($crtdia == 2) {
				$diaArray = str_split($dia);
				$diaSoma = $diaArray[0]+$diaArray[1];
			}else
			{
				$diasoma = $dia;
			}
			$crtmes = strlen($mes);
			if ($crtmes == 2) {
				$mesArray = str_split($mes);
				$mesSoma = $mesArray[0]+$mesArray[1];
			}else{
				$mesSoma = $mes;
			}
		$ano_vigenteA = str_split($ano_vigente);
		$anoSoma = array_sum($ano_vigenteA);
		$ano_pessoal = $diaSoma+$mesSoma+$anoSoma;
		$return = array('anopessoal'=>$ano_pessoal,'anovigente'=>$ano_vigente);
		return $return;
	}
 ?>