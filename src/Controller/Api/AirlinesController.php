<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

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
	
	public function beforeFilter(\Cake\Event\Event $event) {
    parent::beforeFilter($event);

    $this->Crud->disable(['New', 'Delete']);
  }
}