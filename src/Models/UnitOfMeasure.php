<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class UnitOfMeasure
 * Auto-generated on: 2020-05-11 14:10:33
 *
 * @property-read string $id
 * @property string $code
 * @property string $displayName
 * @property string $internationalStandardCode
 * @property-read string $lastModifiedDateTime
 *
 */
class UnitOfMeasure extends Entity
{
    protected static $schema_type = 'unitOfMeasure';

    protected $fillable = [
        'code',
        'displayName',
        'internationalStandardCode',
    ];

    protected $guarded  = [
        'id',
        'lastModifiedDateTime',
    ];
}