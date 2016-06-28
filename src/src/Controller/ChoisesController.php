<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Choises Controller
 *
 * @property \App\Model\Table\ChoisesTable $Choises
 */
class ChoisesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Threads']
        ];
        $choises = $this->paginate($this->Choises);

        $this->set(compact('choises'));
        $this->set('_serialize', ['choises']);
    }

    /**
     * View method
     *
     * @param string|null $id Choise id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $choise = $this->Choises->get($id, [
            'contain' => ['Threads', 'ChoiseCommentRelations']
        ]);

        $this->set('choise', $choise);
        $this->set('_serialize', ['choise']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $choise = $this->Choises->newEntity();
        if ($this->request->is('post')) {
            $choise = $this->Choises->patchEntity($choise, $this->request->data);
            if ($this->Choises->save($choise)) {
                $this->Flash->success(__('The choise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The choise could not be saved. Please, try again.'));
            }
        }
        $threads = $this->Choises->Threads->find('list', ['limit' => 200]);
        $this->set(compact('choise', 'threads'));
        $this->set('_serialize', ['choise']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Choise id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $choise = $this->Choises->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $choise = $this->Choises->patchEntity($choise, $this->request->data);
            if ($this->Choises->save($choise)) {
                $this->Flash->success(__('The choise has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The choise could not be saved. Please, try again.'));
            }
        }
        $threads = $this->Choises->Threads->find('list', ['limit' => 200]);
        $this->set(compact('choise', 'threads'));
        $this->set('_serialize', ['choise']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Choise id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $choise = $this->Choises->get($id);
        if ($this->Choises->delete($choise)) {
            $this->Flash->success(__('The choise has been deleted.'));
        } else {
            $this->Flash->error(__('The choise could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
