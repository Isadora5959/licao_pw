<!-- Modal de Delete-->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="btn-close" data-bs-dismiss="modal" href="index.php" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
        </div>
        <div class="modal-body">
          Deseja realmente excluir este item?
        </div>
        <div class="modal-footer">
          <?php
            $id = $_GET['id'];
          ?>
          <a id="confirm" class="btn btn-primary" href="delete.php?id=<?php echo "$id"; ?>">Sim</a>
          <a id="cancel" class="btn btn-secondary" href="index.php" data-dismiss="modal">N&atilde;o</a>
        </div>
      </div>
    </div>
  </div> <!-- /.modal -->