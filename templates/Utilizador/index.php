<h1>Utilizadores</h1>
<p><?= $this->Html->link("Adicionar Utilizador", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php foreach ($utilizadores as $utilizador): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($utilizador->id_utilizador, ['action' => 'view', $utilizador->id_utilizador]) ?>
            </td>
            <td>
                <?= $utilizador->nome ?>
            </td>
            <td>
                <?= $utilizador->idade ?>
            </td>
            <td>
                <?= $utilizador->email ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $utilizador->id_utilizador]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $utilizador->id_utilizador],
                    ['confirm' => 'Deseja apagar o utilizador selecionado?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
