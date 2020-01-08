<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class contratoextendedTable extends Table//Criação da tabela empresa
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
?>
