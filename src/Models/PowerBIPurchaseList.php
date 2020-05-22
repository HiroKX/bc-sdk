<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class PowerBIPurchaseList
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#powerbipurchaselist
 *
 * @property string $documentNo
 * @property string $orderDate
 * @property string $expectedReceiptDate
 * @property string $dueDate
 * @property string $pmtDiscountDate
 * @property float $quantity
 * @property float $amount
 * @property string $itemNo
 * @property string $description
 * @property string $auxiliaryIndex1
 * @property string $auxiliaryIndex2
 * @property string $auxiliaryIndex3
 * @property int $auxiliaryIndex4
 *
 */
class PowerBIPurchaseList extends Entity
{
    protected static $schema_type = 'Power_BI_Purchase_List';

    protected $fillable = [
        'documentNo',
        'orderDate',
        'expectedReceiptDate',
        'dueDate',
        'pmtDiscountDate',
        'quantity',
        'amount',
        'itemNo',
        'description',
        'auxiliaryIndex1',
        'auxiliaryIndex2',
        'auxiliaryIndex3',
        'auxiliaryIndex4',
    ];

    protected $guarded  = [

    ];
}