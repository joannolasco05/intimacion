<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * IntimacionesFixture
 *
 */
class IntimacionesFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'prestamo_id' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        'cliente_id' => ['type' => 'integer', 'length' => 7, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'status' => ['type' => 'string', 'length' => 50, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'cliente_id' => ['type' => 'index', 'columns' => ['cliente_id'], 'length' => []],
            'prestamo_id' => ['type' => 'index', 'columns' => ['prestamo_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'intimaciones_ibfk_2' => ['type' => 'foreign', 'columns' => ['prestamo_id'], 'references' => ['prestamos', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'intimaciones_ibfk_1' => ['type' => 'foreign', 'columns' => ['cliente_id'], 'references' => ['clientes', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
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
            'prestamo_id' => 'Lorem ipsum dolor sit amet',
            'cliente_id' => 1,
            'status' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
