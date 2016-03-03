<?php
namespace App\Model\Table;

use App\Model\Entity\Route;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Routes Model
 *
 */
class RoutesTable extends Table
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

        $this->table('routes');
        $this->displayField('Airline_Id');
        $this->primaryKey(['Airline_Id', 'Source_airport_Id', 'Destination_airport_Id']);
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
            ->requirePresence('Airline', 'create')
            ->notEmpty('Airline');

        $validator
            ->integer('Airline_Id')
            ->allowEmpty('Airline_Id', 'create');

        $validator
            ->requirePresence('Source_airport', 'create')
            ->notEmpty('Source_airport');

        $validator
            ->integer('Source_airport_Id')
            ->allowEmpty('Source_airport_Id', 'create');

        $validator
            ->requirePresence('Destination_airport', 'create')
            ->notEmpty('Destination_airport');

        $validator
            ->integer('Destination_airport_Id')
            ->allowEmpty('Destination_airport_Id', 'create');

        $validator
            ->integer('Stops')
            ->requirePresence('Stops', 'create')
            ->notEmpty('Stops');

        $validator
            ->requirePresence('Equipment', 'create')
            ->notEmpty('Equipment');

        return $validator;
    }
}
