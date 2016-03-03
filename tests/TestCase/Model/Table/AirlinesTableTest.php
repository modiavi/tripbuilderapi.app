<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AirlinesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AirlinesTable Test Case
 */
class AirlinesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AirlinesTable
     */
    public $Airlines;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.airlines'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Airlines') ? [] : ['className' => 'App\Model\Table\AirlinesTable'];
        $this->Airlines = TableRegistry::get('Airlines', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Airlines);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
