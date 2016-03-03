<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Route Entity.
 *
 * @property string $Airline
 * @property int $Airline_Id
 * @property string $Source_airport
 * @property int $Source_airport_Id
 * @property string $Destination_airport
 * @property int $Destination_airport_Id
 * @property int $Stops
 * @property string $Equipment
 */
class Route extends Entity
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
        'Airline_Id' => false,
        'Source_airport_Id' => false,
        'Destination_airport_Id' => false,
    ];
}
