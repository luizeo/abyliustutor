<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;

/**
 * Administradores Model
 *
 * @method \App\Model\Entity\Administradore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Administradore newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Administradore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Administradore|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administradore|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Administradore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Administradore[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Administradore findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AdministradoresTable extends Table
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

        $this->setTable('administradores');
        $this->setDisplayField('cod_admin');
        $this->setPrimaryKey('cod_admin');

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
            ->integer('cod_admin')
            ->allowEmpty('cod_admin', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 225)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('senha')
            ->maxLength('senha', 225)
            ->requirePresence('senha', 'create')
            ->notEmpty('senha');
        $validator
             ->add('confirm_senha',
                   'compareWith', [
                            'rule' => ['compareWith','senha'],
                            'message' => 'Senha diferente.' ]
                );

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));

        return $rules;
    }


}
