<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * RoutesFixture
 *
 */
class RoutesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'Airline' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Airline_Id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Source_airport' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Source_airport_Id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Destination_airport' => ['type' => 'string', 'fixed' => true, 'length' => 10, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'Destination_airport_Id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Stops' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'Equipment' => ['type' => 'string', 'fixed' => true, 'length' => 25, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'Airline' => ['type' => 'index', 'columns' => ['Airline'], 'length' => []],
            'Airline Id' => ['type' => 'index', 'columns' => ['Airline_Id'], 'length' => []],
            'Source airport' => ['type' => 'index', 'columns' => ['Source_airport'], 'length' => []],
            'Source airport Id' => ['type' => 'index', 'columns' => ['Source_airport_Id'], 'length' => []],
            'Destination airport' => ['type' => 'index', 'columns' => ['Destination_airport', 'Destination_airport_Id'], 'length' => []],
            'Destination airport Id' => ['type' => 'index', 'columns' => ['Destination_airport_Id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['Airline_Id', 'Source_airport_Id', 'Destination_airport_Id'], 'length' => []],
            'AirlineID' => ['type' => 'foreign', 'columns' => ['Airline_Id'], 'references' => ['airlines', 'Airline_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'routes_ibfk_1' => ['type' => 'foreign', 'columns' => ['Source_airport_Id'], 'references' => ['airports', 'Airport_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'routes_ibfk_2' => ['type' => 'foreign', 'columns' => ['Destination_airport_Id'], 'references' => ['airports', 'Airport_ID'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'Airline' => 'Lorem ip',
            'Airline_Id' => 1,
            'Source_airport' => 'Lorem ip',
            'Source_airport_Id' => 1,
            'Destination_airport' => 'Lorem ip',
            'Destination_airport_Id' => 1,
            'Stops' => 1,
            'Equipment' => 'Lorem ipsum dolor sit a'
        ],
    ];
}
