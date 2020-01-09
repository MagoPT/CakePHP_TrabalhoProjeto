<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ContratoTable extends Table//Criação da tabela Contrato
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
        $this->setPrimaryKey('id_contrato');

        $this->belongsTo('Utilizador')//Isto é necessário pois temos de ciar uma associação entre as duas tabelas
            ->setForeignKey('id_utilizador')
            ->setJoinType('INNER');

        $this->belongsTo('Empresa')
            ->setForeignKey('id_empresa')
            ->setJoinType('INNER');

        $this->belongsTo('Regulacao')
            ->setForeignKey('id_regulacao')
            ->setJoinType('INNER');
    }

}
?>
