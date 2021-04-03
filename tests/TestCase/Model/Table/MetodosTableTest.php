<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MetodosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MetodosTable Test Case
 */
class MetodosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\MetodosTable
     */
    public $Metodos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.metodos'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Metodos') ? [] : ['className' => MetodosTable::class];
        $this->Metodos = TableRegistry::getTableLocator()->get('Metodos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Metodos);

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
