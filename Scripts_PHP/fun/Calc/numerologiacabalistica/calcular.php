<?php 
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/requiresnumerologiacabalistica.php';
function calcular($NM, $DT, $pub, $NMS = "", $idped, $email, $conn)
{
	$dataN = $DT;
	$nomeP = $NM;
	$nomeS = $NMS;
	//destino + dia, mes e ano nascimento
	$data_dst = dest_dianasc($DT);
	$destino = $data_dst['destino']; $diaN = $data_dst['diaNasc']; $mesN = $data_dst['mesNasc']; $anoN = $data_dst['anoNasc'];
	//motivação, impressao expressao, liçõescarmicas, tendencias ocultas, quantidade de vogais e quantidade de consoantes
	$data_eim =  mtv_imp_exp($NM);
	$expressao = $data_eim['expressao']; $impressao = $data_eim['impressao']; $motivacao = $data_eim['motivacao']; $licoescarmicas = $data_eim['licoescarmicas']; $tendenciasocultas = $data_eim['tendenciasocultas']; $qtdvg = $data_eim['vogais']; $qtdcn = $data_eim['consoantes'];
	//primeiro nome
	// $primeironome = primeironome($NM);
	// // missão
	// $missao = missao($destino, $expressao);
	// //dividas carmicas
	// $dividascarmicas = dividacarmicas($diaN, $expressao, $destino, $motivacao);
	// //anopessoal e ano-vigente
	// $data_anp = ano_pessoal($diaN, $mesN); $anopessoal = $data_anp['anopessoal']; $data_anp = $data_anp['anovigente'];
	// //mespessoal
	
	// $mespessoal = mespessoal($anopessoal);
	// //diapessoal
	// $diapessoal = diapesssoal($mespessoal);
	// //respostasubconsiente

	// $respostasubconsiente = respostasubconsiente($licoescarmicas);
	// //numeropsiquico
	// $numeropsiquico = numero_psiquico($diaN);
	// // delclarar nome da função e usar a ordem: Mês, Destino, Ano e Dia.
	// $ciclosdevida = ciclosdevida($mesN, $destino, $anoN, $diaN); $primeirociclo = $ciclosdevida[1]; $segundociclo = $ciclosdevida[2]; $terceirociclo = $ciclosdevida[3];
	// //momentos decisivos
	// $momentos = momentosdecisivos($diaN, $mesN, $anoN); $primeiromomento = $momentos[1]; $segundomomento = $momentos[2]; $terceiromomento = $momentos[3]; $quartomomento = $momentos[4];
	// //desafios
	// $desafios = desafios($diaN, $mesN, $anoN); $primeirodesafio = $desafios[1]; $segundodesafio = $desafios[2]; $desafioprincipal = $desafios[3];
	// $talentooculto = $primeirodesafio;
	// //diasfavoraveis
	// $diasfavoraveis = diasfavoraveis($diaN, $mesN);
	// //aptidoes e potencialidades
	// $aptidoes = aptidoesepotencialidades($expressao);
	// $potencialidades = aptidoesepotencialidades($expressao);
	// //grau de ascensao
	// if (empty($NMS)) { $graudeascensao = "";  }else{ $graudeascensao = graudeascensao($NMS);}
	// //harmonia conjugal
	// $harmoniaconjugal = harmoniaconjugal($missao);
	// //cores favoraveis
	// $cores = coresfavoraveis($diaN);
	// $dianatalicio = $diaN;
	// $arrayarcanos = arcanos($DT, $NM);
	// $numerosharmonicos = numerosharmonicos($dataN);
	$triangulodavida = triangulodavida($NM, $NMS);
	// $idmp = 1;
	// $dados = bases($pub, $idmp);
	// $bases = $dados[0]; $txtEmail = $dados[1]; $txtMapa = $dados[2];
	// // gerargrafico($arrayarcanos[0],$NM,$pub,$idped,1);
	// $nomecompleto = str_replace(' ', '_', $NM);
	// $locationchart = 'http://'.$_SERVER['SERVER_NAME'].'/mapasparavida/graficos/'.$idmp.'/'.$pub.'/'.$nomecompleto.'/'.'grafico_'.$idped.'.jpg';
	// $numerologias = array(1=>$motivacao, 2=>$impressao, 3=>$expressao, 4=>$talentooculto, 5=>$aptidoes, 6=>$potencialidades, 7=>$dianatalicio, 8=>$numeropsiquico, 9=>$cores, 10=>$destino, 11=>$missao, 12=>$licoescarmicas, 13=>$dividascarmicas, 14=>$tendenciasocultas, 15=>$respostasubconsiente, 16=>$primeirociclo, 17=>$primeirodesafio, 18=>$primeiromomento, 19=>$segundociclo, 20=>$segundodesafio, 21=>$segundomomento, 22=>$terceiromomento, 23=>$quartomomento, 24=>$terceirociclo, 25=>$desafioprincipal, 26=>$anopessoal, 27=>$mespessoal, 28=>$diapessoal, 29=>$diasfavoraveis, 30=>$numerosharmonicos, 31=>$graudeascensao, 32=>$harmoniaconjugal, 33=>$triangulodavida, 34=>$arrayarcanos[0]);

	// $texttos = buscartxt($conn, $pub, $numerologias);

	$trgl1 = $triangulodavida[1];
	$trgl2 = $trgl1[1];
	$arrnvnm = $trgl2[0];
	$novonome = $arrnvnm[0];
	$general = expressao($novonome);

	echo $general[0].$expressao;

	// $mp = mapacabalistico($NM, $texttos, $bases,  , $locationchart);

	// $locationpdf = crmapapdf($idmp, $mp, $NM, $pub);
	// email($email, $NM, $locationpdf, '<p>Teste de envio de email</p>' );
	// return $numerologias;
}
?>

		
