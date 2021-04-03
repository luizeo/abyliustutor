<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Metodos Model
 *
 * @method \App\Model\Entity\Metodo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Metodo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Metodo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Metodo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Metodo|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Metodo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Metodo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Metodo findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MetodosTable extends Table
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

        $this->setTable('metodos');
        $this->setDisplayField('cod_metodo');
        $this->setPrimaryKey('cod_metodo');

        $this->addBehavior('Timestamp');
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
            ->integer('cod_metodo')
            ->allowEmpty('cod_metodo', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 225)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->scalar('descricao')
            ->maxLength('descricao', 16777215)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('passos')
            ->maxLength('passos', 16777215)
            ->requirePresence('passos', 'create')
            ->notEmpty('passos');

        $validator
            ->scalar('referencias')
            ->allowEmpty('referencias');

        $validator
            ->scalar('video')
            ->maxLength('video', 1000)
            ->allowEmpty('video');

        return $validator;
    }
}
