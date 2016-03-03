<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AirportsFixture
 *
 */
class AirportsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Airport_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Name' => ['type' => 'string', 'fixed' => true, 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'City' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Country' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'IATA_FAA' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ICAO' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Latitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'Longitude' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => ''],
        'Timezone' => ['type' => 'integer', 'length' => 10, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'DST' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'time_zone_area' => ['type' => 'string', 'fixed' => true, 'length' => 100, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'Airport_ID' => ['type' => 'index', 'columns' => ['Airport_ID'], 'length' => []],
            'IATA_FAA' => ['type' => 'index', 'columns' => ['IATA_FAA'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Airport_ID'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'Airport_ID' => 1,
            'Name' => 'Lorem ipsum dolor sit amet',
            'City' => 'Lorem ipsum dolor sit amet',
            'Country' => 'Lorem ipsum dolor sit amet',
            'IATA_FAA' => 'Lorem ip',
            'ICAO' => 'Lorem ip',
            'Latitude' => 1,
            'Longitude' => 1,
            'Timezone' => 1,
            'DST' => 'Lorem ip',
            'time_zone_area' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
