<h1>Criar Utilizador</h1>
<?php
echo $this->Form->create($utilizador);

echo $this->Form->control('nome');
echo $this->Form->control('email', ['rows' => '3']);
echo $this->Form->control('idade', ['type' => 'number']);
echo $this->Form->control('pass', ['type' => 'password']);
echo $this->Form->button(__('Salvar Utilizador'));
echo $this->Form->end();
?>
