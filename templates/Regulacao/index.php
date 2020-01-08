<h1>Regulações</h1>
<p><?= $this->Html->link("Adicionar Regulação", ['action' => 'add']) ?></p>

<table>
    <tr>
        <th>Id</th>
        <th>Designação</th>
        <th>Local Efetivo</th>
        <th>Regulamento</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php foreach ($regulacoes as $regulacao): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($regulacao->id_regulacao, ['action' => 'view', $regulacao->id_regulacao]) ?>
            </td>
            <td>
                <?= $regulacao->designacao ?>
            </td>
            <td>
                <?= $regulacao->local_efetivo ?>
            </td>
            <td>
                <?= $this->Html->link($regulacao->regulamento)?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $regulacao->id_regulacao]) //Onde iremos editar o registo?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $regulacao->id_regulacao],
                    ['confirm' => 'Deseja apagar o utilizador selecionado?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
