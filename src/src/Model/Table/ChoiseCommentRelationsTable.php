<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ChoiseCommentRelations Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Choises
 * @property \Cake\ORM\Association\BelongsTo $Comments
 *
 * @method \App\Model\Entity\ChoiseCommentRelation get($primaryKey, $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ChoiseCommentRelation findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ChoiseCommentRelationsTable extends Table
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

        $this->table('choise_comment_relations');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Choises', [
            'foreignKey' => 'choise_id'
        ]);
        $this->belongsTo('Comments', [
            'foreignKey' => 'comment_id'
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
            ->dateTime('deleted')
            ->allowEmpty('deleted');

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
        $rules->add($rules->existsIn(['choise_id'], 'Choises'));
        $rules->add($rules->existsIn(['comment_id'], 'Comments'));
        return $rules;
    }
}
