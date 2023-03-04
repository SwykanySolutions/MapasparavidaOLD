<?php 
function aptidoesepotencialidades($expressao)
	{
		$divexp = str_split($expressao);
		$vld = array_sum($divexp);
		$qtdvld = strlen($vld);
		if ($qtdvld == 2) {
			$divexp1 = str_split($vld);
			$aptidoesepotencialidades = array_sum($divexp1);
		}else{
			$aptidoesepotencialidades = $vld;
		}
		return $aptidoesepotencialidades;
	}
 ?>