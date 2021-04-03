<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Docentes Model
 *
 * @property \App\Model\Table\DiscentesTable|\Cake\ORM\Association\HasMany $Discentes
 *
 * @method \App\Model\Entity\Docente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Docente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Docente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Docente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Docente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Docente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Docente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Docente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DocentesTable extends Table
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

        $this->setTable('docentes');
        $this->setDisplayField('nome');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('Discentes', [
            'foreignKey' => 'docente_id'
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
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('nome')
            ->maxLength('nome', 255)
            ->requirePresence('nome', 'create')
            ->notEmpty('nome');

        $validator
            ->integer('titulacao')
            ->allowEmpty('titulacao');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('lattes')
            ->maxLength('lattes', 255)
            ->allowEmpty('lattes');

        $validator
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmpty('photo');

        $validator
            ->scalar('photo_dir')
            ->maxLength('photo_dir', 255)
            ->allowEmpty('photo_dir');

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
