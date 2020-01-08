<h1>Empresas</h1>
<p><?= $this->Html->link("Adicionar Empresa", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Site</th>
        <th>Email</th>
        <th>Editar</th>
        <th>Eliminar</th>
    </tr>

    <?php foreach ($empresas as $empresa): //Lista todas as empresas existentes na tabel ?>
        <tr>
            <td>
                <?= $this->Html->link($empresa->id_empresa, ['action' => 'view', $empresa->id_empresa]) ?>
            </td>
            <td>
                <?= $empresa->nome ?>
            </td>
            <td>
                <?= $empresa->web ?>
            </td>
            <td>
                <?= $empresa->email ?>
            </td>
            <td>
                <?= $this->Html->link('Editar', ['action' => 'edit', $empresa->id_empresa]) //Onde iremos editar o código?>
            </td>
            <td>
                <?= $this->Form->postLink(
                    'Apagar',
                    ['action' => 'delete', $empresa->id_empresa],
                    ['confirm' => 'Deseja apagar o utilizador selecionado?'])
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

