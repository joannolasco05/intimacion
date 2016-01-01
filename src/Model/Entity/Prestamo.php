<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Prestamo Entity.
 *
 * @property string $id
 * @property int $cliente_id
 * @property \App\Model\Entity\Cliente $cliente
 * @property float $monto_solicitado
 * @property float $monto_aprobado
 * @property float $monto_desembolsado
 * @property \Cake\I18n\Time $fecha_aprobacion
 * @property \Cake\I18n\Time $fecha_desembolso
 * @property \Cake\I18n\Time $fecha_saldo
 * @property int $plazo
 * @property float $tasa
 * @property int $fiador_id
 * @property \App\Model\Entity\Fiadore $fiadore
 * @property \App\Model\Entity\Cuota[] $cuotas
 * @property \App\Model\Entity\Garantia[] $garantias
 * @property \App\Model\Entity\Intimacione[] $intimaciones
 */
class Prestamo extends Entity
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
