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
            ->add('fecha_generacion', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_generacion');

        $validator
            ->add('fecha_limite', 'valid', ['rule' => 'date'])
            ->allowEmpty('fecha_limite');

        $validator
            ->allowEmpty('status');

        $validator
            ->add('monto', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('monto');

        $validator
            ->add('capital', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('capital');

        $validator
            ->add('interes', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('interes');

        $validator
            ->add('mora', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('mora');

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
