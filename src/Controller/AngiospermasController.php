<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Angiospermas Controller
 *
 * @property \App\Model\Table\AngiospermasTable $Angiospermas
 *
 * @method \App\Model\Entity\Angiosperma[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AngiospermasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $angiospermas = $this->paginate($this->Angiospermas);

        $this->set(compact('angiospermas'));
    }

    /**
     * View method
     *
     * @param string|null $id Angiosperma id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $angiosperma = $this->Angiospermas->get($id, [
            'contain' => ['Plantas'],
        ]);

        $this->set('angiosperma', $angiosperma);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $angiosperma = $this->Angiospermas->newEntity();
        if ($this->request->is('post')) {
            $angiosperma = $this->Angiospermas->patchEntity($angiosperma, $this->request->getData());
            if ($this->Angiospermas->save($angiosperma)) {
                $this->Flash->success(__('The angiosperma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The angiosperma could not be saved. Please, try again.'));
        }
        $this->set(compact('angiosperma'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Angiosperma id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $angiosperma = $this->Angiospermas->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $angiosperma = $this->Angiospermas->patchEntity($angiosperma, $this->request->getData());
            if ($this->Angiospermas->save($angiosperma)) {
                $this->Flash->success(__('The angiosperma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The angiosperma could not be saved. Please, try again.'));
        }
        $this->set(compact('angiosperma'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Angiosperma id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $angiosperma = $this->Angiospermas->get($id);
        if ($this->Angiospermas->delete($angiosperma)) {
            $this->Flash->success(__('The angiosperma has been deleted.'));
        } else {
            $this->Flash->error(__('The angiosperma could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
