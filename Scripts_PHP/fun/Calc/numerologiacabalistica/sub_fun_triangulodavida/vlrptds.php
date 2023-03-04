<?php 
function vlrptds($seq)
		{
			$rptds = "";
			$arr = str_split($seq);
			$cnt = count($arr);
			$nm = 0;
			$nm1 = 0;
			$nm2 = 0;
			while ($cnt > $nm) {
				if (isset($arr[$nm]) && isset($arr[$nm+1]) && isset($arr[$nm+2])) {
					if($arr[$nm] == $arr[$nm+1] && $arr[$nm+1] == $arr[$nm+2]){
						$rptds .= $nm.","; $nm1 = $nm+1; $nm2 = $nm+2;
						$rptds .= $nm1.",";
						$rptds .= $nm2;
					}
				}
				$nm++;
			}
			return $rptds;
		}
 ?>