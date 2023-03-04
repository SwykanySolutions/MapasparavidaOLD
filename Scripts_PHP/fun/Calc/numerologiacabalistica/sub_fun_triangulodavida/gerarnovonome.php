<?php 
function gerarnovonome ($nome)
		{
			$nome = strtolower($nome);
			$nome = str_replace(' ','',$nome);
			$divnome = preg_split("/(?<!^)(?!$)/u", $nome);
			$qtdnome = count($divnome);
			$cntd = 0;
			$cntd1 = 0;
			$arraya = array_keys($divnome, "a"); $arraye = array_keys($divnome, "e"); $arrayi = array_keys($divnome, "i"); $arrayo = array_keys($divnome, "o"); $arrayu = array_keys($divnome, "u");
			$ltra = count($arraya); $ltre = count($arraye); $ltri = count($arrayi); $ltro = count($arrayo); $ltru = count($arrayu);
			$totltr = $ltra+$ltre+$ltri+$ltro+$ltru;
			$vezes = rand(0, $totltr);
			$novonome = array();
			$novonome = $divnome;
			for ($i=0; $i < $vezes ; $i++) { 
				if (isset($divnome[$i]) && $divnome[$i] == "a" || $divnome[$i] == "e" || $divnome[$i] == "i" || $divnome[$i] == "o" || $divnome[$i] == "u") {
							switch ($divnome[$i]) {
								case 'a':
									$novonome[$i] = randon(1, 2);
									break;
								case 'e':
									$novonome[$i] = randon(1, 3);
									break;
								case 'i':
									$novonome[$i] = randon(1, 4);
									break;
								case 'o':
									$novonome[$i] = randon(1, 5);
								
									break;
								case 'u':
									$novonome[$i] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
			}

			$novonome = implode("", $novonome);

			return $novonome;	
		}
 ?>