<?php  include './includes/PHP/vl_lg.php'; $erro = 0;?>
<?php if(isset($_POST['idedt'])){ $idPub = $_POST['idedt'];} else{ header('Location:./listar_pub.php');} if (isset($_POST['iderro'])){ $erro = $_POST['iderro']; }?>
<!-- INICIO DO DOCUMENTO HTML -->
<?php  include './includes/PHP/inicio.php';?>
<!-- NAVBAR DO DOCUMENTO HTML -->
<?php  include './includes/navbar.php';?>
<?php include './edt/modals_erro_edt.php'; ?>
<!-- Corpo da aplicação -->
<div class="section">
	<div class="container">
	<!-- divisão em containers dentro do container principal -->
		<div class="container center-align new-bd-rds grey lighten-3">
			<div class="row">
				<?php $sqlslc = "SELECT * FROM publico WHERE idPub = '$idPub'";
					$queryslc = mysqli_query($conn,$sqlslc);
					$arrayslc = $queryslc->fetch_array();
					$nome = $arrayslc['nomePub']; ?>
				<form action="./edt/edtpub_env.php" method="POST" enctype="multipart/form-data" id="" class="col s12">
					<div class="row">
						<div class="col s12">
							<h3 class="h3-rd">Bem vindo a guia de edição de público:</h3>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12 hide">
							<input class="" id="idnumerologia" readonly type="number" name="idPub" value="<?php echo$idPub;?>">
							<label for="idnumerologia">ID da Numerologia</label>
						</div>	
						<div class="input-field col s12">
							<input class="white" id="nome" type="text" class="validate"  name="nome" value="<?php echo$nome;?>">
							<label for="nome">Nome Público</label>
						</div>
					</div>
					<?php 
					if(isset($arrayslc['dir1']) && isset($arrayslc['dir2'])){
					$img1 = $arrayslc['dir1']; $img2 = $arrayslc['dir2'];
					?>
					<div class="row">
						<div class="col s6">
							<img class="materialboxed responsive-img" src="<?php echo$img1;?>">
						</div>
						<div class="col s6">
							<img class="materialboxed responsive-img" src="<?php echo$img2;?>">
						</div>
					</div>
					<?php }else{  $baseimg ='http://'.$_SERVER['SERVER_NAME'].'/mapasparavida/imgs/Background.jpg';?>
					<div class="row">
						<div class="col s6">
							<img class="materialboxed responsive-img" src="<?php echo$baseimg;?>">
						</div>
						<div class="col s6">
							<img class="materialboxed responsive-img" src="<?php echo$baseimg;?>">
						</div>
					</div>	
					<div class="row">
						<div class="col s6">
						<p class="col s11">Esta imagem aparece, pois não há nenhuma inserida no banco de dados<br> Faça o upload de uma imagem abaixo:</p>
						</div>
						<div class="col s6">
						<p class="col s11">Esta imagem aparece, pois não há nenhuma inserida no banco de dados<br> Faça o upload de uma imagem abaixo:</p>
						</div>
					</div>
					<?php }?>
					</div>
					<div class="row">
						<div class="file-field input-field col s6">
							<div class="btn">
								<span>Imagem</span>
								<input type="file" accept=".jpg, .png, .jpeg" name="img1">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<label class="">tamanho máximo permitido 4 MB</label>
							</div>
						</div>
						<div class="file-field input-field col s6">
							<div class="btn">
								<span>Imagem</span>
								<input type="file" accept=".jpg, .png, .jpeg" name="img2">
							</div>
							<div class="file-path-wrapper">
								<input class="file-path validate" type="text">
								<label class="">tamanho máximo permitido 4 MB</label>
							</div>
						</div>
					</div>	
					<div class="section"></div>
					<div class="row">
							<button class="btn waves-effect waves-light blue" type="submit">Atualizar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<!-- Esse script deve ser modificado por página que conter a nava bar -->
<script>
	let edt_pub = document.getElementById('edt_pub');
    edt_pub.classList.toggle("active");
</script>

<!-- JQUERY -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
    $('.materialboxed').materialbox();
    var erro = <?php echo$erro;?>;
    switch(erro){
	    case 1:
	    $('#modal1').modal();
	    $('#modal1').modal('open'); 
	    break;

		case 2:
		$('#modal2').modal();
    	$('#modal2').modal('open'); 
		break;

		case 3:
		$('#modal3').modal();
    	$('#modal3').modal('open'); 
		break;

		case 4:
		$('#modal4').modal();
    	$('#modal4').modal('open'); 
		break;
		
		case 5:
		$('#modal5').modal();
    	$('#modal5').modal('open'); 
		break;
 
		case 6:
		$('#modal6').modal();
    	$('#modal6').modal('open');
		break;

		case 7:
		$('#modal7').modal();
    	$('#modal7').modal('open');
		break;

		default:
		break;

    }
  });
</script>
<!--  -->
<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->
<!-- Fim do documento HTML -->
<?php  include './includes/PHP/fim.php' ?>