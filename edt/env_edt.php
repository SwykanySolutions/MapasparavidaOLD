<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php 

$numerologia = $_POST['Numerologia'];

$frase = $_POST['frase'];

$idPub = $_POST['idpub'];

$idN = $_POST['idN'];

$idTN = $_POST['idTN'];

$idTM = $_POST['idTM'];

$atualizado = 0;

$erro = 0;

include '../includes/conectar.php';

$tmN = strlen($numerologia);

	if ($tmN <= 3) {

		$sqlU1 = "UPDATE numerologia SET idTN = '$idTN', numerologia = '$numerologia' , idPub = '$idPub', frase = '$frase' WHERE idN = '$idN'";

			if (mysqli_query($conn, $sqlU1)) {
                
                $sqlajs = "SELECT frase FROM numerologia WHERE idN = '$idN'";
                $qryajs = mysqli_query($conn, $sqlajs);
                $arrajs = $qryajs->fetch_array();
                $frsajstr = $arrajs['frase'];
                $frsajstd = str_replace('&quot;', '', $frsajstr);
                $sqlajst = "UPDATE numerologia SET frase = '$frsajstd' WHERE idN = '$idN'";
               if (mysqli_query($conn, $sqlajst)) {
                    $atualizado = 1;
               }else{
                    $erro = 4;
               }
			}else{
				    $erro = 4;
			}
	}else{
				    $erro = 1;			
	}
?>
<form id="formenv" class="" action="../prod.php" method="POST"> 

    <div class="container hide">

        <input type="text" name="att" value="<?php echo$atualizado; ?>">

    </div>

</form>

<form id="formerr" class="" action="../edtr_frs.php" method="POST"> 

    <div class="container hide">

        <input type="text" name="idErr" value="<?php echo$erro; ?>">

        <input type="text" name="idN" value="<?php echo$idN; ?>">

    </div>

</form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

$(document).ready(function(){

    var vld = <?php echo$atualizado;?>;

    if (vld == 1) {

    $( "#formenv" ).submit();

    }

    var err = <?php echo$erro;?>;

    if (err != 0) {

    $( "#formerr" ).submit();

    }

});

</script>

