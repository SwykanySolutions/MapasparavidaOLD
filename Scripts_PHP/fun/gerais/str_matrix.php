<?php 
		function str_matrix($matriz)
		{
			$vlrclmatrix = count($matriz);
			$cntdcl = 0;
			$cntdln = 0;
			$tudo = "";
			while($vlrclmatrix > $cntdln){
				if (empty($matriz[$cntdln])) {
					$cntdln++;
				}else{
					$linhas = $matriz[$cntdln];
					$vlrlnmatrix = count($linhas);
					while($cntdcl < $vlrlnmatrix){
						if(empty($linhas[$cntdcl])){
							$cntdcl++;
						}else{
							$tudo .= $linhas[$cntdcl];
							$cntdcl++;
						}
					}
					$cntdln++;
				}
			}
			return $tudo;
		}
 ?>