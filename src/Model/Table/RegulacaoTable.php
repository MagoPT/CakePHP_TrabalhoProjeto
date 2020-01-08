<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class RegulacaoTable extends Table //Criação da tabela Regulacao
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
?>
