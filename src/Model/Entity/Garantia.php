<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Garantia Entity.
 *
 * @property int $id
 * @property int $cliente_id
 * @property \App\Model\Entity\Cliente $cliente
 * @property int $vehiculo_id
 * @property \App\Model\Entity\Vehiculo $vehiculo
 * @property string $prestamo_id
 * @property \App\Model\Entity\Prestamo $prestamo
 * @property string $nombre_garantia
 * @property string $tipo
 * @property \Cake\I18n\Time $fecha
 */
class Garantia extends Entity
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
