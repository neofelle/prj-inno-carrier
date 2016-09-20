<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * UserEntity Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property int $user_id
 * @property string $firstname
 * @property string $lastname
 * @property string $mi
 * @property string $mid
 * @property string $gender
 * @property \Cake\I18n\Time $birthdate
 * @property string $ssn
 * @property string $address
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $email
 * @property string $phone
 * @property string $home
 * @property string $work_phone
 * @property string $cell_phone
 * @property string $cell_phone_carrier
 * @property string $emergency_contact_name
 * @property string $emergency_email
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\UserCustomField[] $user_custom_fields
 */
class UserEntity extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
