<?php include './includes/PHP/vl_lg.php';?>

<!-- INICIO DO DOCUMENTO HTML -->

<?php  include './includes/PHP/inicio.php';?>

<!-- NAVBAR DO DOCUMENTO HTML -->

<?php  include './includes/navbar.php';?>

<?php $atualiza = 0;  $ordem = "";?>



<!-- Corpo da aplicação -->

<div class="container">

	<!-- divisão em containers dentro do container principal -->

	 <div class="container mt-vh10 center-align">

	    <div class="row">

	    </div>

	    <div class="row">

	        <h2 class="h4-rd">Boas vindas a página das numerologias cadastradas</h2>

	    </div>


	    <div class="row">

	      <table class="mt-vh10 highlight centered">

	      	<thead>

	      		<tr>

	      			<th><a class="black-text" id="nomeTN" href="#">Nome Numerologia</a></th>

	      			<th><a class="black-text" id="numerologia" href="#">Numerologia</a></th>

	      			<th><a class="black-text" id="nomeTM" href="#">Tipo de Mapa</a></th>

	      			<th><a class="black-text" id="nomePub" href="#">Público</a></th>

	      			<th>Editar</th>

	      			<!-- <th>Excluir</th> -->

	      		</tr>

	      	</thead>

	      	<tbody>

	      		<?php 

	      		$sql = "SELECT idN, nomeTN, numerologia, nomeTM, nomePub FROM numerologia as num INNER JOIN tiponumerologia as tn on num.idTN = tn.idTN  INNER JOIN publico as pub on num.idPub = pub.idPub INNER JOIN tipomapas as tm on num.idTM = tm.idTM ORDER BY '$ordem'";
	      		$query = mysqli_query($conn,$sql);
				if($query){

	      		while ($array = $query->fetch_array()) {
	      			$tiponome[] = $array['nomeTN'];
		      		$numerologia[] = $array['numerologia'];
		      		$nomemapa[] = $array['nomeTM'];
		      		$nomepub[] = $array['nomePub'];
		      		$idN[] = $array['idN'];
	      		}
	      		$tmn = count($idN);
	      		for ($i=0; $i < $tmn; $i++) {      		
	      		?>
	      		<tr>
	      			<td id="tiponome-<?php echo$i;?>"><?php echo$tiponome[$i];?></td>

	      			<td id="numerologia-<?php echo$i;?>"><?php echo$numerologia[$i];?></td>

	      			<td id="nomemapa-<?php echo$i;?>"><?php echo$nomemapa[$i];?></td>

	      			<td id="nomepub-<?php echo$i;?>"><?php echo$nomepub[$i];?></td>

	      			<td id="editar-<?php echo$i;?>"><form action="./edtr_frs.php" method="POST" > <input class="hide" type="number" name="idN" value="<?php echo$idN[$i];?>"> <button class="btn-flat" type="submit" ><a href=""><i class="purple-text material-icons">edit</i></a></button></form></td>

	      			<!-- <td> <button data-target="modalD" class="modal-trigger btn-flat" ><a href=""><i class="red-text material-icons">delete_forever</i></a></button></form></td> -->
	      		</tr>
	      		 <?php	} }  ?>
	      	</tbody>

	      </table>

	    </div>

	</div>

	<div class="container">

	   	<div class="row">

	      

	    </div>

	    <div class="row">

	    

	    </div>

	</div>

</div>

<!-- modals de deleção -->

<?php

if (isset($_POST['delt'])) {
 	$valida = $_POST['delt'];
 } else{ $valida = 0; }

 if (isset($_POST['vldexc'])) {
 	$vldel = $_POST['vldexc'];
 }else{	$vldel = 0; } ?>

<!-- Esse script deve ser modificado por página que conter a nava bar -->

<script>

	let prod = document.getElementById('prod');

    prod.classList.toggle("active");

</script>



<!-- JQUERY -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- MATERIALIZE JS -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<?php if (isset($_POST['att'])) {
	$atualiza = $_POST['att'];
}else{
	$atualiza = 0;
}?>
<script>

 $(document).ready(function(){
 	$('#modalD').modal();
  	$('#nomeTN').click(function(){
	     
		var posting  = $.post('./consultas/consulta_prod.php', { ordem: "tn.nomeTN" });
		posting.done(function( data ) {
			var dados = JSON.parse(data)
			for (var i = 0; i < dados.quantidade; i++) {
				$("#tiponome-"+i).html(dados.nomeTN[i])
				$("#numerologia-"+i).html(dados.numerologia[i])
				$("#nomemapa-"+i).html(dados.nomeTM[i])
				$("#nomepub-"+i).html(dados.nomePub[i])
				$("#editar-"+i).html('<form action="./edtr_frs.php" method="POST" > <input class="hide" type="number" name="idN" value="'+dados.idN[i]+'"> <button class="btn-flat" type="submit" ><a href=""><i class="purple-text material-icons">edit</i></a></button></form>')
			}
		})
	});

	$('#numerologia').click(function(){
		var posting  = $.post('./consultas/consulta_prod.php', { ordem: "num.numerologia" });
		posting.done(function( data ) {
			var dados = JSON.parse(data)
			for (var i = 0; i < dados.quantidade; i++) {
				$("#tiponome-"+i).html(dados.nomeTN[i])
				$("#numerologia-"+i).html(dados.numerologia[i])
				$("#nomemapa-"+i).html(dados.nomeTM[i])
				$("#nomepub-"+i).html(dados.nomePub[i])
				$("#editar-"+i).html('<form action="./edtr_frs.php" method="POST" > <input class="hide" type="number" name="idN" value="'+dados.idN[i]+'"> <button class="btn-flat" type="submit" ><a href=""><i class="purple-text material-icons">edit</i></a></button></form>')
			}
		})
	})
	$('#nomeTM').click(function(){
		var posting  = $.post('./consultas/consulta_prod.php', { ordem: "tm.nomeTM" });
		posting.done(function( data ) {
			var dados = JSON.parse(data)
			for (var i = 0; i < dados.quantidade; i++) {
				$("#tiponome-"+i).html(dados.nomeTN[i])
				$("#numerologia-"+i).html(dados.numerologia[i])
				$("#nomemapa-"+i).html(dados.nomeTM[i])
				$("#nomepub-"+i).html(dados.nomePub[i])
				$("#editar-"+i).html('<form action="./edtr_frs.php" method="POST" > <input class="hide" type="number" name="idN" value="'+dados.idN[i]+'"> <button class="btn-flat" type="submit" ><a href=""><i class="purple-text material-icons">edit</i></a></button></form>')
			}
		})
	});

	$('#nomePub').click(function(){
		var posting  = $.post('./consultas/consulta_prod.php', { ordem: "pub.nomePub" });
		posting.done(function( data ) {
			var dados = JSON.parse(data)
			for (var i = 0; i < dados.quantidade; i++) {
				$("#tiponome-"+i).html(dados.nomeTN[i])
				$("#numerologia-"+i).html(dados.numerologia[i])
				$("#nomemapa-"+i).html(dados.nomeTM[i])
				$("#nomepub-"+i).html(dados.nomePub[i])
				$("#editar-"+i).html('<form action="./edtr_frs.php" method="POST" > <input class="hide" type="number" name="idN" value="'+dados.idN[i]+'"> <button class="btn-flat" type="submit" ><a href=""><i class="purple-text material-icons">edit</i></a></button></form>')
			}
		})
	});

 });


</script>

<script>

	$(document).ready(function(){

	var vldex = <?php echo$vldel;?>;

	var att = <?php echo$atualiza; ?>;



 	if (vldex == 1) {

 	$('#modalDLT').modal();

 	$('#modalDLT').modal('open');

 	}

 	if (vldex == 2 ) {

 	$('#modalDLT1').modal();

 	$('#modalDLT1').modal('open');

 	}

 	if (vldex == 3) {

 	$('#modalDLT2').modal();

 	$('#modalDLT2').modal('open');

 	};



 	if (att == 1) {

 	$('#modalatt').modal();

 	$('#modalatt').modal('open');

 	}



 	});

</script>

<!--  -->

<!-- Nomes para o script são: index e indexn, editar e editarn, produtos e produtosn, perfil e perfiln, painel e paineln. -->

<!-- Fim do documento HTML -->

<?php  include './includes/PHP/fim.php'; ?>