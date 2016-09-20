<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Patient Entity.
 *
 * @property int $id
 * @property string $patient_code
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $occupation
 * @property string $company
 * @property string $address
 * @property string $telephone_number
 * @property string $mobile_number
 * @property \Cake\I18n\Time $birthdate
 * @property string $gender
 * @property string $civil_status
 * @property string $health_card_type
 * @property string $health_card_number
 * @property int $is_pregnant
 * @property int $is_treatment
 * @property string $diagnosis
 * @property \App\Model\Entity\Treatment[] $treatment
 * @property string $prescriptions
 * @property string $alergies
 * @property string $diseases
 * @property string $referred_by
 * @property string $created_by
 * @property \Cake\I18n\Time $date_created
 * @property string $remarks
 * @property string $date_updated
 * @property string $image
 * @property int $is_archive
 * @property \App\Model\Entity\Attachment[] $attachment
 * @property \App\Model\Entity\DentalNote[] $dental_note
 * @property \App\Model\Entity\PaymentSummary[] $payment_summary
 */
class Patient extends Entity
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
