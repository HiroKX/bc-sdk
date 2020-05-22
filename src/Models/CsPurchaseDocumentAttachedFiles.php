<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsPurchaseDocumentAttachedFiles
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#cspurchasedocumentattachedfiles
 *
 * @property string $no
 * @property string $currentUserId
 * @property int $tableID
 * @property int $documentType
 * @property string $documentNo
 * @property string $description
 * @property string $fileExtension
 * @property string $importedBy
 * @property string $importedDateTime
 * @property string $filename
 * @property bool $allowDelete
 *
 */
class CsPurchaseDocumentAttachedFiles extends Entity
{
    protected static $schema_type = 'CS_PurchaseDocumentAttachedFiles';

    protected $fillable = [
        'no',
        'currentUserId',
        'tableID',
        'documentType',
        'documentNo',
        'description',
        'fileExtension',
        'importedBy',
        'importedDateTime',
        'filename',
        'allowDelete',
    ];

    protected $guarded  = [

    ];
}