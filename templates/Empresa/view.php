<h1><?= h($empresas->nome) ?></h1>
<p>Email: <?= h($empresas->email) ?></p>
<p>Site:  <?= h($empresas->web) ?></p>
<p>ID: <?= h($empresas->id_empresa) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
