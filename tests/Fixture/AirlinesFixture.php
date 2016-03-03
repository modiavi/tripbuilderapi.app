<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AirlinesFixture
 *
 */
class AirlinesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Airline_ID' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'Name' => ['type' => 'string', 'fixed' => true, 'length' => 255, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'IATA' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'ICAO' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Country' => ['type' => 'string', 'fixed' => true, 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Active' => ['type' => 'string', 'fixed' => true, 'length' => 5, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'IATA' => ['type' => 'index', 'columns' => ['IATA'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Airline_ID'], 'length' => []],
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
            'Airline_ID' => 1,
            'Name' => 'Lorem ipsum dolor sit amet',
            'IATA' => 'Lorem ip',
            'ICAO' => 'Lorem ip',
            'Country' => 'Lorem ipsum dolor sit amet',
            'Active' => 'Lor'
        ],
    ];
}
