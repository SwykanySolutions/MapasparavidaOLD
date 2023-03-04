<?php 
function respostasubconsiente ($licoescarmicas)
	{
		if (empty($licoescarmicas)) {
			$soma_lic = 0;
			$respostasubconsiente = 9-$soma_lic;
		}else{
			$soma_lic = array_sum($licoescarmicas);
			$respostasubconsiente = $soma_lic - 9;
		}
		return $respostasubconsiente;
	}
 ?>