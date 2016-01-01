<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\VehiculosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\VehiculosTable Test Case
 */
class VehiculosTableTest extends TestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.vehiculos',
        'app.garantias',
        'app.clientes',
        'app.intimaciones',
        'app.prestamos',
        'app.fiadores',
        'app.cuotas'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Vehiculos') ? [] : ['className' => 'App\Model\Table\VehiculosTable'];
        $this->Vehiculos = TableRegistry::get('Vehiculos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Vehiculos);

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
