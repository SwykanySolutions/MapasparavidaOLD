<?php 
function somarsequencia($seq)
		{
			$soma = str_split($seq);
			$cntd = 0;
			$tmnseq = count($soma);
			$linha = "";
			$vld = "";
			while ($tmnseq > $cntd) {
				if (isset($soma[$cntd]) && isset($soma[$cntd+1])) {
					$vld = $soma[$cntd]+$soma[$cntd+1];
					$cnt = strlen($vld);
					if ($cnt == 2) {
						$divvld = str_split($vld); $linha .= $divvld[0]+$divvld[1];
					}else{
						$linha .=$vld;
					}
				}
				$cntd++;
			}
			return $linha;
		}
 ?>