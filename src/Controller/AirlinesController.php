<?php
namespace App\Controller;

use App\Controller\AppController;

class AirlinesController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 20,
        'maxLimit' => 100,
        /*'fields' => [
             'Airline_ID', 'Name', 'Country'
        ],*/
        'sortWhitelist' => [
            'Airline_ID', 'Name', 'Country'
        ]
    ];
}