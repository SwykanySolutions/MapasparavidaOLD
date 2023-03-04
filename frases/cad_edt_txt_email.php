<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php 
include '../includes/conectar.php';
$valida = "";
$idTM = $_POST['idTM'];
$txtEmail = $_POST['frase'];
$sqlvld = "UPDATE tipomapas SET txtEmail = '$txtEmail' WHERE idTM = '$idTM'";
if (mysqli_query($conn, $sqlvld)) {
	$valida = 1;
}else{
	$valida = 2;
}
?>
<form id="formenv" class="" action="../txt_email.php" method="POST"> 
    <div class="container hide">
        <input type="text" name="vldt" value="<?php echo$valida; ?>">
    </div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var vld = <?php echo$valida;?>;
    if (vld != '') {
    $( "#formenv" ).submit();
    }
});
</script>