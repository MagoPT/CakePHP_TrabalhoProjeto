<?php

namespace App\Controller;

class UtilizadorController extends AppController //Controlador do Utilizador
{
    public function index() //Land Page do utilizador onde será listado os registo existentes na tabela
    {
        $this->loadComponent('Paginator');
        $utilizadores = $this->Paginator->paginate($this->Utilizador->find());
        $this->set(compact('utilizadores'));
    }
    public function view($id) //Visualização de um registo específico
    {
        $utilizadores = $this->Utilizador->get($id);
        $this->set(compact('utilizadores'));
    }
    public function add() //Criaçãp de um novo registo
    {
        $utilizador = $this->Utilizador->newEmptyEntity();
        if ($this->request->is('post')) {
            $utilizador = $this->Utilizador->patchEntity($utilizador, $this->request->getData());

            if ($this->Utilizador->save($utilizador)) {
                $this->Flash->success(__('Utilizador criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o utilizador.'));
        }
        $this->set('utilizador', $utilizador);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $utilizadores = $this->Utilizador->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Utilizador->patchEntity($utilizadores, $this->request->getData());
            if ($this->Utilizador->save($utilizadores)) {
                $this->Flash->success(__('O Utilizador foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('O Utilizador não pôde ser atualizado.'));
        }

        $this->set('utilizador', $utilizadores);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $utilizadores = $this->Utilizador->get($id);
        if ($this->Utilizador->delete($utilizadores)) {
            $this->Flash->success(__('O utilizador com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
