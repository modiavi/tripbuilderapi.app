<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Airports Controller
 *
 * @property \App\Model\Table\AirportsTable $Airports
 */
class AirportsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $airports = $this->paginate($this->Airports);

        $this->set(compact('airports'));
        $this->set('_serialize', ['airports']);
    }

    /**
     * View method
     *
     * @param string|null $id Airport id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $airport = $this->Airports->get($id, [
            'contain' => []
        ]);

        $this->set('airport', $airport);
        $this->set('_serialize', ['airport']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $airport = $this->Airports->newEntity();
        if ($this->request->is('post')) {
            $airport = $this->Airports->patchEntity($airport, $this->request->data);
            if ($this->Airports->save($airport)) {
                $this->Flash->success(__('The airport has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The airport could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('airport'));
        $this->set('_serialize', ['airport']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Airport id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $airport = $this->Airports->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $airport = $this->Airports->patchEntity($airport, $this->request->data);
            if ($this->Airports->save($airport)) {
                $this->Flash->success(__('The airport has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The airport could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('airport'));
        $this->set('_serialize', ['airport']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Airport id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $airport = $this->Airports->get($id);
        if ($this->Airports->delete($airport)) {
            $this->Flash->success(__('The airport has been deleted.'));
        } else {
            $this->Flash->error(__('The airport could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
