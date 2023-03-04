<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php 
include '../includes/conectar.php';
$idmapa = $_POST['idmapa'];
$idtipo = $_POST['idtipo'];
$idpub = $_POST['idpub'];
$frase = $_POST['frase'];
$retorno = "";
	$sqlex = "SELECT * FROM basesdosmapas WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'"; $queryex = mysqli_query($conn, $sqlex);
	if ($queryex->fetch_array()) {
		$sqlupdt = "UPDATE basesdosmapas SET frase = '$frase' WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'";
		if (mysqli_query($conn, $sqlupdt)) {
			$sqlajs = "SELECT frase FROM basesdosmapas WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'";
        	$qryajs = mysqli_query($conn, $sqlajs);
        	$arrajs = $qryajs->fetch_array();
        	$frsajstr = $arrajs['frase'];
        	$frsajstd = str_replace('&quot;', '', $frsajstr);
        	$sqlajst = "UPDATE basesdosmapas SET frase = '$frsajstd' WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'";
        	if (mysqli_query($conn, $sqlajst)) {
        				$retorno = "1.1";
        	}else{
        				$retorno = 2;
        	}
		}else{
						$retorno = 2;
		}
	}else{
		$sqlins = "INSERT into basesdosmapas (frase, idTM, idTN, idPub) VALUES ('$frase', '$idmapa', '$idtipo', '$idpub')";
		if (mysqli_query($conn, $sqlins)) {
			$sqlajs = "SELECT frase FROM basesdosmapas WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'";
        	$qryajs = mysqli_query($conn, $sqlajs);
        	$arrajs = $qryajs->fetch_array();
        	$frsajstr = $arrajs['frase'];
        	$frsajstd = str_replace('&quot;', '', $frsajstr);
        	$sqlajst = "UPDATE basesdosmapas SET frase = '$frsajstd' WHERE idTN = '$idtipo' AND idTM = '$idmapa' AND idPub = '$idpub'";
        	if (mysqli_query($conn, $sqlajst)) {
        				$retorno = 1;
        	}else{
        				$retorno = 2;
        	}

		}else{
						$retorno = 2;
		}
	}

 ?>
 <form id="formenv" class="" action="../editar_base.php" method="POST"> 
    <div class="container hide">
        <input type="text" name="vldt" value="<?php echo$retorno; ?>">
    </div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var vld = <?php echo$retorno;?>;
    if (vld != "") {
    $( "#formenv" ).submit();
    }
});
</script>