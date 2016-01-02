<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fiadore Entity.
 *
 * @property int $id
 * @property string $nombre
 * @property string $tipo_identificacion
 * @property string $identificacion
 * @property string $direccion
 * @property string $telefono
 * @property string $celular
 * @property string $oficina
 */
class Fiadore extends Entity
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
