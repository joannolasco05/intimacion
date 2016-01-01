<?php
namespace App\Model\Table;

use App\Model\Entity\Cliente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Clientes Model
 *
 * @property \Cake\ORM\Association\HasMany $Garantias
 * @property \Cake\ORM\Association\HasMany $Intimaciones
 * @property \Cake\ORM\Association\HasMany $Prestamos
 */
class ClientesTable extends Table
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

        $this->table('clientes');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->hasMany('Garantias', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->hasMany('Intimaciones', [
            'foreignKey' => 'cliente_id'
        ]);
        $this->hasMany('Prestamos', [
            'foreignKey' => 'cliente_id'
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
            ->allowEmpty('nombre');

        $validator
            ->allowEmpty('tipo_identificacion');

        $validator
            ->allowEmpty('identificacion');

        $validator
            ->allowEmpty('direccion');

        $validator
            ->allowEmpty('telefono');

        $validator
            ->allowEmpty('celular');

        $validator
            ->allowEmpty('oficina');

        return $validator;
    }
}
