<h1><?= h($utilizadores->nome) ?></h1>
<p>Email: <?= h($utilizadores->email) ?></p>
<p>Idade: <?= h($utilizadores->idade) ?></p>
<p>ID: <?= h($utilizadores->id_utilizador) ?></p>
<?= $this->Html->link(__('Voltar'), ['action' => 'index']) ?>
