<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EspeciesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EspeciesTable Test Case
 */
class EspeciesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\EspeciesTable
     */
    public $Especies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Especies',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Especies') ? [] : ['className' => EspeciesTable::class];
        $this->Especies = TableRegistry::getTableLocator()->get('Especies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Especies);

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
