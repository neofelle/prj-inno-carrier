<?php
namespace App\Model\Table;

use App\Model\Entity\Appointment;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Appointment Model
 *
 */
class AppointmentTable extends Table
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

        $this->table('appointment');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Patient', [
            'foreignKey' => 'patient_id',
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('appointment_date', 'valid', ['rule' => 'date'])
            ->requirePresence('appointment_date', 'create')
            ->notEmpty('appointment_date');

        $validator
            ->add('start_time', 'valid', ['rule' => 'time'])
            ->requirePresence('start_time', 'create')
            ->notEmpty('start_time');

        $validator
            ->add('end_time', 'valid', ['rule' => 'time'])
            ->requirePresence('end_time', 'create')
            ->notEmpty('end_time');

        $validator
            ->allowEmpty('firstname');

        $validator
            ->allowEmpty('lastname');

        $validator            
            ->allowEmpty('middlename');

        $validator
            ->allowEmpty('contact_number');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('note');

        $validator            
            ->allowEmpty('type');


        $validator
            ->add('date_created', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_created');

        $validator
            ->add('date_updated', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('date_updated');

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
        $rules->add($rules->existsIn(['patient_id'], 'Patient'));
        return $rules;
    }

    /*public function afterSave(Event $event, EntityInterface $entity, ArrayObject $options)
    {
        debug($event);
        debug($entity);
        exit;
        // here I need the data submitted from $this->request->save($request));
        // how can I do this to use the data in the query?

        // insert query here.
    }*/
}
