<?php
namespace App\Model\Table;

use App\Model\Entity\Prestamo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Prestamos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clientes
 * @property \Cake\ORM\Association\BelongsTo $Fiadores
 * @property \Cake\ORM\Association\HasMany $Cuotas
 * @property \Cake\ORM\Association\HasMany $Garantias
 * @property \Cake\ORM\Association\HasMany $Intimaciones
 */
class PrestamosTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('prestamos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Clientes', [
            'foreignKey' => 'cliente_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Fiadores', [
            'foreignKey' => 'fiador_id'
        ]);
        $this->hasMany('Cuotas', [
            'foreignKey' => 'prestamo_id'
        ]);
        $this->hasMany('Garantias', [
            'foreignKey' => 'prestamo_id'
        ]);
        $this->hasMany('Intimaciones', [
            'foreignKey' => 'prestamo_id'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->allowEmpty('id', 'create');

        $validator
            ->add('monto_solicitado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('monto_solicitado');

        $validator
            ->add('monto_aprobado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('monto_aprobado');

        $validator
            ->add('monto_desembolsado', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('monto_desembolsado');

        $validator
            ->add('fecha_aprobacion', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_aprobacion');

        $validator
            ->add('fecha_desembolso', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_desembolso');

        $validator
            ->add('fecha_saldo', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_saldo');

        $validator
            ->add('plazo', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('plazo');

        $validator
            ->add('tasa', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('tasa');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['cliente_id'], 'Clientes'));
        $rules->add($rules->existsIn(['fiador_id'], 'Fiadores'));
        return $rules;
    }
}
