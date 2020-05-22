<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class CsApprovalDocumentApprovalEntries
 *
 * @see https://github.com/CoolRunner-dk/business-central-php/blob/master/entities.md#csapprovaldocumentapprovalentries
 *
 * @property int $entryNo
 * @property int $sequenceNo
 * @property string $approverID
 * @property string $approverName
 * @property string $status
 * @property string $dateTimeSentForApproval
 * @property string $lastDateTimeModified
 * @property string $workflowInstanceID
 *
 */
class CsApprovalDocumentApprovalEntries extends Entity
{
    protected static $schema_type = 'CS_ApprovalDocumentApprovalEntries';

    protected $fillable = [
        'entryNo',
        'sequenceNo',
        'approverID',
        'approverName',
        'status',
        'dateTimeSentForApproval',
        'lastDateTimeModified',
        'workflowInstanceID',
    ];

    protected $guarded  = [

    ];
}