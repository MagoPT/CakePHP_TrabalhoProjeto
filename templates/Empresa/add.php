<h1>Criar Empresa</h1>
<?php
echo $this->Form->create($empresa);

echo $this->Form->control('nome');
echo $this->Form->control('web', ['rows' => '3']);
echo $this->Form->control('email', ['type' => 'email']);
echo $this->Form->control('pass', ['type' => 'password']);
echo $this->Form->button(__('Salvar Utilizador'));
echo $this->Form->end();
?>
