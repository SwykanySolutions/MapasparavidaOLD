<?php 
function regradetres($vl1, $vl2, $vl3)
		{
			$retorno = $vl3*$vl2/$vl1;
			$retorno = number_format($retorno, 0);
			return $retorno;
		}
?>