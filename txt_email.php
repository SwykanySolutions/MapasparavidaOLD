<?php  include './includes/PHP/vl_lg.php';?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>

<!-- modals que serão abertos ao enviar a aplicação -->

<?php include './frases/modals_txt_email.php'; ?>

<!-- Corpo da aplicação -->

<div class="container mt-vh5">

	<div class="row center-align">

		<h1 class="h3-rd">Boas vindas ao cadastro e edição dos textos</h1>

	</div>

</div>

<div class="container mt-vh5 grey lighten-3 black-text bd-rds">

	<div class="row center-align">

		<h4 class="h5-rd">Faça o cadastro do texto abaixo, para envio no email</h4>

	</div>

<form class="" action="./frases/cad_edt_txt_email.php" method="POST" enctype="multipart/form-data">

   <div class="container mt-vh5 mb-vh5">

      <div class="row">

         <h6>Selecione o Mapa do texto desejado</h6>

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

      <div class="container mt-vh5">

      		<div class="row">

      			<h6>Escreva abaixo o texto para o email deste tipo de mapa</h6>

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

    if (teste == 2) {

    $('#modal2').modal();

    $('#modal2').modal('open'); 

    }

    $('#idTM').change(function(){
      $('#esconder').removeClass("hide");
      var idTM = $('#idTM').val();
      $.post('./buscas/busca_text.php', { idTM:idTM }).done(function(resp){
			$('.trumbowyg-editor').html(resp); 
		})
    });

 });

</script>

<script>

	let cr_edt_txt_email = document.getElementById('cr_edt_txt_email');
    cr_edt_txt_email.classList.toggle("active");

</script>

<!--  -->

<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php' ?>