<h1><?= h($regulacao->designacao) ?></h1>

<?php
echo $this->Form->create($regulacao);
echo $this->Form->control('local_efetivo');
echo $this->Form->control('regulamento');
echo $this->Form->button(__('Guardar regulação'));
echo $this->Form->end();
?>
