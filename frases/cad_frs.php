<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
if (isset($_POST['idpub'])) {
    $idTN = $_POST['idTN'];
    $idTM = $_POST['idTM'];
    $idP = $_POST['idpub'];
    $numeroN = $_POST['numeroN'];
    $frase = $_POST['frase'];
    $valida = '';
    include '../includes/conectar.php';
    $tmnN = strlen($numeroN);
    if ($tmnN <= 3) {
        $sqlvld = "SELECT * FROM numerologia WHERE numerologia = '$numeroN' AND idTN = '$idTN' AND idTM = '$idTM' AND idPub = '$idP'";
        $vld = mysqli_query($conn, $sqlvld);

        if ($data = $vld->fetch_array()) {
            $sqlfinaliza = "UPDATE numerologia SET frase = '$frase' WHERE numerologia = '$numeroN' AND idTN = '$idTN' AND idTM = '$idTM' AND idPub = '$idP'";

            if (mysqli_query($conn, $sqlfinaliza)) {
                                    $valida = '1.1';
            }else{
                                    $valida = 2;
            }
        }else{

            $sql = "INSERT into numerologia (numerologia, frase, idTN, idTM, idPub) VALUES ('$numeroN','$frase','$idTN','$idTM','$idP')";
            $inserindo = mysqli_query($conn, $sql);
                if ($inserindo) {
                    
                    $sqlajs = "SELECT frase FROM numerologia WHERE frase = '$frase'";
                    $qryajs = mysqli_query($conn, $sqlajs);
                    $arrajs = $qryajs->fetch_array();
                    $frsajstr = $arrajs['frase'];
                    $frsajstd = str_replace('&quot;', '', $frsajstr);
                    $sqlajst = "UPDATE numerologia SET frase = '$frsajstd' WHERE frase = '$frase'";
                    
                    if (mysqli_query($conn, $sqlajst)) {

                                        $valida = 1;
                    }else{
                                        $valida = 2;
                    }                                 
                }else{
                                        $valida = 2;
                } 
        }
    }else{
                                    $valida = 13;
    }                  
}else{
                                    $valida = 13;
}
?>
<form id="formenv" class="" action="../cd_frs.php" method="POST"> 
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