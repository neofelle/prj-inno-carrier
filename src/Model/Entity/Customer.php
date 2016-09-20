<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 *
 * @property int $id
 * @property int $user_id
 * @property \App\Model\Entity\User $user
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $occupation
 * @property string $company
 * @property string $address
 * @property string $city
 * @property string $province
 * @property string $package_type
 * @property string $contact_number
 * @property string $email_address
 * @property string $status
 * @property \Cake\I18n\Time $date_purchase
 * @property string $license_key
 * @property \Cake\I18n\Time $expiration_date
 */
class Customer extends Entity
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
        'id' => false,
    ];
}
