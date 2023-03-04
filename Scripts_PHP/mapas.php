<?php 
function criarmapa($textos, $bases , $novonome, $nomecompleto, $numerologias, $idmp)
{
	switch ($idmp) {
		case 1:
			$cntbs = count($bases);
			$cnt1 = 0;
			$cnt2 = 0;
			$bdbs = "";
			$bstxt = "";
			$bdfull = "";
			$cnttxt = count($textos);
			$dcstart = '<!DOCTYPE html>
						<html>
							<head>
								<meta charset="utf-8">
								<style type="text/css">
								@import url("https://fonts.googleapis.com/css2?family=Archivo+Black&family=Montserrat&display=swap");
								.ng{font-weight: bold;}
								.cnt{text-align: center;}
								.it{font-style: italic;}
								.ft18{font-size: 8px;}
								.ft11{font-size: 11px}
								.ft16{font-size: 16px;}
								.ft12{font-size: 12px;}
								.ft30{font-size: 30px;}
								.ft10-5{font-size: 10.5px;}
								.ft20{font-size: 20px;}
								.jst-all{text-align: justify-all;}
								.jst{text-align: justify;}
								.rgt{text-align: right;}
								.sub{text-decoration: underline;}
								</style>
							</head>
							<body>';

			while($cntbs > $cnt1 or $cnttxt > $cnt2){
				$bdbs .= $bases[$cnt1];
				$bdtxt .= $textos[$cnt2];
				$bdfull .= $bdbs.$bstxt;
				$cnt1++; $cnt2++;
			}
							$assinatura = '<p class="ft14">'.$novonome.'x</p>';

			$dcend = '</body>
					</html>';

			$mapa = $dcstart.$bdfull.$assinatura.$dcend;
		break;

		case 2:
			// code...
		break;

		case 3:
			// code...
		break;

		case 4:
			// code...
		break;

		case 5:
			// code...
		break;

		case 6:
			// code...
		break;
		
		default:
			// code...
			break;
	}
		;

	return $mapa;
}
 ?>