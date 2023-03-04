<?php 
function numerosharmonicos($dia)
{

	$divdia = str_split($dia); $diard = array_sum($divdia);
	$cntdiard = strlen($diard);
	if ($cntdiard == 2) {
		$divdia1 = str_split($diard); $diard = array_sum($divdia1);
	}

	switch ($diard) {
			case '1':
			$vibra = "9";
			$atrai = "4:8";
			$oposto = "6:7";
			$passivo = "2:3:5";
			break;

			case '2':
			$vibra = "8";
			$atrai = "7:9";
			$oposto = "5";
			$passivo = "1:3:4:6";	
			break;

			case '3':
			$vibra = "7";
			$atrai = "5:6:9";
			$oposto = "4:8";
			$passivo = "1:2";	
			break;

			case '4':
			$vibra = "6";
			$atrai = "1:8";
			$oposto = "3:5";
			$passivo = "2:7:9";
			break;

			case '5':
			$vibra = "5";
			$atrai = "3:9";
			$oposto = "2:4";
			$opostoprofundo = "6";
			$passivo = "1:7:8";			
			break;

			case '6':
			$vibra = "4";
			$atrai = "3:7:9";
			$oposto = "1:8";
			$opostoprofundo = "5";
			$passivo = "2";			
			break;

			case '7':
			$vibra = "3";
			$atrai = "2:6";
			$oposto = "1:9";
			$passivo = "4:5:8";			
			break;

			case '8':
			$vibra = "2";
			$atrai = "1:4";
			$oposto = "3:6";
			$passivo = "5:7:9";			
			break;

			case '9':
			$vibra = "1";
			$atrai = "2:3:5:6";
			$oposto = "7";
			$passivo = "4:8";			
			break;
			
			default:
				// code...
			break;
		}
		if (isset($opostoprofundo)) {
			$cntdvb = strlen($vibra);
			if ($cntdvb > 1) {
				$vibra = explode(':', $vibra);
			}
			$cntdat = strlen($atrai);
			if ($cntdat > 1) {
				$atrai = explode(':', $atrai);
			}
			$cntdop = strlen($oposto);
			if ($cntdop > 1) {
				$oposto = explode(':', $oposto);
			}
			$cntdopp = strlen($opostoprofundo);
			if ($cntdvb > 1) {
				$opostoprofundo = explode(':', $opostoprofundo);
			}
			$cntdpsv = strlen($passivo);
			if ($cntdpsv > 1) {
				$passivo = explode(':', $passivo);
			}
			$info = array('vibra'=>$vibra,'atrai'=>$atrai,'oposto'=>$oposto,'opostoprofundo'=>$opostoprofundo,'passivo'=>$passivo);
		}else{
			$cntdvb = strlen($vibra);
			if ($cntdvb > 1) {
				$vibra = explode(':', $vibra);
			}
			$cntdat = strlen($atrai);
			if ($cntdat > 1) {
				$atrai = explode(':', $atrai);
			}
			$cntdop = strlen($oposto);
			if ($cntdop > 1) {
				$oposto = explode(':', $oposto);
			}
			$cntdpsv = strlen($passivo);
			if ($cntdpsv > 1) {
				$passivo = explode(':', $passivo);
			}
			$info = array('vibra'=>$vibra,'atrai'=>$atrai,'oposto'=>$oposto,'passivo'=>$passivo);
		}
		return $info;
}

 ?>