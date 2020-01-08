<h1>Utilizadores</h1>
<p><?= $this->Html->link("Adicionar contrato", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Id Utilizador</th>
        <th>Id Empresa</th>
        <th>Descrição</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php foreach ($contratos as $contrato): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $this->Html->link($contrato->id_contrato, ['action' => 'view', $contrato->id_contrato]) ?>
            </td>
            <td>
                <?= $contrato->id_utilizador ?>
            </td>
            <td>
                <?= $contrato->id_empresa ?>
            </td>
            <td>
                <?= $contrato->descricao ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $contrato->id_contrato]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $contrato->id_contrato],
                    ['confirm' => 'Deseja apagar o utilizador selecionado?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
