<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsWebUserPmsSelection
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cswebuserpmsselection
 *
 * @property string $permissionType
 * @property string $continiaUserID
 * @property string $type
 * @property string $dimensionCode
 * @property string $approvalUserGroupCode
 * @property string $codeNo
 * @property string $typeInt
 * @property string $permissionTypeInt
 * @property string $name
 * @property bool $blocked
 * @property string $accountType
 *
 */
class CsWebUserPmsSelection extends Entity
{
    protected static $schema_type = 'CS_WebUserPmsSelection';

    protected $fillable = [
        'permissionType',
        'continiaUserID',
        'type',
        'dimensionCode',
        'approvalUserGroupCode',
        'codeNo',
        'typeInt',
        'permissionTypeInt',
        'name',
        'blocked',
        'accountType',
    ];

    protected $guarded  = [

    ];
}