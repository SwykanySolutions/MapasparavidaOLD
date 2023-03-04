<?php 
function primeironome($nome)
	{
		$nomediv = explode(' ', $nome);
		$cnt = count($nomediv);
		$primeironome = "";
		switch ($cnt) {
			case 4:
				$primeironome = $nomediv[0].' '.$nomediv[1];
			break;
			case 3:
				$primeironome = $nomediv[0].' '.$nomediv[1];
			break;
			case 2:
				$primeironome = $nomediv[0];
			break;
			
			default:
				$primeironome = "";
			break;
		}
		return $primeironome;
	}	
 ?>