<?php

namespace PicturePark\API\Model;

use PicturePark\API\Runtime\AdditionalAndPatternProperties;
use PicturePark\API\Runtime\AdditionalPropertiesInterface;
class BusinessProcessNotificationUpdateRequest implements AdditionalPropertiesInterface
{
    use AdditionalAndPatternProperties;
    /**
     * The title the message that is shown to the user should have.
     *
     * @var array<string, string>
     */
    public iterable $title;
    /**
     * The message shown to the user.
     *
     * @var array<string, string>
     */
    public iterable $message;
    /**
     * An optional navigation link that allows the user to jump to a page giving more information
     * about the process.
     *
     * @var string|null
     */
    public ?string $navigationLink;
    /**
     * The event type of the notification.
     *
     * @var string
     */
    public string $eventType;
    public function definedProperties(): array
    {
        return ['title' => 'title', 'message' => 'message', 'navigationLink' => 'navigationLink', 'eventType' => 'eventType'];
    }
}