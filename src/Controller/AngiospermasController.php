<?php
namespace App\Controller;

use Cake\Event\Event;
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

    public function beforeFilter(Event $event)
    {
        $this->getEventManager()->off($this->Csrf);
    }


    public function initialize () {
        parent::initialize();
        $this->Auth->allow(['home','add','edit','delete']);
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Locals', 'Species', 'Users'],
            
        ];
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
            'contain' => ['Locals', 'Users'],
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
            
            $angiosperma->imagem = $_FILES['imagem']['name'];

            $angiosperma->local_id = $this->request->getSession()->read('local_id');

            $angiosperma->species_id = $this->request->getSession()->read('species_id');

            $angiosperma->user_id = $this->request->getSession()->read('user_id');
            
            if ($this->Angiospermas->save($angiosperma)) {

                $destino = WWW_ROOT . "imagens_angiospermas" . DS .  $angiosperma->id . DS;

                $imageToUpload = $this->request->getData()['imagem'];
                                    
                $this->Angiospermas->singleImageUpload( $imageToUpload, $destino );
                
                $this->Flash->success('A foto foi salva com sucesso.');

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error('A foto não pode ser salva. Por favor, tente novamente.');
        }
        $locals = $this->Angiospermas->Locals->find('list', ['limit' => 200]);
        $users = $this->Angiospermas->Users->find('list', ['limit' => 200]);
        $this->set(compact('angiosperma', 'locals', 'users'));
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
            'contain' => ['Users'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $angiosperma = $this->Angiospermas->patchEntity($angiosperma, $this->request->getData());
            if ($this->Angiospermas->save($angiosperma)) {
                $this->Flash->success(__('The angiosperma has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The angiosperma could not be saved. Please, try again.'));
        }
        $locals = $this->Angiospermas->Locals->find('list', ['limit' => 200]);
        $users = $this->Angiospermas->Users->find('list', ['limit' => 200]);
        $this->set(compact('angiosperma', 'locals', 'users'));
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
