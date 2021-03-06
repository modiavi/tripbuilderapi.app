<?php
namespace App\Controller\Api;

use App\Controller\Api\AppController;

class AirportsController extends AppController
{
    public $paginate = [
        'page' => 1,
        'limit' => 20,
        'maxLimit' => 100,
        'fields' => [
            'Airport_id', 'Name', 'city','Country', 'time_zone_area'
        ],
        'sortWhitelist' => [
            'Airport_id', 'Name','Country'
        ]
    ];
	
	public function beforeFilter(\Cake\Event\Event $event) {
    parent::beforeFilter($event);

    $this->Crud->disable(['New', 'Delete']);
  }
}