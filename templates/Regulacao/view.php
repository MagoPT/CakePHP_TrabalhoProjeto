<h1><?= h($regulacoes->designacao) ?></h1>
<p>Local Efetivo: <?= h($regulacoes->local_efetivo) ?></p>
<p>Regulamento: <?= $this->Html->link($regulacoes->regulamento)?></p>
<p>ID: <?= h($regulacoes->id_regulacao) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
