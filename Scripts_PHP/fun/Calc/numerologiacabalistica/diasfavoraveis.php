<?php 
function diasfavoraveis($dia, $mes)
	{
		$dia = intval($dia);
		$mes = intval($mes);
		$p='';
		$s='';
		switch ($mes){
			case 1:
				switch ($dia) {
					case 1:
						$p=1; $s=5;
					break;
					
					case 2:
						$p=1; $s=6;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=5;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=5; $s=6;
					break;
					
					case 7:
						$p=1; $s=7;
					break;
					
					case 8:
						$p=1; $s=3;
					break;
					
					case 9:
						$p=6; $s=9;
					break;
					
					case 10:
						$p=1; $s=5;
					break;
					
					case 11:
						$p=1; $s=6;
					break;
					
					case 12:
						$p=6; $s=9;
					break;
					
					case 13:
						$p=1; $s=5;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=5; $s=6;
					break;
					
					case 16:
						$p=1; $s=5;
					break;
					
					case 17:
						$p=1; $s=3;
					break;
					
					case 18:
						$p=5; $s=6;
					break;
					
					case 19:
						$p=1; $s=5;
					break;
					
					case 20:
						$p=1; $s=6;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=5;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=5; $s=6;
					break;
					
					case 25:
						$p=1; $s=5;
					break;
					
					case 26:
						$p=2; $s=3;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=5; $s=7;
					break;
					
					case 30:
						$p=2; $s=3;
					break;
					
					case 31:
						$p=2; $s=7;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 2:
				switch ($dia) {
					case 1:
						$p=2; $s=7;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=2; $s=7;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=3; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=3; $s=6;
					break;
					
					case 10:
						$p=2; $s=7;
					break;
					
					case 11:
						$p=5; $s=7;
					break;
					
					case 12:
						$p=5; $s=6;
					break;
					
					case 13:
						$p=2; $s=7;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=2; $s=5;
					break;
					
					case 17:
						$p=2; $s=3;
					break;
					
					case 18:
						$p=3; $s=6;
					break;
					
					case 19:
						$p=2; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=2; $s=7;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=5; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=2; $s=3;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=6; $s=7;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 3:
				switch ($dia) {
					case 1:
						$p=1; $s=7;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=7;
					break;
					
					case 6:
						$p=3; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=3; $s=6;
					break;
					
					case 9:
						$p=6; $s=9;
					break;
					
					case 10:
						$p=1; $s=7;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=6; $s=7;
					break;
					
					case 13:
						$p=1; $s=5;
					break;
					
					case 14:
						$p=5; $s=7;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=3; $s=6;
					break;
					
					case 18:
						$p=3; $s=6;
					break;
					
					case 19:
						$p=1; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=6; $s=7;
					break;
					
					case 24:
						$p=3; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=1; $s=3;
					break;
					
					case 27:
						$p=1; $s=9;
					break;
					
					case 28:
						$p=5; $s=9;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=9;
					break;
					
					case 31:
						$p=1; $s=7;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 4:
				switch ($dia) {
					case 1:
						$p=1; $s=7;
					break;
					
					case 2:
						$p=1; $s=7;
					break;
					
					case 3:
						$p=3; $s=9;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=7;
					break;
					
					case 6:
						$p=3; $s=6;
					break;
					
					case 7:
						$p=5; $s=7;
					break;
					
					case 8:
						$p=1; $s=2;
					break;
					
					case 9:
						$p=3; $s=9;
					break;
					
					case 10:
						$p=1; $s=7;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=1; $s=9;
					break;
					
					case 13:
						$p=1; $s=7;
					break;
					
					case 14:
						$p=5; $s=7;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=1; $s=3;
					break;
					
					case 18:
						$p=1; $s=3;
					break;
					
					case 19:
						$p=1; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=1; $s=3;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=7;
					break;
					
					case 24:
						$p=3; $s=5;
					break;
					
					case 25:
						$p=5; $s=7;
					break;
					
					case 26:
						$p=2; $s=3;
					break;
					
					case 27:
						$p=3; $s=6;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 5:
				switch ($dia) {
					case 1:
						$p=1; $s=2;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=5; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=2; $s=5;
					break;
					
					case 9:
						$p=5; $s=9;
					break;
					
					case 10:
						$p=1; $s=5;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=2; $s=6;
					break; 
					
					case 13:
						$p=1; $s=7;
					break;
					
					case 14:
						$p=5; $s=7;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=1; $s=3;
					break;
					
					case 18:
						$p=1; $s=3;
					break;
					
					case 19:
						$p=1; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=1; $s=3;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=5; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=2; $s=5;
					break;
					
					case 27:
						$p=5; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=5; $s=7;
					break;
					
					case 30:
						$p=5; $s=6;
					break;
					
					case 31:
						$p=1; $s=5;
					break;
					
					default:
						$p=""; $s="";
					break;
				}			
			break;

			case 6:
				switch ($dia) {
					case 1:
						$p=1; $s=5;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=5; $s=6;
					break;
					
					case 4:
						$p=1; $s=5;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=5; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=3; $s=7;
					break;
					
					case 9:
						$p=5; $s=9;
					break;
					
					case 10:
						$p=1; $s=5;
					break;
					
					case 11:
						$p=5; $s=7;
					break;
					
					case 12:
						$p=5; $s=6;
					break;
					
					case 13:
						$p=1; $s=5;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=5; $s=6;
					break;
					
					case 16:
						$p=2; $s=5;
					break;
					
					case 17:
						$p=2; $s=5;
					break;
					
					case 18:
						$p=5; $s=6;
					break;
					
					case 19:
						$p=1; $s=5;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=5; $s=6;
					break;
					
					case 22:
						$p=1; $s=5;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=5; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=2; $s=5;
					break;
					
					case 27:
						$p=5; $s=6;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=2; $s=3;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 7:
				switch ($dia) {
					case 1:
						$p=1; $s=2;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=2; $s=3;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=7;
					break;
					
					case 6:
						$p=2; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=2; $s=3;
					break;
					
					case 10:
						$p=1; $s=2;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=2; $s=6;
					break;
					
					case 13:
						$p=1; $s=2;
					break;
					
					case 14:
						$p=5; $s=7;
					break;
					
					case 15:
						$p=6; $s=7;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=2; $s=3;
					break;
					
					case 18:
						$p=2; $s=3;
					break;
					
					case 19:
						$p=1; $s=2;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=2;
					break;
					
					case 23:
						$p=5; $s=7;
					break;
					
					case 24:
						$p=6; $s=7;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=2; $s=3;
					break;
					
					case 27:
						$p=1; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					case 31:
						$p=1; $s=7;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 8:
				switch ($dia) {
					case 1:
						$p=1; $s=2;
					break;
					
					case 2:
						$p=1; $s=5;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=2;
					break;
					
					case 5:
						$p=1; $s=5;
					break;
					
					case 6:
						$p=5; $s=6;
					break;
					
					case 7:
						$p=2; $s=5;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=3; $s=6;
					break;
					
					case 10:
						$p=1; $s=2;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=1; $s=6;
					break;
					
					case 13:
						$p=1; $s=2;
					break;
					
					case 14:
						$p=1; $s=5;
					break;
					
					case 15:
						$p=1; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=1; $s=2;
					break;
					
					case 18:
						$p=1; $s=3;
					break;
					
					case 19:
						$p=1; $s=2;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=2;
					break;
					
					case 23:
						$p=1; $s=5;
					break;
					
					case 24:
						$p=3; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=2; $s=3;
					break;
					
					case 27:
						$p=3; $s=6;
					break;
					
					case 28:
						$p=2; $s=5;
					break;
					
					case 29:
						$p=1; $s=5;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					case 31:
						$p=1; $s=5;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 9:
				switch ($dia) {
					case 1:
						$p=1; $s=5;
					break;
					
					case 2:
						$p=2; $s=5;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=5;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=5; $s=6;
					break;
					
					case 7:
						$p=2; $s=5;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=3; $s=6;
					break;
					
					case 10:
						$p=1; $s=2;
					break;
					
					case 11:
						$p=1; $s=5;
					break;
					
					case 12:
						$p=3; $s=6;
					break;
					
					case 13:
						$p=1; $s=5;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=5; $s=6;
					break;
					
					case 16:
						$p=2; $s=5;
					break;
					
					case 17:
						$p=2; $s=3;
					break;
					
					case 18:
						$p=3; $s=6;
					break;
					
					case 19:
						$p=1; $s=5;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=3; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=3; $s=6;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 10:
				switch ($dia) {
					case 1:
						$p=2; $s=7;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=6;
					break;
					
					case 6:
						$p=3; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=3; $s=6;
					break;
					
					case 10:
						$p=1; $s=5;
					break;
					
					case 11:
						$p=1; $s=6;
					break;
					
					case 12:
						$p=2; $s=6;
					break;
					
					case 13:
						$p=1; $s=7;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=3; $s=6;
					break;
					
					case 18:
						$p=3; $s=6;
					break;
					
					case 19:
						$p=2; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=3; $s=6;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=3; $s=6;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					case 31:
						$p=1; $s=7;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 11:
				switch ($dia) {
					case 1:
						$p=1; $s=7;
					break;
					
					case 2:
						$p=1; $s=7;
					break;
					
					case 3:
						$p=3; $s=9;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=5; $s=7;
					break;
					
					case 6:
						$p=3; $s=5;
					break;
					
					case 7:
						$p=1; $s=7;
					break;
					
					case 8:
						$p=3; $s=9;
					break;
					
					case 9:
						$p=2; $s=9;
					break;
					
					case 10:
						$p=2; $s=7;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=1; $s=9;
					break;
					
					case 13:
						$p=1; $s=7;
					break;
					
					case 14:
						$p=5; $s=7;
					break;
					
					case 15:
						$p=3; $s=5;
					break;
					
					case 16:
						$p=1; $s=5;
					break;
					
					case 17:
						$p=3; $s=9;
					break;
					
					case 18:
						$p=3; $s=9;
					break;
					
					case 19:
						$p=1; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=9;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=7;
					break;
					
					case 24:
						$p=3; $s=5;
					break;
					
					case 25:
						$p=2; $s=7;
					break;
					
					case 26:
						$p=3; $s=6;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=2; $s=7;
					break;
					
					case 29:
						$p=1; $s=7;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			case 12:
				switch ($dia) {
					case 1:
						$p=1; $s=7;
					break;
					
					case 2:
						$p=2; $s=7;
					break;
					
					case 3:
						$p=3; $s=6;
					break;
					
					case 4:
						$p=1; $s=7;
					break;
					
					case 5:
						$p=3; $s=6;
					break;
					
					case 6:
						$p=3; $s=6;
					break;
					
					case 7:
						$p=2; $s=7;
					break;
					
					case 8:
						$p=2; $s=3;
					break;
					
					case 9:
						$p=3; $s=9;
					break;
					
					case 10:
						$p=1; $s=7;
					break;
					
					case 11:
						$p=1; $s=7;
					break;
					
					case 12:
						$p=6; $s=9;
					break;
					
					case 13:
						$p=1; $s=3;
					break;
					
					case 14:
						$p=5; $s=6;
					break;
					
					case 15:
						$p=3; $s=6;
					break;
					
					case 16:
						$p=1; $s=2;
					break;
					
					case 17:
						$p=2; $s=3;
					break;
					
					case 18:
						$p=3; $s=6;
					break;
					
					case 19:
						$p=1; $s=7;
					break;
					
					case 20:
						$p=2; $s=7;
					break;
					
					case 21:
						$p=3; $s=6;
					break;
					
					case 22:
						$p=1; $s=7;
					break;
					
					case 23:
						$p=5; $s=6;
					break;
					
					case 24:
						$p=3; $s=6;
					break;
					
					case 25:
						$p=3; $s=7;
					break;
					
					case 26:
						$p=3; $s=6;
					break;
					
					case 27:
						$p=6; $s=9;
					break;
					
					case 28:
						$p=5; $s=6;
					break;
					
					case 29:
						$p=1; $s=6;
					break;
					
					case 30:
						$p=3; $s=6;
					break;
					
					case 31:
						$p=1; $s=3;
					break;
					
					default:
						$p=""; $s="";
					break;
				}
			break;

			default:
				$p=""; $s="";
			break;
		}
		$t = 2*$s;
		$qua = $t+$p;
		$qui = $qua+$s;
		$sex = $qui+$p;
		$ordem = array($p,$s,$t,$qua,$qui,$sex);
		return $ordem;
	}
 ?>