<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ChoiseCommentRelations Controller
 *
 * @property \App\Model\Table\ChoiseCommentRelationsTable $ChoiseCommentRelations
 */
class ChoiseCommentRelationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Choises', 'Comments']
        ];
        $choiseCommentRelations = $this->paginate($this->ChoiseCommentRelations);

        $this->set(compact('choiseCommentRelations'));
        $this->set('_serialize', ['choiseCommentRelations']);
    }

    /**
     * View method
     *
     * @param string|null $id Choise Comment Relation id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $choiseCommentRelation = $this->ChoiseCommentRelations->get($id, [
            'contain' => ['Choises', 'Comments']
        ]);

        $this->set('choiseCommentRelation', $choiseCommentRelation);
        $this->set('_serialize', ['choiseCommentRelation']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $choiseCommentRelation = $this->ChoiseCommentRelations->newEntity();
        if ($this->request->is('post')) {
            $choiseCommentRelation = $this->ChoiseCommentRelations->patchEntity($choiseCommentRelation, $this->request->data);
            if ($this->ChoiseCommentRelations->save($choiseCommentRelation)) {
                $this->Flash->success(__('The choise comment relation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The choise comment relation could not be saved. Please, try again.'));
            }
        }
        $choises = $this->ChoiseCommentRelations->Choises->find('list', ['limit' => 200]);
        $comments = $this->ChoiseCommentRelations->Comments->find('list', ['limit' => 200]);
        $this->set(compact('choiseCommentRelation', 'choises', 'comments'));
        $this->set('_serialize', ['choiseCommentRelation']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Choise Comment Relation id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $choiseCommentRelation = $this->ChoiseCommentRelations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $choiseCommentRelation = $this->ChoiseCommentRelations->patchEntity($choiseCommentRelation, $this->request->data);
            if ($this->ChoiseCommentRelations->save($choiseCommentRelation)) {
                $this->Flash->success(__('The choise comment relation has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The choise comment relation could not be saved. Please, try again.'));
            }
        }
        $choises = $this->ChoiseCommentRelations->Choises->find('list', ['limit' => 200]);
        $comments = $this->ChoiseCommentRelations->Comments->find('list', ['limit' => 200]);
        $this->set(compact('choiseCommentRelation', 'choises', 'comments'));
        $this->set('_serialize', ['choiseCommentRelation']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Choise Comment Relation id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $choiseCommentRelation = $this->ChoiseCommentRelations->get($id);
        if ($this->ChoiseCommentRelations->delete($choiseCommentRelation)) {
            $this->Flash->success(__('The choise comment relation has been deleted.'));
        } else {
            $this->Flash->error(__('The choise comment relation could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
