<h1>ID:<?= h($contrato->id_contrato) ?></h1>

<?php
echo $this->Form->create($contrato);
echo $this->Form->control('id_utilizador');
echo $this->Form->control('id_empresa');
echo $this->Form->control('descricao');
echo $this->Form->button(__('Guardar empresa'));
echo $this->Form->end();
?>
