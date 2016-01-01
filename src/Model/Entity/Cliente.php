<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cliente Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $tipo_identificacion
 * @property string $identificacion
 * @property string $direccion
 * @property int $telefono
 * @property int $celular
 * @property int $oficina
 * @property \App\Model\Entity\Garantia[] $garantias
 * @property \App\Model\Entity\Intimacione[] $intimaciones
 * @property \App\Model\Entity\Prestamo[] $prestamos
 */
class Cliente extends Entity
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
