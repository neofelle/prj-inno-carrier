<?php
namespace App\Model\Table;

use App\Model\Entity\Patient;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Patient Model
 *
 * @property \Cake\ORM\Association\HasMany $Attachment
 * @property \Cake\ORM\Association\HasMany $DentalNote
 * @property \Cake\ORM\Association\HasMany $PaymentSummary
 * @property \Cake\ORM\Association\HasMany $Treatment
 */
class PatientTable extends Table
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

        $this->table('patient');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Attachment', [
            'foreignKey' => 'patient_id'
        ]);
        $this->hasMany('DentalNote', [
            'foreignKey' => 'patient_id'
        ]);
        $this->hasMany('PaymentSummary', [
            'foreignKey' => 'patient_id'
        ]);
        $this->hasMany('Treatment', [
            'foreignKey' => 'patient_id'
        ]);
        $this->hasMany('Appointment', [
            'foreignKey' => 'patient_id'
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
            ->allowEmpty('patient_code');
            
       /* $validator
            ->requirePresence('patient_code', 'create')
            ->notEmpty('patient_code');*/

        $validator
            ->requirePresence('firstname', 'create')
            ->notEmpty('firstname');

        $validator
            ->requirePresence('lastname', 'create')
            ->notEmpty('lastname');

        /*$validator
            ->requirePresence('middlename', 'create')
            ->notEmpty('middlename');*/

        /*$validator
            ->requirePresence('occupation', 'create')
            ->notEmpty('occupation');*/

        $validator
            ->allowEmpty('company');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('province');

        $validator
            ->allowEmpty('city');

        $validator
            ->allowEmpty('telephone_number');

        /*$validator
            ->requirePresence('mobile_number', 'create')
            ->notEmpty('mobile_number');*/

        /*$validator
            ->add('birthdate', 'valid', ['rule' => 'date'])
            ->requirePresence('birthdate', 'create')
            ->notEmpty('birthdate');*/

        $validator
            ->allowEmpty('gender');

        /*$validator
            ->requirePresence('civil_status', 'create')
            ->notEmpty('civil_status');*/

        $validator
            ->allowEmpty('health_card_type');

        $validator
            ->allowEmpty('health_card_number');

        /*$validator
            ->add('is_pregnant', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_pregnant', 'create')
            ->notEmpty('is_pregnant');*/

        /*$validator
            ->add('is_treatment', 'valid', ['rule' => 'numeric'])
            ->requirePresence('is_treatment', 'create')
            ->notEmpty('is_treatment');*/

        $validator
            ->allowEmpty('diagnosis');

        $validator
            ->allowEmpty('treatment');

        $validator
            ->allowEmpty('prescriptions');

        $validator
            ->allowEmpty('alergies');

        $validator
            ->allowEmpty('diseases');

        $validator
            ->allowEmpty('referred_by');

        $validator
            ->allowEmpty('created_by');

        /*$validator
            ->add('date_created', 'valid', ['rule' => 'date'])
            ->allowEmpty('date_created');*/

        $validator
            ->allowEmpty('remarks');

        /*$validator
            ->allowEmpty('date_updated', 'valid', ['rule' => 'date']);*/

        $validator
            ->allowEmpty('image');

        $validator
            ->add('is_archive', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('is_archive');

        return $validator;
    }
}
