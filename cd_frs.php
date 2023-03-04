<?php  include './includes/PHP/vl_lg.php';?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>

<!-- modals que serão abertos ao enviar a aplicação -->

<?php include './frases/modals.php'; ?>

<!-- Corpo da aplicação -->

<div class="container mt-vh5">

	<div class="row center-align">

		<h1 class="h3-rd">Boas vindas ao cadastro de numerologias</h1>

	</div>

</div>

<div class="container mt-vh5 grey lighten-3 black-text bd-rds">

	<div class="row center-align">

		<h4 class="h5-rd">Faça o cadastro de numerologias abaixo</h4>

	</div>

<form class="" action="./frases/cad_frs.php" method="POST" enctype="multipart/form-data">

   <div class="container mt-vh5 mb-vh5">

      <div class="row">

         <h6>Selecione o tipo de Mapa</h6>

      </div>

      <select required class="browser-default" id="idTM" name="idTM" >

         <option disabled selected>Selecione o tipo de Mapa</option>

            <?php 

               $sql = "SELECT * FROM tipomapas";

               $query = mysqli_query($conn,$sql) or die(mysql_error());

               while ($dado = $query->fetch_array()) {

               $nomeTM = $dado['nomeTM'];

               $idTM = $dado['idTM'];

            ?>

         <option value="<?php echo$idTM; ?>"> <?php echo$nomeTM; ?></option>

         <?php } ?>

      </select>

</div>

   <div class="hide" id="esconder">

      <div class="container mt-vh5 mb-vh5">

         <div class="row">

            <h6>Selecione o nome da numerologia desejada</h6>

         </div>

         <select required class="browser-default" id="idTN" name="idTN" >

            <option disabled selected>Selecione o nome</option>

               <?php 

                  $sql = "SELECT * FROM tiponumerologia";

                  $query = mysqli_query($conn,$sql) or die(mysql_error());

                  while ($dado = $query->fetch_array()) {

                  $nomeTN = $dado['nomeTN'];

                  $idTN = $dado['idTN'];

               ?>

            <option value="<?php echo$idTN; ?>"> <?php echo$nomeTN; ?></option>

            <?php } ?>

         </select>

      </div>

      <div class="container">

      		<div class="row">

      			<h6>Selecione abaixo o público desejado</h6>

      		</div>

      		<select required class="browser-default" id="idpub" name="idpub" >

      			<option disabled selected>Selecione o Público</option>

              		<?php 

      					$sql = "SELECT * FROM publico";

      					$query = mysqli_query($conn,$sql) or die(mysql_error());

      					while ($dado = $query->fetch_array()) {

      					$nomepub = $dado['nomePub'];

      					$idPub = $dado['idPub'];

           			?>

      	    	<option value="<?php echo$idPub; ?>"> <?php echo$nomepub; ?></option>

      			<?php } ?>

      		</select>

      </div>

      <div class="container mt-vh5">

      	<div class="row">

      		<h6>Digite abaixo o numero da numerologia</h6>

      	</div>

      	 <div class="row">

      	 	<div class="input-field">

      	 		<input class="white inputcont" required id="N-numerologia" name="numeroN" type="number" data-length="3">

               	<label class="black-text" for="N-numerologia">Número da numerologia</label>

      	 	</div>

      	 </div>

      </div>

      <div class="container mt-vh5">

      		<div class="row">

      			<h6>Escreva abaixo a frase do tipo de numerologia</h6>

      		</div>

      		<div class="row">

      			<textarea required class="" id="frase" name="frase" ></textarea>

      		</div>

      		<div class="row center-align">

      			<button type="submit" class="btn blue"> Cadastrar </button>

      		</div>

      	</div>
   </div>
</form>

</div>

<!-- Scripts JS -->

<!-- JQUERY -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--  -->

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



<!-- MATERIALIZE JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>





<script>

 $(document).ready(function() {

    $('input.inputcont, textarea#textarea2').characterCounter();

  });



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

    if (teste == 3) {

    $('#modal3').modal();

    $('#modal3').modal('open'); 

    }

    if (teste == 4) {

    $('#modal4').modal();

    $('#modal4').modal('open'); 

    }

    if (teste == 5) {

    $('#modal5').modal();

    $('#modal5').modal('open'); 

    }

    if (teste == 6) {

    $('#modal6').modal();

    $('#modal6').modal('open'); 

    }

    if (teste == 7) {

    $('#modal7').modal();

    $('#modal7').modal('open'); 

    }

    if (teste == 8) {

    $('#modal8').modal();

    $('#modal8').modal('open'); 

    }

    if (teste == 9) {

    $('#modal9').modal();

    $('#modal9').modal('open'); 

    }

    if (teste == 10) {

    $('#modal10').modal();

    $('#modal10').modal('open'); 

    }

    if (teste == 11) {

    $('#modal11').modal();

    $('#modal11').modal('open'); 

    }

    if (teste == 12) {

    $('#modal12').modal();

    $('#modal12').modal('open'); 

    }

    if (teste == 13) {

    $('#modal13').modal();

    $('#modal13').modal('open'); 

    }

    $('#idTM').change(function(){
      $('#esconder').removeClass("hide");
    });

 });

</script>



<!-- Script padrão da página -->

<script>



	let crt = document.getElementById('crt');



    crt.classList.toggle("active");



</script>

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php'; ?>

