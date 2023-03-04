<?php  include './includes/PHP/vl_lg.php';?>
<!-- INICIO DO DOCUMENTO HTML -->
<?php  include './includes/PHP/inicio.php';?>
<!-- NAVBAR DO DOCUMENTO HTML -->
<?php  include './includes/navbar.php';?>
<!-- Corpo da aplicação -->
<?php $stmdexc = 0; $dltsucess = 0; $dlterro = 0;?>
<div class="section">
	<div class="container">
		<div class="row">
			<h3 class="h4-rd center-align">Bem vindo a exibição de públicos para edição:</h3>
		</div>
		<div class="container">
			<table class="highlight centered">
				<thead>
				<tr>
					<th>Nome</th>
					<th>Editar</th>
					<!-- <th>excluir</th> -->
				</tr>
				</thead>
				<tbody>
				<?php
				$sqlslc = "SELECT * FROM publico ORDER BY idPub";
				$queryslc = mysqli_query($conn,$sqlslc);
				
				while($arraypub = $queryslc->fetch_array()){ 
					$idPub = $arraypub['idPub']; $nome = $arraypub['nomePub']; 
				?>
					<tr>
						<td id="nomeP"><?php echo$nome;?></td>
						<td><form class="" method="POST" action="editar_pub.php" enctype="multipart/form-data"><div class="hide"><input type="number" name="idedt" value="<?php echo$idPub;?>"></div><button class="btn-flat" type="submit"><i class="blue-text material-icons">create</i></button></form></td>
						<!-- <td><form class="" method="POST" action="listar_pub.php" enctype="multipart/form-data"><div class="hide"><input type="number" name="idexc" value="<?php echo$idPub;?>"></div><button class="btn-flat"  type="submit"><i class="red-text material-icons">delete_forever</i></button></form></td> -->
					</tr>
				<?php  }//} ?>
				</tbody>
			</table>
		</div>
		<div class="row">
			
		</div>
	</div>
</div>
<div class="section">
	<div class="container">

	</div>
</div>
<?php if(isset($_POST['idexc'])) {
    $stmdexc = 1;
    $idexc = $_POST['idexc'];  
    $sqlSLC = "SELECT nomePub FROM publico WHERE idPub = $idexc";
     $querySLC = mysqli_query($conn,$sqlSLC); 
	 if($dados = $querySLC->fetch_array()){
		$nomePUB = $dados['nomePub'];} 
	}
	if(isset($_POST['dltsucesso'])){
		$dltsucess = $_POST['dltsucesso'];
	}
	if(isset($_POST['dlterro'])){
		$dlterro = $_POST['dlterro'];
	}
	?>

<?php include "./includes/PHP/modal_editpub.php"; ?>

<!-- Esse script deve ser modificado por página que conter a nava bar -->
<script>
	let lst_pub = document.getElementById('lst_pub');
    lst_pub.classList.toggle("active");
</script>

<!-- JQUERY -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--  -->
<script>
	$(document).ready(function(){
	var exc = <?php echo$stmdexc;?>;
	if(exc == 1){
		$('#modalexc').modal();
		$('#modalexc').modal('open');
	}
	var dltsucess = <?php echo$dltsucess;?>;
	if(dltsucess == 1){
		$('#modaldltsucess').modal();
		$('#modaldltsucess').modal('open');
	}
	var dlterro = <?php echo$dlterro;?>;
	if(dlterro != 0){
		$('#modaldlterro').modal();
		$('#modaldlterro').modal('open');
	}
});
</script>
<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->
<!-- Fim do documento HTML -->
<?php  include './includes/PHP/fim.php' ?>