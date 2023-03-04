<?php 
		function limpar_nome($nome, $nmrlinhas, $mtrxtrg, $mtrxrpt, $linhasrptds)
		{
			$nome = strtolower($nome);
			$nome = str_replace(' ','',$nome);
			$divnome = preg_split("/(?<!^)(?!$)/u", $nome);
			$qtdlinhasrptds = count($mtrxrpt);
			$cntd = 0;
			$cntd1 = 0;
			$cntd2 = 0;		
			$cntdnv = 0;
			$novonome = $divnome;
			$novonome1 = $divnome;
			$novonome2 = $divnome;
			$qtdcrttot = count($mtrxtrg[0]);
			while($cntdnv < $qtdlinhasrptds){
				$linhaB = $linhasrptds[$cntdnv];
				$linha = $mtrxrpt[$cntdnv];
				$indiceL = $linha[0];
				$qtdcrtln = count($mtrxtrg[$linhaB]);
				$prcid = regradetres($qtdcrtln, 100, $indiceL);
				$estm = regradetres(100, $qtdcrttot, $prcid);
				$key2 = $estm-3;
					$bks2 = 6;
					while($cntd1 < $bks2){
						if (isset($divnome[$key2+$cntd1])) {
							switch ($divnome[$key2+$cntd1]) {
								case 'a':
									$novonome[$key2+$cntd1] = randon(1, 2);
									$novonome1[$key2+$cntd1] = randon(1, 2);
									$novonome2[$key2+$cntd1] = randon(1, 2);
									break;
								case 'e':
									$novonome[$key2+$cntd1] = randon(1, 3);
									$novonome1[$key2+$cntd1] = randon(1, 3);
									$novonome2[$cntdnv] = randon(1, 3);
									break;
								case 'i':
									$novonome[$key2+$cntd1] = randon(1, 4);
									$novonome1[$key2+$cntd1] = randon(1, 4);
									$novonome2[$key2+$cntd1] = randon(1, 4);
									break;
								case 'o':
									$novonome[$key2+$cntd1] = randon(1, 5);
									$novonome1[$key2+$cntd1] = randon(1, 5);
									$novonome2[$key2+$cntd1] = randon(1, 5);
									break;
								case 'u':
									$novonome[$key2+$cntd1] = randon(1, 6);
									$novonome1[$key2+$cntd1] = randon(1, 6);
									$novonome2[$key2+$cntd1] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
						$cntd1++;
					}
					$cntdnv++;
					
			}
			$novonome = implode("", $novonome); $novonome1 = implode("", $novonome1); $novonome2 = implode("", $novonome2);
			$arraynomelimpo = array($novonome, $novonome1, $novonome2);

			return $arraynomelimpo;		
		}
?>