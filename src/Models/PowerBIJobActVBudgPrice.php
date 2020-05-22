<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIJobActVBudgPrice
 *
 * @property int $iD
 * @property string $measureNo
 * @property string $measureName
 * @property float $value
 *
 */
class PowerBIJobActVBudgPrice extends Entity
{
    protected static $schema_type = 'Power_BI_Job_Act_v_Budg_Price';

    protected $fillable = [
        'iD',
        'measureNo',
        'measureName',
        'value',
    ];

    protected $guarded  = [

    ];
}