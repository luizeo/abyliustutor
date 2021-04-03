<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Imagesevents Model
 *
 * @property \App\Model\Table\NoticiasTable|\Cake\ORM\Association\BelongsTo $Noticias
 *
 * @method \App\Model\Entity\Imagesevent get($primaryKey, $options = [])
 * @method \App\Model\Entity\Imagesevent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Imagesevent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Imagesevent|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagesevent|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Imagesevent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Imagesevent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Imagesevent findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ImageseventsTable extends Table
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

        $this->setTable('imagesevents');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Noticias', [
            'foreignKey' => 'noticia_id',
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
            ->scalar('descricao')
            ->maxLength('descricao', 255)
            ->requirePresence('descricao', 'create')
            ->notEmpty('descricao');

        $validator
            ->scalar('imagem')
            ->maxLength('imagem', 255)
            ->requirePresence('imagem', 'create')
            ->notEmpty('imagem');

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
        $rules->add($rules->existsIn(['noticia_id'], 'Noticias'));

        return $rules;
    }
}
