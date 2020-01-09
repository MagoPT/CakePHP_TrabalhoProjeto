<?php

namespace App\Controller;
//Devido ao facto de extarmos a utilizar uma View em vez de uma tabela normal ficamos bastante limitados na opções CRUD, por isso irá apenas ser cirado o Index
class contratoextendedController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $contratos = $this->Paginator->paginate($this->Contratoextended ->find());
        $this->set(compact('contratos'));
    }

}
?>
