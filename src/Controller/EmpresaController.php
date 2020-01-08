<?php

namespace App\Controller;

class EmpresaController extends AppController //Controlador da Empresa
{
    public function index() //Land Page da empresa onde será listado os registo existentes na tabela
    {
        $this->loadComponent('Paginator');
        $empresas = $this->Paginator->paginate($this->Empresa->find());
        $this->set(compact('empresas'));
    }
    public function view($id) //Visualização de um registo específico
    {
        $empresas = $this->Empresa->get($id);
        $this->set(compact('empresas'));
    }
    public function add()
    {
        $empresa = $this->Empresa->newEmptyEntity();
        if ($this->request->is('post')) {
            $empresa = $this->Empresa->patchEntity($empresa, $this->request->getData());

            if ($this->Empresa->save($empresa)) {
                $this->Flash->success(__('Empresa criado com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o Empresa.'));
        }
        $this->set('empresa', $empresa);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $empresa = $this->Empresa->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Empresa->patchEntity($empresa, $this->request->getData());
            if ($this->Empresa->save($empresa)) {
                $this->Flash->success(__('A empresa foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('empresa', $empresa);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $empresa = $this->Empresa->get($id);
        if ($this->Empresa->delete($empresa)) {
            $this->Flash->success(__('A empresa com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
