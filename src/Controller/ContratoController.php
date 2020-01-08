<?php

namespace App\Controller;

class ContratoController extends AppController //Controlador do Contrato
{
    public function index() //Land Page do contrato onde será listado os registo existentes na tabela
    {
        $this->loadComponent('Paginator');
        $contratos = $this->Paginator->paginate($this->Contrato->find());
        $this->set(compact('contratos'));
    }
    public function view($id) //Visualização de um registo específico
    {
        $contratos = $this->Contrato->get($id);
        $this->set(compact('contratos'));
    }
    public function add() //Criaçãp de um novo registo
    {
        $contrato = $this->Contrato->newEmptyEntity();
        if ($this->request->is('post')) {
            $contrato = $this->Contrato->patchEntity($contrato, $this->request->getData());

            if ($this->Contrato->save($contrato)) {
                $this->Flash->success(__('Contrato criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o contrato.'));
        }
        $this->set('contrato', $contrato);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $contratos = $this->Contrato->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Contrato->patchEntity($contratos, $this->request->getData());
            if ($this->Contrato->save($contratos)) {
                $this->Flash->success(__('O Contrato foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('contrato', $contratos);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $contratos = $this->Contrato->get($id);
        if ($this->Contrato->delete($contratos)) {
            $this->Flash->success(__('O contrato com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
