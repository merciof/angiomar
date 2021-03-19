<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Angiospermas Model
 *
 * @property \App\Model\Table\PlantasTable&\Cake\ORM\Association\HasMany $Plantas
 *
 * @method \App\Model\Entity\Angiosperma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Angiosperma newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Angiosperma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Angiosperma|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Angiosperma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Angiosperma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Angiosperma[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Angiosperma findOrCreate($search, callable $callback = null, $options = [])
 */
class AngiospermasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('angiospermas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('Plantas', [
            'foreignKey' => 'angiosperma_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->allowEmptyString('nome');

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 255)
            ->allowEmptyFile('imagem');

        return $validator;
    }
}
