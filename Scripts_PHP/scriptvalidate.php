<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<?php 
// include './includes/basescript.php';
include './fun/Calc/numerologiacabalistica/calcular.php';
// include './conection_scripts.php'; 
include '../includes/conectar.php';
// $vldinsert = 0; 
// $sqlVlint = "SELECT idPed FROM pedidos WHERE idPed = (SELECT max(idPed) from pedidos)"; 
// $queryint = mysqli_query($connE,$sqlVlint); 
// $idPed = $queryint->fetch_array();
// if (isset($idPed['idPed'])) {
//     $ultimo = $idPed['idPed'];
// }else{
//  $ultimo = 0; 
// }
// $sqlVlext = "SELECT * FROM pedidos WHERE idP > '$ultimo'";
// $queryext = mysqli_query($connE,$sqlVlext) or die(mysql_error($connE));
// if ($newPed = $queryext->fetch_array()) {
// $idP = $newPed['idP']; $idC = $newPed['idC'];$idmp = $newPed['idmp']; $email = $newPed['email']; $dadosNB1 = $newPed['dadosNB1']; $dadosNB2 =$newPed['dadosNB2']; $dadosNP1 = $newPed['dadosNP1']; $dadosNP2 = $newPed['dadosNP2']; $dadosNE1 = $newPed['dadosNE1']; $dadosNE2 = $newPed['dadosNE2']; $nB = $newPed['nB']; $nP = $newPed['nP']; $nE = $newPed['nE']; $dadosNB3 = $newPed['dadosNB3']; $dadosNP3 = $newPed['dadosNP3'];
// $sqlIns = "INSERT INTO pedidos (idPed, idC, idmp, email, dadosNB1, dadosNB2, dadosNB3, dadosNP1, dadosNP2, dadosNP3 , dadosNE1, dadosNE2, nB, nP, nE) VALUES ('$idP', '$idC', '$idmp', '$email', '$dadosNB1', '$dadosNB2', '$dadosNP1', '$dadosNP2', '$dadosNE1', '$dadosNE2','$nB', '$nP', '$nE')";
//     if (mysqli_query($conn, $sqlIns)) {
// 		$idPed = $idP; $sqlCalc = "SELECT * FROM pedidos WHERE idPed = '$idPed'";$queryCalc = mysqli_query($conn, $sqlCalc); $arrayCalc = $queryCalc->fetch_array();
//         if ($arrayCalc) {
//             $calcNBname = $arrayCalc['dadosNB1']; $calcNBdata = $arrayCalc['dadosNB2']; $calcNPname = $arrayCalc['dadosNP1']; $calcNPdata = $arrayCalc['dadosNP2']; $calcNEname = $arrayCalc['dadosNE1']; $calcNEdata = $arrayCalc['dadosNE2']; $nB = $arrayCalc['nB']; $nP = $arrayCalc['nP']; $nE = $arrayCalc['nE']; $nmsB = $arrayCalc['dadosNB3']; $nmsP = $arrayCalc['dadosNP3']; $idmp = $arrayCalc['idmp'];
//              if ($nB == 1) { 
//                 $NM = $calcNBname;
//                 $DT = $calcNBdata; 
//                 $pub = 1; 
//                 $NMS = $nmsB; 
//             $calculo = calcular($NM, $DT, $pub, $NMS, );
//             $bases = bases($pub, $idmp);
//             $mapa = criarmapa($textos, $bases, $novonome, $nomecompleto, $calculo);

//             }if ($nP == 1) { 
//             $NM = $calcNPname; 
//             $DT = $calcNPdata; 
//             $NMS = $nmsP; 
//             $pub = 2;
            

//             }if ($nE == 1) { 
//             $NM = $calcNEname; 
//             $DT = $calcNEdata; 
//             $pub = 3;
           

            


//             }  
//         }else{echo 'Erro ao efetuar a conexão';}
// 	}else{ echo $sqlIns."retorou o erro"; }
// }else{ echo "não foi possivel encontrar menhum Pedido"; } 

calcular('Pablo Guilherme Leite de Souza', '2003-04-05', 1, 'Pablo Guilherme', 1, 'espanpc@gmail.com', $conn);

?>


<script type="text/javascript">
    
</script>



<!--  <form id="vldIns" class="" action="script_vld_pt1.php" method="POST"> 

        <div class="container hide">

            <input class="hide" type="number" name="idP" value="<?php echo$idP; ?>">

            <input class="hide" type="email" name="email" value="<?php echo$email; ?>">

        </div>

    </form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){

        var vld = <?php echo$vldinsert;?>;

        if (vld != 0) {

        $( "#vldIns" ).submit();

        }

    });

</script> -->

