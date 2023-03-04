<?php
$idPub = $_POST['idEXC'];
$sucesso = 0;
$erro = 0;
include "../includes/conectar.php";
$sqlvld = "DELETE FROM numerologia WHERE idPub = '$idPub'";
mysqli_query($conn, $sqlvld);
$sqldlt = "DELETE FROM publico WHERE idPub = '$idPub'";
if(mysqli_query($conn,$sqldlt)){
    $sqlat = " ALTER TABLE publico AUTO_INCREMENT = '$idPub'";
    mysqli_query($conn, $sqlat);
    // $sucesso = 1;
}else{
    $erro = 1;
}
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<form id="formenv" class="" action="../listar_pub.php" method="POST"> 
<div class="container hide">
    <input type="text" name="dltsucesso" value="<?php echo$sucesso; ?>">
</div>
</form>
<form id="formerr" class="" action="../listar_pub.php" method="POST"> 
<div class="container hide">
    <input type="text" name="dlterro" value="<?php echo$erro; ?>">
</div>
</form>
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var vld = <?php echo$sucesso;?>;if (vld == 1) {$( "#formenv" ).submit();}
    var err = <?php echo$erro;?>; if (err != 0) {$( "#formerr" ).submit();}
});
</script>