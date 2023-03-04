<?php 
function expressao($nome)
	{
		$nome = strtolower($nome);
		$nome = explode(' ',$nome);
		$nome = implode('',$nome);
		$crtN = preg_split("/(?<!^)(?!$)/u", $nome);
		$numcont = count($crtN);
		$arraycarm;
		$vldnum = 0;
		$arrayvg = "";
		$arraycn = "";
		$arraycarm = "";
		$acento  = 0;

			while ($numcont > $vldnum) {

				switch ($crtN[$vldnum]) {
					case 'a':
					$arrayvg .= "1:";
					$arraycarm .= '1:';
					break;

					case 'b':
					$arraycn .= '2:';
					$arraycarm .= '2:'; 
					break;

					case 'c':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					break;

					case 'd':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					break;

					case 'e':
					$arrayvg .= "5:";
					$arraycarm .= '5:';
					break;

					case 'f':
					$arraycn .= '8:';
					$arraycarm .= '8:';
					break;

					case 'g':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					break;

					case 'h':
					$arraycn .= '5:';
					$arraycarm .= '5:';
					break;

					case 'i':
					$arrayvg .= "1:";
					$arraycarm .= '1:';
					break;

					case 'j':
					$arraycn .= '1:';
					$arraycarm .= '1:';
					break;

					case 'k':
					$arraycn .= '2:';
					$arraycarm .= '2:';
					break;

					case 'l':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					break;

					case 'm':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					break;

					case 'n':
					$arraycn .= '5:';
					$arraycarm .= '5:';
					break;

					case 'o':
					$arrayvg .= "7:";
					$arraycarm .= '7:';
					break;

					case 'p':
					$arraycn .= '8:';
					$arraycarm .= '8:';
					break;

					case 'q':

					$arraycn .= '1:';
					$arraycarm .= '1:';
					break;

					case 'r':
					$arraycn .= '2:';
					$arraycarm .= '2:';
					break;

					case 's':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					break;

					case 't':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					break;

					case 'u':
					$arrayvg .= "6:";
					$arraycarm .= '6:';
					break;

					case 'v':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					break;

					case 'w':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					break;

					case 'x':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					break;

					case 'y':
					$arraycn .= '1:';
					$arraycarm .= '1:';
					break;

					case 'z':
					$arraycn .= '7:';
					$arraycarm .= '7:';
					break;

					case 'ç':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					break;

					case 'ã':
					$arrayvg .= "4:";
					$arraycarm .= '4:';
					break;

					case 'â':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					break;

					case 'á':
					$arrayvg .= "3:";
					$arraycarm .= '3:';
					break;

					case 'à':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					break;

					case 'ê':
					$arrayvg .= "10:";
					$arraycarm .= '10:';
					break;

					case 'é':
					$arrayvg .= "7:";
					$arraycarm .= '7:';
					break;

					case 'è':
					$arrayvg .= "10:";
					$arraycarm .= '10:';
					break;

					case 'î':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					break;

					case 'í':
					$arrayvg .= "3:";
					$arraycarm .= '3:';
					break;

					case 'ì':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					break;

					case 'õ':
					$arrayvg .= "10:";
					$arraycarm .= '10:';
					break;

					case 'ô':
					$arrayvg .= "14:";
					$arraycarm .= '14:';
					break;

					case 'ó':
					$arrayvg .= "9:";
					$arraycarm .= '9:';
					break;

					case 'ò':
					$arrayvg .= "14:";
					$arraycarm .= '14:';
					break;

					case 'û':
					$arrayvg .= "12:";
					$arraycarm .= '12:';
					break;

					case 'ú':
					$arrayvg .= "8:";
					$arraycarm .= '8:';
					break;

					case 'ù':
					$arrayvg .= "12:";
					$arraycarm .= '12:';
					break;
					
					default:
						$arrayvg .= "";
						$arraycn .= "";
						$arraycarm .= "";
					break;
				}
				
			  		$vldnum++;
			}

			$arrayvg = explode(':',$arrayvg);
			$qtdvg = count($arrayvg);
			$arraycn = explode(':',$arraycn);
			$qtdcn = count($arraycn);

			$interiorS = array_sum($arrayvg);

			if ($interiorS != 11 && $interiorS != 22) {
				$cntint = strlen($interiorS);
				if ($cntint == 2) {
				$interiorA = str_split($interiorS);
				$interior = $interiorA[0]+$interiorA[1];
				}else{ $interior = $interiorS; }
			}
			else{ $interior = $interiorS; }

			$exteriorS = array_sum($arraycn);

			if ($exteriorS != 11 && $exteriorS != 22) {
				$cntext = strlen($exteriorS);
				if ($cntext == 2) {
					$exteriorA = str_split($exteriorS);
					$exterior = $exteriorA[0]+$exteriorA[1];
				}else{	$exterior = $exteriorS;	}

			}else{	$exterior = $exteriorS;	}

		$motiv = $interior;
		$impr = $exterior;
		$expr = $interior+$exterior;
		$arrexpr = str_split($expr);
		$cntexpr = count($arrexpr);
		if ($cntexpr == 2) {
			$expr = $arrexpr[0]+$arrexpr[1];
		}else{
			$expr = $arrexpr[0];
		}

		$result = array($expr,$impr,$motiv);

		return $result;
}
 ?>