<?php 
$img = $_POST['img'];
$nomecompleto = $_POST['nomecompleto'];
$idPub = $_POST['idPub'];
$idmp = $_POST['idmp'];
$idPed = $_POST['idped'];
$nomecompleto = str_replace(' ','_', $nomecompleto);
$dir = '../../../../graficos/'.$idmp.'/'.$idPub.'/'.$nomecompleto.'/';
$data = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $img));
if (file_exists($dir)) {
	$locationchart = $dir.'grafico_'.$idPed.'.jpg';
}else{
	mkdir($dir, 0777, true);
	$locationchart = $dir.'grafico_'.$idPed.'.jpg';
}
file_put_contents($locationchart,$data);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script type="text/javascript">
	var locationchart = '<?php echo$locationchart;?>';
	$.post('locationchart.php', {locationchart: locationchart});
</script>