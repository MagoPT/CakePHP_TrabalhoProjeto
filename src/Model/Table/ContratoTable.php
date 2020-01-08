<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class ContratoTable extends Table//Criação da tabela Contrato
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
?>
