<?php
namespace App\Model\Table;

use App\Model\Entity\Cuota;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cuotas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Prestamos
 */
class CuotasTable extends Table
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

        $this->table('cuotas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Prestamos', [
            'foreignKey' => 'prestamo_id',
            'joinType' => 'INNER'
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
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->add('capital', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('capital');

        $validator
            ->add('mora', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('mora');

        $validator
            ->add('interes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('interes');

        $validator
            ->add('saldo_capital', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('saldo_capital');

        $validator
            ->add('saldo_mora', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('saldo_mora');

        $validator
            ->add('saldo_interes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('saldo_interes');

        $validator
            ->add('fecha_generacion', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_generacion');

        $validator
            ->add('fecha_limite', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_limite');

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
        $rules->add($rules->existsIn(['prestamo_id'], 'Prestamos'));
        return $rules;
    }
}
