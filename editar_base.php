<!-- VALIDAÇÃO DE LOGIN VIA PHP -->

<?php  include './includes/PHP/vl_lg.php';?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>

<?php include './edt/modals_edt_base.php'; ?>

<!-- Corpo da aplicação -->
<div class="section">
		<h4 class="center-align">Edição de Frases Bases</h4>
</div>
<div class="section">
	<div class="container grey grey lighten-3 black-text bd-rds" style="padding-top: 3rem; padding-left: 3rem; padding-right: 3rem;">
		<form class="" style="" action="./edt/edt_base.php" method="POST" enctype="multipart/form-data" id="">
			<div class="row">
					<h5 class="center-align">Selecione o mapa da base</h5>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<select name="idmapa" id="idmapa" class="browser-default">
					<option value="" disabled selected>Selecione o mapa da base</option>
					<?php $sql = "SELECT * FROM tipomapas ORDER BY idTM"; $query = mysqli_query($conn, $sql);
					while ($dataM = $query->fetch_array()) {
						$idTM = $dataM['idTM']; $nomeTM = $dataM['nomeTM'];
					 ?>
					 <option value="<?php echo$idTM;?>"><?php echo$nomeTM;?></option>
					 <?php } ?>
				</select>
			</div>
		
		<div class="hide" id="esconder1">
			<div class="row" style="margin-top: 3rem;">
				<h5 class="center-align">Selecione o tipo da base abaixo</h5>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<select name="idtipo" id="idtipo" class="browser-default">
					<option value="0" disabled selected>Selecione o tipo da base</option>
					<?php $sql1 = "SELECT * FROM tiponumerologia ORDER BY idTN"; $query1 = mysqli_query($conn, $sql1);
					while ($dataN = $query1->fetch_array()) { $idTN = $dataN['idTN']; $nomeTN = $dataN['nomeTN'];
					 ?>
					 <option value="<?php echo$idTN;?>"><?php echo$nomeTN;?></option>
					 <?php } ?>
				</select>
			</div>
		</div>
		<div class="hide" id="esconder2">
			<div class="row" style="margin-top: 3rem;">
				<h5 class="center-align">Selecione o público abaixo:</h5>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<select name="idpub" id="idpub" class="browser-default">
					<option value="0" disabled selected>Selecione o tipo da base</option>
					<?php $sql2 = "SELECT idPub, nomePub FROM publico ORDER BY idPub"; $query2 = mysqli_query($conn, $sql2);
					while ($dataP = $query2->fetch_array()) { $idP = $dataP['idPub']; $nomeP = $dataP['nomePub'];
					 ?>
					 <option value="<?php echo$idP;?>"><?php echo$nomeP;?></option>
					 <?php } ?>
				</select>
			</div>
		</div>
		<div class="hide row" id="esconder3">
			<div class="row" style="margin-top: 3rem;">
				<h5 class="center-align">Edite o texto da base abaixo</h5>
			</div>
			<div class="row" style="margin-top: 1rem;">
				<textarea required class="" id="frase" name="frase" ></textarea>
			</div>
			<div class="row center-align">
			<button type="submit" class="btn flat white-text">Enviar</button>
			</div>
		</div>
		</form>
	</div>
</div>







<div class="container">

	<!-- divisão em containers dentro do container principal -->

	<div class="container">

		<div class="row">

			

		</div>

		<div class="row">

			

		</div>

		<div class="row">

			

		</div>

	</div>

		<div class="row">

			

		</div>

		<div class="row">

			

		</div>

</div>

<!-- Esse script deve ser modificado por página que conter a nava bar -->

<script>
	let index = document.getElementById('edt_bs');
    index.classList.toggle("active");
</script>

<!-- JQUERY -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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

<script>

$('#frase')

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
	$(document).ready(function(){
		$('#idmapa').change(function() {
			$('#esconder1').removeClass('hide');
			var idtipo = $('#idtipo').val(),
			idmapa = $('#idmapa').val(),
			idpub = $('#idpub').val()
			if (idtipo > 0 | idpub > 0) {
				envio(idmapa, idtipo, idpub)
			}	
		})
		$('#idtipo').change(function() {
			$('#esconder2').removeClass('hide')
			var idT = $('#idtipo').val(),
			idmapa = $('#idmapa').val(),
			idpub = $('#idpub').val()
			if (idpub > 0) {
				envio(idmapa, idT, idpub)
			}
		})
		$('#idpub').change(function() {
			$('#esconder3').removeClass('hide')
			var idT = $('#idtipo').val(),
			idmapa = $('#idmapa').val(),
			idpub = $('#idpub').val()
			envio(idmapa, idT, idpub)
		})
	})
	function envio(idMP, idT, idPub) {
		$.post('./buscas/busca_base.php', { idTM:idMP, idTN:idT, idpub:idPub }).done(function(resp){
			$('.trumbowyg-editor').html(resp); 
		})
	}
</script>

<?php 

if(isset($_POST['vldt']))

{

	$valida = $_POST['vldt'];

	echo $valida;

}else

{

	$valida = 0;

	$vld = 0;

}

?>

<script>

 $(document).ready(function(){

 	var teste = <?php echo $valida; ?>;

 	if (teste == 1 ) {

    $('#modal1').modal();

    $('#modal1').modal('open'); 

    }
   if (teste == '1.1' ) {

    $('#modal1-1').modal();

    $('#modal1-1').modal('open'); 

    }

    if (teste == 2) {

    $('#modal2').modal();

    $('#modal2').modal('open'); 

    }

 });

</script>

<!--  -->

<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php' ?>