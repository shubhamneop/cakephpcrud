<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

/**
 * Demos Controller
 *
 * @property \App\Model\Table\DemosTable $Demos
 *
 * @method \App\Model\Entity\Demo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DemosController extends AppController
{   

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow('add');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $demos = $this->paginate($this->Demos);

        $this->set(compact('demos'));
    }

    /**
     * View method
     *
     * @param string|null $id Demo id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $demo = $this->Demos->get($id, [
            'contain' => []
        ]);

        $this->set('demo', $demo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $demo = $this->Demos->newEntity();
        if ($this->request->is('post')) {
            $demo = $this->Demos->patchEntity($demo, $this->request->getData());
            if ($this->Demos->save($demo)) {
                $this->Flash->success(__('The demo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demo could not be saved. Please, try again.'));
        }
        $this->set(compact('demo'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Demo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $demo = $this->Demos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $demo = $this->Demos->patchEntity($demo, $this->request->getData());
            if ($this->Demos->save($demo)) {
                $this->Flash->success(__('The demo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The demo could not be saved. Please, try again.'));
        }
        $this->set(compact('demo'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Demo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $demo = $this->Demos->get($id);
        if ($this->Demos->delete($demo)) {
            $this->Flash->success(__('The demo has been deleted.'));
        } else {
            $this->Flash->error(__('The demo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
