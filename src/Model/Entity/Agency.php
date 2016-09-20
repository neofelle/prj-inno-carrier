<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agency Entity
 *
 * @property int $id
 * @property int $account_type_id
 * @property int $member_type_id
 * @property string $name
 * @property string $emt_number
 * @property string $status
 * @property \Cake\I18n\Time $start_date
 * @property string $logo
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\AccountType $account_type
 * @property \App\Model\Entity\MemberType $member_type
 * @property \App\Model\Entity\UserEntity[] $user_entities
 */
class Agency extends Entity
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
