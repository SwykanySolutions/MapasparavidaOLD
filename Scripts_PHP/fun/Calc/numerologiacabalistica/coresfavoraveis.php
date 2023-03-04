<?php 
	function coresfavoraveis($dia)
	{
		$diadiv = str_split($dia); $sumdia = array_sum($diadiv);
		$cnt = strlen($sumdia);
		if ($cnt == 2) {
			$sumdia = str_split($sumdia); $sumdia = array_sum($sumdia);
			$coresfavoraveis = $sumdia;
		}else{
			$coresfavoraveis = $sumdia;
		}
		return $sumdia;

	}
 ?>