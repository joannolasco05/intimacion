<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * GarantiasFixture
 *
 */
class GarantiasFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 7, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'vehiculo_id' => ['type' => 'integer', 'length' => 7, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'prestamo_id' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'nombre_garantia' => ['type' => 'string', 'length' => 100, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'tipo' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'fecha' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'id' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'cliente_id' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'prestamo_id' => ['type' => 'index', 'columns' => ['prestamo_id'], 'length' => []],
            'vehiculo_id' => ['type' => 'index', 'columns' => ['vehiculo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'garantias_ibfk_3' => ['type' => 'foreign', 'columns' => ['vehiculo_id'], 'references' => ['vehiculos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'garantias_ibfk_1' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'garantias_ibfk_2' => ['type' => 'foreign', 'columns' => ['prestamo_id'], 'references' => ['prestamos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'cliente_id' => 1,
            'vehiculo_id' => 1,
            'prestamo_id' => 'Lorem ipsum dolor sit amet',
            'nombre_garantia' => 'Lorem ipsum dolor sit amet',
            'tipo' => 'Lorem ipsum dolor sit amet',
            'fecha' => '2016-01-01'
        ],
    ];
}
