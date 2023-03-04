<?php
require './fun/calc/sub_fun_triangulodavida/calculonome.php';
require './fun/gerais/str_shuffle_unicode.php';
require './fun/gerais/regradetres.php';
require './fun/gerais/str_matrix.php';
require './fun/calc/sub_fun_triangulodavida/randon.php';
require './fun/calc/sub_fun_triangulodavida/somarsequencia.php';
require './fun/calc/sub_fun_triangulodavida/vlrptds.php';
require './fun/calc/sub_fun_triangulodavida/gerartriangulo.php';
require './fun/calc/sub_fun_triangulodavida/limpar_nome.php';
require './fun/calc/sub_fun_triangulodavida/gerarnovonome.php';
require './fun/calc/sub_fun_triangulodavida/extra.php';

function triangulodavida($nome, $nomesocial, $nomecasado, $apelido)
{
		$start = 1;
		$trinagulo1 = array();
		$trinagulo2 = array();
		$trinagulo3 = array();
		$novonome1 = array();
		$novonome2 = array();
		$novonome3 = array();

		while ($start < 5) {
			switch ($start) {
				case 1:
					$seqNM = calculonome($nome);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloN = $retornoNM[1]; $rptc = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptc[$i]);
					}
					if (empty($vrf)) {
						$dadosNM = extra($nome);
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
							unset($dadosNM1);
							$dadosNM1 = gerarnovonome($nome);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
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
							unset($dadosNM2);
							$dadosNM2 = gerarnovonome($nome);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
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
							unset($dadosNM3);
							$dadosNM3 = gerarnovonome($nome);
							unset($retornoNM3, $rptc);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$trinagulo1[] = $retornoNM1[1];
						$trinagulo1[] = $retornoNM2[1];
						$trinagulo1[] = $retornoNM3[1];
						$nomenovo1[] = $dadosNM[0];
						$nomenovo1[] = $dadosNM[1];
						$nomenovo1[] = $dadosNM[2];
					}
					else{
						$dadosNM = limpar_nome($nome, $retornoNM[0], $retornoNM[1], $retornoNM[2], $retornoNM[3]);
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
							unset($dadosNM1);
							$dadosNM1 = limpar_nome($nome, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM2);
							$dadosNM2 = limpar_nome($nome, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM3);
							$dadosNM3 = limpar_nome($nome, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}				
						$trinagulo1[] = $retornoNM1[1];
						$trinagulo1[] = $retornoNM2[1];
						$trinagulo1[] = $retornoNM3[1];
						$nomenovo1[] = $dadosNM[0];
						$nomenovo1[] = $dadosNM[1];
						$nomenovo1[] = $dadosNM[2];
					}
				break;
				case 2:
					$seqNM = calculonome($nomesocial);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloNS = $retornoNM[1]; $rptc = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptc[$i]);
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
							unset($dadosNM1);
							$dadosNM1 = gerarnovonome($nomesocial);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
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
							unset($dadosNM2);
							$dadosNM2 = gerarnovonome($nomesocial);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
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
							unset($dadosNM3);
							$dadosNM3 = gerarnovonome($nomesocial);
							unset($retornoNM3, $rptc);
							$seqNM3 = calculonome($dadosNM3[0]);
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
						$nomenovo2[] = $dadosNM[0];
						$nomenovo2[] = $dadosNM[1];
						$nomenovo2[] = $dadosNM[2];
					}
					else{
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
							unset($dadosNM1);
							$dadosNM1 = limpar_nome($nomesocial, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM2);
							$dadosNM2 = limpar_nome($nomesocial, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM3);
							$dadosNM3 = limpar_nome($nomesocial, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}				
						$triangulo2[] = $retornoNM1[1];
						$triangulo2[] = $retornoNM2[1];
						$triangulo2[] = $retornoNM3[1];
						$nomenovo2[] = $dadosNM[0];
						$nomenovo2[] = $dadosNM[1];
						$nomenovo2[] = $dadosNM[2];
					}
					break;
				case 3:
					$seqNM = calculonome($nomecasado);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloNC = $retornoNM[1]; $rptc = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptc[$i]);
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
							unset($dadosNM1);
							$dadosNM1 = gerarnovonome($nomecasado);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
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
							unset($dadosNM2);
							$dadosNM2 = gerarnovonome($nomecasado);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
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
							unset($dadosNM3);
							$dadosNM3 = gerarnovonome($nomecasado);
							unset($retornoNM3, $rptc);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo3[] = $retornoNM1[1];
						$triangulo3[] = $retornoNM2[1];
						$triangulo3[] = $retornoNM3[1];
						$nomenovo3[] = $dadosNM[0];
						$nomenovo3[] = $dadosNM[1];
						$nomenovo3[] = $dadosNM[2];
					}
					else{
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
							unset($dadosNM1);
							$dadosNM1 = limpar_nome($nomecasado, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM2);
							$dadosNM2 = limpar_nome($nomecasado, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM3);
							$dadosNM3 = limpar_nome($nomecasado, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}				
						$triangulo3[] = $retornoNM1[1];
						$triangulo3[] = $retornoNM2[1];
						$triangulo3[] = $retornoNM3[1];
						$nomenovo3[] = $dadosNM[0];
						$nomenovo3[] = $dadosNM[1];
						$nomenovo3[] = $dadosNM[2];
					}
					break;
				case 4:
					$seqNM = calculonome($apelido);
					$retornoNM = gerartriangulo($seqNM);
					$trianguloA = $retornoNM[1]; $rptc = $retornoNM[2];
					$vlrvz = count($retornoNM[2]); $vrf = "";
					for ($i=0; $i < $vlrvz; $i++) { 
						$vrf .= implode($rptc[$i]);
					}
					if (empty($vrf)) {
						$dadosNM = extra($apelido);
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
							unset($dadosNM1);
							$dadosNM1 = gerarnovonome($apelido);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
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
							unset($dadosNM2);
							$dadosNM2 = gerarnovonome($apelido);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
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
							unset($dadosNM3);
							$dadosNM3 = gerarnovonome($apelido);
							unset($retornoNM3, $rptc);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}
						$triangulo4[] = $retornoNM1[1];
						$triangulo4[] = $retornoNM2[1];
						$triangulo4[] = $retornoNM3[1];
						$nomenovo4[] = $dadosNM[0];
						$nomenovo4[] = $dadosNM[1];
						$nomenovo4[] = $dadosNM[2];
					}
					else{
						$dadosNM = limpar_nome($apelido, $retornoNM[0], $retornoNM[1], $retornoNM[2], $retornoNM[3]);
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
							unset($dadosNM1);
							$dadosNM1 = limpar_nome($apelido, $retornoNM1[0], $retornoNM1[1], $retornoNM1[2], $retornoNM1[3]);
							unset($retornoNM1, $rptc);
							$seqNM1 = calculonome($dadosNM1[0]);
							$retornoNM1 = gerartriangulo($seqNM1);
							$rptc = $retornoNM1[2];
							$vlrvz = count($retornoNM1[2]); $vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc[$i]);
							}
						}
						$rptc1 = $retornoNM2[2];
						$vlrvz = count($retornoNM2[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc1[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM2);
							$dadosNM2 = limpar_nome($apelido, $retornoNM2[0], $retornoNM2[1], $retornoNM2[2], $retornoNM2[3]);
							unset($retornoNM2, $rptc1);
							$seqNM2 = calculonome($dadosNM2[0]);
							$retornoNM2 = gerartriangulo($seqNM2);
							$rptc1 = $retornoNM2[2];
							$vlrvz = count($retornoNM2[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc1[$i]);
							}
						}
						$rptc2 = $retornoNM3[2];
						$vlrvz = count($retornoNM3[2]); 
						$vrf = "";
						for ($i=0; $i < $vlrvz; $i++) { 
							$vrf .= implode($rptc2[$i]);
						}
						while (!empty($vrf)) {
							unset($dadosNM3);
							$dadosNM3 = limpar_nome($apelido, $retornoNM3[0], $retornoNM3[1], $retornoNM3[2], $retornoNM3[3]);
							unset($retornoNM3, $rptc2);
							$seqNM3 = calculonome($dadosNM3[0]);
							$retornoNM3 = gerartriangulo($seqNM3);
							$rptc2 = $retornoNM3[2];
							$vlrvz = count($retornoNM3[2]);
							$vrf = "";
							for ($i=0; $i < $vlrvz; $i++) { 
								$vrf .= implode($rptc2[$i]);
							}
						}				
						$triangulo4[] = $retornoNM1[1];
						$triangulo4[] = $retornoNM2[1];
						$triangulo4[] = $retornoNM3[1];
						$nomenovo4[] = $dadosNM[0];
						$nomenovo4[] = $dadosNM[1];
						$nomenovo4[] = $dadosNM[2];
					}
					break;
				
				default:
					// code...
					break;
			}
			$start++;
		}
			$nomes_novos = array($nomenovo1, $nomenovo2, $nomenovo3, $nomenovo4);
			$nomes_brutos = array($nome, $nomecasado, $nomesocial, $apelido);
			$nomes_gerais = array( $nomes_brutos, $nomes_novos);
			$trinagulos = array($trinagulo1, $triangulo2, $triangulo3, $triangulo4);
			$triangulos_brutos = array($trianguloN, $trianguloNS, $trianguloNC, $trianguloA);
			$triangulos_gerais = array($triangulos_brutos, $trinagulos);
			return array($triangulos_gerais, $nomes_gerais);
} 
?>