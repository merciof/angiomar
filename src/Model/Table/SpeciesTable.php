<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Species Model
 *
 * @property \App\Model\Table\AngiospermasTable&\Cake\ORM\Association\HasMany $Angiospermas
 *
 * @method \App\Model\Entity\Species get($primaryKey, $options = [])
 * @method \App\Model\Entity\Species newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Species[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Species|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Species saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Species patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Species[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Species findOrCreate($search, callable $callback = null, $options = [])
 */
class SpeciesTable extends Table
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

        $this->setTable('species');
        $this->setDisplayField('nome_cientifico');
        $this->setPrimaryKey('id');

        $this->hasMany('Angiospermas', [
            'foreignKey' => 'species_id',
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
            ->scalar('nome_comum')
            ->maxLength('nome_comum', 255)
            ->allowEmptyString('nome_comum');

        $validator
            ->scalar('nome_cientifico')
            ->maxLength('nome_cientifico', 255)
            ->allowEmptyString('nome_cientifico');

        return $validator;
    }
}
