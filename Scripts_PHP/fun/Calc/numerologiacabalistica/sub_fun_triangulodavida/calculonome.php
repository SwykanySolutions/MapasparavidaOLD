<?php 
function calculonome ($nome)
		{
			$nome = strtolower($nome);
			$nome = str_replace(" ", "", $nome);
			$datanome = preg_split("/(?<!^)(?!$)/u", $nome);
			$cnt = count($datanome);
			$tudo = "";
			$vldnum = 0;
			while($cnt > $vldnum){
				switch ($datanome[$vldnum]) {
					case 'a':
					$tudo .= "1";
					break;

					case 'b':
					$tudo .= '2'; 
					break;

					case 'c':
					$tudo .= '3'; 
					break;

					case 'd':
					$tudo .= '4';
					break;

					case 'e':
					$tudo .= "5";
					break;

					case 'f':
					$tudo .= '8';
					break;

					case 'g':
					$tudo .= '3';
					break;

					case 'h':
					$tudo .= '5';
					break;

					case 'i':
					$tudo .= "1";
					break;

					case 'j':
					$tudo .= '1';
					break;

					case 'k':
					$tudo .= '2';
					break;

					case 'l':
					$tudo .= '3';
					break;

					case 'm':
					$tudo .= '4';
					break;

					case 'n':
					$tudo .= '5';
					break;

					case 'o':
					$tudo .= "7";
					break;

					case 'p':
					$tudo .= '8';
					break;

					case 'q':

					$tudo .= '1';
					break;

					case 'r':
					$tudo .= '2';
					break;

					case 's':
					$tudo .= '3';
					break;

					case 't':
					$tudo .= '4';
					break;

					case 'u':
					$tudo .= "6";
					break;

					case 'v':
					$tudo .= '6';
					break;

					case 'w':
					$tudo .= '6';
					break;

					case 'x':
					$tudo .= '6';
					break;

					case 'y':
					$tudo .= '1';
					break;

					case 'z':
					$tudo .= '7';
					break;

					case 'ç':
					$tudo .= '6';
					break;
					
					case 'ä':
					$tudo = "2";
					break;

					case 'ã':
					$tudo .= "4";
					break;

					case 'â':
					$tudo .= "2";
					break;

					case 'á':
					$tudo .= "3";
					break;

					case 'à':
					$tudo .= "2";
					break;

					case 'ë':
					$tudo .= "10";
					break;

					case 'ê':
					$tudo .= "10";
					break;

					case 'é':
					$tudo .= "7";
					break;

					case 'è':
					$tudo .= "10";
					break;

					case 'ï':
					$tudo .= "2";
					break;

					case 'î':
					$tudo .= "2";							
					break;

					case 'í':
					$tudo .= "3";
					break;

					case 'ì':
					$tudo .= "2";
					break;

					case 'ö':
					$tudo .= "14";
					break;

					case 'õ':
					$tudo .= "10";
					break;

					case 'ô':
					$tudo .= "14";
					$vldnum++;
					break;

					case 'ó':
					$tudo .= "9";
					break;

					case 'ò':
					$tudo .= "14";
					break;

					case 'ü':
					$tudo .= "12";
					break;

					case 'û':
					$tudo .= "12";
					break;

					case 'ú':
					$tudo .= "8";
					break;

					case 'ù':
					$tudo .= "12";
					break;

					default:

					break;
				}
				$vldnum++;
			}
			return $tudo;
			
		}
?>