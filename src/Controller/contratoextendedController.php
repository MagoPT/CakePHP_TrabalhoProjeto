<?php

namespace App\Controller;

class contratoextendedController extends AppController
{
    public function index()
    {
        $this->loadComponent('Paginator');
        $contratos = $this->Paginator->paginate($this->Contratoextended ->find());
        $this->set(compact('contratos'));
    }
    public function view($id) //Visualização de um registo específico
    {
        $contratos = $this->Contratoextended->get($id);
        $this->set(compact('contratos'));
    }
}
?>
