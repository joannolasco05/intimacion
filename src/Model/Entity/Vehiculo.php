<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vehiculo Entity.
 *
 * @property int $id
 * @property string $marca
 * @property string $modelo
 * @property string $anio
 * @property string $tipo
 * @property string $condicion
 * @property string $dealer
 * @property string $chasis
 * @property string $color
 * @property \App\Model\Entity\Garantia[] $garantias
 */
class Vehiculo extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
