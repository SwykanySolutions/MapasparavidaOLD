<?php  include './includes/PHP/vl_lg.php';?>
<?php  

if (isset($_POST['idN'])) {



}else{

	header('Location:./prod.php');

}
?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>



<!-- Corpo da aplicação -->


<?php
$idN = $_POST['idN'];
$sqlslc = "SELECT * FROM numerologia WHERE idN = '$idN' ";
$queryslc = mysqli_query($conn,$sqlslc);
$dadosslc = $queryslc->fetch_array();
$idTN = $dadosslc['idTN'];
$idTM = $dadosslc['idTM'];
$numerologia = $dadosslc['numerologia'];
$frase = $dadosslc['frase'];
$idPub = $dadosslc['idPub'];
?>
<?php 
 $erro = 0;
if (isset($_POST['idErr'])) {
	$erro = $_POST['idErr'];
}else{
	$erro = 0;
}?>

<?php include './edt/modals_erro.php'; ?>

<div class="container mt-vh10 center-align">

	<div class="row">
		
	</div>

    <div class="row">

        <h3 class="h3-rd">Edição de numerologia</h3>

    </div>
    <div class="row">
		
	</div>

</div>

<div class="container new-bd-rds grey lighten-3">
  	<form class="" action="edt/env_edt.php" method="POST" enctype="multipart/form-data">
		<div class="container mt-vh5 mb-vh5">
			<div class="hide"> <input type="number" name="idN" value="<?php echo$idN; ?>"></div>
		    <div class="row">
		         <h6>Selecione o tipo de Mapa</h6>
		    </div>
		    <select required class="browser-default" id="idTM" name="idTM" >
		            <?php 
		               $sql = "SELECT * FROM tipomapas WHERE idTM = '$idTM'";
		               $query = mysqli_query($conn,$sql) or die(mysql_error());
		               $dadou = $query->fetch_array();
		               $nomeTM = $dadou['nomeTM'];
		            ?>
		            	<option selected value="<?php echo $idTM; ?>"><?php echo $nomeTM; ?></option>
		            <?php
		               $sqlng = "SELECT * FROM tipomapas WHERE idTM != '$idTM'";
		               $queryng = mysqli_query($conn,$sqlng) or die(mysql_error());
		               while ($dado = $query->fetch_array()) {
		               $nomeTMd = $dado['nomeTM'];
		               $idTNd = $dado['idTN'];
		            ?>
		         <option value="<?php echo$idTNd; ?>"> <?php echo$nomeTMd; ?></option>

		         <?php } ?>
		     </select>
		</div>
	    <div class="container mt-vh5 mb-vh5">
	         <div class="row">
	            <h6>Selecione o nome da numerologia desejada</h6>
	         </div>
	         <select required class="browser-default" id="idTN" name="idTN" >
	            <?php 
	               $sql = "SELECT * FROM tiponumerologia WHERE idTN = '$idTN'";
	               $query = mysqli_query($conn,$sql) or die(mysql_error());
	               $dadou = $query->fetch_array();
	               $nomeTN = $dadou['nomeTN'];
	            ?>
	            	<option selected value="<?php echo $idTN; ?>"><?php echo $nomeTN; ?></option>
	            <?php
	               $sqlng = "SELECT * FROM tiponumerologia WHERE idTN != '$idTN'";
	               $queryng = mysqli_query($conn,$sqlng) or die(mysql_error());
	               while ($dado = $queryng->fetch_array()) {
	               $nomeTNN = $dado['nomeTN'];
	               $idTNN = $dado['idTN'];
	            	?>
	         		<option value="<?php echo$idTNN;?>"><?php echo$nomeTNN;?></option>
	         		<?php } ?>
	      	</select>
      	</div>
      	<div class="container">
      		<div class="row">
      			<h6>Selecione abaixo o público desejado</h6>
      		</div>
      		<select required class="browser-default" id="idpub" name="idpub" >
      				<?php 
      					$sql = "SELECT * FROM publico WHERE idPub = '$idPub'";
	               		$query = mysqli_query($conn,$sql) or die(mysql_error());
	               		$dadou = $query->fetch_array();
	               		$nomepub = $dadou['nomePub'];
      				 ?>
      				<option selected value="<?php echo $idPub; ?>"><?php echo $nomepub; ?></option>
              		<?php 
      					$sql = "SELECT * FROM publico WHERE idPub != '$idPub'";
      					$query = mysqli_query($conn,$sql) or die(mysql_error());
      					while ($dado = $query->fetch_array()) {
      					$nomepub = $dado['nomePub'];
      					$idPub = $dado['idPub'];
           			?>
      	    	<option value="<?php echo$idPub; ?>"> <?php echo$nomepub; ?></option>
      			<?php } ?>
      		</select>
      	</div>
      	<div class="container">
			<div class="row mt-vh5">
					<h6>Atualize abaixo a numerologia</h6>
			</div>
			<div class="row input-field mt-vh5">
	 	 		<input class="black-text white" id="input_text" type="number" name="Numerologia" value="<?php echo$numerologia; ?>"  data-length="3">
         		<label class="black-text" for="input_text">Numerologia</label>
	 		</div>
		</div>
		<div class="container mt-vh5">
			<div class="row">
				<h6>Atualize abaixo a frase da numerologia</h6>
			</div>
			<div class="row">
				<textarea class="" id="editar" name="frase" ><?php echo$frase; ?></textarea>
			</div>
			<div class="row center-align">
				<button type="submit" class="btn purple darken-4 waves-effect"> Atualizar </button>
			</div>
		</div>
	</form>
</div>
<!-- Esse script deve ser modificado por página que conter a nava bar -->
<!-- JQUERY -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- trumbowing -->
<script src="./includes/JS/trumbowyg.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.cleanpaste.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.pasteimage.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.upload.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.allowtagsfrompaste.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.base64.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.colors.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.emoji.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.fontfamily.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.giphy.js"></script>
<!-- <script src="./includes/JS/trumbowyg/trumbowyg.highlight.js"></script> -->
<script src="./includes/JS/trumbowyg/trumbowyg.history.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.indent.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.insertaudio.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.lineheight.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.mathml.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.mention.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.noembed.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.pasteembed.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.preformatted.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.resizimg.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.ruby.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.specialchars.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.table.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.template.js"></script>
<script src="./includes/JS/trumbowyg/trumbowyg.fontsize.js"></script>
<!-- MATERIALIZE CSS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
	var error = <?php echo$erro; ?>;

    if (error == 1 ) {

    $('#modal1').modal();

    $('#modal1').modal('open'); 

    }

    if (error == 2) {

    $('#modal2').modal();

    $('#modal2').modal('open'); 

    }

    if (error == 3) {

    $('#modal3').modal();

    $('#modal3').modal('open'); 

    }

    if (error == 4) {

    $('#modal4').modal();

    $('#modal4').modal('open'); 

	}
</script>

<script>

$('#editar')

.trumbowyg({
   btnsDef: {
        align: {
            dropdown: ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ico: 'justifyLeft'
        },
        frmt: {
         dropdown: ['strong', 'em', 'del'],
         ico: 'strong'
        },
        sbscrpt: {
            dropdown: ['superscript', 'subscript'],
            ico: 'superscript'
        }
    },

        btns: [

        ['fontsize'],

        ['undo', 'redo'], // Only supported in Blink browsers

        ['formatting'],

        ['fontfamily'],

        ['frmt'],

        ['sbscrpt'],

        ['link'],

        ['align'],

        ['unorderedList', 'orderedList'],

        ['fullscreen']

    ],

   plugins: {
        fontsize: {
         sizeList: [
         '5px',
         '7px',
         '10px',
         '14px',
         '18px',
         '22px'
      ],
            allowCustomSize: false
        },
        fontfamily: {
            fontList: [
               {name: 'Arial', family: 'Arial, Helvetica, sans-serif'},
               {name: 'Comic Sans', family: 'Comic Sans MS, Textile, cursive, sans-serif'},
               {name: 'Courier New', family: 'Courier New, Courier, monospace'},
               {name: 'Georgia', family: 'Georgia, serif'},
               {name: 'Impact', family: 'Impact, Charcoal, sans-serif'},
               {name: 'Lucida Console', family: 'Lucida Console, Monaco, monospace'},
               {name: 'Lucida Sans', family: 'Lucida Sans Uncide, Lucida Grande, sans-serif'},
               {name: 'Palatino', family: 'Palatino Linotype, Book Antiqua, Palatino, serif'},
               {name: 'Tahoma', family: 'Tahoma, Geneva, sans-serif'},
               {name: 'Times New Roman', family: 'Times New Roman, Times, serif'},
               {name: 'Trebuchet', family: 'Trebuchet MS, Helvetica, sans-serif'},
               {name: 'Verdana', family: 'Verdana, Geneva, sans-serif'},
               {name: 'Montserrat', family: 'Montserrat, sans-serif'},
               {name: 'Arial Black', family: 'Arial Black, Gadget, sans-serif'},
               {name: 'Archivo Black', family: 'Archivo Black, sans-serif'}
            ]
        }
    }

});

</script>
<!-- Esse script deve ser modificado por página que conter a nava bar -->
<script>
	let edit = document.getElementById('edit');

    edit.classList.toggle("active");

   	$(document).ready(function() {

    $('input#input_text, textarea#textarea2').characterCounter();

  });
</script>
<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php'; ?>