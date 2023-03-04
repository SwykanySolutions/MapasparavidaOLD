<?php 
function momentosdecisivos($dia, $mes, $ano)
	{
		$cntpr;
		$cntsg;
		$diarr = str_split($dia);if (!empty($diarr[0])) { $smdia = array_sum($diarr); }else{ $smdia = $diarr[1]; }
		$mesrr = str_split($mes);if (!empty($mesrr[0])) { $smmes = array_sum($mesrr); }else{ $smmes = $mesrr[1]; }
		$anorr = str_split($ano); $smano = array_sum($anorr);
		$primeiromomento = $smmes+$smdia; $cntpr = strlen($primeiromomento);
		$cntprm = strlen($primeiromomento);
		if ($cntprm == 2) {
			$primeiromomento = str_split($primeiromomento); $primeiromomento = array_sum($primeiromomento);
		}
		$segundomomento = $smdia+$smano; $cntsg = strlen($segundomomento);
		$cntsgm = strlen($segundomomento);
			if ($cntsgm == 2) {
				$segundomomento = str_split($segundomomento); $segundomomento = array_sum($segundomomento);
			}
		if ($cntpr == 2 && $cntsg == 2) {
			$prarr = str_split($primeiromomento);  $prarr = array_filter($prarr); $smprmnt = array_sum($prarr);
			$sgarr = str_split($segundomomento); $sgarr = array_filter($sgarr); $smsgmnt = array_sum($sgarr);
			$terceiromomento = $smprmnt+$smsgmnt;
			$cnttrm = strlen($terceiromomento);
			if ($cnttrm == 2) {
				$terceiromomento = str_split($terceiromomento); $terceiromomento = array_sum($terceiromomento);
			}
		}else{
			$terceiromomento = $primeiromomento+$segundomomento;
			$cnttrm = strlen($terceiromomento);
			if ($cnttrm == 2) {
				$arrmon = str_split($terceiromomento); $terceiromomento = array_sum($arrmon);
			}
		}
		$quartomomento = $smmes+$smano;

		$momentos = array(1=>$primeiromomento,2=>$segundomomento,3=>$terceiromomento,4=>$quartomomento);

		return $momentos;
	}
 ?>