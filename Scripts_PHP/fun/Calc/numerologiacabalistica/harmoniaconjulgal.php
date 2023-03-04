<?php 
function harmoniaconjugal($missao)
	{
		$numero = "";
		$missaoarr = str_split($missao);
		$missaord = array_sum($missaoarr); 
		$cntvlr = strlen($missaord);
		if ($missaord != 0) {
		
			if ($cntvlr == 2) {
				$msdiv = str_split($missaord); $missaord = array_sum($msdiv);
			}
			if ($missaord != 11 && $missaord != 22) {
				$numero = $missaord;
			}else{
				$msnvrd = str_split($missaord);$nvsmms = array_sum($msnvrd);
				$numero = $msnvrd;
			}
		}		
		
		return $numero;
	}
 ?>