<?php
namespace App\Controller;

use App\Controller\AppController;

class RoutesController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 20,
        'maxLimit' => 100,
        'fields' => [
            'Airline', 'Source_airport', 'Destination_airport'
        ],
        /*'sortWhitelist' => [
            'id', 'name', 'description'
        ]*/
    ];
}