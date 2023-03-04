<?php 
function dividacarmicas($diaNasc, $expressao, $destino, $motivacao)
	{
		$dividacarmica = array();
		switch ($diaNasc) {
			case '13':
				$dividacarmica[] = $diaNasc;
			break;
			case '14':
				$dividacarmica[] = $diaNasc;
			break;
			case '16':
				$dividacarmica[] = $diaNasc;
			break;
			case '19':
				$dividacarmica[] = $diaNasc;
			break;
			default:
					switch ($expressao) {
						case '-4':
							$dividacarmica[] = 13;
						break;
						case '5':
							$dividacarmica[] = 14;
						break;
						case '7':
							$dividacarmica[] = 16;
						break;
						case '1':
							$dividacarmica[] = 19;
						break;
						default:
								switch ($destino) {
									case '-4':
										$dividacarmica[] = 13;
									break;
									case '5':
										$dividacarmica[] = 14;
									break;
									case '7':
										$dividacarmica[] = 16;
									break;
									case '1':
										$dividacarmica[] = 19;
									break;
									
									default:

											switch ($motivacao) {
												case '-4':
													$dividacarmica[] = 13;
												break;
												case '5':
													$dividacarmica[] = 14;
												break;
												case '7':
													$dividacarmica[] = 16;
												break;
												case '1':
													$dividacarmica[] = 19;
												break;
												
												default:
												break;
											}
									break;
								}
						break;
					}
			break;
		}

		return $dividacarmica;
	}
 ?>