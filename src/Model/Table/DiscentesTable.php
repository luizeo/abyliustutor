<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Discentes Model
 *
 * @property \App\Model\Table\DocentesTable|\Cake\ORM\Association\BelongsTo $Docentes
 *
 * @method \App\Model\Entity\Discente get($primaryKey, $options = [])
 * @method \App\Model\Entity\Discente newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Discente[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Discente|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discente|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Discente patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Discente[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Discente findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class DiscentesTable extends Table
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

        $this->setTable('discentes');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Docentes', [
            'foreignKey' => 'docente_id',
            'joinType' => 'INNER'
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
            ->integer('curso')
            ->requirePresence('curso', 'create')
            ->notEmpty('curso');

        $validator
            ->scalar('uf_origin')
            ->maxLength('uf_origin', 100)
            ->allowEmpty('uf_origin');

        $validator
            ->scalar('littlevitae')
            ->allowEmpty('littlevitae');

        $validator
            ->date('ingresso')
            ->requirePresence('ingresso', 'create')
            ->notEmpty('ingresso');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

        $validator
            ->scalar('lattes')
            ->maxLength('lattes', 255)
            ->allowEmpty('lattes');

        $validator
            ->scalar('docentes_co_cod')
            ->maxLength('docentes_co_cod', 255)
            ->allowEmpty('docentes_co_cod');

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
        $rules->add($rules->existsIn(['docente_id'], 'Docentes'));

        return $rules;
    }
}
