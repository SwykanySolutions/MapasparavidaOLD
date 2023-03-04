<?php 
function mespessoal($anoP)
	{
		$mesAt = date('m');
		$rtanual = 0;
		$mesAt = $mesAt-1;
		$mesAt = $mesAt+1;

		while ($rtanual<12) {

			switch ($mesAt) {

				case '1':
				$janeiro = 1+$anoP;
				break;

				case '2':
				$fevereiro = 2+$anoP;
				break;

				case '3':
				$marco = 3+$anoP;
				break;

				case '4':
				$abril = 4+$anoP;
				break;

				case '5':
				$maio = 5+$anoP;
				break;

				case '6':
				$junho = 6+$anoP;
				break;

				case '7':
				$julho = 7+$anoP;
				break;

				case '8':
				$agosto = 8+$anoP;
				break;

				case '9':
				$setembro = 9+$anoP;
				break;

				case '10':
				$outubro = 10+$anoP;
				break;

				case '11':
				$novembro = 11+$anoP;
				break;

				case '12':
				$dezembro = 12+$anoP;
				break;
				
				default:
					if ($mesAt == 13) {
					$mesAt = 0;
					$rtanual = $rtanual-1;
					}
				break;
			}
		$mesAt++;
		$rtanual++;
		}
		$return = array($janeiro, $fevereiro, $marco, $abril, $maio, $junho, $julho, $agosto , $setembro, $outubro, $novembro, $dezembro); 
		return $return;
	}
 ?>