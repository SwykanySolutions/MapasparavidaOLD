<?php 
require_once $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/vendor/autoload.php'; 
use Dompdf\Dompdf;
use Dompdf\Options;
function crmapapdf($idmp, $mp, $nomecompleto, $pub)
{
		switch ($idmp) {
			case 1:
			$nome_mapa = 'mapa_cabalistico';
			break;
			case 2:
			$nome_mapa = '';
			break;
			case 3:
			$nome_mapa = '';
			break;
			case 4:
			$nome_mapa = '';
			break;
			case 5:
			$nome_mapa = '';
			break;
			default:
			$nome_mapa = '';
			break;
		}
	$nome_para_arquivo = str_replace(' ', '_', $nomecompleto);
	$dompdf = new Dompdf(['enable_remote' => true]);
	$dompdf->loadHtml(''.$mp);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	$filename = $nome_mapa.'_'.$pub.'_'.$nome_para_arquivo.date('d-m-Y').'.pdf';
	$dirO = '../../../../pdfs/'.$nome_mapa.'/'.$pub.'/'.$nome_para_arquivo.'/';
		if (!file_exists($dirO)) {
			mkdir($dirO, 0777, true);
			$locationpdf = $dirO.$filename;
			file_put_contents($locationpdf, $dompdf->output());	
		}else{
			$locationpdf = $dirO.$filename;
			file_put_contents($locationpdf, $dompdf->output());
		}
	return $locationpdf;
}
?>