<?php 
function numero_psiquico ($dia)
	{
		$diaN = str_split($dia);
		$numero_psiquico = $diaN[0]+$diaN[1];
		return $numero_psiquico;
	}
 ?>