<?php 
// $locationgrafico = ./graficos/1/'.$idPub.'chart_'.$nomecompleto.'.png // 
function mapacabalistico( $nomecompleto, $textos, $bases ,  $novonome,  $numerologias, $locationgrafico)
{
		// $cntbs = count($bases);
		$cnt1 = 0;
		$cnt2 = 0;
		$bdbs = "";
		$bstxt = "";
		$bdfull = "";
		// $cnttxt = count($textos);
		$dcstart = '<!DOCTYPE html>
					<html>
						<head>
							<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
						    <link rel="stylesheet" type="text/css" href="http://'.$_SERVER['SERVER_NAME'].'/mapasparavida/includes/geral.css">
							<link rel="stylesheet" type="text/css" href="http://'.$_SERVER['SERVER_NAME'].'/mapasparavida/includes/CSS/numerologia.css">
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
							.grafico{width:100%;}
							</style>
						</head>
						<body>';

		
			$grafico = '<img src="'.$locationgrafico.'" class="grafico">';
						$assinatura = '<p class="ft16">'.$nomecompleto.'x</p>';
			$bdfull .= $grafico;
		$dcend = '</body>
				</html>';

		$mapa = $dcstart.$bdfull.$assinatura.$dcend;
		

	return $mapa;
}
?>
<style type="text/css">
	.a{margin-left: ;

	}
</style>