<h1>Criar Empresa</h1>
<?php
echo $this->Form->create($contrato);

echo $this->Form->control('id_utilizador', ['type' => 'number']);
echo $this->Form->control('id_empresa', ['type' => 'number']);
echo $this->Form->control('descricao', ['rows' => '1']);
echo $this->Form->button(__('Salvar Utilizador'));
echo $this->Form->end();
?>
