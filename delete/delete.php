<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<?php 

include '../includes/conectar.php';

$idN = $_POST['idNu'];

$idT = $_POST['idTi'];

$vldrexc = 0;

$sqldlt = "DELETE FROM tiponumerologia WHERE idT = '$idT'";
$sqldlt1 = "DELETE FROM numerologia WHERE idN = '$idN'";

    if (mysqli_query($conn,$sqldlt)) {

        if(mysqli_query($conn,$sqldlt1)){

                        $vldrexc = 1;
            }else{
                        $vldrexc = 2;
            }
        }else{
                        $vldrexc = 3;
        } 
?>

    <form id="exclrform" class="" action="../prod.php" method="POST"> 

        <div class="container hide">

            <input type="number" name="vldexc" value="<?php echo$vldrexc; ?>">

        </div>

    </form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>

    $(document).ready(function(){

        var vld = <?php echo$vldrexc;?>;

        if (vld != 0) {

        $( "#exclrform" ).submit();

        }

    });

</script>

