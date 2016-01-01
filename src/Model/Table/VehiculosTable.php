<?php
namespace App\Model\Table;

use App\Model\Entity\Vehiculo;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vehiculos Model
 *
 * @property \Cake\ORM\Association\HasMany $Garantias
 */
class VehiculosTable extends Table
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

        $this->table('vehiculos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Garantias', [
            'foreignKey' => 'vehiculo_id'
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
            ->allowEmpty('marca');

        $validator
            ->allowEmpty('modelo');

        $validator
            ->allowEmpty('anio');

        $validator
            ->allowEmpty('tipo');

        $validator
            ->allowEmpty('condicion');

        $validator
            ->allowEmpty('dealer');

        $validator
            ->allowEmpty('chasis');

        $validator
            ->allowEmpty('color');

        return $validator;
    }
}
