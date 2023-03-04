<?php 
function buscartxt($conn, $idpub, $numerologias)
{
	$tmn = count($numerologias);
	$cnt = 0;
	$cntN = 0;
	$idTM = 1;
	$motivacao = $numerologias[1];
	$impressao = $numerologias[2]; 
	$expressao = $numerologias[3]; 
	$talentooculto = $numerologias[4]; 
	$aptidoes = $numerologias[5]; 
	$potencialidades = $numerologias[6];
	$dianatalicio = $numerologias[7]; 
	$numeropsiquico = $numerologias[8]; 
	$cores = $numerologias[9]; 
	$destino = $numerologias[10]; 
	$missao = $numerologias[11]; 
	$licoescarmicas = $numerologias[12]; 
	$dividascarmicas = $numerologias[13]; 
	$tendenciasocultas = $numerologias[14]; 
	$respostasubconsiente = $numerologias[15]; 
	$primeirociclo = $numerologias[16]; 
	$primeirodesafio = $numerologias[17]; 
	$primeiromomento = $numerologias[18]; 
	$segundociclo = $numerologias[19]; 
	$segundodesafio = $numerologias[20]; 
	$segundomomento = $numerologias[21]; 
	$terceiromomento = $numerologias[22]; 
	$quartomomento = $numerologias[23]; 
	$terceirociclo = $numerologias[24]; 
	$desafioprincipal = $numerologias[25]; 
	$anopessoal = $numerologias[26]; 
	$mespessoal = $numerologias[27]; 
	$diapessoal = $numerologias[28]; 
	$diasfavoraveis = $numerologias[29];
	$numerosharmonicos = $numerologias[30]; 
	$graudeascensao = $numerologias[31]; 
	$harmoniaconjugal = $numerologias[32]; 
	$triangulodavida = $numerologias[33]; 
	$arcanos  = $numerologias[34];

			$simples = array($motivacao, $impressao, $expressao, $talentooculto, $aptidoes, $potencialidades, $dianatalicio, $numeropsiquico, $cores, $destino, $missao, $respostasubconsiente, $primeirodesafio, $primeiromomento, $segundodesafio, $segundomomento, $terceiromomento, $quartomomento, $desafioprincipal, $anopessoal, $graudeascensao[1], $harmoniaconjugal);
			$simplesnumeros = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 15, 17, 18, 20, 21, 22, 23, 25, 26, 31, 32);
			$cnts = count($simples);
			for ($i=0; $i < $cnts; $i++) { 
				$sqls = "SELECT frase FROM numerologia WHERE numerologia='$simples[$i]' AND idPub = '$idpub' AND idTM = '1' AND idTN = '$simplesnumeros[$i]'";
				$querys = mysqli_query($conn, $sqls);
				if ($frase = $querys->fetch_array()) {
					$tudo = array($simplesnumeros[$i]=>$frase['frase']);
				}
			}

			//licoescarmicas

			$lsliccarm = array();
			$cntlc = count($licoescarmicas);
			for ($i=0; $i < $cntlc; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$licoescarmicas[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 12";
				$query = mysqli_query($conn, $sql);
				if ($dadoslc = $query->fetch_array()) {
					$lsliccarm[] = $dadoslc['frase'];
				}
			}
			$tudo = array(12=>$lsliccarm);

			//dividascarmicas
			$lsdivcarm = array();
			$cntlc = count($dividascarmicas);
			for ($i=0; $i < $cntlc; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$dividascarmicas[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 13";
				$query = mysqli_query($conn, $sql);
				if ($dadosdc = $query->fetch_array()) {
					$lsdivcarm[] = $dadosdc['frase'];
				}
			}
			$tudo = array(13=>$lsdivcarm);

			//tendenciasocultas
			$lstendo = array();
			$cntto = count($tendenciasocultas);
			for ($i=0; $i < $cntto; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$tendenciasocultas[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 14";
				$query = mysqli_query($conn, $sql);
				if ($dadosdc = $query->fetch_array()) {
					$lstendo[] = $dadosdc['frase'];
				}
			}
			$tudo = array(14=>$lstendo);

			//Primeiro Ciclo
			$lsprimeirociclo = array();
			$sql = "SELECT frase FROM numerologia WHERE numerologia = '$primeirociclo[0]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 16";
			$query = mysqli_query($conn, $sql);
			if ($dadosciclo1 = $query->fetch_array()) {
				$lsprimeirociclo[] = $dadosciclo1['frase'];
			}
			$tudo = array(16=>$lsprimeirociclo);
			//Segundo Ciclo
			$lssegundociclo = array();
			$sql = "SELECT frase FROM numerologia WHERE numerologia = '$segundociclo[0]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 19";
			$query = mysqli_query($conn, $sql);
			if ($dadosciclo2 = $query->fetch_array()) {
				$lssegundociclo[] = $dadosciclo2['frase'];
			}
			$tudo = array(19=>$lssegundociclo);

			//Terceiro Ciclo
			$lsterceirociclo = array();
			$sql = "SELECT frase FROM numerologia WHERE numerologia = '$terceirociclo[0]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 24";
			$query = mysqli_query($conn, $sql);
			if ($dadosciclo3 = $query->fetch_array()) {
				$lsterceirociclo[] = $dadosciclo3['frase'];
			}
			$tudo = array(24=>$lsterceirociclo);
			//Mes pessoal
			$lsmespessoal = array();
			for ($i=0; $i < 12; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$mespessoal[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 27";
				$query = mysqli_query($conn, $sql);
				if ($dadosmespessoal = $query->fetch_array()) {
					$lsmespessoal[] = $dadosmespessoal['frase'];
				}
			}
			$tudo = array(27=>$lsmespessoal);		

			$tabelas = array();
			$lsdiasfavoraveis = array();
			$mes = "";
			$c = 0;
			for ($i=1; $i < 13; $i++) { 
				$semanad = "";
				$semanac = "";
				$valores = "";
				$dias = "";
				$cntm = count($diapessoal[$i]);
				$mesbase = $diapessoal[$i];
				for ($d=0; $d < $cntm; $d++) {
					for ($s=0; $s < 7; $s++) { 
						if (isset($mesbase[$c])) {
							$dias .= "<th>".$c."</th>";
							$valores .= "<td>".$mesbase[$c]."</td>";
						}
						$c++;
					}
					$semanad = "<thead><tr>".$dias."</tr><thead>";
					$semanac = "<tbody><tr>".$valores."</tr></tbody>";
				}
				$mes = "<table> ".$semanad.$semanac."</table>";
				$tabelas[] = $mes;
			}
			$tudo = array(28=>$tabelas);

			//dias favoraveis
			$cntdfv = count($diasfavoraveis);
			for ($i=0; $i < $cntdfv; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$diasfavoraveis[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 29";
				$query = mysqli_query($conn, $sql);
				if ($dadosdiasfavoraveis = $query->fetch_array()) {
					$lsdiasfavoraveis[] = $dadosdiasfavoraveis['frase'];
				}
			}
			$tudo = array(29=>$lsdiasfavoraveis);

			//triangulos da vida
			$frasesrepetidas = array();
			if (isset($triangulodavida[2])) {
				$arrrpt = $triangulodavida[2];
				$qtdrpt = count($arrrpt);
				for ($i=0; $i < $qtdrpt; $i++) { 
					$rptdsmtrx = $arrrpt[$i];
					$cntdrptmtrx = count($rptdsmtrx);
					for ($b=0; $b < $cntdrptmtrx; $b++) { 
						$linharptds = $rptdsmtrx[$b];
						$cntdlinha = count($linharptds);
						for ($c=0; $c < $cntdlinha; $c=$c+3) { 
							$sql = "SELECT frase FROM numerologia WHERE numerologia='$linharptds[$c]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 32";
							$query = mysqli_query($conn, $sql);
							if ($dadosrpt = $query->fetch_array()) {
								if (in_array($dadosrpt['frase'], $frasesrepetidas)) {
									
								}else{
									$frasesrepetidas[] = $dadosrpt['frase'];
								}
							}
						}
					}
				}
				$tudo = array(32=>$frasesrepetidas);
			}else{
				$limpo = 10;
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$limpo' AND idPub = '$idpub' AND idTM = 1 AND idTN = 32";
				$query = mysqli_query($conn, $sql);
				if ($dadoslimpo = $query->fetch_array()) {
					$txtlimpo = array($dadoslimpo['frase'], $limpo);	
				}
				$tudo = array(32=>$txtlimpo);
			}

			//arcanos 
			$txtarcanos = array();
			$ctdarc = count($arcanos);
			for ($i=0; $i < $ctdarc; $i++) { 
				$sql = "SELECT frase FROM numerologia WHERE numerologia = '$arcanos[$i]' AND idPub = '$idpub' AND idTM = 1 AND idTN = 33";
				$query = mysqli_query($conn, $sql);
				if ($dadosarcano = $query->fetch_array()) {
					$txtarcanos[] = $dadosarcano['frase'];	
				}
			}
			$tudo = array(33=>$txtarcanos);
		
	return $tudo;

}

?>