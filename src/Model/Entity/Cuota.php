<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuota Entity.
 *
 * @property int $id
 * @property string $prestamo_id
 * @property \App\Model\Entity\Prestamo $prestamo
 * @property float $capital
 * @property float $mora
 * @property float $interes
 * @property float $saldo_capital
 * @property float $saldo_mora
 * @property float $saldo_interes
 * @property \Cake\I18n\Time $fecha_generacion
 * @property \Cake\I18n\Time $fecha_limite
 */
class Cuota extends Entity
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
