<h1>ID:<?= h($contratos->id_contrato) ?></h1>
<p>ID Utilizador: <?= h($contratos->id_utilizador) ?></p>
<p>ID Site:  <?= h($contratos->id_empresa) ?></p>
<p>Descrição: <?= h($contratos->descricao) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
