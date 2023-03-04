<!-- Modal Structure -->
  <div id="modalatt" class="modal">
    <div class="modal-content">
      <h4>Atualização do Registro feita com sucesso</h4>
      <p>A ação de atualização realizada foi concluida com exito.</p>
    </div>
    <div class="modal-footer">
        <div class="row">
              <a href="" class="modal-close waves-effect waves-green btn-flat black-text"><i class="material-icons left">check</i>OK</a>
        </div>
    </div>
  </div>
<!-- Modal Structure -->
  <div id="modalD" class="modal">
    <div class="modal-content">
      <h4>Tem certeza que deseja excluir esse registro?</h4>
      <p>Esta ação será irreversivel, assim que for confirmado não haverá a possibilidade de retorno.</p>
    </div>
    <div class="modal-footer">
        <div class="row">
          <div class="col push-s7">
              <form action="./delete/delete.php" method="POST" > <input class="hide" type="number" name="idNu" value="<?php echo $idN; ?>"><input class="hide" type="number" name="idTi" value="<?php echo$idT;?>"><button class="waves-effect waves-purple btn-flat" type="submit"><i class="red-text material-icons left">delete_forever</i>Excluir</button></form>
          </div>
          <div class="col push-s7">
              <a href="./prod.php" class="modal-close waves-effect waves-red btn-flat black-text"><i class="material-icons left">block</i>Cancelar</a>
          </div>
        </div>
    </div>
  </div>
<!-- Fim modal -->

<!-- Modal Structure -->
  <div id="modalDLT" class="modal">
    <div class="modal-content">
      <h4>Exclusão Feita com sucesso</h4>
      <p>A exclusão do registro solicitado foi feito com exito, e não retornou nenhum erro.</p>
    </div>
    <div class="modal-footer">
      <a href="./prod.php" class="modal-close waves-effect waves-red btn-flat black-text"><i class="material-icons red-text left">close</i>Fechar</a>
    </div>
  </div>
<!-- Fim modal -->

<!-- Modal Structure -->
  <div id="modalDLT1" class="modal">
    <div class="modal-content">
      <h4>Erro na exclusão</h4>
      <p>A exclusão do registro solicitado não foi realizada, e retornou o erro 1 (delete TipoN).</p>
    </div>
    <div class="modal-footer">
      <a href="./prod.php" class="modal-close waves-effect waves-red btn-flat black-text"><i class="material-icons red-text left">close</i>Fechar</a>
    </div>
  </div>
<!-- Fim modal -->

<!-- Modal Structure -->
  <div id="modalDLT2" class="modal">
    <div class="modal-content">
      <h4>Erro na exclusão</h4>
      <p>A exclusão do registro solicitado não foi realizada, e retornou o erro 2 (delete Numerologia).</p>
    </div>
    <div class="modal-footer">
      <a href="./prod.php" class="modal-close waves-effect waves-red btn-flat black-text"><i class="material-icons red-text left">close</i>Fechar</a>
    </div>
  </div>
<!-- Fim modal -->


