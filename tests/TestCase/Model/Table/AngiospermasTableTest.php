<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AngiospermasTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AngiospermasTable Test Case
 */
class AngiospermasTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AngiospermasTable
     */
    public $Angiospermas;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Angiospermas',
        'app.Plantas',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Angiospermas') ? [] : ['className' => AngiospermasTable::class];
        $this->Angiospermas = TableRegistry::getTableLocator()->get('Angiospermas', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Angiospermas);

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
