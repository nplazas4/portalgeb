<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Project Entity
 *
 * @property int $id
 * @property string $ID_PROJECT
 * @property string $PROJECT_NAME
 * @property string $DESCRIPTION
 * @property \Cake\I18n\FrozenTime $PLANNED_START_DATE
 * @property \Cake\I18n\FrozenTime $PLANNED_FINISH_DATE
 * @property float $SPI
 * @property int $EXECUTED
 * @property int $PLANNED
 * @property float $ACPU
 * @property int $CAPEX_PLANNED
 * @property int $CAPEX_EXECUTED
 * @property string $REGIONAL
 * @property int $EPS_OBJECT_ID
 */
class Project extends Entity
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
        'ID_PROJECT' => true,
        'PROJECT_NAME' => true,
        'DESCRIPTION' => true,
        'PLANNED_START_DATE' => true,
        'PLANNED_FINISH_DATE' => true,
        'SPI' => true,
        'EXECUTED' => true,
        'PLANNED' => true,
        'ACPU' => true,
        'CAPEX_PLANNED' => true,
        'CAPEX_EXECUTED' => true,
        'REGIONAL' => true,
        'EPS_OBJECT_ID' => true
    ];
}
