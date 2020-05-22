<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class InvoicingSalesTaxSetup
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#invoicingsalestaxsetup
 *
 * @property-read string $id
 * @property string $displayName
 * @property bool $default
 * @property string $city
 * @property float $cityRate
 * @property string $state
 * @property float $stateRate
 * @property string $canadaGstHstDescription
 * @property float $canadaGstHstRate
 * @property string $canadaPstDescription
 * @property float $canadaPstRate
 * @property-read string $lastModifiedDateTime
 *
 */
class InvoicingSalesTaxSetup extends Entity
{
    protected static $schema_type = 'nativeInvoicingSalesTaxSetup';

    protected $fillable = [
        'displayName',
        'default',
        'city',
        'cityRate',
        'state',
        'stateRate',
        'canadaGstHstDescription',
        'canadaGstHstRate',
        'canadaPstDescription',
        'canadaPstRate',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}