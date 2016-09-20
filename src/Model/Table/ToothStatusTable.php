<?php
namespace App\Model\Table;

use App\Model\Entity\ToothStatus;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ToothStatus Model
 *
 */
class ToothStatusTable extends Table
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

        $this->table('tooth_status');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->hasMany('DentalNote', [
            'foreignKey' => 'tooth_status'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('code');

        $validator
            ->add('is_archive', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('is_archive');

        $validator
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_created');

        $validator
            ->add('date_updated', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_updated');

        return $validator;
    }
}
