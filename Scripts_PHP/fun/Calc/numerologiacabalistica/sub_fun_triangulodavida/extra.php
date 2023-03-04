<?php 
function extra ($nome)
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
			$novonome = array(); $novonome = $divnome;
			$novonome1 = array(); $novonome1 = $divnome;
			$novonome2 = array(); $novonome2 = $divnome;
			for ($i=0; $i < $vezes ; $i++) { 
				if (isset($divnome[$i]) && $divnome[$i] == "a" || $divnome[$i] == "e" || $divnome[$i] == "i" || $divnome[$i] == "o" || $divnome[$i] == "u") {
							switch ($divnome[$i]) {
								case 'a':
									$novonome[$i] = randon(1, 2);
									$novonome1[$i] = randon(1, 2);
									$novonome2[$i] = randon(1, 2);
									break;
								case 'e':
									$novonome[$i] = randon(1, 3);
									$novonome1[$i] = randon(1, 3);
									$novonome2[$i] = randon(1, 3);
									break;
								case 'i':
									$novonome[$i] = randon(1, 4);
									$novonome1[$i] = randon(1, 4);
									$novonome2[$i] = randon(1, 4);
									break;
								case 'o':
									$novonome[$i] = randon(1, 5);
									$novonome1[$i] = randon(1, 5);
									$novonome2[$i] = randon(1, 5);
									break;
								case 'u':
									$novonome[$i] = randon(1, 6);
									$novonome1[$i] = randon(1, 6);
									$novonome2[$i] = randon(1, 6);
									break;
								default:
									// code...
								break;
							}
						}
			}

			$novonome = implode("", $novonome); $novonome1 = implode("", $novonome1); $novonome2 = implode("", $novonome2);

			$arraynomelimpo = array($novonome, $novonome1, $novonome2);

			return $arraynomelimpo;	
		}
 ?>