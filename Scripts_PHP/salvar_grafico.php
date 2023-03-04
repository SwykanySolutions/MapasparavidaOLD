<?php 
$img = $_POST['img'];
$dir = '../graficos/'.$idmp.'/'.$idPub.'/'.$nomecompleto.'/';

$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
if (!file_exists($dir)) {
	mkdir($dir);
}
file_put_contents($dir.'gráfico_'.$idPed.'.png',$data);
?>