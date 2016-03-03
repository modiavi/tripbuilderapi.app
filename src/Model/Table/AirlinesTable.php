<?php
namespace App\Model\Table;

use App\Model\Entity\Airline;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Airlines Model
 *
 */
class AirlinesTable extends Table
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

        $this->table('airlines');
        $this->displayField('Airline_ID');
        $this->primaryKey('Airline_ID');
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
            ->integer('Airline_ID')
            ->allowEmpty('Airline_ID', 'create');

        $validator
            ->requirePresence('Name', 'create')
            ->notEmpty('Name');

        $validator
            ->requirePresence('IATA', 'create')
            ->notEmpty('IATA');

        $validator
            ->requirePresence('ICAO', 'create')
            ->notEmpty('ICAO');

        $validator
            ->requirePresence('Country', 'create')
            ->notEmpty('Country');

        $validator
            ->requirePresence('Active', 'create')
            ->notEmpty('Active');

        return $validator;
    }
}
