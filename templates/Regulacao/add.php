<h1>Criar Regulacao</h1>
<?php
echo $this->Form->create($regulacao);

echo $this->Form->control('local_efetivo');
echo $this->Form->control('designacao', ['rows' => '3']);
echo $this->Form->control('regulamento');
echo $this->Form->button(__('Salvar Regulação'));
echo $this->Form->end();
?>
