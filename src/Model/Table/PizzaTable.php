<?php
namespace App\Model\Table;

use App\Model\Entity\Pizza;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pizza Model
 *
 */
class PizzaTable extends Table
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

        $this->table('pizza');
        $this->displayField('id');
        $this->primaryKey('id');

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
            ->allowEmpty('pizzasize');

        $validator
            ->allowEmpty('crusttype');

        $validator
            ->allowEmpty('toppings');

        $validator
            ->allowEmpty('customername');

        $validator
            ->allowEmpty('customeraddress');

        $validator
            ->allowEmpty('customercontact');

        return $validator;
    }
}
