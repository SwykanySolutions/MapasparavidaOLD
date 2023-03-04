<?php 
function ciclosdevida ($mes, $destino, $ano, $dia)
	{
		$cntmesrd = "";
		$cntdiard = "";
		$cntanord = "";
		$energiaP = "";
		$energiaS = "";
		$energiaT = "";
		$mesrdls = str_split($mes); $mesrd = array_sum($mesrdls); $cntmesrd = strlen($mesrd); if ($mesrd != 11 && $cntmesrd == 2) { $divmesrd = str_split($mesrd);   $energiaP = array_sum($divmesrd);}else{$energiaP = $mesrd;}

		$diardls = str_split($dia); $diard = array_sum($diardls); $cntdiard = strlen($diard); if ($diard != 11 && $diard != 22 && $cntdiard == 2) { $divdiard = str_split($diard); $energiaS = array_sum($divdiard);}else{$energiaS = $diard;}

		$anordls = str_split($ano); $anord = array_sum($anordls); $cntanord = strlen($anord); if ($anord != 11 && $anord != 22 && $cntanord == 2) { $divanord = str_split($anord); $energiaT = array_sum($divanord);}else{$energiaT = $anord;}

		$cicloP = 37-$destino; $anoFp = $ano+$cicloP;
		$cicloS = $anoFp+27;
		$primeirociclo =  array($energiaP, 'ciclo'=>$ano.' - '.$anoFp);
		$segundociclo = array($energiaS, 'ciclo'=>$anoFp.' - '.$cicloS);
		$terceirociclo = array($energiaT, 'ciclo'=>$cicloS.' - ∞');
		$ciclosdevida = array(1=>$primeirociclo,2=>$segundociclo,3=>$terceirociclo);
		return $ciclosdevida;
	}
 ?>