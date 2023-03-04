<!-- Modal Structure --> 

<div id="modalexc" class="modal">

<div class="modal-content">

  <h4>Você deseja realemnte excluir o público <?php echo$nomePUB;?> ?</h4>

  <p>Lembre-se esta ação não poderá ser revertida, você concorda em excluir o público <?php echo$nomePUB;?> ?</p>

</div>

<div class="modal-footer">

	<div class="row">
    <div class="col right">
    <a href="" class="modal-close waves-effect waves-red btn-flat red-text"><i class="material-icons left">cancel</i>Cancelar</a>
    </div>
    <div class="col right">
	<form class="" method="POST" action="delete/delete_pub.php" enctype="multipart/form-data"><div class="hide"><input type="number" name="idEXC" value="<?php echo$idexc;?>"></div><button class="btn-flat green-text waves-effect waves-green" type="submit"><i class="material-icons left">check_circle</i>Concordo</button></form>
	</div>
	</div>

</div>
</div>

<!-- Modal Structure -->

<div id="modaldltsucess" class="modal">

<div class="modal-content">

  <h4>O registro foi deletado com sucesso</h4>

  <p>A ação requisitada foi concluida com exito, e não retornou erros.</p>

</div>

<div class="modal-footer">

	<div class="row">

		  <a href="" class="modal-close waves-effect waves-green btn-flat black-text"><i class="material-icons left">check</i>OK</a>

	</div>

</div>

</div>
<!-- Modal Structure -->

<div id="modaldlterro" class="modal">

<div class="modal-content">

  <h4>Erro ao executar a ação</h4>

  <p>Não foi possível deletar o item solicitado erro 1.</p>

</div>

<div class="modal-footer">

	<div class="row">

		  <a href="" class="modal-close waves-effect waves-green btn-flat black-text"><i class="material-icons left">check</i>OK</a>

	</div>

</div>

</div>