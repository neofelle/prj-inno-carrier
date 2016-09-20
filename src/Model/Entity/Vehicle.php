<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehicle Entity
 *
 * @property int $id
 * @property int $agency_id
 * @property int $vehicle_type_id
 * @property int $color_id
 * @property int $number_vehicle
 * @property string $vehicle_year
 * @property string $make
 * @property string $model
 * @property string $vin
 * @property string $part_vehicle_inspection
 * @property string $registration_card
 * @property string $insurance_card
 * @property \Cake\I18n\Time $expiration_date
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 *
 * @property \App\Model\Entity\Agency $agency
 * @property \App\Model\Entity\VehicleType $vehicle_type
 * @property \App\Model\Entity\Color $color
 * @property \App\Model\Entity\VehicleFile[] $vehicle_files
 */
class Vehicle extends Entity
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
