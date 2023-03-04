<?php 
function randon($tmn, $id)
		{
			switch ($id) {
				case 1:
					$str= 'aeiou';
					break;
				case 2:
					$str= 'äãâáà';
					break;
				case 3:
					$str= 'ëêéè';
					break;
				case 4:
					$str= 'ïîíì';
					break;
				case 5:
					$str= 'öõôóò';
					break;
				case 6:
					$str= 'üûúù';
					break;
				
				default:
					$str = "";
				break;
			}
			$shuffled = str_shuffle_unicode($str);
			$total = $shuffled;
	    	$shuffled1 = str_shuffle_unicode($total);
	    	$result = mb_substr($shuffled1, 0, $tmn, "UTF-8");
	    	return $result;
		}	
 ?>