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
     * Método para seleção entre quatro opções de espécies de angiosperma
     *
     * @return void
     */
    public function select () {


        //foi enviada antes mas $_POST estava vazio
        //por que a requisição não está sendo enviada após o clique no botão do formulário??
        //Estava faltando o protocolo da requisição no atributo ação/action do marcador/tag formulário/form
        
        //analisar se os dados do formulário está sendo salvos na global $_POST

        if( $this->request->is('POST') ) {
            
            //salva o id da espécie na sessão

            $this->request->getSession()->write('species_id', $_POST['species_id']);

            $this->redirect(['controller' => 'locals', 'action' => 'add']);

        } 
        
        //puxar da base o nome das espécies?

        //salvar o id da espécie selecionada na sessão
        //para se usado na criação da nova entidade engiosperma

        //como será essa tela/template?
        //dependendo do botão clicado, o id correspondente a espécie será salvo na sessão

        //redirecionar apenas após a seleção da espécie pelo usuário 
        
    }
}
