<?php  include './includes/PHP/vl_lg.php';?>
<?php  

if (isset($_POST['idPub'])) {



}else{

	header('Location:./pub.php');

}
?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>



<!-- Corpo da aplicação -->


<?php
$idPub = $_POST['idPub'];
$sqlslc = "SELECT * FROM publico WHERE idPub = '$idPub' ";
$queryslc = mysqli_query($conn,$sqlslc);
$dadosslc = $queryslc->fetch_array();
$idPub = $dadosslc['idPub'];
$nomepub = $dadosslc['nome'];
$img1 = $dadosslc['urlImg1'];
$img2 = $dadosslc['urlImg2'];
?>

<?php $erro = 0; if (isset($_POST['idErr'])) { $erro = $_POST['idErr']; }else{ $erro = 0;} ?>

<?php include './edt/modals_erro.php'; ?>

<div class="container mt-vh10 center-align">
	<div class="row">
	    <h1 class="h1-rd">Boas vindas ao sistema de numerologia</h1>
	</div>
    <div class="row">
        <h2 class="h2-rd">Esta é a página de edição de público:</h2>
    </div>
</div>
<div class="container mt-vh10  purple darken-1 bd-rds">
  	<form class="" action="edt/edt_pub.php" method="POST" enctype="multipart/form-data">
        <div class="container">
            <div class="row">
                <h5 class="center-align h5-rd"> Imagens do público selecionado </h5>
            </div>
            <div class="row">
                <div class="col s6">
                    <img class="materialboxed" width="650" src="<?php echo$img1;?>">
                </div>
                <div class="col s6">
                    <img class="materialboxed" width="650" src="<?php echo$img2;?>">
                </div>
            </div>
            <div class="row input-field mt-vh5">
                <input class="black-text" id="input_text" type="number" readonly name="idPub" value="<?php echo$nome; ?>" >
                <label class="black-text" for="input_text">id Público</label>
            </div>
            <div class="row input-field mt-vh5">
                <input class="black-text" id="input_text" type="text" readonly name="nome" value="<?php echo$nome; ?>" >
                <label class="black-text" for="input_text">Público</label>
            </div>
            <div class="row mt-vh5">
                <h6>Atualize abaixo as imagens</h6>
            </div>
            <div class="row mt-vh5">
                <div class="col s6">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input type="file" name="img1">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
                <div class="col s6">
                    <div class="file-field input-field">
                        <div class="btn">
                            <span>Imagem</span>
                            <input type="file" name="img2">
                        </div>
                        <div class="file-path-wrapper">
                            <input class="file-path validate" type="text">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container mt-vh5">
            <div class="row">
                <h6>Autalize abaixo o nome da numerologia</h6>
            </div>
            <div class="row input-field mt-vh5">
                <input class="black-text" name="nomeT" id="input_text" value="<?php echo$nometp; ?>" type="text" data-length="35">
                <label class="black-text" for="input_text">Nome da numerologia</label>
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
$('#editar').trumbowyg({

btns: [

	['viewHTML'],

	['fontsize'],

	['undo', 'redo'], // Only supported in Blink browsers

	['formatting'],

	['strong', 'em', 'del'],

	['superscript', 'subscript'],

	['link'],

	['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],

	['unorderedList', 'orderedList'],

	['horizontalRule'],

	['removeformat'],

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

<!--  -->

<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php'; ?>