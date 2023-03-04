<?php 
	function gerartriangulo($seq)
			{
				$vlrspt = vlrptds($seq);
				$mtrxrpt = array();
				$linhasrptds = array();
				if (empty($vlrspt)) {

				}else{
					$vlrsptd = explode(",", $vlrspt);
					$mtrxrpt[] = $vlrsptd;
					$linhasrptds[] = 0;
				}
				$arrseq = str_split($seq);
				$mtrxtrg[] = $arrseq;
				$nmrlinhas = "";
				$cntd = 1;
				$cntd1 = 0;
				$vlrseq = count($arrseq);
				while($vlrseq != 1){
					unset($arrseq, $arrseq1, $vlrsptd);
					$seq1 = somarsequencia($seq);
					$vlrspt = vlrptds($seq1);
					if (empty($vlrspt)) {

					}else{
						$vlrsptd = explode(",", $vlrspt);
						$mtrxrpt[]= $vlrsptd;
						$linhasrptds[] = $cntd;
					}
					$arrseq1  = str_split($seq1);
					$mtrxtrg[] = $arrseq1;
					$seq = $seq1;
					$vlrseq = strlen($seq1);
					$cntd++;
				}
				$nmlinhas = count($mtrxtrg);
				$retorno = array($nmlinhas, $mtrxtrg, $mtrxrpt, $linhasrptds);
				return $retorno;

	}
 ?>