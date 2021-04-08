<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Locals Controller
 *
 * @property \App\Model\Table\LocalsTable $Locals
 *
 * @method \App\Model\Entity\Local[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LocalsController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->getEventManager()->off($this->Csrf);
    }
    

    public function initialize () {
        parent::initialize();
        $this->Auth->allow(['add']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $locals = $this->paginate($this->Locals);

        $this->set(compact('locals'));
    }

    /**
     * View method
     *
     * @param string|null $id Local id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $local = $this->Locals->get($id, [
            'contain' => ['Angiospermas'],
        ]);

        $this->set('local', $local);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {

        //escrever o id da espécie selecionada na $_SESSION

        //$this->request->getSession()->write('species_id', $_POST['species_id']);
        
        
        $local = $this->Locals->newEntity();
        if ($this->request->is('post')) {
            $local = $this->Locals->patchEntity($local, $this->request->getData());
            if ( $local = $this->Locals->save($local) ) {
                
                $this->request->getSession()->write('local_id', $local->id);

                $this->Flash->success('O local foi salvo com sucesso.');

                return $this->redirect(['controller' => 'angiospermas', 'action' => 'add']);
            
            
            
            }
            $this->Flash->error('O local não pode ser salvo. Por favor, tente novamente');
        }
        $this->set(compact('local'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Local id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $local = $this->Locals->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $local = $this->Locals->patchEntity($local, $this->request->getData());
            if ($this->Locals->save($local)) {
                $this->Flash->success(__('The local has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The local could not be saved. Please, try again.'));
        }
        $this->set(compact('local'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Local id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $local = $this->Locals->get($id);
        if ($this->Locals->delete($local)) {
            $this->Flash->success(__('The local has been deleted.'));
        } else {
            $this->Flash->error(__('The local could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
