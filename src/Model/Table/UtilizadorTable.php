<?php

namespace App\Model\Table;

use Cake\ORM\Table;

class UtilizadorTable extends Table //Criação da tabela Utilizador
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }
}
?>
