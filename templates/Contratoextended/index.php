<h1>Contratos</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Empresa</th>
        <th>Web</th>
        <th>Utilizador</th>
        <th>Email</th>
        <th>Designação</th>
    </tr>

    <?php foreach ($contratos as $contrato): //Lista todos os utilizadores existentes na tabela?>
        <tr>
            <td>
                <?= $contrato->id_contrato ?>
            </td>
            <td>
                <?= $contrato->empresa ?>
            </td>
            <td>
                <?= $contrato->web ?>
            </td>
            <td>
                <?= $contrato->utilizador ?>
            </td>
            <td>
                <?= $contrato->email ?>
            </td>
            <td>
                <?= $contrato->designacao ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
