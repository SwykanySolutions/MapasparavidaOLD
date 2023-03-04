<?php 
function missao ($dst, $exp)
	{
		$soma = $dst+$exp;

		if ($soma != 11 && $soma != 22) {
			$cntsoma = strlen($soma);
			if ($cntsoma == 2) {
				$qrb = str_split($soma);
				$missao = $qrb[0]+$qrb[1];
			}else{
				$missao = $soma;
			}
		}else{
				$missao = $soma;
		}
		return $missao;
	}
 ?>