<?php 
function diapesssoal($mespessoal)
	{
		$mes = date('m');
		$ano = date('Y');
		$bissexto= date('L',mktime(0, 0, 0, 1, 1, $ano));
		$dia = 1;
		$year = 0;
		$diapessoal_01 = array();
		$diapessoal_02 = array();
		$diapessoal_03 = array();
		$diapessoal_04 = array();
		$diapessoal_05 = array();
		$diapessoal_06 = array();
		$diapessoal_07 = array();
		$diapessoal_08 = array();
		$diapessoal_09 = array();
		$diapessoal_10 = array();
		$diapessoal_11 = array();
		$diapessoal_12 = array();
		$arradd = array();
		$base = array();

		while ($year <= 12) {

			switch ($mes) {

				case '01':
					while ($dia <= 31) 
					{
						$diapessoal = $dia+$mespessoal[0];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
						if (empty($diapessoal_01)) {
							$diapessoal_01 = array($dia=>$diapessoal);
							$dia++;
						}else{
							$arrayadd = array($dia=>$diapessoal);
							$diapessoal_01 = array_merge($diapessoal_01,$arrayadd);
							$dia++;
						}
					}
					$dia = 1;
					$mes++;
				break;

				case '02':

						if ($bissexto == 0) {
							while ($dia <= 28) {
								$diapessoal = $dia+$mespessoal[1];
								$cntdp = strlen($diapessoal);
								if ($cntdp == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
									if ($cntnv == 2) {
										$base = str_split($diapessoal); $diapessoal = array_sum($base);
									}
								}
								if (empty($diapessoal_02)) {
									$diapessoal_02 = array($dia=>$diapessoal);
									$dia++;
								}else{
									$arrayadd = array($dia=>$diapessoal);
									$diapessoal_02 = array_merge($diapessoal_02,$arrayadd);
									$dia++;
								}
							}
						}
						if ($bissexto == 1) {
							while ($dia <= 29) {

								$diapessoal = $dia+$mespessoal[1];
								$cntdp = strlen($diapessoal);
								if ($cntdp == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
								if (empty($diapessoal_02)) {
									$diapessoal_02 = array($dia=>$diapessoal);
									$dia++;
								}else{
									$arrayadd = array($dia=>$diapessoal);
									$diapessoal_02 = array_merge($diapessoal_02,$arrayadd);
									$dia++;
								}
							}
						}
					$dia = 1;
					$mes++;
				break;
				case '03':
					while ($dia <= 31) 
						{
							$diapessoal = $dia+$mespessoal[2];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_03)) {
								$diapessoal_03 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_03 = array_merge($diapessoal_03,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '04':
					while ($dia <= 30) 
						{	
							$diapessoal = $dia+$mespessoal[3];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_04)) {
								$diapessoal_04 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_04 = array_merge($diapessoal_04,$arrayadd);
								$dia++;
							}					
						}
					$dia = 1;
					$mes++;
				break;

				case '05':
					while ($dia <= 31) 
						{	
							$diapessoal = $dia+$mespessoal[4];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_05)) {
								$diapessoal_05 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_05 = array_merge($diapessoal_05,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '06':
					while ($dia <= 30) 
						{	
							$diapessoal = $dia+$mespessoal[5];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_06)) {
								$diapessoal_06 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_06 = array_merge($diapessoal_06,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '07':
						while ($dia <= 31) 
						{	
							$diapessoal = $dia+$mespessoal[6];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_07)) {
								$diapessoal_07 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_07 = array_merge($diapessoal_07,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '08':
						while ($dia <= 31) 
						{	
							$diapessoal = $dia+$mespessoal[7];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_08)) {
								$diapessoal_08 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_08 = array_merge($diapessoal_08,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '09':
					while ($dia <= 30) 
						{	
							$diapessoal = $dia+$mespessoal[8];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_09)) {
								$diapessoal_09 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_09 = array_merge($diapessoal_09,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '10':
					while ($dia <= 31) 
						{	
							$diapessoal = $dia+$mespessoal[9];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_10)) {
								$diapessoal_10 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_10 = array_merge($diapessoal_10,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '11':
					while ($dia <= 30) 
						{
							$diapessoal = $dia+$mespessoal[10];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_11)) {

								$diapessoal_11 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_11 = array_merge($diapessoal_11,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				case '12':
					while ($dia <= 31) 
						{
							$diapessoal = $dia+$mespessoal[11];
							$cntdp = strlen($diapessoal);
							if ($cntdp == 2) {
								$base = str_split($diapessoal); $diapessoal = array_sum($base); $cntnv= strlen($diapessoal);
								if ($cntnv == 2) {
									$base = str_split($diapessoal); $diapessoal = array_sum($base);
								}
							}
							if (empty($diapessoal_12)) {
								$diapessoal_12 = array($dia=>$diapessoal);
								$dia++;
							}else{
								$arrayadd = array($dia=>$diapessoal);
								$diapessoal_12 = array_merge($diapessoal_12,$arrayadd);
								$dia++;
							}
						}
					$dia = 1;
					$mes++;
				break;

				default:
					if ($mes == 13) {
						$mes = 1;
					}
				break;

			}
			$year++;
		}
		$diaspessoaisporano = array(1=> $diapessoal_01, 2=>$diapessoal_02, 3=>$diapessoal_03,4=>$diapessoal_04 ,5=>$diapessoal_05 ,6=>$diapessoal_06, 7=>$diapessoal_07, 8=>$diapessoal_08, 9=>$diapessoal_09, 10=>$diapessoal_10, 11=>$diapessoal_11, 12=>$diapessoal_12);

		return $diaspessoaisporano;
	}
 ?>