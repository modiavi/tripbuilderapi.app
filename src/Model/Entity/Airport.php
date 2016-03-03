<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Airport Entity.
 *
 * @property int $Airport_ID
 * @property string $Name
 * @property string $City
 * @property string $Country
 * @property string $IATA_FAA
 * @property string $ICAO
 * @property float $Latitude
 * @property float $Longitude
 * @property int $Timezone
 * @property string $DST
 * @property string $time_zone_area
 */
class Airport extends Entity
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
        'Airport_ID' => false,
    ];
}
