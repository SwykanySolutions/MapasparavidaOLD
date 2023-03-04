<?php 
$str = 'coração da programação';
$tudo = preg_split('/(?<!^)(?!$)/u', $str);
echo $tudo[5];

 ?>