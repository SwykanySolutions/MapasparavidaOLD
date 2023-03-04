<?php 
function mtv_imp_exp($nome)
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
		$rptvl1 = 0; $rptvl2 = 0; $rptvl3 = 0; $rptvl4 = 0; $rptvl5 = 0; $rptvl6 = 0; $rptvl7 = 0; $rptvl8 = 0; $rptvl9 = 0;

			while ($numcont > $vldnum) {

				switch ($crtN[$vldnum]) {
					case 'a':
					$arrayvg .= "1:";
					$arraycarm .= '1:';
					$rptvl1 = $rptvl1+1; 
					break;

					case 'b':
					$arraycn .= '2:';
					$arraycarm .= '2:';
					$rptvl2 = $rptvl2+1;  
					break;

					case 'c':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1; 
					break;

					case 'd':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					$rptvl4 = $rptvl4+1;
					break;

					case 'e':
					$arrayvg .= "5:";
					$arraycarm .= '5:';
					$rptvl5 = $rptvl5+1; 
					break;

					case 'f':
					$arraycn .= '8:';
					$arraycarm .= '8:';
					$rptvl8 = $rptvl8+1;
					break;

					case 'g':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1;
					break;

					case 'h':
					$arraycn .= '5:';
					$arraycarm .= '5:';
					$rptvl5 = $rptvl5+1;
					break;

					case 'i':
					$arrayvg .= "1:";
					$arraycarm .= '1:';
					$rptvl1 = $rptvl1+1; 
					break;

					case 'j':
					$arraycn .= '1:';
					$arraycarm .= '1:';
					$rptvl1 = $rptvl1+1; 
					break;

					case 'k':
					$arraycn .= '2:';
					$arraycarm .= '2:';
					$rptvl2 = $rptvl2+1; 
					break;

					case 'l':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1;
					break;

					case 'm':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					$rptvl4 = $rptvl4+1;
					break;

					case 'n':
					$arraycn .= '5:';
					$arraycarm .= '5:';
					$rptvl5 = $rptvl5+1;
					break;

					case 'o':
					$arrayvg .= "7:";
					$arraycarm .= '7:';
					$rptvl7 = $rptvl7+1;
					break;

					case 'p':
					$arraycn .= '8:';
					$arraycarm .= '8:';
					$rptvl8 = $rptvl8+1;
					break;

					case 'q':

					$arraycn .= '1:';
					$arraycarm .= '1:';
					$rptvl1 = $rptvl1+1;
					break;

					case 'r':
					$arraycn .= '2:';
					$arraycarm .= '2:';
					$rptvl2 = $rptvl2+1;
					break;

					case 's':
					$arraycn .= '3:';
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1;
					break;

					case 't':
					$arraycn .= '4:';
					$arraycarm .= '4:';
					$rptvl4 = $rptvl4+1;
					break;

					case 'u':
					$arrayvg .= "6:";
					$arraycarm .= '6:';
					$rptvl6 = $rptvl6+1;
					break;

					case 'v':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					$rptvl6 = $rptvl6+1;
					break;

					case 'w':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					$rptvl6 = $rptvl6+1;
					break;

					case 'x':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					$rptvl6 = $rptvl6+1;
					break;

					case 'y':
					$arraycn .= '1:';
					$arraycarm .= '1:';
					$rptvl1 = $rptvl1+1;
					break;

					case 'z':
					$arraycn .= '7:';
					$arraycarm .= '7:';
					$rptvl7 = $rptvl7+1;
					break;

					case 'ç':
					$arraycn .= '6:';
					$arraycarm .= '6:';
					$rptvl6 = $rptvl6+1;
					break;

					case 'ã':
					$arrayvg .= "4:";
					$arraycarm .= '4:';
					$rptvl4 = $rptvl4+1;
					break;

					case 'â':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					$rptvl8 = $rptvl8+1;
					break;

					case 'á':
					$arrayvg .= "3:";
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1;
					break;

					case 'à':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					$rptvl2 = $rptvl2+1;
					break;

					case 'ê':
					$arrayvg .= "10:";
					$arraycarm .= '10:';
					break;

					case 'é':
					$arrayvg .= "7:";
					$arraycarm .= '7:';
					$rptvl7 = $rptvl7+1;
					break;

					case 'è':
					$arrayvg .= "10:";
					$arraycarm .= '10:';
					break;

					case 'î':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					$rptvli = $rptvli+1;
					break;

					case 'í':
					$arrayvg .= "3:";
					$arraycarm .= '3:';
					$rptvl3 = $rptvl3+1;
					break;

					case 'ì':
					$arrayvg .= "2:";
					$arraycarm .= '2:';
					$rptvl2 = $rptvl2+1;
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
					$rptvl9 = $rptvl9+1;
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
					$rptvl8 = $rptvl8+1;
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
		
		// Lições carmicas

		$lic_carm = "";

		$arraycarm = explode(":",$arraycarm);

			if (!in_array(9, $arraycarm)) {

				$lic_carm .= "9:";		
			}
			if (!in_array(8, $arraycarm)) {
				
				$lic_carm .= "8:";		
			}
			if (!in_array(7, $arraycarm)) {
				
				$lic_carm .= "7:";		
			}
			if (!in_array(6, $arraycarm)) {
				
				$lic_carm .= "6:";		
			}
			if (!in_array(5, $arraycarm)) {
				
				$lic_carm .= "5:";		
			}
			if (!in_array(4, $arraycarm)) {
				
				$lic_carm .= "4:";		
			}
			if (!in_array(3, $arraycarm)) {
				
				$lic_carm .= "3:";		
			}
			if (!in_array(2, $arraycarm)) {
				
				$lic_carm .= "2:";		
			}
			if (!in_array(1, $arraycarm)) {
				
				$lic_carm .= "1:";		
			}
				$cnt_lic_carm = strlen($lic_carm);
				if ($cnt_lic_carm == 2) {
					$lic_carm = explode(':', $lic_carm);
					unset($lic_carm[1]);
				}
				else{
				$lic_carm = explode(':', $lic_carm);
				}
		// parte 2

		$tend_ocult = "";

			if ($rptvl1 >= 3) {

				$tend_ocult .= "1:";		
			}
			if ($rptvl2 >= 3) {

				$tend_ocult .= "2:";		
			}
			if ($rptvl3 >= 3) {

				$tend_ocult .= "3:";		
			}
			if ($rptvl4 >= 3) {

				$tend_ocult .= "4:";		
			}
			if ($rptvl5 >= 3) {

				$tend_ocult .= "5:";		
			}
			if ($rptvl6 >= 3) {

				$tend_ocult .= "6:";		
			}
			if ($rptvl7 >= 3) {

				$tend_ocult .= "7:";		
			}
			if ($rptvl8 >= 3) {

				$tend_ocult .= "8:";		
			}
			if ($rptvl9 >= 3) {

				$tend_ocult .= "9:";		
			}
			$cnt_tend_ocult = strlen($tend_ocult);
			if ($cnt_tend_ocult == 2) {
				$tend_ocult = explode(':', $tend_ocult);
				unset($tend_ocult[1]);
			}
			else{
				$tend_ocult = explode(':', $tend_ocult);
				$tend_ocult = array_filter($tend_ocult);
				$tend_ocult = array_values($tend_ocult);
			}

		$result = array("expressao"=>$expr, "impressao"=>$impr,"motivacao"=>$motiv,"licoescarmicas"=>$lic_carm,"tendenciasocultas"=>$tend_ocult, 'vogais'=>$qtdvg, 'consoantes'=>$qtdcn);
		return $result;
	}
 ?>