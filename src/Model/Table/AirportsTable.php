<?php
namespace App\Model\Table;

use App\Model\Entity\Airport;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Airports Model
 *
 */
class AirportsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('airports');
        $this->displayField('Airport_ID');
        $this->primaryKey('Airport_ID');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('Airport_ID')
            ->allowEmpty('Airport_ID', 'create');

        $validator
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->requirePresence('City', 'create')
            ->notEmpty('City');

        $validator
            ->requirePresence('Country', 'create')
            ->notEmpty('Country');

        $validator
            ->requirePresence('IATA_FAA', 'create')
            ->notEmpty('IATA_FAA');

        $validator
            ->requirePresence('ICAO', 'create')
            ->notEmpty('ICAO');

        $validator
            ->numeric('Latitude')
            ->requirePresence('Latitude', 'create')
            ->notEmpty('Latitude');

        $validator
            ->numeric('Longitude')
            ->requirePresence('Longitude', 'create')
            ->notEmpty('Longitude');

        $validator
            ->integer('Timezone')
            ->requirePresence('Timezone', 'create')
            ->notEmpty('Timezone');

        $validator
            ->requirePresence('DST', 'create')
            ->notEmpty('DST');

        $validator
            ->requirePresence('time_zone_area', 'create')
            ->notEmpty('time_zone_area');

        return $validator;
    }
}
