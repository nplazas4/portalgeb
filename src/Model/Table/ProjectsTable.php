<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Projects Model
 *
 * @method \App\Model\Entity\Project get($primaryKey, $options = [])
 * @method \App\Model\Entity\Project newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Project[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Project|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Project patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Project[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Project findOrCreate($search, callable $callback = null, $options = [])
 */
class ProjectsTable extends Table
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

        $this->setTable('projects');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('ID_PROJECT')
            ->maxLength('ID_PROJECT', 100)
            ->requirePresence('ID_PROJECT', 'create')
            ->notEmpty('ID_PROJECT');

        $validator
            ->scalar('PROJECT_NAME')
            ->maxLength('PROJECT_NAME', 500)
            ->requirePresence('PROJECT_NAME', 'create')
            ->notEmpty('PROJECT_NAME');

        $validator
            ->scalar('DESCRIPTION')
            ->maxLength('DESCRIPTION', 500)
            ->requirePresence('DESCRIPTION', 'create')
            ->notEmpty('DESCRIPTION');

        $validator
            ->date('PLANNED_START_DATE')
            ->requirePresence('PLANNED_START_DATE', 'create')
            ->notEmpty('PLANNED_START_DATE');

        $validator
            ->date('PLANNED_FINISH_DATE')
            ->requirePresence('PLANNED_FINISH_DATE', 'create')
            ->notEmpty('PLANNED_FINISH_DATE');

        $validator
            ->decimal('SPI')
            ->requirePresence('SPI', 'create')
            ->notEmpty('SPI');

        $validator
            ->integer('EXECUTED')
            ->requirePresence('EXECUTED', 'create')
            ->notEmpty('EXECUTED');

        $validator
            ->integer('PLANNED')
            ->requirePresence('PLANNED', 'create')
            ->notEmpty('PLANNED');

        $validator
            ->decimal('ACPU')
            ->requirePresence('ACPU', 'create')
            ->notEmpty('ACPU');

        $validator
            ->integer('CAPEX_PLANNED')
            ->requirePresence('CAPEX_PLANNED', 'create')
            ->notEmpty('CAPEX_PLANNED');

        $validator
            ->integer('CAPEX_EXECUTED')
            ->requirePresence('CAPEX_EXECUTED', 'create')
            ->notEmpty('CAPEX_EXECUTED');

        $validator
            ->scalar('REGIONAL')
            ->maxLength('REGIONAL', 50)
            ->requirePresence('REGIONAL', 'create')
            ->notEmpty('REGIONAL');

        $validator
            ->integer('EPS_OBJECT_ID')
            ->requirePresence('EPS_OBJECT_ID', 'create')
            ->notEmpty('EPS_OBJECT_ID');

        return $validator;
    }
}
