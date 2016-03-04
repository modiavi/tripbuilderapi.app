<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Airlines Controller
 *
 * @property \App\Model\Table\AirlinesTable $Airlines
 */
class AirlinesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $airlines = $this->paginate($this->Airlines);

        $this->set(compact('airlines'));
        $this->set('_serialize', ['airlines']);
    }

    /**
     * View method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $airline = $this->Airlines->get($id, [
            'contain' => []
        ]);

        $this->set('airline', $airline);
        $this->set('_serialize', ['airline']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $airline = $this->Airlines->newEntity();
        if ($this->request->is('post')) {
            $airline = $this->Airlines->patchEntity($airline, $this->request->data);
            if ($this->Airlines->save($airline)) {
                $this->Flash->success(__('The airline has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The airline could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('airline'));
        $this->set('_serialize', ['airline']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $airline = $this->Airlines->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $airline = $this->Airlines->patchEntity($airline, $this->request->data);
            if ($this->Airlines->save($airline)) {
                $this->Flash->success(__('The airline has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The airline could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('airline'));
        $this->set('_serialize', ['airline']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Airline id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $airline = $this->Airlines->get($id);
        if ($this->Airlines->delete($airline)) {
            $this->Flash->success(__('The airline has been deleted.'));
        } else {
            $this->Flash->error(__('The airline could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
