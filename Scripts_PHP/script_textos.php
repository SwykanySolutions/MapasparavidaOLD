<?php 

function capturartxt($idTM, $conn, $idpub, $numerologias);
{
	$tmn = count($numerologias);
	$cnt = 0;
	$cntN = 0;
	if ($idTM == 1) {
		
		while( $tmn > $cnt){
			if (is_array($numerologias[$cnt])) {
				$tmnN = count($numerologias[$cnt]);
				while ($tmnN > $cntN) {
					
					
					
					$cntN++;
				}
			}else{
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$numerologias[$cnt]' AND idTM = '$idTM' AND idTN = '$cnt+1' AND idPub = '$idPub'"
			}
			$cnt++;
		}
		
	}
	
	if ($idTM == 2) {
		// code...
	}
	
	if ($idTM == 3) {
		// code...
	}
	
	if ($idTM == 4) {
		// code...
	}
	
	if ($idTM == 5) {
		// code...
	}
	
	if ($idTM == 6) {
		// code...
	}
	
	if ($idTM == 7) {
		// code...
	}
}
?>