<?php
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/gerais/str_shuffle_unicode.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/gerais/regradetres.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/gerais/str_matrix.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/calculonome.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/randon.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/somarsequencia.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/vlrptds.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/gerartriangulo.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/limpar_nome.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/gerarnovonome.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/extra.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/expressao.php';
require $_SERVER['DOCUMENT_ROOT'].'/mapasparavida/scripts_PHP/fun/Calc/numerologiacabalistica/sub_fun_triangulodavida/limpar_nome_1.php';

function triangulodavida($nome, $nomesocial="", $nomecasado="")
{
		// $nome = "Pablo Guilherme Leite de Souza"; $nomesocial= "Pablo Guilherme"; $nomecasado=""; $apelido="";
		$start = 2;
		$trinagulo1 = array();
		$trinagulo2 = array();
		$trinagulo3 = array();
		$novonome1 = array();
		$novonome2 = array();
		$novonome3 = array();
		$rptcb1 = array();
		$rptcb2 = array();
		$rptcb3 = array();
		$rptc = array();
		$rptc1 = array();
		$rptc2 = array();
		if (!empty($nomesocial)) {
			$start++;
			if (!empty($nomecasado)) {
				$start++;
			}
		}

		for ($b=1; $b < $start; $b++) { 
			switch ($b) {
				case 1:
					$seqNM = calculonome($nome);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloN = $retornoNM[1]; $rptcb1 = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptcb1[$i]);
					}
					if (empty($vrf)) {
						$dadosNM = extra($nome);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$vrfexp = expressao($nome);
						$exp = $vrfexp[0];
						$vrfexp1 = expressao($dadosNM[0]);
						$exp1 = $vrfexp1[0];
						$rptc = $retornoNM1[2];
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!(empty($vrf) && $exp == $exp1))
						{
							unset($vrfexp1);
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
							$vrfexp1 = expressao($dadosNM1[0]);
							$exp1 = $vrfexp1[0];
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo1[] = $retornoNM1[1];
						$triangulo1[] = $retornoNM2[1];
						$triangulo1[] = $retornoNM3[1];
						$nomenovo1[] = $dadosNM1;
						$nomenovo1[] = $dadosNM2;
						$nomenovo1[] = $dadosNM3;
					}else{
						$repetidos1 = $rptcb1; 
						$dadosNM = limpar_nome($nome, $retornoNM[0], $retornoNM[1], $retornoNM[2], $retornoNM[3]);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$vrfexp = expressao($nome);
						$exp = $vrfexp[0];
						$vrfexp1 = expressao($dadosNM[0]);
						$exp1 = $vrfexp1[0];
						$rptc = $retornoNM1[2]; 
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!(empty($vrf) && $exp == $exp1))
						{
							unset($vrfexp1);
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
							$vrfexp1 = expressao($dadosNM1);
							$exp1 = $vrfexp1[0];
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo1[] = $retornoNM1[1];
						$triangulo1[] = $retornoNM2[1];
						$triangulo1[] = $retornoNM3[1];
						$nomenovo1[] = $dadosNM1;
						$nomenovo1[] = $dadosNM2;
						$nomenovo1[] = $dadosNM3;
					}
				break;
				case 2:
					$seqNM = calculonome($nomesocial);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloNS = $retornoNM[1]; $rptcb2 = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptcb2[$i]);
					}
					if (empty($vrf)) {
						$dadosNM = extra($nomesocial);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$rptc = $retornoNM1[2];
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo2[] = $retornoNM1[1];
						$triangulo2[] = $retornoNM2[1];
						$triangulo2[] = $retornoNM3[1];
						$nomenovo2[] = $dadosNM1;
						$nomenovo2[] = $dadosNM2;
						$nomenovo2[] = $dadosNM3;
					}
					else{
						$repetidos2 = $rptcb2; 
						$dadosNM = limpar_nome($nomesocial, $retornoNM[0], $retornoNM[1], $retornoNM[2], $retornoNM[3]);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$rptc = $retornoNM1[2];
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo2[] = $retornoNM1[1];
						$triangulo2[] = $retornoNM2[1];
						$triangulo2[] = $retornoNM3[1];
						$nomenovo2[] = $dadosNM1;
						$nomenovo2[] = $dadosNM2;
						$nomenovo2[] = $dadosNM3;
					}
					break;
				case 3:
					$seqNM = calculonome($nomecasado);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloNC = $retornoNM[1]; $rptcb3 = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptcb3[$i]);
					}
					if (empty($vrf)) {
						$dadosNM = extra($nomecasado);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$rptc = $retornoNM1[2];
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$trinagulo3[] = $retornoNM1[1];
						$trinagulo3[] = $retornoNM2[1];
						$trinagulo3[] = $retornoNM3[1];
						$nomenovo3[] = $dadosNM1;
						$nomenovo3[] = $dadosNM2;
						$nomenovo3[] = $dadosNM3;
					}
					else{
						$repetidos3 = $rptcb3; 
						$dadosNM = limpar_nome($nomecasado, $retornoNM[0], $retornoNM[1], $retornoNM[2], $retornoNM[3]);
						$seqNM1 = calculonome($dadosNM[0]);
						$seqNM2 = calculonome($dadosNM[1]);
						$seqNM3 = calculonome($dadosNM[2]);
						$retornoNM1 = gerartriangulo($seqNM1);
						$retornoNM2 = gerartriangulo($seqNM2);
						$retornoNM3 = gerartriangulo($seqNM3);
						$rptc = $retornoNM1[2];
						$vlrvz = count($retornoNM1[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM1 = limpar_nome_1($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM2 = limpar_nome_1($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc);
							$seqNM2 = calculonome($dadosNM2);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); $vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							$dadosNM3 = limpar_nome_1($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}				
						$trinagulo3[] = $retornoNM1[1];
						$trinagulo3[] = $retornoNM2[1];
						$trinagulo3[] = $retornoNM3[1];
						$nomenovo3[] = $dadosNM1[0];
						$nomenovo3[] = $dadosNM2[0];
						$nomenovo3[] = $dadosNM3[0];
					}
					break;
				
				default:
					// code...
					break;
			}
		}
			if (isset($nomenovo2) && isset($trinagulo2) && isset($nomesocial) && isset($trianguloNS)) {
				if (isset($nomenovo3) && isset($trinagulo3) && isset($nomecasado) && isset($trianguloNC)) {
						$nomes_brutos = array($nome, $nomesocial, $nomecasado);
						$nomes_novos = array($nomenovo1, $nomenovo2, $nomenovo3);
						$triangulos_brutos = array($trianguloN, $trianguloNS, $trianguloNC);
						$trinagulos = array($triangulo1, $triangulo2, $triangulo3);
				}else
				{
					$nomes_brutos = array($nome, $nomesocial);
					$nomes_novos = array($nomenovo1, $nomenovo2);
					$triangulos_brutos = array($trianguloN, $trianguloNS);
					$trinagulos = array($triangulo1, $triangulo2);
				}
			}else{
					$nomes_brutos = array($nome);
					$nomes_novos = array($nomenovo1);
					$triangulos_brutos = array($trianguloN);
					$trinagulos = array($triangulo1);
			}
			if (isset($repetidos1)) {
				if (isset($repetidos2)) {
					if (isset($repetidos3)) {
							$repetidosgeral = array($repetidos1, $repetidos2, $repetidos3);
					}else{
							$repetidosgeral = array($repetidos1, $repetidos2);
					}
				}else{
							$repetidosgeral = array($repetidos1);
				}
			}
			$nomes_gerais = array( $nomes_brutos, $nomes_novos);
			$triangulos_gerais = array($triangulos_brutos, $trinagulos);
			if (isset($repetidosgeral)) {
				$tudo = array($triangulos_gerais, $nomes_gerais, $repetidosgeral);
			}else{
				$tudo = array($triangulos_gerais, $nomes_gerais);
			}
			
			return $tudo;
} 
?>