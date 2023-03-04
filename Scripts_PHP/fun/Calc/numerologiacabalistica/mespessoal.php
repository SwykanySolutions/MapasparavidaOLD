<?php 
function mespessoal($anointeresse)
{
	$ano = 12;
	for ($i=0; $i < $ano; $i++) { 
		switch ($i+1) {
			case 1:
				$mes1 = 1+$anointeresse;
				break;
			
			case 2:
				$mes2 = 2+$anointeresse;
				break;

			case 3:
				$mes3 = 3+$anointeresse;
				break;

			case 4:
				$mes4 = 4+$anointeresse;
				break;

			case 5:
				$mes5 = 5+$anointeresse;
				break;

			case 6:
				$mes6 = 6+$anointeresse;
				break;

			case 7:
				$mes7 = 7+$anointeresse;
				break;

			case 8:
				$mes8 = 8+$anointeresse;
				break;

			case 9:
				$mes9 = 9+$anointeresse;
				break;

			case 10:
				$mes10 = 10+$anointeresse;
				break;

			case 11:
				$mes11 = 11+$anointeresse;
				break;

			case 12:
				$mes12 = 12+$anointeresse;
				break;

			default:
				// code...
				break;
		}
	}
	$arraymes = array($mes1, $mes2, $mes3, $mes4, $mes5, $mes6, $mes7, $mes8, $mes9, $mes10, $mes11, $mes12);
	return $arraymes;
}
?>