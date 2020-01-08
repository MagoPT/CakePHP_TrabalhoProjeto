<?php

namespace App\Controller;

class RegulacaoController extends AppController //Controlador das Regulações
{
    public function index() //Land Page das regulações onde será listado os registo existentes na tabela
    {
        $this->loadComponent('Paginator');
        $regulacoes = $this->Paginator->paginate($this->Regulacao->find());
        $this->set(compact('regulacoes'));
    }
    public function view($id) //Visualização de um registo específico
    {
        $regulacoes = $this->Regulacao->get($id);
        $this->set(compact('regulacoes'));
    }
    public function add()
    {
        $regulacao = $this->Regulacao->newEmptyEntity();
        if ($this->request->is('post')) {
            $regulacao = $this->Regulacao->patchEntity($regulacao, $this->request->getData());

            if ($this->Regulacao->save($regulacao)) {
                $this->Flash->success(__('Regulacao criada com sucesso.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Ocorreu um erro ao criar o Regulacao.'));
        }
        $this->set('regulacao', $regulacao);
    }
    public function edit($id = null) //Edição de um registo específico
    {
        $regulacao = $this->Regulacao->get($id);
        if ($this->request->is(['post', 'put'])) {
            $this->Regulacao->patchEntity($regulacao, $this->request->getData());
            if ($this->Regulacao->save($regulacao)) {
                $this->Flash->success(__('O Utilizador foi atualizado.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Seu artigo não pôde ser atualizado.'));
        }

        $this->set('regulacao', $regulacao);
    }
    public function delete($id) //Eliminaçãp de um registo específico
    {
        $this->request->allowMethod(['post', 'delete']);

        $regulacao = $this->Regulacao->get($id);
        if ($this->Regulacao->delete($regulacao)) {
            $this->Flash->success(__('O regulamento com id: {0} foi apagado.', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}
?>
