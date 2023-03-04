<?php 
function graudeascensao($nome)
	{
		
		$nmarr = str_split($nome);
		$cntarr = strlen($nome);
		$cncnt = 0;
		$vgcnt = 0;
		$graudeascensao = "";
			for ($i=0; $i < $cntarr; $i++) { 
				if (isset($nmarr[$i]) && isset($nmarr[$i+1])) {
					if ($nmarr[$i] == 'a' || $nmarr[$i] == 'e' || $nmarr[$i] == 'i' || $nmarr[$i] == 'o' || $nmarr[$i] == 'u' || $nmarr[$i].$nmarr[$i+1] == 'ä' || $nmarr[$i].$nmarr[$i+1] == 'ã' || $nmarr[$i].$nmarr[$i+1] == 'â' || $nmarr[$i].$nmarr[$i+1] == 'à' || $nmarr[$i].$nmarr[$i+1] == 'á' || $nmarr[$i].$nmarr[$i+1] == 'ë' || $nmarr[$i].$nmarr[$i+1] == 'ê' || $nmarr[$i].$nmarr[$i+1] == 'è' || $nmarr[$i].$nmarr[$i+1] == 'é' || $nmarr[$i].$nmarr[$i+1] == 'ï' || $nmarr[$i].$nmarr[$i+1] == 'î' || $nmarr[$i].$nmarr[$i+1] == 'ì' || $nmarr[$i].$nmarr[$i+1] == 'í' || $nmarr[$i].$nmarr[$i+1] == 'ö' || $nmarr[$i].$nmarr[$i+1] == 'õ' || $nmarr[$i].$nmarr[$i+1] == 'ô' || $nmarr[$i].$nmarr[$i+1] == 'ò' || $nmarr[$i].$nmarr[$i+1] == 'ó' || $nmarr[$i].$nmarr[$i+1] == 'ü' || $nmarr[$i].$nmarr[$i+1] == 'û' || $nmarr[$i].$nmarr[$i+1] == 'ù' || $nmarr[$i].$nmarr[$i+1] == 'ú' ) 
					{
						$vgcnt++;
					}else{
						$cncnt++;
					}
					if ($vgcnt == $cncnt) {
						$graudeascensao = "elevado";
						$idg = 1;
					}
					if($vgcnt > $cncnt){
						$graudeascensao = "rebaixado";
						$idg = 2;
					}
					if ($cncnt > $vgcnt) {
						$graudeascensao = "em acensão";
						$idg = 3;
					}
				}
			}
			$graudeascensaoR = array($graudeascensao, $idg);
			return $graudeascensaoR;
		}
		
 ?>