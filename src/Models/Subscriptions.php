<?php
namespace BusinessCentral\Models;


use BusinessCentral\Entity;

/**
 *
 * Class Subscriptions
 * Auto-generated on: 2020-05-11 14:10:33
 *
 * @property string $subscriptionId
 * @property string $notificationUrl
 * @property string $resource
 * @property string $userId
 * @property-read string $lastModifiedDateTime
 * @property string $clientState
 * @property string $expirationDateTime
 *
 */
class Subscriptions extends Entity
{
    protected static $schema_type = 'subscriptions';

    protected $fillable = [
        'subscriptionId',
        'notificationUrl',
        'resource',
        'userId',
        'clientState',
        'expirationDateTime',
    ];

    protected $guarded  = [
        'lastModifiedDateTime',
    ];
}