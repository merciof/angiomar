<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Species Controller
 *
 * @property \App\Model\Table\SpeciesTable $Species
 *
 * @method \App\Model\Entity\Species[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SpeciesController extends AppController
{
    
    public function beforeFilter(Event $event)
    {
        $this->getEventManager()->off($this->Csrf);
    }

    public function initialize () {
        parent::initialize();

        $this->Auth->allow(['select']);
    }
    
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $species = $this->paginate($this->Species);

        $this->set(compact('species'));
    }

    /**
     * View method
     *
     * @param string|null $id Species id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $species = $this->Species->get($id, [
            'contain' => ['Angiospermas'],
        ]);

        $this->set('species', $species);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $species = $this->Species->newEntity();
        if ($this->request->is('post')) {
            $species = $this->Species->patchEntity($species, $this->request->getData());
            if ($this->Species->save($species)) {
                $this->Flash->success(__('The species has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The species could not be saved. Please, try again.'));
        }
        $this->set(compact('species'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Species id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $species = $this->Species->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $species = $this->Species->patchEntity($species, $this->request->getData());
            if ($this->Species->save($species)) {
                $this->Flash->success(__('The species has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The species could not be saved. Please, try again.'));
        }
        $this->set(compact('species'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Species id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $species = $this->Species->get($id);
        if ($this->Species->delete($species)) {
            $this->Flash->success(__('The species has been deleted.'));
        } else {
            $this->Flash->error(__('The species could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    /**
     * M??todo para sele????o entre quatro op????es de esp??cies de angiosperma
     *
     * @return void
     */
    public function select () {


        //foi enviada antes mas $_POST estava vazio
        //por que a requisi????o n??o est?? sendo enviada ap??s o clique no bot??o do formul??rio??
        //Estava faltando o protocolo da requisi????o no atributo a????o/action do marcador/tag formul??rio/form
        
        //analisar se os dados do formul??rio est?? sendo salvos na global $_POST

        if( $this->request->is('POST') ) {
            
            //salva o id da esp??cie na sess??o

            $this->request->getSession()->write('species_id', $_POST['species_id']);

            $this->redirect(['controller' => 'locals', 'action' => 'add']);

        } 
        
        //puxar da base o nome das esp??cies?

        //salvar o id da esp??cie selecionada na sess??o
        //para se usado na cria????o da nova entidade engiosperma

        //como ser?? essa tela/template?
        //dependendo do bot??o clicado, o id correspondente a esp??cie ser?? salvo na sess??o

        //redirecionar apenas ap??s a sele????o da esp??cie pelo usu??rio 
        
    }
}
