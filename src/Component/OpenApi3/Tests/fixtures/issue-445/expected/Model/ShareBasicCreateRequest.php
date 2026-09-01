<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class ShareBasicCreateRequest extends ShareBaseCreateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * List of external mail recipients which are no Picturepark users.
     *
     * @var list<UserEmail>|null
     */
    public ?array $recipientEmails;
    /**
     * System language used for share (mail and detail page). en or de.
     *
     * @var string
     */
    public string $languageCode;
    /**
     * Set to true to disable the creation of notifications and emails to recipients.
     *
     * @var bool
     */
    public bool $suppressNotifications;
    public function definedProperties(): array
    {
        return ['recipientEmails' => 'recipientEmails', 'languageCode' => 'languageCode', 'suppressNotifications' => 'suppressNotifications'];
    }
}