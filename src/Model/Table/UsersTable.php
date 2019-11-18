<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\PostsTable&\Cake\ORM\Association\HasMany $Posts
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 */
class UsersTable extends Table
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

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->hasMany('Posts', [
            'foreignKey' => 'user_id'
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name')
            ->add('name', 'validFormat',[
                'rule' => array('custom', '/^[a-zA-Z]+([-_\s]{1}[a-zA-Z]+)*$/i'),
                'message' => 'Please enter a valid name.'
              ]);

        $validator
            ->scalar('lastname')
            ->maxLength('lastname', 255)
            ->requirePresence('lastname', 'create')
            ->notEmptyString('lastname')
            ->add('lastname', 'validFormat',[
                'rule' => array('custom', '/^[a-zA-Z]+([-_\s]{1}[a-zA-Z]+)*$/i'),
                'message' => 'Please enter a valid lastname.'
              ]);

        $validator
            ->scalar('emailid')
            ->maxLength('emailid', 255)
            ->requirePresence('emailid', 'create')
            ->notEmptyString('emailid')
            ->add('emailid', 'validFormat',[
                'rule' => 'email',
                'message' => 'Please enter a valid email id.'
              ]);


        $validator
            ->scalar('mobileno')
            ->maxLength('mobileno', 255)
            ->requirePresence('mobileno', 'create')
            ->notEmptyString('mobileno')
            ->add('mobileno', 'unique', ['rule' => 'validateUnique', 'provider' => 'table' , 'message'=>'Mobile Number already exists.'])
            ->add('mobileno', 'validFormat',[
                'rule' => array('custom', '/^\(?([0-9]{3})\)?([0-9]{3})?([0-9]{4})$/'),
                'message' => 'Please enter a 10 digit mobile number.'
              ]);


        return $validator;
    }
}
