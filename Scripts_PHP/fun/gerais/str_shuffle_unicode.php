<?php 
function str_shuffle_unicode($str) {
				$tmp = preg_split('/(?<!^)(?!$)/u', $str);
		    	shuffle($tmp);
			    return join("", $tmp);
		}
 ?>